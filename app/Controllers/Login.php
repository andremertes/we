<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {

        $data['heading'] = "Aufgabenplaner: Login";

        echo view('templates/head', $data);
        echo view('templates/rowopen');
        echo view('login/login');
        echo view('templates/rowclose');
        echo view('templates/foot');

        //return view('welcome_message');
    }
}
