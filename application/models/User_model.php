<?php
/**
*
*/
class User_model extends CI_Model
{

	public function insert_user($username, $email, $password, $name, $lastname){
		$query = $this->db->query("INSERT INTO users (username, email, password, nom, prenom) VALUES ('$username', '$email', md5('$password'),'$name','$lastname')");
	}

	public function login_user($username, $password){
		$query =$this->db->query("SELECT * FROM users WHERE username='$username' AND password=md5('$password')");
		if($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

	public function get_user_info($username){
		$query =$this->db->query("SELECT id,username,email,nom,prenom FROM users WHERE username='$username'");
		if($query->num_rows() == 1){
			$userinfo = $query->result_array();
			return $userinfo;
		}

	}
}
?>
