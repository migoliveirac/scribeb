<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class ManagerController extends Controller
{

    public function getDashboard()
    {

        return view('dashboard.manager.dashManager',['headTitle' => 'Dashboard of '.Auth::user()->username]);

    }
}
