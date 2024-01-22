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

    //admin
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

    // public function datatamu_admin(): string
    // {
    //     return view('datatamu_admin');
    // }

    // public function formtambahdatatamu_admin(): string
    // {
    //     return view('formtambahtamu_admin');
    // }





    //superadmin
    public function beranda_superadmin(): string
    {
        return view('beranda_superadmin');
    }

    public function jadwalrapat_superadmin(): string
    {
        return view('jadwalrapat_superadmin');
    }

    public function datadriver_superadmin(): string 
    {
        return view('datadriver_superadmin');
    }

    public function datatamu_superadmin(): string
    {
        return view('datatamu_superadmin');
    }

    //admin humas
    public function beranda_adminhumas(): string
    {
        return view('beranda_adminhumas');
    }

    public function jadwalrapat_adminhumas(): string
    {
        return view('jadwalrapat_adminhumas');
    }

    public function datadriver_adminhumas(): string
    {
        return view('datadriver_adminhumas');
    }

    public function datatamu_adminhumas(): string
    {
        return view('datatamu_adminhumas');
    }

    public function databerita_adminhumas(): string
    {
        return view('databerita_adminhumas');
    }

}
