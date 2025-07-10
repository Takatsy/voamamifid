<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vm_controller extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('vm_model');
        $this->load->library('form_validation');
    }

public function index(){
    $this->load->model('Vm_model');

        $data['total_membre'] = $this->Vm_model->total_membre();
        $data['total_part'] = $this->Vm_model->total_part();
        $data['total_sazy'] = $this->Vm_model->total_sazy();
        $data['total_pret'] = $this->Vm_model->total_pret();
        $data['total_cotisation'] = $this->Vm_model->total_cotisation();

        $data['solde_total'] = $data['total_part'] + $data['total_cotisation'] + $data['total_sazy'] - $data['total_pret'];

        $this->load->view('accueil_view', $data);
}

public function sazy($action = null, $ID_sazy = null){

    $this->load->model('vm_model');
    $data = [];

    // Supprimer une sazy
    if ($action == 'supprimer' && !empty($ID_sazy)) {
        $this->vm_model->delete_sazy($ID_sazy);
        $this->session->set_flashdata('success', 'Sazy supprimée avec succès');
        redirect(base_url('index.php/vm_controller/sazy'));
    }

    // Formulaire de sazy
    if ($action === 'modifier' && !empty($ID_sazy)) {
        $data['sazy'] = $this->vm_model->get_sazy($ID_sazy);
        $data['membre'] = $this->vm_model->membre();
        $this->load->view('modif_sazy_view', $data);
        return;
    }

    // Lire toutes les sazy
    $data['sazy'] = $this->vm_model->sazy();
    $data['membre'] = $this->vm_model->membre(); // ajouter ça

    // Ajouter une sazy
if ($this->input->post('action') == 'add') {
    $this->form_validation->set_rules('Montant', 'Montant', 'required|numeric');
    $this->form_validation->set_rules('Observation', 'Observation', 'required');
    $this->form_validation->set_rules('Date', 'Date', 'required');

    if ($this->form_validation->run()) {
        $formArray = array(
            'Montant' => $this->input->post('Montant'),
            'Observation' => $this->input->post('Observation'),
            'Date' => $this->input->post('Date'),
            'ID_membre' => $this->input->post('ID_membre')
        );

        $this->vm_model->ajout_sazy($formArray);
        $this->session->set_flashdata('success', 'Sazy ajoutée avec succès');
        redirect(base_url('index.php/vm_controller/sazy'));
    }
}

    // Modifier une sazy
    if ($this->input->post('action') == 'update') {
        $id_update = $this->input->post('id');
        $formArray = array(
            'Montant' => $this->input->post('Montant'),
            'Observation' => $this->input->post('Observation'),
            'Date' => $this->input->post('Date'),
            'ID_membre' => $this->input->post('ID_membre')
        );
        $this->vm_model->update_sazy($id_update, $formArray);
        $this->session->set_flashdata('success', 'sazy modifiée avec succès');
        redirect(base_url('index.php/vm_controller/sazy'));
    }

    // Vue
    $this->load->view('sazy_view', $data);
}


