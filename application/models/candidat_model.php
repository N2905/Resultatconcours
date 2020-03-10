<?php
defined('BASEPATH') or exit('No direct script access allowed');

class candidat_model extends CI_Model{

	public function getCandidat(){
		$query = $this->db->get('candidat');
		if($query->num_rows() > 0){
			return $query->result();

	} else{
		return false;
		}
	}

	public function insereo(){
		include APPPATH.'/third_party/faker/src/autoload.php';

		$faker = Faker\Factory::create();
		/* foreach ($this->getCandidat() as $value) {
		      foreach($this->getMatiereInParcours($value->parc_id) as $epreuve){
		        $fields_note = array('note_id'=>NULL,'note' => 0.0, 'anne'=> $value->anne_acc, 'cand_id'=>$value->cand_id,'epre_id'=>$epreuve->epre_id);
		        $this->db->insert('note', $fields_note);
		      }
		    }*/

		for ($i = 1; $i <= 1500; $i++) {
			$rand_anne = $faker->randomElement(array ('2017','2018','2019','2020'));
			$rand_parcid = $faker->randomElement(array ('2','10','11','12','13','14'));
			$rand_centre_id = $faker->randomElement(array ('1','3','4','6'));
			$data = array(
			'cand_id' =>$i,
			'nom_cand'=> $faker->name,
			'prenom_cand' =>$faker->lastName,
			'cand_anne_bac' =>$rand_anne,
			'cand_date_naiss' => $faker->date('Y-m-d', 2002),
			'cand_lieu_naiss' => $faker->state,
			'cin_cand' => $faker->phoneNumber,
			'cand_lieu_cin' => $faker->state,
			'cand_du_cin' => $faker->date('Y-m-d', 2000),
			'cand_num_bac' => $faker->randomNumber,
			'email_cand' => $faker->email,
			'cand_sexe' => $faker->randomElement(array ('Féminin','Masculin')),
			'cand_indication' => $faker->randomElement(array ('A','B','C')),
			'cand_serie' => $faker->randomElement(array ('A','C','D')),
			'tel_cand' => $faker->e164PhoneNumber,
			'cand_nationalite' => $faker->state,
			'cand_codepostale' => $faker->postcode,
			'cand_pays' =>$faker->state,
			'cand_ville' =>$faker->state,
			'anne_acc' =>$rand_anne,
	    	'centre_id' =>$rand_centre_id,//1 3 4 5 6
	    	'parc_id'=>$rand_parcid);//2 10 11 12 13 14
	    	$this->db->insert('candidat', $data);
	    	foreach($this->getMatiereInParcours($rand_parcid) as $epreuve){
	    		$fields_note = array('note_id'=>NULL,'note' => 0.0, 'anne'=> $rand_anne, 'cand_id'=>$i,'epre_id'=>$epreuve->epre_id);
	    		$this->db->insert('note', $fields_note);
	    	}
		}
		/*foreach ($this->getCandidat() as $value) {
	      foreach($this->getMatiereInParcours($value->parc_id) as $epreuve){
	        $fields_note = array('note_id'=>NULL,'note' => 0.0, 'anne'=> $value->anne_acc, 'cand_id'=>$value->cand_id,'epre_id'=>$epreuve->epre_id);
	        $this->db->insert('note', $fields_note);
	      }
	    }*/
		/*foreach($this->getMatiereInParcours(11) as $epreuve){
			$fields_note = array('note_id'=>NULL,'note' => 0.0, 'anne'=> date("Y"), 'cand_id'=>$idcand,'epre_id'=>$epreuve->epre_id);
			$this->db->insert('note', $fields_note);
		}*/

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
	public function listeCandidat($parcours = NULL){
    $andQuery = NULL;
		if ( !is_null($parcours) )
			$andQuery = " AND p.parc_id = $parcours";

		$query = "SELECT c.*,ce.*,p.* FROM candidat c,centredexamen ce,parcours p WHERE c.centre_id=ce.centre_id AND c.parc_id=p.parc_id $andQuery";
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

  public function getAnneAccademique(){
  	$this->db->select();
  	$this->db->from('candidat');
  	$query = $this->db->order_by('anne_acc','DESC')->group_by('anne_acc')->get();
  	return $query->result();
  }

}
/*



    /**/
    /*foreach ($this->getCandidat() as $value) {
      foreach($this->getMatiereInParcours($value->parc_id) as $epreuve){
        $fields_note = array('note_id'=>NULL,'note' => 0.0, 'anne'=> $value->anne_acc, 'cand_id'=>$value->cand_id,'epre_id'=>$epreuve->epre_id);
        $this->db->insert('note', $fields_note);
      }
    }
    die("oj");*/
    /**/
