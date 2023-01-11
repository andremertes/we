<?php namespace App\Models;
use CodeIgniter\Model;

class ReiterModel extends Model
{

    public function getData()
    {
        $result = $this->db->query('SELECT * FROM reiter');
        return $result->getResultArray();
    }

    public function getReiter()
    {
        $this->reiter = $this->db->table('reiter');
        $this->reiter->select('*');
        $this->reiter->where('projektID', $_SESSION['aktivesprojekt']);
        $result = $this->reiter->get();

        return $result->getResultArray();
    }

    public function geteditReiter()
    {
        $this->reiter = $this->db->table('reiter');
        $this->reiter->select('*');
        $this->reiter->where('id', $_POST['btnBearbeiten']);
        $result = $this->reiter->get();

        return $result->getRowArray();
    }

    public function createReiter()
    {
        $aktivesprojekt = $_SESSION['aktivesprojekt'];

        $this->reiter = $this->db->table('reiter');
        $this->reiter->insert(array('name' => $_POST['reitername'], 'beschreibung' => $_POST['reiterbeschreibung'], 'projektID' => $aktivesprojekt));

    }

    public function updateReiter()
    {
        $this->reiter = $this->db->table('reiter');
        $this->reiter->where('reiter.id', $_POST['ReiterID']);

        $this->reiter->update(array('name' => $_POST['reitername'], 'beschreibung' => $_POST['reiterbeschreibung']));

    }

    public function proofdelete()
    {
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select('*');
        $this->aufgaben->where('reiterID', $_POST['btnLoeschen']);
        $result = $this->aufgaben->get();

        return $result->getResultArray();
    }

    public function deleteReiter()
    {
        $this->reiter = $this->db->table('reiter');
        $this->reiter->where('id', $_POST['btnLoeschen']);
        $this->reiter->delete();
    }

}