public function engalia($action = null, $ID_engalia = null)
{
	
    $this->load->model('vm_model');
    $data = [];

    // Supprimer une engalia
    if ($action == 'supprimer' && !empty($ID_engalia)) {
        $this->vm_model->delete_engalia($ID_engalia);
        $this->session->set_flashdata('success', 'Cotisation supprimée avec succès');
        redirect(base_url('index.php/vm_controller/engalia'));
    }

    // Formulaire de modification
    if ($action === 'modifier' && !empty($ID_engalia)) {
        $data['engalia'] = $this->vm_model->get_engalia($ID_engalia);
        $data['membre'] = $this->vm_model->membre();
        $this->load->view('modif_engalia_view', $data);
        return;
    }

    // Lire toutes les engalia
    $data['engalia'] = $this->vm_model->engalia();
	$data['membre'] = $this->vm_model->membre(); // ajouter ça

    // Ajouter une engalia
    if ($this->input->post('action') == 'add') {
        $this->form_validation->set_rules('Montant', 'Montant', 'required|numeric');
        $this->form_validation->set_rules('Date', 'Date', 'required');

        if ($this->form_validation->run()) {
            $formArray = array(
                'Montant' => $this->input->post('Montant'),
                'Date' => $this->input->post('Date'),
                'ID_membre' => $this->input->post('ID_membre')
            );
            $this->vm_model->ajout_engalia($formArray);
            $this->session->set_flashdata('success', 'engalia ajoutée avec succès');
            redirect(base_url('index.php/vm_controller/engalia'));
        }
    }

    // Modifier une engalia
    if ($this->input->post('action') == 'update') {
        $id_update = $this->input->post('id');
        $formArray = array(
            'Montant' => $this->input->post('Montant'),
            'Date' => $this->input->post('Date'),
            'ID_membre' => $this->input->post('ID_membre')
        );
        $this->vm_model->update_engalia($id_update, $formArray);
        $this->session->set_flashdata('success', 'engalia modifiée avec succès');
        redirect(base_url('index.php/vm_controller/engalia'));
    }

    // Vue
    $this->load->view('engalia_view', $data);
}

	

	public function anjara($action = null, $ID_anjara = null){
        $this->load->model('vm_model');
        $data = [];
    
        // Supprimer une anjara
        if ($action == 'supprimer' && !empty($ID_anjara)) {
            $this->vm_model->delete_anjara($ID_anjara);
            $this->session->set_flashdata('success', 'Anjara supprimée avec succès');
            redirect(base_url('index.php/vm_controller/anjara'));
        }
    
        // Formulaire de anjara
        if ($action === 'modifier' && !empty($ID_anjara)) {
            $data['anjara'] = $this->vm_model->get_anjara($ID_anjara);
            $data['membre'] = $this->vm_model->membre();
            $this->load->view('modif_anjara_view', $data);
            return;
        }
    
        // Lire toutes les anjara
        $data['anjara'] = $this->vm_model->anjara();
        $data['membre'] = $this->vm_model->membre(); // ajouter ça
    
        // Ajouter une anjara
        if ($this->input->post('action') == 'add') {
            $this->form_validation->set_rules('Montant', 'Montant', 'required|numeric');
            $this->form_validation->set_rules('Date_reunion', 'Date reunion', 'required');
            $this->form_validation->set_rules('Nbr_anjara', 'Nombre anjara', 'required|numeric');
    
            if ($this->form_validation->run()) {
                $formArray = array(
                    'Montant' => $this->input->post('Montant'),
                    'Date_reunion' => $this->input->post('Date_reunion'),
                    'Nbr_anjara' => $this->input->post('Nbr_anjara'),
                    'ID_membre' => $this->input->post('ID_membre')
                );
                $this->vm_model->ajout_anjara($formArray);
                $this->session->set_flashdata('success', 'anjara ajoutée avec succès');
                redirect(base_url('index.php/vm_controller/anjara'));
            }
        }
    
        // Modifier une anjara
        if ($this->input->post('action') == 'update') {
            $id_update = $this->input->post('id');
            $formArray = array(
                'Montant' => $this->input->post('Montant'),
                'Date_reunion' => $this->input->post('Date_reunion'),
                'Nbr_anjara' => $this->input->post('Nbr_anjara'),
                'ID_membre' => $this->input->post('ID_membre')
            );
            $this->vm_model->update_anjara($id_update, $formArray);
            $this->session->set_flashdata('success', 'engalia modifiée avec succès');
            redirect(base_url('index.php/vm_controller/anjara'));
        }
    
        // Vue
        $this->load->view('anjara_view', $data);
		}

