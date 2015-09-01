<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Controllers\Controller;
use \App\User;
use \App\Article;
use Auth;
use Carbon\Carbon;

class ArticleResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if(User::isManager()){
            $articles = Article::all();
            return view('articles.index')
            ->with('articles', $articles)
            ->with('headTitle','Article List');
        }
        else{
            return view('errors.403');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if(User::isManager()){
            return view('articles.create')
            ->with('headTitle', 'Create Article Form');
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
    public function store(CreateArticleRequest $request)
    {
        if(User::isManager()){
            $article = new Article($request->all());

            if($request->get('publish')){
                $article->published_at=Carbon::now();
                $article->status='published';
            }
            elseif($request->get('submit'))
                $article->status='submitted';

            $article->user_id=Auth::user()->id;
            $article->save();

            return $this->index();;
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
            $article = Article::findOrFail($id);

            return view('articles.show')
            ->with('article', $article)
            ->with('headTitle', 'Article '.$article->title);
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
    public function edit($id)
    {
        if(User::isManager()){
            $article = Article::findOrFail($id);

            return view('articles.edit')
            ->with('article', $article)
            ->with('headTitle', 'Article '.$article->title);
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
    public function update(CreateArticleRequest $request, $id)
    {
        if(User::isManager()){
            if($request->get('delete'))
                return $this->destroy($id);
            elseif($request->get('submit')){
                return $this->submitAndUpdateArticle($request, $id);
            }
            elseif($request->get('publish')){
                return $this->publishAndUpdateArticle($request, $id);
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
            $article = Article::findOrFail($id);
            $article->delete();

            return $this->index();
        }
        else
            return view('errors.403');
    }

    public function publishArticle($id)
    {
        if(User::isManager()){
            $article = Article::findOrFail($id);
            $article->published_at = Carbon::now();
            $article->status = 'published';
            $article->save();

            return $this->show($id);
        }
        else
            return view('errors.403');
    }

    public function submitAndUpdateArticle(CreateArticleRequest $request,$id)
    {
        if(User::isManager()){
            $article = Article::findOrFail($id);
            $article->title = $request->input('title');
            $article->body = $request->input('body');
            $article->status = 'submitted';
            $article->save();

            return $this->show($id);
        }
        else
            return view('errors.403');
    }

    public function publishAndUpdateArticle(CreateArticleRequest $request,$id)
    {
        if(User::isManager()){
            $article = Article::findOrFail($id);
            $article->title = $request->input('title');
            $article->body = $request->input('body');
            $article->published_at = Carbon::now();
            $article->status = 'published';
            $article->save();

            return $this->show($id);
        }
        else
            return view('errors.403');
    }
}
