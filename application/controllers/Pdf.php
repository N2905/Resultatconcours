<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {

  public function index()
  {
    $this->load->view('pdf/pdf');
  }
}
