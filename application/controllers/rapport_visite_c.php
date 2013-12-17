<?php
if ( !defined('BASEPATH')) exit ('No direct script access allowed');

include(APPPATH . "core/MY_ADMIN_Controller.php");
class Rapport_visite_c extends MY_ADMIN_Controller{
	public function affichage_r(){
		
	}
	
	public function creation(){
		$data['content'] = 'formRapport_v';
		$data['menu'] ='menuV';
		$this->generer_affichage($data);
	}
}