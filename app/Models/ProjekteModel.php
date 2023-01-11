<?php namespace App\Models;
use CodeIgniter\Model;

class ProjekteModel extends Model
{

    public function getData()
    {
        $projekteresult = $this->db->query('SELECT * FROM projekte');
        return $projekteresult->getResultArray();
    }

    /*
    public function getProjekte( $person_id = NULL )
    {
        $person_id = $this->session->get('id');
        $this->projekte = $this->db->table('projekte_mitglieder');
        $this->projekte->select('*');
        $this->projekte->where('mitgliedID', $person_id);
        $this->projekte->join('projekte', 'projekte.id = projekte_mitglieder.projektID', 'left');
        $result = $this->projekte->get();
        return $result->getResultArray();
        $this->projekte = $this->db->table('projekte');
        $this->projekte->select('projekte.*');
        $this->projekte->join('projekte_mitglieder', 'projekte_mitglieder.projektID = projekte.id', 'left');
        if ($person_id != NULL){
            $this->projekte->where('mitgliedID', $person_id);
            $this->projekte->orderBy('name');
            $result = $this->projekte->get();
        }
        //$result = $this->projekte->get();
        return $result->getResultArray();
        if ($person_id != NULL){
            return $result->getRowArray();
        } else{
            return $result->getResultArray();
        }
    } */


    public function getCurrentProjects($userId) {
        $this->projekte = $this->db->table('projekte');
        $this->projekte->select('*');
        $this->projekte->join('projekte_mitglieder', 'projekte.id = projekte_mitglieder.projektID', 'left');

        $this->projekte->where('projekte_mitglieder.mitgliedID', $userId);

        $this->projekte->orderBy('name');
        $result = $this->projekte->get();

        return $result->getResultArray();
    }

    public function getProjekte()
    {
        $aktiverbenutzer = $_POST['activeuser'];

        $this->projekte = $this->db->table('projekte');
        $this->projekte->select('*');
        $this->projekte->join('projekte_mitglieder', 'projekte.id = projekte_mitglieder.projektID', 'left');

        $this->projekte->where('projekte_mitglieder.mitgliedID', $aktiverbenutzer);

        $this->projekte->orderBy('name');
        $result = $this->projekte->get();

        return $result->getResultArray();

    }

    public function geteditProjekt()
    {
        $this->projekte = $this->db->table('projekte');
        $this->projekte->select('*');
        $this->projekte->where('id', $_POST['projektID']);
        $result = $this->projekte->get();

        return $result->getRowArray();
    }

    public function createProjekt()
    {
        $aktiverbenutzer = $_POST['activeuser'];

        $this->projekte = $this->db->table('projekte');
        $this->projekte->insert(array('name' => $_POST['projektname'], 'beschreibung' => $_POST['projektbeschreibung'], 'erstellerID' => $aktiverbenutzer));

        //Ich bin auch automatisch dem neuen Projekt zugeteilt
        //letztes hinzugefügte Projekt ermitteln
        $this->idprojekte = $this->db->table('projekte');
        $this->idprojekte->selectMax('id');
        $letztes = $this->idprojekte->get();

        $max = $letztes->getRowArray();

        $this->projektepersonen = $this->db->table('projekte_mitglieder');
        $this->projektepersonen->insert(array('projektID' => $max['id'], 'mitgliedID' => $aktiverbenutzer));

    }

    public function selectProjekt()
    {
        $this->projekte = $this->db->table('projekte');
        $this->projekte->select('*');
        $this->projekte->where('id', $_POST['projektID']);
        $result = $this->projekte->get();

        return $result->getRowArray();
    }

    public function updateProjekt()
    {
        $this->projekte = $this->db->table('projekte');
        $this->projekte->where('projekte.id', $_POST['ProjektID']);

        $this->projekte->update(array('name' => $_POST['projektname'], 'beschreibung' => $_POST['projektbeschreibung']));

    }

    public function deleteProjekt()
    {
        $this->projekte = $this->db->table('projekte');
        $this->projekte->where('id', $_POST['ProjektID']);
        $this->projekte->delete();
    }



}