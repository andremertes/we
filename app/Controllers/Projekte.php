<?php

namespace App\Controllers;

class Projekte extends BaseController
{
    public function index()
    {

        $data['heading'] = "Aufgabenplaner: Projekte";

        echo view('templates/head', $data);
        echo view('templates/jumbotron');
        echo view('templates/rowopen');
        echo view('templates/navigation');
        echo view('projekte/projekte');
        echo view('templates/rowclose');
        echo view('templates/foot');

        //return view('welcome_message');
    }
}
