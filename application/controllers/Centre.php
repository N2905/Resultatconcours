<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Centre extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('centre_model','m');
	}
	public function index(){
    $data['data'] = $this->m->getCentre();
    load_views();
    $this->load->view('centre/liste_centre',$data);
    load_views(true);
  }
  public function recherche(){
   $key=$this->input->post('motchercentre');
   $data['data']=$this->m->recherche($key);
   load_views();
   $this->load->view('centre/liste_centre',$data);
   load_views(true);
 }
 public function ajout(){
  load_views();
  $this->load->view('centre/centreform');
  load_views(true);

}
public function save(){
  $result = $this-> m->save();
  redirect('/Centre/index');
}
public function editer($centre_id){
  $data['data']= $this->m->getCentreById($centre_id);
  load_views();

  load_views(true);

  $this->load->view('centre/formeditercentre',$data);
  $this->load->view('menu_import/footer');
}
public function modifier(){
  $resultat= $this->m->modifier();
  redirect('Centre/index');
}
public function delete($centre_id){
  $result= $this->m->delete($centre_id);
  redirect('Centre/index');

}
}
