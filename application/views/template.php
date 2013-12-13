<?php $this->load->view('entete');
if($menu != null){
	$this->load->view($menu);
}

if($content != null){
echo'<div id="content">';

$this->load->view($content);

echo'</div>';
}
$this->load->view('pied');
?>