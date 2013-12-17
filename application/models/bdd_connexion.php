<?php
class Bdd_connexion extends CI_Model{
	
	public function __construct(){
    	$this->load->database();
	}
	
	public function sessionVisiteur($login, $mdp){
		echo'<br/>ici';
		$mdpV = $this->dateFormatMdp($mdp);
		/*$req ="SELECT * FROM visiteur WHERE visnom =".$login." AND visdateembauche =".$mdpV;
		
		$query = $this->db->query($req);
		foreach($query->result() as $row){
		}
		
		return $row;*/
	}
	
	public function dateFormatMdp($mdp){
		echo $mdp;
		$jour = $mdp[0].$mdp[1];
		$mois = $mdp[3].$mdp[4].$mdp[5];
		$an = $mdp[7].$mdp[8].$mdp[9].$mdp[10];
		echo 'jour : '.$jour.' moi :'.$mois.' an : '.$an;
		$lesMois = array('jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aog', 'sep', 'octobre', 'novembre', 'decembre');
	}
}