<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\User;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\CreateUserRequest;
use Auth;
use Hash;

class UserResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if(User::isManager()){
            $users = User::all();
        
            return view('users.index')
            ->with('users', $users)
            ->with('headTitle','User List');
        }
        else
            return view('errors.403');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if(User::isManager()){
            return view('users.create')
            ->with('headTitle', 'Create User Form');
        }
        else
            return view('errors.403');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        if(User::isManager()){
            $user = new User($request->all());
            $user->password = Hash::make($request->get('password'));
            $user->level = 'none';
            $user->save();

            return $this->index();
        }
        else
            return view('errors.403');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if(User::isManager()){
            $user = User::findOrFail($id);

            return view('users.show')
            ->with('user', $user)
            ->with('headTitle', 'Profile of '.$user->username)
            ->with('submitButtonText', 'Edit');
        }
        else
            return view('errors.403');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Request $request, $id)
    {
        if(User::isManager()){
            $user = User::findOrFail($id);

            return view('users.edit')
            ->with('user', $user)
            ->with('headTitle', 'Profile of '.$user->username);
        } 
        else
            return view('errors.403');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        if(User::isManager()){
            if($request->get('delete'))
                return $this->destroy($id);
            elseif($request->get('save'))
            {
                $user = User::findOrFail($id);
                $user->update($request->all());
                // return $user->level;

                return $this->show($id);
            }
            else{
                return $this->show($id);
            }
        }
        else
            return view('errors.403');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if(User::isManager()){
            $user = User::findOrFail($id);
            $user->delete();

            return $this->index();
        }
        else
            return view('errors.403');
    }

}
