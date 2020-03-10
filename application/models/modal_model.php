<?php
defined('BASEPATH') or exit('No direct script access allowed');

class modal_model extends CI_Model{
  public function __construct(){
    parent::__construct();
    $this->load->model('candidat_model', 'm');
  }

	public function getParcours(){

		return $this->db->get('parcours')->result();
	}

  public function getAnne(){
    return $this->m->getAnneAccademique();
  }
}

