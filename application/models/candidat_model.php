<?php
defined('BASEPATH') or exit('No direct script access allowed');

class candidat_model extends CI_Model{
	
	public function getCandidat(){
		$query = $this->db->get('candidat');
		if($query->num_rows() > 0){
			return $query-> result();

	} else{
		return false;
		}
	}
	public function save(){
		$field= array(
			'cand_id'=> $this ->input->post('cand_id'),
			'nom_cand'=> $this ->input->post('nom_cand'),
			'prenom_cand' =>$this ->input->post('prenom_cand'),
			'cand_anne_bac' =>$this ->input->post('cand_anne_bac'),
			'cand_date_naiss' =>$this ->input->post('cand_date_naiss'),
			'cand_lieu_naiss' =>$this ->input->post('cand_lieu_naiss'),
			'cin_cand' =>$this ->input->post('cin_cand'),
			'cand_lieu_cin' =>$this ->input->post('cand_lieu_cin'),
			'cand_num_bac ' =>$this ->input->post('cand_num_bac '),
			'email_cand' =>$this ->input->post('email_cand'),
			'cand_sexe' =>$this ->input->post('cand_sexe'),
			'cand_indication' =>$this ->input->post('cand_indication'),
			'cand_serie' =>$this ->input->post('cand_serie'),
			'tel_cand' =>$this ->input->post('tel_cand'),
			'cand_nationalite' =>$this ->input->post('cand_nationalite'),
			'cand_codepostale' =>$this ->input->post('cand_codepostale'),
			'cand_pays' =>$this ->input->post('cand_pays'),
			'cand_ville' =>$this ->input ->post('cand_ville'));
		$this->db->insert('candidat', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function getCandById($cand_id){
		$this->db->where('cand_id', $cand_id);
		$query= $this->db->get('candidat');
		if($query->num_rows() > 0){
			return $query-> row();
		} else{
			return false;
		}
	}
	public function modifier(){
		$cand_id = $this->input->post('txt_hidden');
		$field = array(
			'nom_cand'=> $this ->input->post('nom_cand'),
			'prenom_cand' =>$this ->input->post('prenom_cand'),
			'cand_anne_bac' =>$this ->input->post('cand_anne_bac'),
			'cand_date_naiss' =>$this ->input->post('cand_date_naiss'),
			'cand_lieu_naiss' =>$this ->input->post('cand_lieu_naiss'),
			'cin_cand' =>$this ->input->post('cin_cand'),
			'cand_lieu_cin' =>$this ->input->post('cand_lieu_cin'),
			'cand_du_cin' =>$this ->input->post('cand_du_cin'),
			'cand_num_bac' =>$this ->input->post('cand_num_bac'),
			'email_cand' =>$this ->input->post('email_cand'),
			'cand_sexe' =>$this ->input->post('cand_sexe'),
			'cand_indication' =>$this ->input->post('cand_indication'),
			'cand_serie' =>$this ->input->post('cand_serie'),
			'tel_cand' =>$this ->input->post('tel_cand'),
			'cand_nationalite' =>$this ->input->post('cand_nationalite'),
			'cand_codepostale' =>$this ->input->post('cand_codepostale'),
			'cand_pays' =>$this ->input->post('cand_pays'),
			'cand_ville' =>$this ->input ->post('cand_ville'));
		//var_dump($field); die();
		$this->db->where('cand_id', $cand_id);
		$this->db->update('candidat', $field);
		$this->db->last_query();
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}
	public function delete($cand_id){
		$this->db->where('cand_id',$cand_id);
		$this->db->delete('candidat');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}

