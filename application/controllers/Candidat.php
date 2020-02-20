<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidat extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('candidat_model', 'm');
	}

  function index(){
  	$data['data'] = $this-> m->getCandidat();
  	$this->load->view('menu_import/head');
  	$this->load->view('menu_import/header');
  	$this->load->view('menu_import/menu-gauche');
  	$this->load->view('menu_import/menu-centre');
  	$this->load-> view('candidat/liste_candidat',$data);
 	  $this->load->view('menu_import/footer');
 }
 public function ajout(){
  $data['centrejoint']= $this->m->centrejoint();
  $data['parcoursjoint']=$this->m->parcoursjoint();
 	$this->load->view('menu_import/head');
  $this->load->view('menu_import/header');
  $this->load->view('menu_import/menu-gauche');
  $this->load->view('menu_import/menu-centre');
 	$this->load-> view('candidat/candidatform',$data);
 	$this->load->view('menu_import/footer');
 }
 public function save(){
 	$result = $this-> m->save();
 	redirect('/Candidat/index');
 }
 public function editer($cand_id){
 	$data['data']= $this->m->getCandById($cand_id);
 	$this->load->view('menu_import/head');
  $this->load->view('menu_import/header');
  $this->load->view('menu_import/menu-gauche');
  $this->load->view('menu_import/menu-centre');
 	$this->load->view('candidat/formediter',$data);
 	$this->load->view('menu_import/footer');
 }
 public function modifier(){
 	$resultat= $this->m->modifier();
 	redirect('Candidat/index');
 }

 public function delete($cand_id){
 	$result= $this->m->delete($cand_id);
 	redirect('Candidat/index');

 }
 public function listeCandidat(){  

    $data['datalistes']= $this->m->listeCandidat(); 
    $this->load->view('menu_import/head');
    $this->load->view('menu_import/header');
    $this->load->view('menu_import/menu-gauche');
    $this->load->view('menu_import/menu-centre');
    $this->load->view('liste/listecandidat', array('datalistes'=>$this->m->listeCandidat(),'teste'=>'tets'));
    $this->load->view('menu_import/footer');
  }

 }
	

