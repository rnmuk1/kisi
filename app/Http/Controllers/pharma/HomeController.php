<?php

namespace App\Http\Controllers\pharma;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {

        return view('pharma.pages.index');
    }

    public function register()
    {

        return view('livewire.register.register');
    }

    public function login()
    {

        return view('livewire.register.login');
    }
}

