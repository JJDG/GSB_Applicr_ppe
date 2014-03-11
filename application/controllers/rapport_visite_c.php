<?php
if ( !defined('BASEPATH')) exit ('No direct script access allowed');

include(APPPATH . "core/MY_ADMIN_Controller.php");
class Rapport_visite_c extends MY_ADMIN_Controller{
	public function affichage_r(){
		
	}
	
	public function creation(){
		$this->load->model('rapport_visite');
		if(isset($_POST['num_rapport']) && isset($_POST['practicien']) && isset($_POST['date_rapport'])){
			$this->rapport_visite->addRapport($_POST['num_rapport'], $_POST['practicien'], $_POST['date_rapport'], $_POST['motif_rapport'], $_POST['bilan_rapport'], $_POST['']);
		}
		else{
			$data['content'] = 'formRapport_v';
			$data['menu'] ='menuV';
			$this->generer_affichage($data);
		}
		
	}
}