<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function login(): string
    {
        return view('login');
    }

    public function register(): string
    {
        return view('register');
    }

    public function beranda_admin(): string
    {
        return view('beranda_admin');
    }

    public function jadwalrapat_admin(): string
    {
        return view('jadwalrapat_admin');
    }

    public function datadriver_admin(): string
    {
        return view('datadriver_admin');
    }

    public function datatamu_admin(): string
    {
        return view('datatamu_admin');
    }

}
