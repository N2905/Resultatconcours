<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Note extends CI_Controller{
	function __construct(){
		parent:: __construct();
    $this->load->model('candidat_model', '_mcand');#note_model
    $this->load->model('note_model', '_mnote');#
  }

  public function saisie(){
    $data['candidats']  = $this->_mcand;
    $data['notes']      = $this->_mnote;
    $this->load->view('menu_import/head');
    $this->load->view('menu_import/header');
    $this->load->view('menu_import/menu-gauche');
    $this->load->view('menu_import/menu-centre');
    $this->load->view('note/saisie',$data);#
    $this->load->view('menu_import/footer');
  }

  public function modifier($cand_id){
    foreach ( $this->_mcand->getMatiereInParcours(null, $cand_id) as $index => $note)
      $this->_mnote->modifier($index);

    echo round($this->_mnote->getMoyenne($cand_id)->moyenne, 2);
  }


}
