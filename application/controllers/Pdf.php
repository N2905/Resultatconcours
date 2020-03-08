<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {
  function __construct(){
    parent:: __construct();
    $this->load->model('candidat_model', 'm');
    $this->load->model('resultat_model', '_mresultat');//model resultat
    $this->load->model('centre_model', '_mcentre');//model centre
    $this->load->model('parcours_model', '_mparcours');//model parcours
  }

  public function pdfCandidatListe($parc_id = null )
  {
    if (is_null($parc_id)) {
      $data["candidats"]  = $this->m->listeCandidat();
    }else{
      $data["candidats"]  = $this->m->listeCandidat($parc_id);
      $data["parcours"]   = $this->_mparcours->getParcById($parc_id);
    }

    $this->load->view('pdf/pdfListeCandidat', $data);
  }

  public function pdfResultat($id, $anne){
    $data["resultats"]  = $this->_mresultat->listeResultats($id, $anne);
    $data["parcours"]   = $this->_mparcours->getParcById($id);
    $data["anne"]   = $anne;
    $this->load->view('pdf/pdfResultat', $data );
  }
}
