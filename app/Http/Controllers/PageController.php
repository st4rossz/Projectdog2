<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function wait()
    {
        return view('wait');
    }
    public function admin()
    {
        return view('adminHome');
    }
}
