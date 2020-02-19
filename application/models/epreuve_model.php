<?php
defined('BASEPATH') or exit('No direct script access allowed');

class epreuve_model extends CI_Model{
	
	public function getEpreuve(){
		$query=$this->db->get('epreuve');
		if($query->num_rows() > 0){
			return $query->result();

	} else{
		return false;
		}
	}
	public function save(){
		$field= array(
			'epre_id'=>$this->input->post('epre_id'),
			'epre_nom_mat'=>$this->input->post('epre_nom_mat'),
			'coefficient'=>$this->input->post('coefficient'));
		$this->db->insert('epreuve', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function getEpreById($epre_id){
		$this->db->where('epre_id', $epre_id);
		$query= $this->db->get('epreuve');
		if($query->num_rows() > 0){
			return $query-> row();
		} else{
			return false;
		}
	}
	public function modifier(){
		$epre_id=$this->input->post('txt_hidden');
		$field=array(
			'epre_nom_mat'=>$this->input->post('epre_nom_mat') , 
			'coefficient'=>$this->input->post('coefficient'));
		$this->db->where('epre_id', $epre_id);
		$this->db->update('epreuve', $field);
		$this->db->last_query();
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}
	public function delete($epre_id){
		$this->db->where('epre_id',$epre_id);
		$this->db->delete('epreuve');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}

