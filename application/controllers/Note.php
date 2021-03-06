<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Note extends CI_Controller{
	function __construct(){
		parent:: __construct();
    $this->load->model('candidat_model', '_mcand');//model candidat
    $this->load->model('note_model', '_mnote');//model note
    $this->load->model('centre_model', '_mcentre');//model centre
    $this->load->model('parcours_model', '_mparcours');//model parcours
  }

  public function saisie($parc_id, $anne = null){
    if (is_null($anne)) {
      $anne = Date('Y');
    }
    $data['candidats']  = $this->_mcand;
    $data['notes']      = $this->_mnote->getNotesEtudiants(null, $parc_id, $anne);
    $data['parcours']   = $this->_mparcours->getParcById($parc_id);
    load_views();
    $this->load->view('note/saisie',$data);
    load_views(true);
  }

  public function modifier($cand_id){
    foreach ( $this->_mcand->getMatiereInParcours(null, $cand_id) as $index => $note)
      $this->_mnote->modifier($index);

    echo round($this->_mnote->getMoyenne($cand_id)->moyenne, 2);
  }

  public function liste(){
    $data['notes']      = $this->_mnote;
    $data['centres']    = $this->_mcentre;
    $data['parcours']   = $this->_mparcours;
    $data['candidats']  = $this->_mcand;
    load_views();
    $this->load->view('note/listenote',$data);
    load_views(true);
  }

}
