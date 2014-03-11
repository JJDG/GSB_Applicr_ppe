<?php
if ( !defined('BASEPATH')) exit ('No direct script access allowed');

class Connexion_c extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	
	public function index(){// pour tester connexion login : Villechalane, mdp : 11-dec-1992
		//echo ' ida : '.$this->session->userdata('id').' nom : '.$this->session->userdata('nom');
		$this->load->view('formConnexion_v');
	}
	
	public function deconnexion(){
		$this->load->model('bdd_connexion');
		$this->bdd_connexion->deconnecter();
	}
	
	public function valider(){
		$this->load->database();
		$this->load->model('bdd_connexion');
		$this->form_validation->set_rules('login', 'Nom', 'required');
		$this->form_validation->set_rules('mdp', 'Mot de passe', 'required');
		
		if ($this->form_validation->run() == TRUE){
			$login = $this->input->post('login');
			$mdp = $this->input->post('mdp');
			$this->bdd_connexion->sessionVisiteur($login, $mdp);
		}
		
		else{
			$this->load->view('formConnexion_v');
		}
	}
}