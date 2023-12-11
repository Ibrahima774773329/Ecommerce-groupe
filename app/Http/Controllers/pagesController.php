<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function details()
    {
        return view('details');
    }
    public function navbar()
    {
        return view('partial.navbar');
    }

    public function whislist()
    {
        return view('whislist');
    }

    public function contact()
    {
        return view('contact');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function AddCart()
    {
        return view('AddCart');
    }
    public function footer()
    {
        return view('partial.footer');
    }

    public function register()
    {
        return view('register');
    }
}
