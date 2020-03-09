<?php
defined('BASEPATH') or exit('No direct script access allowed');

class modal_model extends CI_Model{ 

	public function getParcours(){
		 
		return $this->db->get('parcours')->result(); 
	}

}

