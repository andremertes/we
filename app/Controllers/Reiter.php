<?php

namespace App\Controllers;

class Reiter extends BaseController
{
    public function index()
    {

        $data['heading'] = "Aufgabenplaner: Reiter";

        $data['reiter'] = array(
        array(
            'id' => '0',
            'name' => 'ToDo',
            'beschreibung' => 'Dinge, die erledigt werden müssen'
        ),
        array(
            'id' => '1',
            'name' => 'Erledigt',
            'beschreibung' => 'Dinge, die erledigt sind'
        ),
        array(
            'id' => '2',
            'name' => 'Verschoben',
            'beschreibung' => 'Dinge, die später erledigt werden'
        )
    );

        echo view('templates/head', $data);
        echo view('templates/jumbotron');
        echo view('templates/rowopen');
        echo view('templates/navigation');
        echo view('reiter/reiter');
        echo view('templates/rowclose');
        echo view('templates/foot');

        //return view('welcome_message');
    }
}
