<?php

namespace App\Controllers;

class Mitglieder extends BaseController
{
    public function index()
    {

        $data['heading'] = "Aufgabenplaner: Personen";

        $data['mitglieder'] = array(
            array(
                'id' => '0',
                'name' => 'Max Mustermann',
                'email' => 'mustermann@muster.de',
                'inProjekt' => true
            ),
            array(
                'id' => '1',
                'name' => 'Petra Müller',
                'email' => 'petra@mueller.de',
                'inProjekt' => true
            )
        );

        echo view('templates/head', $data);
        echo view('templates/jumbotron');
        echo view('templates/rowopen');
        echo view('templates/navigation');
        echo view('personen/personen');
        echo view('templates/rowclose');
        echo view('templates/foot');

        //return view('welcome_message');
    }
}
