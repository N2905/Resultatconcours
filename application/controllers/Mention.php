<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class Mention extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('mention_model','m');
	}
	public function index(){
	    $data['data']=$this->m->getMention();
	    $this->load->view('menu_import/head');
	    $this->load->view('menu_import/header');
	    $this->load->view('menu_import/menu-gauche');
	    $this->load->view('menu_import/menu-centre');
		$this->load->view('mention/liste_mention',$data);
		$this->load->view('menu_import/footer');
	}
	 public function ajout(){
		$this->load->view('menu_import/head');
  		$this->load->view('menu_import/header');
  		$this->load->view('menu_import/menu-gauche');
  		$this->load->view('menu_import/menu-centre');
 		$this->load->view('mention/mentionform');
 		$this->load->view('menu_import/footer');
    }
   public function save(){
 	$result=$this->m->save();
 	redirect('/Mention/index');
   }
   public function editer($ment_id){
 	$data['data']=$this->m->getMentById($ment_id);
 		$this->load->view('menu_import/head');
  		$this->load->view('menu_import/header');
  		$this->load->view('menu_import/menu-gauche');
  		$this->load->view('menu_import/menu-centre');
 		$this->load->view('mention/formediter',$data);
 	$this->load->view('menu_import/footer');
   }
  public function modifier(){
 	$resultat= $this->m->modifier();
 	redirect('Mention/index');
  }
  public function delete($ment_id){
 	$result= $this->m->delete($ment_id);
 	redirect('Mention/index');

 }
}