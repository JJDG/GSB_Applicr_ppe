<?php
if ( !defined('BASEPATH')) exit ('No direct script access allowed');

include (APPPATH."core/MY_ADMIN_Controller.php");
class Liste_fiche_c extends MY_ADMIN_Controller{
	
	//affiche une liste de fiche du visiteur concerné a la date précisé
	public function liste(){
		$data['content'] = 'listeFiches_v';
		$data['menu'] ='menuV';
		$data['listeFiches'] = $this->bdd_get->getListeRapport();
		$this->generer_affichage($data);
		
	}
	
}