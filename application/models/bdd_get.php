<?php
if (!defined('BASEPATH')){
	exit('No direct script access allowed');
}

class Bdd_get extends CI_Model{
	
	private $rapport = "rapport_visite";
	private $visiteur = "visiteur";
	
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	//retourne un visiteur correspondant a l'id choisi
	function getVisiteur($id){
		$id = "a131";
		$query = $this->db->get_where($this->visiteur, array('vis_matricule' => $id));
		echo $query->row();
		return $query;
	}
	
	
	function getListeRapport($id){
		$id = "a131";
		$this->db->order_by('rap_date', 'asc');
		$query = $this->db->get_where($this->rapport, array('vis_matricule' => $id));
		return $query->result();
	}
}
