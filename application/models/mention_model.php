<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mention_model extends CI_Model{
	
	public function getMention(){
		$query=$this->db->get('mention');
		if($query->num_rows() > 0){
			return $query-> result();

	} else{
		return false;
		}
	}
	public function save(){
		$field=array(
			'ment_id'=>$this->input->post('ment_id'),
			'ment_nom'=>$this->input->post('ment_nom'));
		$this->db->insert('mention',$field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function getMentById($ment_id){
		$this->db->where('ment_id', $ment_id);
		$query=$this->db->get('mention');
		if($query->num_rows() > 0){
			return $query-> row();
		} else{
			return false;
		}
	}
	public function modifier(){
		$ment_id=$this->input->post('txt_hidden');
		$field=array(
		'ment_nom'=>$this->input->post('ment_nom'));
		$this->db->where('ment_id',$ment_id);
		$this->db->update('mention',$field);
		$this->db->last_query();
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}
	public function delete($ment_id){
		$this->db->where('ment_id',$ment_id);
		$this->db->delete('mention');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function recherche($key){
		$this->db->like('ment_nom',$key);
		$query=$this->db->get('mention');
		return $query->result();
	}
}

