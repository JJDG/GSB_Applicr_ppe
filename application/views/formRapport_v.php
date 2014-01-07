<?php
echo form_open("connexion_c/valider");

echo form_label('Numero Rapport', 'numero_rapport').form_input("num_rapport").br(1);
echo form_label('Practicien', 'practicien');
?>
<select name="practicien">
	<?php //liste des practicien?>
</select>
<?php
echo form_label('Date Rapport', 'date_rapport').form_input("date_rapport").br(1);
echo form_label('Motif Visite', 'motif_rapport').form_input("motif_rapport").br(1);
echo form_label('Bilan', 'bilan_rapport').form_input("bilan_rapport").br(1);
echo form_label('Date Visite', 'date_visite').form_input("date_visite").br(1);
echo form_label('Coeff Confiance', 'coeff_confiance').form_input("coeff_confiance").br(1);
echo form_label('Coeff Confiance', 'coeff_confiance').form_input("coeff_confiance").br(1);
echo form_label('Coeff Confiance', 'coeff_confiance').form_input("coeff_confiance").br(1);
echo form_submit('submit', 'Nouveau').br(1);
echo form_close('');
?>