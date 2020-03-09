<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Resultat extends CI_Controller{
  function __construct(){
    parent:: __construct();
    $this->load->model('candidat_model', '_mcand');//model candidat
    $this->load->model('resultat_model', '_mresultat');//model resultat
    $this->load->model('centre_model', '_mcentre');//model centre
    $this->load->model('parcours_model', '_mparcours');//model parcours
  }

  public function resultat($id, $type_resultat = 'admis'){
    $data['resultats']      = $this->_mresultat;
    $data['type_resultat']  = $type_resultat;
    $data['centres']        = $this->_mcentre;
    $data['parcours']       = $this->_mparcours;
    $data['candidats']      = $this->_mcand;
    $data['idparcours']     = $id;
    load_views();
    $this->load->view('resultat/resultats',$data);
    load_views(true);
  }

}
