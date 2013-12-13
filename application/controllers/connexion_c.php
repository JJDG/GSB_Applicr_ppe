<?php
if ( !defined('BASEPATH')) exit ('No direct script access allowed');

class Connexion_c extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	
	public function index(){
		$this->load->view('formConnexion_v');
	}
	
	public function deconnexion(){
		
	}
	
	public function valider(){
		$this->form_validation->set_rules('identifiant', 'Nom', 'required');
		$this->form_validation->set_rules('password', 'Mot de passe', 'required');
		
		if ($this->form_validation->run() == TRUE){
			
		}
		
		else{
			$this->load->view('formConnexion_v');
		}
	}
}