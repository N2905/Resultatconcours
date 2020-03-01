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

	public function getMoyenne($cand_id){
		$moyenne = $this->db->query("SELECT c.cand_id, c.nom_cand, SUM(n.note * ep.coefficient) / SUM(ep.coefficient) AS moyenne FROM note n, epreuve ep, candidat c WHERE n.epre_id = ep.epre_id AND c.cand_id = n.cand_id AND c.cand_id=".$cand_id);
		return $moyenne->result()[0];
	}

}

