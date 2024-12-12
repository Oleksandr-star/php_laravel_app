<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller 
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function register()
    {
        return view('register');
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }

    public function show($id)
    {
        return view('show', ['id' => $id]);
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}