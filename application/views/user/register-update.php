<?php
	$username = $this->input->post('username');
	$email =  $this->input->post('email');
  $password = $this->input->post('password');
  $name = $this->input->post('name');
	$lastname = $this->input->post('lastname');

	$this->auth->insert_user($username, $email, $password, $name, $lastname);
	$this->session->set_flashdata('register_info', 'Vous êtes bien enregistrer');
	redirect('login');
?>
