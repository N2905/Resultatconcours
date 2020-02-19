<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Epreuve extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('epreuve_model', 'm');
	}

  function index(){
    $data['data']=$this-> m->getEpreuve();
    $this->load->view('menu_import/head');
    $this->load->view('menu_import/header');
    $this->load->view('menu_import/menu-gauche');
    $this->load->view('menu_import/menu-centre');
 	  $this->load-> view('epreuve/liste_epreuve',$data);
 	  $this->load->view('menu_import/footer');
 }
 public function ajout(){
 	  $this->load->view('menu_import/head');
    $this->load->view('menu_import/header');
    $this->load->view('menu_import/menu-gauche');
    $this->load->view('menu_import/menu-centre');
 	  $this->load->view('epreuve/epreuveform');
    $this->load->view('menu_import/footer');
 }
 public function save(){
 	$result=$this-> m->save();
 	redirect('/Epreuve/index');
 }
 public function editer($epre_id){
 	$data['data']=$this->m->getEpreById($epre_id);
 	$this->load->view('menu_import/head');
  $this->load->view('menu_import/header');
  $this->load->view('menu_import/menu-gauche');
  $this->load->view('menu_import/menu-centre');
 	$this->load->view('epreuve/formediter',$data);
  $this->load->view('menu_import/footer');
 }
 public function modifier(){
 	$resultat=$this->m->modifier();
 	redirect('Epreuve/index');
 }
 public function delete($epre_id){
 	$result=$this->m->delete($epre_id);
 	redirect('Epreuve/index');

 }
 }
	

