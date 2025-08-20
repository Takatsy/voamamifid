<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vm_controller extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('vm_model');
        $this->load->library(['form_validation', 'session']);
        $this->load->helper(['url', 'form']);

        // if (!$this->session->userdata('logged_in')) {
        //     redirect('vm_controller/login');
        // }
        
    }

    public function index() {
        $this->load->view('login_view');
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
            $this->session->set_flashdata('delete_success', 'Suppression réussie !');
            redirect(base_url('index.php/vm_controller/pret'));
        }
    
        // Formulaire de modification
        if ($action === 'modifier' && !empty($ID_pret)) {
            $data['pret'] = $this->vm_model->get_pret($ID_pret);
            $data['membre'] = $this->vm_model->pret();
            $this->load->view('modif_pret_view', $data);
            return;
        }

         // Formulaire de remboursement
         if ($action === 'rembourser' && !empty($ID_pret)) {
            $data['pret'] = $this->vm_model->get_pret($ID_pret);
            $data['membre'] = $this->vm_model->pret();

            //Obtenir le montant à rembourser
        $data['montantrembourser'] = $this->vm_model->get_montant_a_rembourser($ID_pret); // Ajoute cette fonction si elle n’existe pas
        
        
            $this->load->view('remboursement_view', $data);
            return;
        }

        // Formulaire de historique
    if ($action === 'historique' && !empty($ID_pret)) {

        // Obtenir les infos du remboursement
        $data['pret'] = $this->vm_model->get_pret($ID_pret);

        // Obtenir le prêt lié
        //$ID_pret = $data['remboursement']->ID_pret;
        $data['membre'] = $this->vm_model->pret(); // Facultatif si tu veux les infos membre

        //Obtenir le montant à rembourser
        $data['montantrembourser'] = $this->vm_model->get_montant_a_rembourser($ID_pret); // Ajoute cette fonction si elle n’existe pas

        $data['reste'] = $this->vm_model->get_reste_a_payer($ID_pret); // Ajoute cette fonction si elle n’existe pas

        $this->load->view('historique_pret_view', $data);
        return;
    }
    
        // Lire tous les pret
        $data['membre'] = $this->vm_model->membre();
        $data['pret'] = $this->vm_model->pret();
        $data['reste'] = $this->vm_model->get_reste_a_payer($ID_pret); // Ajoute cette fonction si elle n’existe pas
        $data['montantrembourser'] = $this->vm_model->get_montant_a_rembourser($ID_pret); // Ajoute cette fonction si elle n’existe pas
        $data['totalrembourser'] = $this->vm_model->get_total_rembourser($ID_pret);
        
        
        // Ajouter un pret
        if ($this->input->post('action') == 'add') {
            $this->form_validation->set_rules('Montant', 'Montant', 'required|numeric');
            $this->form_validation->set_rules('Date_pret', 'Date du prêt', 'required');
    
            if ($this->form_validation->run()) {
                $montant_saisi = $this->input->post('Montant');
    
                // Récupération du solde actuel
                $total_part = $this->vm_model->total_part();
                $total_cotisation = $this->vm_model->total_cotisation();
                $total_sazy = $this->vm_model->total_sazy();
                $total_interet = $this->vm_model->total_interet();
                $total_pret = $this->vm_model->total_pret();
    
                $solde_actuel = ($total_part + $total_cotisation + $total_sazy + $total_interet) - $total_pret;
    
                // Vérification si le prêt dépasse le solde
                if ($montant_saisi > $solde_actuel) {
                    $this->session->set_flashdata('error', 'Le montant demandé dépasse le solde actuel disponible.');
                    redirect(base_url('index.php/vm_controller/pret'));
                } else {
                    // Enregistrement du prêt
                    $formArray = array(
                        'Montant' => $montant_saisi,
                        'Date_pret' => $this->input->post('Date_pret'),
                        'ID_membre' => $this->input->post('ID_membre')
                    );
                    $this->vm_model->ajout_pret($formArray);
    
                    $this->session->set_flashdata('add_success', 'Prêt ajouté avec succès !');
                    redirect(base_url('index.php/vm_controller/pret'));
                }
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
            $this->session->set_flashdata('update_success', 'Modification effectuée avec succès !');
            redirect(base_url('index.php/vm_controller/pret'));
        }
    
        // Vue
        $this->load->view('pret_view', $data);
    	
}
public function remboursement($action = null, $ID_remboursement = null){
	
    $this->load->model('vm_model');
    $data = [];

    // Supprimer un remboursement
    if ($action == 'supprimer' && !empty($ID_remboursement)) {
        $this->vm_model->delete_remboursement($ID_remboursement);
        $this->session->set_flashdata('success', 'remboursement supprimé avec succès');
        redirect(base_url('index.php/vm_controller/remboursement'));
    }

    // Formulaire de modification
    if ($action === 'modifier' && !empty($ID_remboursement)) {
        $data['remboursement'] = $this->vm_model->get_remboursement($ID_remboursement);
        $data['membre'] = $this->vm_model->pret();

        $this->load->view('modif_remboursement_view', $data);
        return;
    }

    // Formulaire de historique
    if ($action === 'historique' && !empty($ID_remboursement)) {

        // Obtenir les infos du remboursement
        $data['remboursement'] = $this->vm_model->get_remboursement($ID_remboursement);

        // Obtenir le prêt lié
        $ID_pret = $data['remboursement']->ID_pret;
        $data['membre'] = $this->vm_model->pret(); // Facultatif si tu veux les infos membre

        // Obtenir le reste à payer
        $data['reste'] = $this->vm_model->get_reste_a_payer($ID_pret); // Ajoute cette fonction si elle n’existe pas

        $this->load->view('historique_remboursement_view', $data);
        return;
    }
    

    // Lire tous les remboursement
    $data['membre'] = $this->vm_model->membre();
    $data['pret'] = $this->vm_model->pret();
    $data['remboursement'] = $this->vm_model->remboursement();

        // Ajouter ou mettre à jour un remboursement
        // Ajouter un remboursement automatiquement
        if ($this->input->post('action') == 'add') {

            $ID_pret = $this->input->post('ID_pret');
            $pret = $this->vm_model->get_pret_by_id($ID_pret); // Récupérer le prêt
        
            if ($pret) {
                // Calcul du montant remboursement (prêt + 10%)
                $montant_remboursement = $pret->Montant + ($pret->Montant * 0.10);
        
                // Préparation données remboursement
                $formArray = array(
                    'Montant' => $montant_remboursement,
                    'Date_remboursement' => date('Y-m-d'),
                    'ID_pret' => $ID_pret
                );
        
                // Enregistrement remboursement
                $this->vm_model->enregistrer_ou_modifier_remboursement($formArray);
        
                // Préparation données intérêt (10% du prêt)
                $interetData = array(
                    'ID_pret' => $ID_pret,
                    'Montant' => $pret->Montant * 0.10,
                    'Date_creation' => date('Y-m-d')
                );
        
                // Enregistrement intérêt dans la table interet
                $this->vm_model->ajouter_interet($interetData);
        
                $this->session->set_flashdata('success', 'Remboursement et intérêt ajoutés automatiquement avec succès');
                redirect(base_url('index.php/vm_controller/remboursement'));
            } else {
                $this->session->set_flashdata('error', 'Prêt introuvable');
                redirect(base_url('index.php/vm_controller/remboursement'));
            }
        }

    // Modifier un remboursement
    if ($this->input->post('action') == 'update') {
        $id_update = $this->input->post('id');
        $formArray = array(
            'Montant' => $this->input->post('Montant'),
            'Date_remboursement' => $this->input->post('Date_remboursement'),
            'ID_pret' => $this->input->post('ID_pret')
        );
        $this->vm_model->update_remboursement($id_update, $formArray);
        $this->session->set_flashdata('success', 'remboursement modifié avec succès');
        redirect(base_url('index.php/vm_controller/remboursement'));
    }

    // Vue
    $this->load->view('liste_remboursement_view', $data);
    
}


