    <!-- Division pour le menu-->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>
      <?php 
	  echo "Connect� en tant que :";
	  $this->session->userdata('nom')." ".$this->session->userdata('prenom')." ".$this->session->userdata('id');
	  anchor('connexion_c', 'D�connexion');
      $list = array(
      		anchor('rapport_visite_c', 'Nouveaux'),
      		anchor('liste_fiche_c', 'Consulter'),
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