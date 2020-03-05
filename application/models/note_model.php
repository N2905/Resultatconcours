<?php
defined('BASEPATH') or exit('No direct script access allowed');

class note_model extends CI_Model{

	public function modifier($index){

		$note_id		=		$this->input->post('note_id_'.$index);
		$fields 		=		array('note'	=>	$this->input->post('note_'.$index));
		$this->db->where('note_id',$note_id);
		$this->db->update('note',$fields);
		$this->db->last_query();

	}

	public function getNotesEtudiants($cand_id = null){
		$_andwhere = "";
		if(!is_null($cand_id))
			$_andwhere = " AND c.cand_id=".$cand_id;
		else
			$_andwhere = " GROUP BY c.cand_id";

		$moyenne = $this->db->query("SELECT c.*, SUM(n.note * ep.coefficient) / SUM(ep.coefficient) AS moyenne FROM note n, epreuve ep, candidat c WHERE n.epre_id = ep.epre_id AND c.cand_id = n.cand_id  $_andwhere ORDER BY moyenne DESC" );

		if(!is_null($cand_id))
			return $moyenne->result()[0];

		return $moyenne->result();
	}

	public function getMoyenne($cand_id){
		return $this->getNotesEtudiants($cand_id);
	}

}

