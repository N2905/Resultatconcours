<?php
/**
*
*/
class User extends CI_Controller
{

	public function index(){
		echo "index";
	}

	public function login(){
		if($this->session->login == 'true'){
			redirect('/');
		}
		//echo "login";
		$this->load->view('menu_import/head');
		$this->load->view('user/login');
	}

	public function login_post(){
		$username = $this->input->post('username');
    $password = $this->input->post('password');

		$this->load->model('user_model', 'auth');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
            {
            	$this->login();
            }
            else
            {
            	$response_val = $this->auth->login_user($username, $password);
            	if($response_val == true){
                $val = $this->auth->get_user_info($username);
            		#$nom = $this->auth->get_user_info($username);
            		$this->session->set_userdata($val[0]);
                $this->session->set_userdata('login', 'true');
            		#$this->session->set_userdata('nom', $nom[0]);
            		redirect('/');

            	}elseif($response_val == false){
            		$this->session->set_flashdata('login_info', 'Mot de passe ou login incorrect');
            		//echo "failure message";
            		$this->login();
            	}
            }
	}

	public function register(){
		if($this->session->login == 'true'){
			redirect('/');
		}

		//echo "register";
		$this->load->model('user_model', 'auth');
		$this->load->view('menu_import/head');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passwordagain', 'Password Confirmation', 'required|matches[password]');

    if ($this->form_validation->run() == FALSE)
    {
            $this->load->view('user/login');
    }
    else
    {
            $this->load->view('user/register-update');
    }
		//$this->load->view('user/register');
		$this->load->view('user/footer');
	}

	public function register_post(){
		echo "register post";
		echo $this->input->post('username');
		echo $this->input->post('email');
		echo $this->input->post('password');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
?>
