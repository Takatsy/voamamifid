<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vm_controller extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('vm_model');
        $this->load->library('form_validation');
    }

public function index(){

	$this->load->view('accueil_view.php');
}


public function engalia()
{
	$this->load->view('engalia_view');
	
}
public function pret()
{
	$this->load->view('pret_view');
	
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

	

	public function anjara(){
		// if(!$this->session->userdata("email")){
		// 	return redirect( base_url('index.php/emploie/login/') );
		// }else{
			$this->load->model('vm_model');
			$this->form_validation->set_rules('Montant','Montant','required');
		
			
			if ($this->form_validation->run() == false) {
				$this->load->view('acceuil.php');
			} else {
				$formArray = array();
				$formArray['Montant']=$this->input->post('Montant');
				$this->vm_model->ajout_anjara($formArray);
				$this->session->set_flashdata('success', 'Ajout avec succes');
				redirect(base_url().'index.php/vm_controller/index');
			}
		}
	public function mission(){
		// if(!$this->session->userdata("email")){
		// 	return redirect( base_url('index.php/emploie/login/') );
		// }else{

			$this->form_validation->set_rules('Nbrjours','Nbrjours','required');
		
			
			if ($this->form_validation->run() == false) {
				$this->load->view('acceuil.php');
			} else {
				$formArray = array();
				$formArray['Nbrjours']=$this->input->post('Nbrjours');
				$this->vm_model->ajout_mission($formArray);
				$this->session->set_flashdata('success', 'Ajout avec succes');
				redirect(base_url().'index.php/vm_controller/index');
			}
		}
		public function reunion(){
			// if(!$this->session->userdata("email")){
			// 	return redirect( base_url('index.php/emploie/login/') );
			// }else{
	
				$this->form_validation->set_rules('ID_membre','Membre','required');
				$this->form_validation->set_rules('ID_anjara','anjara','required');
				$this->form_validation->set_rules('Nbranjara','Nombre anjara','required');
				$this->form_validation->set_rules('Date_reunion','date reunion','required');
			
				
				if ($this->form_validation->run() == false) {
					$this->load->view('acceuil.php');
				} else {
					$formArray = array();
					$formArray['ID_membre']=$this->input->post('ID_membre');
					$formArray['ID_anjara']=$this->input->post('ID_anjara');
					$formArray['Nbranjara']=$this->input->post('Nbranjara');
					$formArray['Date_reunion']=$this->input->post('Date_reunion');
					$this->vm_model->ajout_reunion($formArray);
					$this->session->set_flashdata('success', 'Ajout avec succes');
					redirect(base_url().'index.php/vm_controller/index');
				}
			}
	
}
