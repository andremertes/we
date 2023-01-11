<?php namespace App\Models;
use CodeIgniter\Model;

class AufgabenModel extends Model
{

    public function getData()
    {
        $result = $this->db->query('SELECT * FROM aufgaben');
        return $result->getResultArray();
    }

    public function getAufgaben()
    {
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select('aufgaben.*, group_concat("<li>", mitglieder.username, "</li>" separator "") as username');
        $this->aufgaben->join('aufgaben_mitglieder', 'aufgaben_mitglieder.aufgabeID = aufgaben.id', 'left');
        $this->aufgaben->join('mitglieder', 'aufgaben_mitglieder.mitgliedID = mitglieder.id', 'left');
        $this->aufgaben->join('reiter', 'reiter.id = aufgaben.reiterID', 'left');
        $this->aufgaben->where('reiter.projektID', $_SESSION['aktivesprojekt']);
        $this->aufgaben->select('reiter.name, reiter.projektID, group_concat("<li>", mitglieder.username, "</li>" separator "") as username');
        $this->aufgaben->groupBy('aufgaben.id');
        $result = $this->aufgaben->get();

        return $result->getResultArray();
    }

    public function geteditAufgabe()
    {
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select('*');
        $this->aufgaben->join('aufgaben_mitglieder', 'aufgaben_mitglieder.aufgabeID = aufgaben.id', 'left');
        $this->aufgaben->where('aufgaben.id', $_POST['btnBearbeiten']);
        $result = $this->aufgaben->get();

        return $result->getRowArray();
    }

    public function getdeleteAufgabe()
    {
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select('*');
        $this->aufgaben->where('id', $_POST['btnLoeschen']);
        $result = $this->aufgaben->get();

        return $result->getRowArray();
    }

    public function createAufgabe()
    {
        $activeuser = $_SESSION['id'];
        $reiterid = $_POST['reiterID'];
        $faelligkeit = $_POST['faellig'];

        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->insert(array('bezeichnung' => $_POST['aufgabenbezeichnung'], 'beschreibung' => $_POST['beschreibung'], 'faelligkeitsdatum' => $faelligkeit, 'erstellerID' => $activeuser, 'reiterID' => $reiterid));

        //Primärschlüssel
        $taskid = $this->db->insertID();

        $this->aufgaben_mitglieder = $this->db->table('aufgaben_mitglieder');
        foreach ($_POST['zustaendig'] as $mitglied) {
            if($_POST['zustaendig'] != ''){
                $insertdaten = array('aufgabeID' => $taskid, 'mitgliedID' => $mitglied);
                $this->aufgaben_mitglieder->insert($insertdaten);
            }
        }
    }

    public function updateAufgabe()
    {
        $reiterid = $_POST['reiterID'];

        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->where('aufgaben.id', $_POST['AufgabeID']);

        $this->aufgaben->update(array('bezeichnung' => $_POST['aufgabenbezeichnung'], 'beschreibung' => $_POST['beschreibung'], 'reiterID' => $reiterid));

    }

    public function deleteAufgabe()
    {
        $this->maloesch = $this->db->table('aufgaben_mitglieder');
        $this->maloesch->where('aufgabeID', $_POST['AufgabeID']);
        $this->maloesch->delete();

        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->where('id', $_POST['AufgabeID']);
        $this->aufgaben->delete();
    }

}