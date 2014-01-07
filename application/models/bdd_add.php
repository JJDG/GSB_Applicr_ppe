<?php

if (!defined('BASEPATH')){
	exit('No direct script access allowed');
}

class Bdd_add extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function addRapport(){
		
	}
}