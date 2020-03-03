<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class parcours_model extends CI_Model{

	public function getParcours(){
		$query=$this->db->get('parcours');
		if($query->num_rows() > 0){
			return $query-> result();

	} else{
		return false;
		}
	}
	public function save(){
		$field=array(
			'parc_id'=>$this->input->post('parc_id'),
			'ment_id'=>$this->input->post('ment_id'),
			'parc_nom'=>$this->input->post('parc_nom'),
			'parc_diplome'=>$this->input->post('parc_diplome'));
		$this->db->insert('parcours',$field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function getParcById($parc_id){
		$this->db->where('parc_id',$parc_id);
		$query=$this->db->get('parcours');
		if($query->num_rows() > 0){
			return $query-> row();
		} else{
			return false;
		}
	}
	public function modifier(){
		$parc_id=$this->input->post('txt_hidden');
		$field=array( 
		'parc_nom'=>$this->input->post('parc_nom'), 
		'ment_id'=>$this->input->post('ment_id'),
		'parc_diplome'=>$this->input->post('parc_diplome'));
		$this->db->where('parc_id', $parc_id);
		$this->db->update('parcours',$field);
		$this->db->last_query();
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}
	public function delete($parc_id){
		$this->db->where('parc_id',$parc_id);
		$this->db->delete('parcours');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function mentionjoin(){
		$query="SELECT * FROM mention ORDER BY ment_nom ASC";
		 return $this->db->query($query)->result();
	}
	public function recherche($key){
		$this->db->like('parc_nom',$key);
		$query=$this->db->get('parcours');
		return $query->result();
	}

}