<?php

namespace App\Controllers;

class AktuellesProjekt extends BaseController
{
    public function index()
    {

        $data['heading'] = "Aufgabenplaner: Aktuelles Projekt";

        $data['todo'] = array(
            array(
                'bezeichnung' => 'HTML Datei erstellen',
                'zustaendig' => 'Max Mustermann',
            ),
            array(
                'bezeichnung' => 'CSS Datei erstellen',
                'zustaendig' => 'Max Mustermann',
            )
        );
        $data['erledigt'] = array(
            array(
                'bezeichnung' => 'PC eingeschaltet',
                'zustaendig' => 'Petra Müller',
            ),
            array(
                'bezeichnung' => 'Kaffee trinken',
                'zustaendig' => 'Petra Müller',
            )
        );
        $data['verschoben'] = array(
            array(
                'bezeichnung' => 'Für die Uni lernen',
                'zustaendig' => 'Max Mustermann',
            )
        );

        echo view('templates/head', $data);
        echo view('templates/jumbotron');
        echo view('templates/rowopen');
        echo view('templates/navigation');
        echo view('aktuelles_projekt/aktuelles_projekt');
        echo view('templates/rowclose');
        echo view('templates/foot');

        //return view('welcome_message');
    }
}
