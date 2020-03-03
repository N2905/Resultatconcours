<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {
  function __construct(){
    parent:: __construct();
    $this->load->model('candidat_model', 'm');
  }

  public function pdfCandidatListe()
  {
    $this->load->view('pdf/pdf', array("candidats" => $this->m->getCandidat() ));
  }
}
