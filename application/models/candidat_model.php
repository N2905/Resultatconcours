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
		$idcand 	= $this->getMaxId("candidat", "cand_id");
		$field  	= $this->getPostData();

		$this->db->insert('candidat', $field);

		if($this->db->affected_rows() > 0){
			foreach($this->getMatiereInParcours($field["parc_id"]) as $epreuve){
				$fields_note = array('note_id'=>NULL,'note' => 0.0, 'anne'=> date("Y"), 'cand_id'=>$idcand,'epre_id'=>$epreuve->epre_id);
				$this->db->insert('note', $fields_note);
			}
			return true;
		}
		return false;

	}

	private function getPostData(){
		return array(
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
			'cand_ville' =>$this ->input ->post('cand_ville'),
			'anne_acc' =>$this ->input ->post('anne_acc'),
	    'centre_id' =>$this ->input ->post('centre_id'),
	    'parc_id'=>$this->input->post('parc_id'));
	}

	public function getCandById($cand_id){
		$this->db->where('cand_id', $cand_id);
		$query= $this->db->get('candidat');
		if($query->num_rows())
			return $query-> row();

		return false;

	}

	public function modifier(){
		$cand_id = $this->input->post('txt_hidden');
		$field = $this->getPostData();
		$this->db->where('cand_id', $cand_id);
		$this->db->update('candidat', $field);
		$this->db->last_query();

		if ($this->db->affected_rows())
			return true;

		return false;

	}

	public function delete($cand_id){
		$this->db->where('cand_id',$cand_id);
		$this->db->delete('candidat');
		if($this->db->affected_rows())
			return true;

		 return false;
	}
	public function listeCandidat(){
		$query = "SELECT c.cand_id,c.nom_cand,c.prenom_cand,c.email_cand,c.tel_cand,c.anne_acc,ce.centre_lieu,p.parc_nom FROM candidat c,centredexamen ce,parcours p WHERE c.centre_id=ce.centre_id AND c.parc_id=p.parc_id";
		return $this->db->query($query)->result();
	}
	public function centrejoint(){
		$query="SELECT * FROM centredexamen ORDER BY centre_lieu ASC";
		return $this->db->query($query)->result();
	}
	public function parcoursjoint(){
		$query="SELECT * FROM parcours ORDER BY parc_nom ASC";
		return $this->db->query($query)->result();
	}
	public function recherche($key){
    $this->db->like('nom_cand',$key);
    $query=$this->db->get('candidat');
    return $query->result();
  }

  private function getMaxId($table, $champ){
  	$max_id = $this->db->query("SELECT max($champ) as max FROM $table")->row()->max;
  	return intval($max_id) + 1;
  }

  public function getMatiereInParcours($parc_id, $cand_id = NULL){
  	if($cand_id !== NULL ){
  		$query= $this->db->query("SELECT c.cand_id, c.nom_cand, ep.epre_id, ep.epre_nom_mat, n.* FROM candidat c, epreuve ep, note n  WHERE  c.cand_id = n.cand_id AND ep.epre_id = n.epre_id AND c.cand_id=".$cand_id);
  	}else{
  		$query= $this->db->query("SELECT * FROM epreuve where parc_id=".$parc_id);
  	}
  	if(!$query->num_rows())
  		return false;

  	return $query->result();

  }
}

