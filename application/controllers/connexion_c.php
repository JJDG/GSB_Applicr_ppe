<?php
if ( !defined('BASEPATH')) exit ('No direct script access allowed');

class Connexion_c extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	
	public function index(){
		$this->load->view('formConnexion_v');
	}
	
	public function deconnexion(){
		
	}
	
	public function valider(){
		
	}
}