<?php
if (!defined('BASEPATH')){
	exit('No direct script access allowed');
}

class Bdd_get extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	//retourne un visiteur correspondant a l'id choisi
	function getVisiteur(){
		$query = $this->db->get_where($this->table, array('vis_matricule' => $id));
		echo $query->row();
		return $query;
	}
	
	
	function getListeRapport(){
		
	}
}
