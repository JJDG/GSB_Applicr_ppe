<?php
if (!defined('BASEPATH')){
	exit('No direct script access allowed');
}

class MY_ADMIN_controller extends MY_controller{ 

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		//$this->load->model('bdd_connexion');
		$this->load->library('session');

		if($this->session->userdata('id') != null){
			echo'Vous etes connecté';
			echo ' ida : '.$this->session->userdata('id').' nom : '.$this->session->userdata('nom');
		}
		
		else{
				redirect("connexion_c/index");
		}
				
		// TRUE permet de passer les variables au filtre XSS
		/*if ($this->input->post('login', TRUE) && $this->input->post('mdp', TRUE)){
				
			$id = $this->input->post('login');
			$pass = $this->input->post('mdp');
			if($this->user_model->validate($id, $pass)){
				//Tout est ok, on enregistre l'identifiant dans les variable de session et on poursuit
				$this->session->set_userdata('visiteur', $id);
			}
			else{
				//Mauvais identifiant et pas de session déjà enregistrée, on redirige vers la page de connexion (par le controleur Connexion_c)
				if(!$this->session->userdata('visiteur')){
					redirect("connexion_c/index");
				}
			}
		}
		else{
			if(!$this->session->userdata('visiteur')){
				redirect("connexion_c/index");
			}
		}*/
		
	}
}