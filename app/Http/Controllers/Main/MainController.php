<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function works()
    {
        return view('main.works');
    }

    public function post()
    {
        return view('main.post');
    }

    public function profile()
    {
        return view('main.profile');
    }
}
