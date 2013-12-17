<?php
echo"<h3>Connexion</h3>";
echo'<div>';
$this->load->helper('form');
echo validation_errors();
echo form_open("connexion_c/valider");
?>
<p>Login :</p>
<?php echo form_input("login");?>
<p>Mot de passe :</p>
<?php echo form_password("mdp");
	echo form_submit("connect", "Connexion");
	echo form_close('</div>');
?>

