    <!-- Division pour le menu-->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
     
		</h2>
      </div>
      <?php 
	  echo "Connect� en tant que :";
	  echo $this->session->userdata('nom')." ".$this->session->userdata('prenom').br(1);
	  echo anchor('connexion_c/deconnexion', 'D�connexion');
      $list = array(
      		anchor('rapport_visite_c/creation', 'Nouveaux'),
      		anchor('liste_fiche_c/liste', 'Consulter'),
      		anchor('medicament_c', 'M�dicaments'),
      		anchor('praticien_c', 'Practiciens'),
      		anchor('visiteur_c', 'Autres visiteurs')
      );
      
      $attributes = array(
      		'id'    => 'menuList'
      );
      
      echo ul($list, $attributes);
	  ?>
    </div>