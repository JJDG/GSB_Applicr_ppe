<?php
if ( !defined('BASEPATH')) exit ('No direct script access allowed');

class Liste_fiche_c extends MY_Controller{
	
	//affiche une liste de fiche du visiteur concern� a la date pr�cis�
	public function liste(){
		$data['content'] = 'affiche_listeFiches_view';
		$data['listeFiches'] = $this->bdd_get->getListeRapport ();
		$this->generer_affichage($data);
		
	}
	
}