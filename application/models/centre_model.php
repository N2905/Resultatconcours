<?php
defined('BASEPATH') or exit('No direct script access allowed');

class centre_model extends CI_Model{
	
	public function getCentre(){
		$query=$this->db->get('centredexamen');
		if($query->num_rows() > 0){
			return $query-> result();

	} else{
		return false;
		}
	}
	public function save(){
		$field= array(
		'centre_id'=>$this->input->post('centre_id'),
		'centre_lieu'=>$this->input->post('centre_lieu'));
		$this->db->insert('centredexamen',$field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function getCentreById($centre_id){
		$this->db->where('centre_id', $centre_id);
		$query=$this->db->get('centredexamen');
		if($query->num_rows() > 0){
			return $query-> row();
		} else{
			return false;
		}
	}
	public function modifier(){
		$centre_id=$this->input->post('txt_hidden');
		$field=array(
		'centre_lieu'=>$this->input->post('centre_lieu'));
		$this->db->where('centre_id',$centre_id);
		$this->db->update('centredexamen',$field);
		$this->db->last_query();
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}
	public function delete($centre_id){
		$this->db->where('centre_id',$centre_id);
		$this->db->delete('centredexamen');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}