public function profil()
{
	$this->load->view('profil_view');
	
}


public function membre($action = null, $ID_membre = null) {
    $this->load->model('vm_model');
    $data = [];

    
    $data['message'] = null;
    $data['type'] = null;

    // Supprimer un membre
    if($action == 'supprimer' && !empty($ID_membre)) {
        if($this->vm_model->delete_membre($ID_membre)) {
            $data['message'] = 'Membre supprimé avec succès';
            $data['type'] = 'success';
        } else {
            $data['message'] = 'Impossible de supprimer le membre';
            $data['type'] = 'error';
        }
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

//////Register/////

public function register()
{
    $this->load->library('form_validation');
    $this->load->helper(['form', 'url']);

    $this->form_validation->set_rules('name', 'Nom', 'required|is_unique[users.nom]');
    $this->form_validation->set_rules('prenom', 'Prénom', 'required|is_unique[users.prenom]');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Mot de passe', 'required|min_length[8]');

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('register_view'); // ⚠️ mets bien le nom de ton fichier
    } else {
        $data = [
            'nom' => $this->input->post('name'),
            'prenom' => $this->input->post('prenom'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        ];

        $this->vm_model->insert_user($data);

        $this->session->set_flashdata('success', 'Compte créé avec succès. Vous pouvez maintenant vous connecter.');
        redirect('vm_controller/login');
    }
}


public function login() {
    $this->form_validation->set_rules('email', 'Nom utilisateur', 'required');
    $this->form_validation->set_rules('password', 'Mot de passe', 'required');

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('login_view'); // ta vue login stylée
    } else {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->vm_model->get_user($email);

        // // 👉 TEST DEBUG
        // if (!$user) {
        //     echo "Utilisateur non trouvé : " . $username;
        //     exit;
        // }

        // // 👉 TEST DEBUG DU MOT DE PASSE HASHÉ
        // echo "Mot de passe saisi : $password<br>";
        // echo "Mot de passe stocké : " . $user->password . "<br>";

        if ($user) {
            if (password_verify($password, $user->password)) {
                // Connexion réussie
                $this->session->set_userdata([
                    'user_id' => $user->id,
                    'nom' => $user->nom,
                    'prenom' => $user->prenom,
                    'email' => $user->email,
                    'logged_in' => true
                ]);
    
                $this->session->set_flashdata('success', 'Connexion réussie');
                redirect('vm_controller/dashboard'); // remplace par ta page d'accueil
            } else {
                $this->session->set_flashdata('error', 'Mot de passe incorrect');
                redirect('vm_controller/login');
            }
        } else {
            // Mauvais identifiants
                $this->session->set_flashdata('error', 'Identifiant ou mot de passe incorrect.');
                redirect('vm_controller/login');

        }
}
}
public function dashboard() {

    if (!$this->session->userdata('logged_in')) {
        redirect('vm_controller/login');
    }
    $username = $this->session->userdata('prenom');
    $this->load->model('vm_model');

    $data['total_membre'] = $this->vm_model->total_membre();
    $data['total_part'] = $this->vm_model->total_part();
    $data['total_sazy'] = $this->vm_model->total_sazy();
    $data['total_pret'] = $this->vm_model->total_pret();
    $data['total_interet'] = $this->vm_model->total_interet();
    $data['total_cotisation'] = $this->vm_model->total_cotisation();

    $data['solde_total'] = $data['total_part'] + $data['total_cotisation'] + $data['total_sazy'] + $data['total_interet'] - $data['total_pret'];

    $solde_total = $this->vm_model->total_part()
        + $this->vm_model->total_cotisation()
        + $this->vm_model->total_sazy()
        + $this->vm_model->total_interet()
        - $this->vm_model->total_pret();

    // Nombre total de membres
    $nombre_membres = $this->vm_model->total_membre();

    // Calculs
    $montant_annuel_membre = ($nombre_membres > 0) ? ($solde_total / $nombre_membres) : 0;

    $data['montant_annuel_membre'] = $montant_annuel_membre;

    $this->load->view('accueil_view', $data);
}

public function logout() {
    $this->session->sess_destroy();
    redirect('vm_controller/login');
}



}
