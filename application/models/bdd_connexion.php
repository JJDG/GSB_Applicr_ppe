<?php
class Bdd_connexion extends CI_Model{
	
	public function __construct(){
    	$this->load->database();
	}
	
	public function sessionVisiteur($login, $mdp){
		echo'<br/>ici';
		$mdpV = $this->dateFormatMdp($mdp);
		echo $mdpV;
		$req ="SELECT * FROM visiteur WHERE vis_nom ='".$login."' AND vis_dateembauche =".$mdpV;
		$query = $this->db->query($req);
		foreach($query->result() as $row){
			if($row == null){"mot de passe ou nom incorrect";}
			else{
				$id = $row->id;
				$prenom = $row->prenom;
				$nom = $row->nom;
				$this->connecter($id,$nom,$prenom);
			}
		}
		
		return $row;
	}
	
	public function dateFormatMdp($mdp){
		echo $mdp;
		$jour = $mdp[0].$mdp[1];
		$mois = $mdp[3].$mdp[4].$mdp[5];
		$an = $mdp[7].$mdp[8].$mdp[9].$mdp[10];
		$moisFin = 0;
		$moisR="";
		echo 'jour : '.$jour.' moi :'.$mois.' an : '.$an;
		$lesMois = array('jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aog', 'sep', 'oct', 'nov', 'dec');
		for($i = 0; $i < 12; $i++){if($mois == $lesMois[$i]){$moisFin = $i+1;}}
		if($moisFin < 10){$moisR = "0".$moisFin;}
		return $an."-".$moisR."-".$jour;
	}
	
	public function connecter($id,$nom,$prenom){
		$newdata = array(
	                   'id'  => $id,
	                   'nom'     => $nom,
				       'prenom'     => $prenom,
	                   'logged_in' => TRUE
	               );
	
		$this->session->set_userdata($newdata);
	}
}