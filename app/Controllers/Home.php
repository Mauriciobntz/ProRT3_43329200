<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/principal');
    }
    public function quienes_somos()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
    public function acerca_de()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }
    public function sign_in()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/sign_in');
        echo view('front/footer_view');
    }
    public function login()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/login');
        echo view('front/footer_view');
    }
    public function contacto()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/contacto');
        echo view('front/footer_view');
    }
}
