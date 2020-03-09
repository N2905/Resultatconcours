<?php
defined('BASEPATH') or exit('No direct script access allowed');

class resultat_model extends CI_Model{


	public function listeResultats($parc_id, $anne){
		$and_where = " AND c.parc_id = $parc_id AND c.anne_acc = $anne";
		$result = $this->db->query("SELECT c.*, SUM(n.note * ep.coefficient) / SUM(ep.coefficient) AS moyenne, ce.* FROM note n, epreuve ep, candidat c, centredexamen ce WHERE n.epre_id = ep.epre_id AND c.cand_id = n.cand_id  AND ce.centre_id = c.centre_id $and_where GROUP BY c.cand_id ORDER BY moyenne DESC" );
		return $result->result();
	}

}

