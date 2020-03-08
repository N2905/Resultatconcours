
<?php
	$conn=mysqli_connect("localhost","root","","resulatconcours");
	$req_centre ="SELECT * FROM centredexamen ORDER BY centre_lieu ASC";
	$res_centre = mysqli_query($conn,$req_centre) or die(mysqli_error($conn));
?>
<?php
	$conn=mysqli_connect("localhost","root","","resulatconcours");
	$req_parcours="SELECT * FROM parcours ORDER BY parc_nom ASC";
	$res_parcours=mysqli_query($conn,$req_parcours) or die(mysqli_error($conn));
 ?>
<form method="post" action="<?= base_url('Candidat/modifier'); ?> " >
	<input type="hidden" value="<?= $data->cand_id; ?>" name="txt_hidden">
	<div class="row">
	<legend>Formulaire candidat</legend>
	<section class="col-md-6">
	<div class="form-group">
	<input type="hidden" name="cand_id" class="form-control" value="<?= $data->cand_id; ?>">
	</div>
	<div class="form-group">
	<label>Nom <sup>*</sup> :</label>
	<input type="text" name="nom_cand" class="form-control _ucfirt required" value="<?= $data->nom_cand; ?>">
	</div>
	<div class="form-group">
	<label>Prenom : </label>
	<input type="text" name="prenom_cand" class="form-control _ucfirt" value="<?= $data->prenom_cand; ?>" >
	</div>
	<div class="form-group">
		<div class="col-md-6" style="padding-left: 0px">
			<label for="cand_date_naiss">Date de naissance <sup>*</sup> :</label>
			    <input id="cand_date_naiss" type="text" name="cand_date_naiss" class="form-control required" value="<?= $data->cand_date_naiss; ?>">
		</div>
		<div class="col-md-6" style="padding-right: 0px">
			<label for="cand_lieu_naiss">Lieu de naissance <sup>*</sup> :</label>
		    <input id="cand_lieu_naiss" type="text" name="cand_lieu_naiss" class="form-control required" value="<?= $data->cand_lieu_naiss; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="cin_cand">CIN <sup>*</sup> :</label>
		<input id="cin_cand" type="text" name="cin_cand" class="form-control required _numberonly" value="<?= $data->cin_cand; ?>">
    </div>
    <div class="form-group">
		<div class="col-md-6" style="padding-left: 0px">
			<label for="cand_lieu_cin">Fait à : </label>
			<input id="cand_lieu_cin" type="text" name="cand_lieu_cin" class="form-control" value="<?= $data->cand_lieu_cin; ?>">
		</div>
		<div class="col-md-6"  style="padding-right: 0px">
			<label for="cand_du_cin">le <sup>*</sup> :</label>
			<input id="cand_du_cin" type="text" name="cand_du_cin" class="form-control required" value="<?= $data->cand_du_cin; ?>">
		</div>
	</div>
	<div class="form-group">
	<label>Date obtention baccaleaureat:</label>
	<input type="text" id="cand_anne_bac" name="cand_anne_bac" class="form-control" value="<?= $data->cand_anne_bac; ?>" >
    </div>
   <div class="form-group">
	<label>Numero bacc:</label>
	<input type="text" id="cand_num_bac" name="cand_num_bac" class="form-control" value="<?= $data->cand_num_bac; ?>" >
    </div>
     <div class="form-group">
		<label for="origineag">Centre d'examen <sup>*</sup> :</label>
		<select name="centre_id" class="form-control required">
			    <?php while($centre = mysqli_fetch_array($res_centre,MYSQLI_ASSOC)){ ?>
					<option value="<?php echo $centre["centre_id"] ?>"> <?php echo $centre["centre_lieu"] ?></option>
				<?php } ?>
		</select>
	 </div>
	 	<div class="form-group">
	 	<label for="parc_nom">Parcours : </label>
	 	<select name="parc_id" class="form-control required">
	 		<?php while($parc=mysqli_fetch_array($res_parcours,MYSQLI_ASSOC)){?>
	 			<option value="<?php echo $parc["parc_id"] ?>"> <?php echo $parc["parc_nom"] ?>
	 			</option>
	 		<?php } ?>
	 	</select>
	</div>
	<div class="form-group">
    	<div class="row">
	    	<div class="form-group">
	    		<label for="cand_sexe" class="col-lg-2 control-label">Sexe : </label>
		    		<div class="col-lg-10">
			    		<input type="radio" name="cand_sexe" value="Masculin">Masculin
			    		<input type="radio" name="cand_sexe"  checked value="Féminin">Féminin
		    		</div>
	    	</div>
    	</div>
    </div>
    </section>
    <section class="col-md-6">
    	<div class="form-group">
			<label for="email_cand">Email :</label>
			<input id="email_cand" type="text" name="email_cand" class="form-control" value="<?= $data->email_cand; ?>">
		 </div>
		 <div class="form-group">
			<label for="cand_indication">Indication baccaleaureat :</label>
			<input id="cand_indication" type="text" name="cand_indication" class="form-control" value="<?= $data->cand_indication; ?>">
		 </div>
		<div class="form-group">
					<label>Série <sup>*</sup> :</label>
					<select name="cand_serie" class="form-control required">
						<option value="<?= $data->cand_serie; ?>">A1</option>
						<option value="<?= $data->cand_serie; ?>">A2</option>
						<option value="<?= $data->cand_serie; ?>">D</option>
					    <option value="<?= $data->cand_serie; ?>">C</option>
					</select>
		</div>
		<div class="form-group">
			 <label for="tel_cand">Téléphone : </label>
			 <input id="tel_cand" type="text" name="tel_cand" class="form-control" onkeypress="formatPhone(this)" value="<?= $data->tel_cand; ?>">
		</div>
		<div class="form-group">
			<label for="cand_nationalite">Nationalité :</label>
			<input id="cand_nationalite" type="text" name="cand_nationalite" class="form-control _ucfirt" value="<?=$data->cand_nationalite;?>">
		 </div>
		 <div class="form-group">
			<label for="cand_pays">Pays :</label>
			<input id="cand_pays" type="text" name="cand_pays" class="form-control _ucfirt" value="<?= $data->cand_pays; ?>">
		 </div>
		 <div class="form-group">
			<label for="cand_ville">Ville :</label>
			<input id="cand_ville" type="text" name="cand_ville" class="form-control _ucfirt" value="<?= $data->cand_ville; ?>">
		 </div>
		 <div class="form-group">
			<label for="cand_codepostale">Code postale :</label>
			<input id="cand_codepostale" type="text" name="cand_codepostale" class="form-control _numberonly" value="<?= $data->cand_codepostale; ?>">
		 </div>
		 <div class="form-group">
			<label for="anne_acc">Année Accadémique :</label>
			<input id="anne_acc" type="year" name="anne_acc" class="form-control _numberonly" value="<?= $data->anne_acc; ?>">
		 </div>
    </section>
    </div>
    <div style="padding: 15px;float: right;">
         <button  value="Enregistre" class="btn btn-primary"> Enregistre</button>
         <button type="reset" class="btn btn-danger">Annuler</button>
	</div>
</form>




