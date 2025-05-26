<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function servicios()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/_servicios');
        echo view('front/footer_view');
    }

    public function clientes()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/_clientes');
        echo view('front/footer_view');
    }

    public function contacto()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/_contacto');
        echo view('front/footer_view');
    }

    public function login()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/_login');
        echo view('front/footer_view');
    }
}
