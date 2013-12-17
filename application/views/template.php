<?php $this->load->view('enteteV');
if($menu != null){
	$this->load->view($menu);
}

if($content != null){
echo'<div id="content">';

$this->load->view($content);

echo'</div>';
}
$this->load->view('piedV');
?>