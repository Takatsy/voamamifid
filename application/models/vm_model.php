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

    //////////////////anjara//////////////
    public function anjara() {
        
        $query = $this->db->query("SELECT ID_anjara,Montant,Date_reunion,Nbr_anjara, membre.Nom, membre.Prenom, Montant*Nbr_anjara AS Total FROM membre, anjara WHERE membre.ID_membre= anjara.ID_membre " );
        return $query->result();  // renvoie un tableau d'objets
    }

    public function ajout_anjara($data) {
        $this->db->insert('anjara', $data);
    }

    public function delete_anjara($ID_anjara) {
        $this->db->where('ID_anjara', $ID_anjara);
        $this->db->delete('anjara');
    }

    public function get_anjara($ID_anjara) {
        $query = $this->db->query("SELECT * FROM membre, anjara WHERE membre.ID_membre= anjara.ID_membre and anjara.ID_anjara = '$ID_anjara' ");
        return $query->row();  // renvoie un tableau d'objets
    }

    public function update_anjara($ID_anjara, $data) {
        $this->db->where('ID_anjara', $ID_anjara);
        $this->db->update('anjara', $data);
    } 

    ////////sazy///////////////
    public function sazy() {
        
        $query = $this->db->query("SELECT * FROM membre, sazy WHERE membre.ID_membre= sazy.ID_membre " );
        return $query->result();  // renvoie un tableau d'objets
    }

    public function ajout_sazy($data) {
        $this->db->insert('sazy', $data);
    }

    public function delete_sazy($ID_sazy) {
        $this->db->where('ID_sazy', $ID_sazy);
        $this->db->delete('sazy');
    }

    public function get_sazy($ID_sazy) {
        $query = $this->db->query("SELECT * FROM membre, sazy WHERE membre.ID_membre= sazy.ID_membre and sazy.ID_sazy = '$ID_sazy' ");
        return $query->row();  // renvoie un tableau d'objets
    }

    public function update_sazy($ID_sazy, $data) {
        $this->db->where('ID_sazy', $ID_sazy);
        $this->db->update('sazy', $data);
    } 
    ////////pret/////

    public function pret() {
        
        $query = $this->db->query("SELECT ID_pret,Montant,Date_pret, Statut, membre.Nom, membre.Prenom FROM membre, pret WHERE membre.ID_membre= pret.ID_membre " );
        return $query->result();  // renvoie un tableau d'objets
    }

    public function ajout_pret($data) {
        $this->db->insert('pret', $data);
    }

    public function delete_pret($ID_pret) {
        $this->db->where('ID_pret', $ID_pret);
        $this->db->delete('pret');
    }

    public function get_pret($ID_pret) {
        $query = $this->db->query("SELECT * FROM membre, pret WHERE membre.ID_membre= pret.ID_membre and pret.ID_pret = '$ID_pret' ");
        return $query->row();  // renvoie un tableau d'objets
    }
    public function get_histopret($ID_pret) {
        $query = $this->db->query("SELECT  ID_remboursement,pret.ID_pret,pret.Date_pret,pret.Montant as Montantpret, remboursement.Montant,Date_remboursement, membre.Nom, membre.Prenom from membre, pret, remboursement WHERE membre.ID_membre= pret.ID_membre and remboursement.ID_pret =  pret.ID_pret and remboursement.ID_remboursement = '$ID_pret' ");
        return $query->row();  // renvoie un tableau d'objets
    }

    public function update_pret($ID_pret, $data) {
        $this->db->where('ID_pret', $ID_pret);
        $this->db->update('pret', $data);
    } 
    /////////remboursement////////
    
    public function remboursement() {
        
        $query = $this->db->query("SELECT ID_remboursement,remboursement.Montant,Date_remboursement, membre.Nom, membre.Prenom FROM membre, remboursement, pret WHERE membre.ID_membre= pret.ID_membre and remboursement.ID_pret =  pret.ID_pret  " );
        return $query->result();  // renvoie un tableau d'objets
    }

    public function ajout_remboursement($data) {
        $this->db->insert('remboursement', $data);
        

        // Mettre à jour le statut du prêt lié
        $ID_pret = $data['ID_pret'];
        $this->update_statut_pret($ID_pret);
    }

    public function delete_remboursement($ID_remboursement) {
        // Récupérer l'ID du prêt lié avant suppression
        $this->db->select('ID_pret');
        $this->db->where('ID_remboursement', $ID_remboursement);
        $remboursement = $this->db->get('remboursement')->row();
    
        if ($remboursement) {
            $ID_pret = $remboursement->ID_pret;
    
            // Supprimer le remboursement
            $this->db->where('ID_remboursement', $ID_remboursement);
            $this->db->delete('remboursement');
    
            // Mettre à jour le statut du prêt
            $this->update_statut_pret($ID_pret);
        }
    }
    

    public function get_remboursement($ID_remboursement) {
        $query = $this->db->query("SELECT  ID_remboursement,pret.ID_pret,pret.Date_pret,pret.Montant as Montantpret, remboursement.Montant,Date_remboursement, membre.Nom, membre.Prenom from membre, pret, remboursement WHERE membre.ID_membre= pret.ID_membre and remboursement.ID_pret =  pret.ID_pret and remboursement.ID_remboursement = '$ID_remboursement' ");
        return $query->row();  // renvoie un tableau d'objets
    }
    

    public function update_remboursement($ID_remboursement, $data) {
        $this->db->where('ID_remboursement', $ID_remboursement);
        $this->db->update('remboursement', $data);
    } 

    public function get_reste_a_payer($ID_pret, $taux = 10, $mois = 1)
    {
        // Obtenir le montant du prêt
        $pret = $this->db->get_where('pret', ['ID_pret' => $ID_pret])->row();
        if (!$pret) return 0;
    
        // Calculer le total à rembourser
        $total_a_rembourser = $pret->Montant + ($pret->Montant * ($taux / 100) * $mois);
    
        // Total déjà remboursé
        $this->db->select_sum('Montant');
        $this->db->where('ID_pret', $ID_pret);
        $total_rembourse = $this->db->get('remboursement')->row()->Montant ?? 0;
    
        // Calcul du reste
        return $total_a_rembourser - $total_rembourse;
    }
    public function get_montant_a_rembourser($ID_pret, $taux = 10, $mois = 1)
    {
        // Obtenir le montant du prêt
        $pret = $this->db->get_where('pret', ['ID_pret' => $ID_pret])->row();
        if (!$pret) return 0;
    
        // Calculer le total à rembourser
        return $total_a_rembourser = $pret->Montant + ($pret->Montant * ($taux / 100) * $mois);
           
    }

    public function get_total_rembourser($ID_pret)
    {
        // Obtenir le montant du prêt
        $pret = $this->db->get_where('pret', ['ID_pret' => $ID_pret])->row();
        if (!$pret) return 0;
    
        // Calculer le total à rembourser
        //$total_a_rembourser = $pret->Montant + ($pret->Montant * ($taux / 100) * $mois);
    
        // Total déjà remboursé
        $this->db->select_sum('Montant');
        $this->db->where('ID_pret', $ID_pret);
        $total_rembourse = $this->db->get('remboursement')->row()->Montant ?? 0;
    
        // Calcul du reste
        return $total_rembourser ;
    }
    


    public function total_membre() {
        return $this->db->count_all('membre');
    }

    public function total_part() {
        $this->db->select('SUM(Nbr_anjara * Montant) AS Montant');
        $query = $this->db->get('anjara');
        return $query->row()->Montant;
    }
    

    public function total_sazy() {
        $this->db->select_sum('Montant');
        $query = $this->db->get('sazy');
        return $query->row()->Montant;
    }
    public function total_interet() {
        $this->db->select_sum('Montant');
        $query = $this->db->get('interet');
        return $query->row()->Montant;
    }

    public function total_pret() {
        $this->db->select_sum('Montant');
        $this->db->where('statut !=', 'payé');  // Tous sauf ceux où statut = payé
        $query = $this->db->get('pret');
        return $query->row()->Montant;
    }
    public function total_cotisation() {
        $this->db->select_sum('Montant');
        $query = $this->db->get('cotisation');
        return $query->row()->Montant;
    }
    public function get_pret_by_id($ID_pret) {
        return $this->db->get_where('pret', array('ID_pret' => $ID_pret))->row();
    }
    
    public function get_remboursements_by_pret($ID_pret) {
        $this->db->where('ID_pret', $ID_pret);
        $query = $this->db->get('remboursement');
        return $query->result();
    }
    
    public function update_statut_pret($ID_pret) {
        $pret = $this->get_pret_by_id($ID_pret);
        $remboursements = $this->get_remboursements_by_pret($ID_pret);
    
        $total_rembourse = 0;
        foreach ($remboursements as $r) {
            $total_rembourse += $r->Montant;
        }
    
        // Calculer 10% du montant du prêt
        $seuil = 0.10 * $pret->Montant;
    
        if ($total_rembourse = $seuil) {
            $this->db->where('ID_pret', $ID_pret);
            $this->db->update('pret', ['Statut' => 'Payé']);
        } else {
            $this->db->where('ID_pret', $ID_pret);
            $this->db->update('pret', ['Statut' => 'En cours']);
        }
    }
    
    
    
    public function enregistrer_ou_modifier_remboursement($data) {
        $ID_pret = $data['ID_pret'];
    
        // Vérifie s'il existe déjà un remboursement
        $this->db->where('ID_pret', $ID_pret);
        $remboursement = $this->db->get('remboursement')->row();
    
        if ($remboursement) {
            // Mise à jour
            $this->db->where('ID_remboursement', $remboursement->ID_remboursement);
            $this->db->update('remboursement', $data);
        } else {
            // Insertion
            $this->db->insert('remboursement', $data);
        }
    
        // Met à jour le statut du prêt
        $this->update_statut_pret($ID_pret);
    }
    /////register////
    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    public function get_user($username) {
        return $this->db->get_where('users', ['username' => $username])->row();
    }
    public function ajouter_interet($data) {
        return $this->db->insert('interet', $data);
    }
    public function get_total_part($ID_membre) {
        $this->db->select_sum('Montant');
        $this->db->where('ID_membre', $ID_membre);
        $query = $this->db->get('part');
        return $query->row()->Montant ?? 0;
    }
    
    public function get_total_cotisation($ID_membre) {
        $this->db->select_sum('Montant');
        $this->db->where('ID_membre', $ID_membre);
        $query = $this->db->get('cotisation');
        return $query->row()->Montant ?? 0;
    }
    
    public function get_total_sazy($ID_membre) {
        $this->db->select_sum('Montant');
        $this->db->where('ID_membre', $ID_membre);
        $query = $this->db->get('sazy');
        return $query->row()->Montant ?? 0;
    }
    
    public function get_total_interet($ID_membre) {
        $this->db->select_sum('Montant');
        $this->db->where('ID_membre', $ID_membre);
        $query = $this->db->get('interet');
        return $query->row()->Montant ?? 0;
    }
    
    public function get_total_pret($ID_membre) {
        $this->db->select_sum('Montant');
        $this->db->where('ID_membre', $ID_membre);
        $query = $this->db->get('pret');
        return $query->row()->Montant ?? 0;
    }
    
    
}
    
?>