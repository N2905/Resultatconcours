<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Parcours extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('parcours_model', 'm');
	}
	
	public function index(){
		$data['data']=$this->m->getParcours();
		$this->load->view('menu_import/head');
		$this->load->view('menu_import/header');
		$this->load->view('menu_import/menu-gauche');
		$this->load->view('menu_import/menu-centre');
		$this->load->view('parcours/liste_parcours',$data);
		$this->load->view('menu_import/footer');
	}
	public function recherche(){
		$key=$this->input->post('motcherparcours');
  		$data['data']=$this->m->recherche($key);
  		$this->load->view('menu_import/head');
  		$this->load->view('menu_import/header');
  		$this->load->view('menu_import/menu-gauche');
  		$this->load->view('menu_import/menu-centre');
  		$this->load->view('parcours/liste_parcours', $data);
  		$this->load->view('menu_import/footer');
	}
	public function ajout(){
		$data['mentionjoin']=$this->m->mentionjoin();
		$this->load->view('menu_import/head');
		$this->load->view('menu_import/header');
		$this->load->view('menu_import/menu-gauche');
		$this->load->view('menu_import/menu-centre');
		$this->load->view('parcours/parcoursform',$data);
		$this->load->view('menu_import/footer');
	}
	public function save(){
		$result=$this->m->save();
		redirect('Parcours/index');
	}
	public function editer($parc_id){
		$data['data']=$this->m->getParcById($parc_id);
		$this->load->view('menu_import/head');
		$this->load->view('menu_import/header');
		$this->load->view('menu_import/menu-gauche');
		$this->load->view('menu_import/menu-centre');
		$this->load->view('parcours/formediter',$data);
		$this->load->view('menu_import/footer');
	}
	public function modifier(){
	 $resultat=$this->m->modifier();
 	 redirect('Parcours/index');
	}
	public function delete($parc_id){
 	$result=$this->m->delete($parc_id);
 	redirect('Epreuve/index');

 }

}