public function pret($action = null, $ID_pret = null){
	
        $this->load->model('vm_model');
        $data = [];
    
        // Supprimer un pret
        if ($action == 'supprimer' && !empty($ID_pret)) {
            $this->vm_model->delete_pret($ID_pret);
            $this->session->set_flashdata('success', 'pret supprimé avec succès');
            redirect(base_url('index.php/vm_controller/pret'));
        }
    
        // Formulaire de modification
        if ($action === 'modifier' && !empty($ID_pret)) {
            $data['pret'] = $this->vm_model->get_pret($ID_pret);
            $data['membre'] = $this->vm_model->pret();
            $this->load->view('modif_pret_view', $data);
            return;
        }
    
        // Lire tous les pret
        $data['membre'] = $this->vm_model->membre();
        $data['pret'] = $this->vm_model->pret();
    
        // Ajouter un pret
        if ($this->input->post('action') == 'add') {
            $this->form_validation->set_rules('Montant', 'Montant', 'required|numeric');
            $this->form_validation->set_rules('Date_pret', 'Date du pret', 'required');
        
    
            if ($this->form_validation->run()) {
                $formArray = array(
                    'Montant' => $this->input->post('Montant'),
                    'Date_pret' => $this->input->post('Date_pret'),
                    'ID_membre' => $this->input->post('ID_membre')
                );
                $this->vm_model->ajout_pret($formArray);
                $this->session->set_flashdata('success', 'pret ajouté avec succès');
                redirect(base_url('index.php/vm_controller/pret'));
            }
        }
    
        // Modifier un pret
        if ($this->input->post('action') == 'update') {
            $id_update = $this->input->post('id');
            $formArray = array(
                'Montant' => $this->input->post('Montant'),
                'Date_pret' => $this->input->post('Date_pret'),
                'ID_membre' => $this->input->post('ID_membre')
            );
            $this->vm_model->update_pret($id_update, $formArray);
            $this->session->set_flashdata('success', 'pret modifié avec succès');
            redirect(base_url('index.php/vm_controller/pret'));
        }
    
        // Vue
        $this->load->view('pret_view', $data);
    	
}
public function profil()
{
	$this->load->view('profil_view');
	
}
public function login()
{
	$this->load->view('login_view');
	
}
public function register()
{
	$this->load->view('register_view');
	
}
public function membre($action = null, $ID_membre = null) {
    $this->load->model('vm_model');
    $data = [];

    // Supprimer un membre
    if ($action == 'supprimer' && !empty($ID_membre)) {
        $this->vm_model->delete_membre($ID_membre);
        $this->session->set_flashdata('success', 'Membre supprimé avec succès');
        redirect(base_url('index.php/vm_controller/membre'));
    }

    // Formulaire de modification
    if ($action === 'modifier' && !empty($ID_membre)) {
        $data['membre'] = $this->vm_model->get_membre_by_id($ID_membre);
        $this->load->view('modif_membre_view', $data);
        return;
    }

    // Lire tous les membres
    $data['membre'] = $this->vm_model->membre();

    // Ajouter un membre
    if ($this->input->post('action') == 'add') {
        $this->form_validation->set_rules('Nom', 'Nom Membre', 'required');
        $this->form_validation->set_rules('Prenom', 'Prenom Membre', 'required');

        if ($this->form_validation->run()) {
            $formArray = array(
                'Nom' => $this->input->post('Nom'),
                'Prenom' => $this->input->post('Prenom')
            );
            $this->vm_model->ajout_membre($formArray);
            $this->session->set_flashdata('success', 'Membre ajouté avec succès');
            redirect(base_url('index.php/vm_controller/membre'));
        }
    }

    // Modifier un membre
    if ($this->input->post('action') == 'update') {
        $id_update = $this->input->post('id');
        $formArray = array(
            'Nom' => $this->input->post('Nom'),
            'Prenom' => $this->input->post('Prenom')
        );
        $this->vm_model->update_membre($id_update, $formArray);
        $this->session->set_flashdata('success', 'Membre modifié avec succès');
        redirect(base_url('index.php/vm_controller/membre'));
    }

    // Vue
    $this->load->view('membre_view', $data);
}

public function cotisation($action = null, $ID_cotisation = null) {
    $this->load->model('vm_model');
    $data = [];

    // Supprimer une cotisation
    if ($action == 'supprimer' && !empty($ID_cotisation)) {
        $this->vm_model->delete_cotisation($ID_cotisation);
        $this->session->set_flashdata('success', 'Cotisation supprimée avec succès');
        redirect(base_url('index.php/vm_controller/cotisation'));
    }

    // Formulaire de modification
    if ($action === 'modifier' && !empty($ID_cotisation)) {
        $data['cotisation'] = $this->vm_model->get_cotisation($ID_cotisation);
        $data['membre'] = $this->vm_model->membre();
        $this->load->view('modif_cotisation_view', $data);
        return;
    }

    // Lire toutes les cotisations
    $data['cotisation'] = $this->vm_model->cotisation();
	$data['membre'] = $this->vm_model->membre(); // ajouter ça

    // Ajouter une cotisation
    if ($this->input->post('action') == 'add') {
        $this->form_validation->set_rules('Montant', 'Montant', 'required|numeric');
        $this->form_validation->set_rules('Date', 'Date', 'required');

        if ($this->form_validation->run()) {
            $formArray = array(
                'Montant' => $this->input->post('Montant'),
                'Date' => $this->input->post('Date'),
                'ID_membre' => $this->input->post('ID_membre')
            );
            $this->vm_model->ajout_cotisation($formArray);
            $this->session->set_flashdata('success', 'Cotisation ajoutée avec succès');
            redirect(base_url('index.php/vm_controller/cotisation'));
        }
    }

    // Modifier une cotisation
    if ($this->input->post('action') == 'update') {
        $id_update = $this->input->post('id');
        $formArray = array(
            'Montant' => $this->input->post('Montant'),
            'Date' => $this->input->post('Date'),
            'ID_membre' => $this->input->post('ID_membre')
        );
        $this->vm_model->update_cotisation($id_update, $formArray);
        $this->session->set_flashdata('success', 'Cotisation modifiée avec succès');
        redirect(base_url('index.php/vm_controller/cotisation'));
    }

    // Vue
    $this->load->view('cotisation_view', $data);
}


}
