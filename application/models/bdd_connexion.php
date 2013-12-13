<?php
class Bdd_connexion extends CI_Model{
	
	public function __construct(){
    	$this->load->database();
	}
	
	public function sessionVisiteur(){
		$data['leVisiteur'] = $this->load-model('bdd_getVisiteur');
	}
}