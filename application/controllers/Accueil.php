<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index()
	{

    if($this->session->login != 'true'){
      redirect('login');
    }

		$this->load->view('menu_import/head');
		$this->load->view('menu_import/header');
		$this->load->view('menu_import/menu-gauche');
		$this->load->view('menu_import/menu-centre');
		$this->load->view('accueil');
		$this->load->view('menu_import/footer');
	}
}
