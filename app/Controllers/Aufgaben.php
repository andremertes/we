<?php

namespace App\Controllers;

class Aufgaben extends BaseController
{
    public function index()
    {

        $data['heading'] = "Aufgabenplaner: Aufgaben";

        $data['aufgaben'] = array(
            array(
                'id' => '0',
                'bezeichnung' => 'HTML Datei erstellen',
                'beschreibung' => 'HTML Datei erstellen',
                'reiter' => 'ToDo',
                'zustaendig' => 'Max Mustermann'
            ),
            array(
                'id' => '1',
                'bezeichnung' => 'CSS Datei erstellen',
                'beschreibung' => 'CSS Datei erstellen',
                'reiter' => 'ToDo',
                'zustaendig' => 'Max Mustermann'
            ),
            array(
                'id' => '2',
                'bezeichnung' => 'PC eingeschaltet',
                'beschreibung' => 'PC einschalten',
                'reiter' => 'Erledigt',
                'zustaendig' => 'Max Mustermann'
            ),
            array(
                'id' => '3',
                'bezeichnung' => 'Kaffee trinken',
                'beschreibung' => 'Kaffee trinken',
                'reiter' => 'Erledigt',
                'zustaendig' => 'Petra Müller'
            ),
            array(
                'id' => '4',
                'bezeichnung' => 'Für die Uni lernen',
                'beschreibung' => 'Für die Uni lernen',
                'reiter' => 'Verschoben',
                'zustaendig' => 'Max Mustermann'
            )
        );

        echo view('templates/head', $data);
        echo view('templates/jumbotron');
        echo view('templates/rowopen');
        echo view('templates/navigation');
        echo view('aufgaben/aufgaben');
        echo view('templates/rowclose');
        echo view('templates/foot');

        //return view('welcome_message');
    }
}
