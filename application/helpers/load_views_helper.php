<?php
if ( ! function_exists('load_views'))
{

  function load_views($footer = false){
    $ci = & get_instance();
    if ($footer) {
      $ci->load->view('menu_import/footer');
    }else{
      $ci->load->view('menu_import/head');
      $ci->load->view('menu_import/header');
      $ci->load->view('menu_import/menu-gauche');
      $ci->load->view('menu_import/menu-centre');
    }
  }

}



