<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// class vm_model extends CI_model {
//     function ajout_membre($data)
//     {
//         $this->db->insert('membre',$data);
//     }
//     function ajout_anjara($formArray)
//     {
//         $this->db->insert('anjara',$formArray);
//     }
//     function ajout_mission($formArray)
//     {
//         $this->db->insert('mission',$formArray);
//     }
//     function ajout_reunion($formArray)
//     {
//         $this->db->insert('reunion',$formArray);
//     }

//     function membre(){
//         return $this->db->get('membre')->result();
//     }

//     public function delete_membre($ID_membre) {
//         $this->db->where('ID_membre', $ID_membre);
//         $this->db->delete('membre');
//     }

//     public function get_membre_by_id($ID_membre) {
//         return $this->db->get_where('membre', ['ID_membre' => $ID_membre])->row();
//     }


class Vm_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function membre() {
        return $this->db->get('membre')->result();
    }

    public function ajout_membre($data) {
        return $this->db->insert('membre', $data);
    }

    public function delete_membre($ID_membre) {
        $this->db->where('ID_membre', $ID_membre);
        return $this->db->delete('membre');
    }

    public function update_membre($ID_membre, $data) {
        $this->db->where('ID_membre', $ID_membre);
        return $this->db->update('membre', $data);
    }

    public function get_membre_by_id($ID_membre) {
            return $this->db->get_where('membre', ['ID_membre' => $ID_membre])->row();
    }

/////// cotisation///////////
    public function delete_cotisation($ID_cotisation) {
        $this->db->where('ID_cotisation', $ID_cotisation);
        $this->db->delete('cotisation');
    }

    public function get_cotisation_by_id($ID_cotisation) {
        return $this->db->get_where('cotisation', ['ID_cotisation' => $ID_cotisation])->row();
    }

    public function cotisation() {
        $this->db->select('cotisation.*, membre.Nom, membre.Prenom');
        $this->db->from('cotisation');
        $this->db->join('membre', 'membre.ID_membre = cotisation.ID_membre');
        $query = $this->db->get();
        return $query->result();  // renvoie un tableau d'objets
    }
    public function get_cotisation($ID_cotisation) {
        $query = $this->db->query("SELECT * FROM membre, cotisation WHERE membre.ID_membre= cotisation.ID_membre and cotisation.ID_cotisation = '$ID_cotisation' ");
        return $query->row();  // renvoie un tableau d'objets
    }

    public function ajout_cotisation($data) {
        $this->db->insert('cotisation', $data);
    }

    public function update_cotisation($ID_cotisation, $data) {
        $this->db->where('ID_cotisation', $ID_cotisation);
        $this->db->update('cotisation', $data);
    } 
    
    ////////engaliaa////
    public function engalia() {
        $this->db->select('engalia.*, membre.Nom, membre.Prenom');
        $this->db->from('engalia');
        $this->db->join('membre', 'membre.ID_membre = engalia.ID_membre');
        $query = $this->db->get();
        return $query->result();  // renvoie un tableau d'objets
    }

    public function delete_engalia($ID_engalia) {
        $this->db->where('ID_engalia', $ID_engalia);
        $this->db->delete('engalia');
    }
    public function ajout_engalia($data) {
        $this->db->insert('engalia', $data);
    }

    public function get_engalia($ID_engalia) {
        $query = $this->db->query("SELECT * FROM membre, engalia WHERE membre.ID_membre= engalia.ID_membre and engalia.ID_engalia = '$ID_engalia' ");
        return $query->row();  // renvoie un tableau d'objets
    }
    public function update_engalia($ID_engalia, $data) {
        $this->db->where('ID_engalia', $ID_engalia);
        $this->db->update('engalia', $data);
    } 
}
    
?>