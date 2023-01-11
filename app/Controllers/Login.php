<?php

namespace App\Controllers;

use App\Models\PersonenModel;
use App\Models\ProjekteModel;
use CodeIgniter\Controller;

class Login extends BaseController
{
    public function __construct(){
        $this->PersonenModel = new PersonenModel();
        $this->ProjekteModel = new ProjekteModel();
    }

    public function index()
    {

        //var_dump(password_hash("Frikadelle", PASSWORD_BCRYPT));

        if (isset($_POST['email']) && isset($_POST['passwd']))
        {

                if ($this->PersonenModel->login() != NULL) {

                    $password = $this->PersonenModel->login()['password'];
                    if (password_verify($_POST['passwd'], $password)) {

                        $currentProject = $this->ProjekteModel->getCurrentProjects($this->PersonenModel->login()['id'])[0];

                        $userdata = array(
                            'loggedin' => TRUE,
                            'id' => $this->PersonenModel->login()['id'],
                            'username' => $this->PersonenModel->login()['username'],
                            'email' => $this->PersonenModel->login()['email'],
                            'currentProject' => $currentProject,
                        );

                        $this->session->set($userdata);
                        return redirect()->to(base_url() . '/projekte');
                    }
                }



        }

        $data['heading'] = "Aufgabenplaner: Login";

        echo ("Example: user \"info@andremertes.com\" using password \"Frikadelle\"");

        echo view('templates/head', $data);
        echo view('templates/rowopen');
        echo view('login/login');
        echo view('templates/rowclose');
        echo view('templates/foot');

        //return view('welcome_message');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url().'/login');
    }

}
