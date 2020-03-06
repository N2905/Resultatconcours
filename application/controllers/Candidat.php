<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidat extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('candidat_model', 'm');
	}

  function index(){
  	$data['data'] = $this->m->getCandidat();
  	load_views();
  	$this->load-> view('candidat/liste_candidat',$data);
    load_views(true);
  }

  public function listeCandidat($idparcours = null){
    if ( $idparcours !== NULL) {
      $data['data'] = $this->m->listeCandidat($idparcours);
    }else{
       $data['data'] = $this->m->getCandidat();
    }

    load_views();
    $this->load-> view('candidat/liste_candidat',$data);
    load_views(true);
  }

  public function recherche(){
    $key=$this->input->post('motcher');
    $data['data']=$this->m->recherche($key);
    load_views();
    $this->load->view('candidat/liste_candidat', $data);
    load_views(true);
  }
  public function ajout(){
    $data['centrejoint']= $this->m->centrejoint();
    $data['parcoursjoint']=$this->m->parcoursjoint();
    load_views();
    $this->load-> view('candidat/candidatform',$data);
    load_views(true);
  }
  public function save(){
    $result = $this->m->save();
    redirect('/Candidat/index');
  }
  public function editer($cand_id){
    $data['data']= $this->m->getCandById($cand_id);
    load_views();
    $this->load->view('candidat/formediter',$data);
    load_views(true);
  }
  public function modifier(){
    $resultat= $this->m->modifier();
    redirect('Candidat/index');
  }

  public function delete($cand_id){
    $result= $this->m->delete($cand_id);
    redirect('Candidat/index');

  }

}


