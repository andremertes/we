<?php

namespace App\Controllers;

use App\Models\PersonenModel;
use CodeIgniter\Controller;

class Mitglieder extends BaseController
{

    public function __construct()
    {
        $this->PersonenModel = new PersonenModel();
    }

    public function index()
    {

        /*$data['mitglieder'] = array(
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
        );*/

        if (!$this->session->get('loggedin'))
        {
            return redirect()->to(base_url().'/login/');
        } else {

            $persmodel = new PersonenModel();

            $data['mitglieder'] = $persmodel->getPersonen();
            $data['heading'] = "Aufgabenplaner: Personen";

            $data['sessionuserid'] = $this->session->get('id');
            $data['sessionusername'] = $this->session->get('username');

            echo view('templates/head', $data);
            echo view('templates/jumbotron');
            echo view('templates/rowopen');
            echo view('templates/navigation');

            // Soll edit aufgerufen werden
            if (isset($_POST['btnBearbeiten']) || isset($_POST['btnLoeschen']) || isset($_POST['btnNeu']))
            {
                // Person löschen
                if (isset($_POST['btnLoeschen']))
                {
                    $data['personen'] = $this->PersonenModel->getpersonen($_POST['btnLoeschen']);
                    echo view('personen/edit', $data);
                }
                // Personen bearbeiten
                if (isset($_POST['btnBearbeiten']))
                {
                    $data['personen'] = $this->PersonenModel->getpersonen($_POST['btnBearbeiten']);
                    echo view('personen/edit', $data);
                }
                // Person neu anlegen
                if (isset($_POST['btnNeu']))
                {
                    $data['personen'] = array('id' => '', 'username' => '', 'email' => '', 'password' => '');
                    echo view('personen/edit', $data);
                }
            }

            // Ist edit aufgerufen worden
            if (isset($_POST['btnSpeichern']) || isset($_POST['btnBestaetigen']) || isset($_POST['btnAbbrechen']))
            {

                // Person ändern
                if (isset($_POST['btnSpeichern']))
                {



                        if ($_POST['PersonenID'] != null){
                            $this->PersonenModel->updatePerson($_POST['PersonenID']);
                        }
                        // Person erstellen
                        else{
                            $this->PersonenModel->createPerson($_POST['PersonenID']);
                        }



                }
                // Person löschen
                elseif (isset($_POST['btnBestaetigen'])){
                    $this->PersonenModel->deletePerson($_POST['PersonenID']);
                }
            }

            // Soll nur die Liste angezeigt werden (also alle Personen)
            if (!(isset($_POST['btnBearbeiten']) || isset($_POST['btnNeu']) || isset($_POST['btnLoeschen'])))
            {
                $data['personen'] = $this->PersonenModel->getPersonen();
                echo view('personen/personen', $data);
            }



        }

        /*echo view('templates/head', $data);
        echo view('templates/jumbotron');
        echo view('templates/rowopen');
        echo view('templates/navigation');
        echo view('personen/personen');*/
        echo view('templates/rowclose');
        echo view('templates/foot');

        //return view('welcome_message');
    }
}
