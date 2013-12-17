<?php
class Bdd_connexion extends CI_Model{
	
	public function __construct(){
    	$this->load->database();
	}
	
	public function sessionVisiteur($login, $mdp){
		//echo'<br/>ici';
		$mdpV = $this->dateFormatMdp($mdp);
		//echo '<br/>fin :'.$mdpV;
		$req ="SELECT * FROM visiteur WHERE vis_nom ='".$login."' AND vis_dateembauche ='".$mdpV."'";
		//echo $req;
		$query = $this->db->query($req);
		foreach($query->result() as $row){
			if($row == null){"mot de passe ou nom incorrect";}
			else{
				$id = $row->vis_matricule;
				$prenom = $row->vis_prenom;
				$nom = $row->vis_nom;
				//echo "Id :".$id." ".$prenom." ".$nom;
				$this->connecter($id,$nom,$prenom);
			}
		}
		
	}
	
	public function dateFormatMdp($mdp){
		//echo $mdp;
		$jour = $mdp[0].$mdp[1];
		$mois = $mdp[3].$mdp[4].$mdp[5];
		$an = $mdp[7].$mdp[8].$mdp[9].$mdp[10];
		$moisFin = 0;
		$moisR="";
		//echo '<br/>jour : '.$jour.' mois :'.$mois.' an : '.$an;
		$lesMois = array('jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aog', 'sep', 'oct', 'nov', 'dec');
		for($i = 0; $i < 12; $i++){if($mois == $lesMois[$i]){$moisFin = $i+1;} /*echo'mois actu'.$lesMois[$i];*/}
		if($moisFin < 10){$moisR = "0".$moisFin;}
		else{$moisR = $moisFin;}
		return $an."-".$moisR."-".$jour;
	}
	
	public function connecter($id,$nom,$prenom){
		$this->load->helper('url');
		$newdata = array(
	                   'id'  => $id,
	                   'nom'     => $nom,
				       'prenom'     => $prenom,
	                   'logged_in' => TRUE
	               );
		$this->session->set_userdata($newdata);
		echo'Vous etes connecté';
		echo ' id : '.$this->session->userdata('id').' nom : '.$this->session->userdata('nom');
		redirect('liste_fiche_c/liste');
	}
	
	public function deconnecter(){
		$newdata = array(
				'id'  => "",
				'nom'     => "",
				'prenom'     => "");
			
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		redirect('c_connexion', 'refresh');
	}
}