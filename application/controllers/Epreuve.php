<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Epreuve extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('epreuve_model', 'm');
	}

  function index(){
    $data['data']=$this-> m->getEpreuve();
    load_views();
    $this->load-> view('epreuve/liste_epreuve',$data);
    load_views(true);
  }
  public function recherche(){
    $key=$this->input->post('motcherepre');
    $data['data']=$this->m->recherche($key);
    load_views();
    $this->load->view('epreuve/liste_epreuve', $data);
    load_views(true);
  }
  public function ajout(){
    $data['parcoursjoin']= $this->m->parcoursjoins();
    load_views();
    $this->load->view('epreuve/epreuveform',$data);
    load_views(true);
  }
  public function save(){
    $result=$this-> m->save();
    redirect('/Epreuve/index');
  }
  public function editer($epre_id){
    $data['parcoursjoin']= $this->m->parcoursjoins();
    $data['data']=$this->m->getEpreById($epre_id);
    load_views();
    $this->load->view('epreuve/formediter',$data);
    load_views(true);
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


