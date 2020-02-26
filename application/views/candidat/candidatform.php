<form method="post" action="<?= base_url('Candidat/save'); ?> ">
	<div class="row">
	<legend>Formulaire candidat</legend>
	<section class="col-md-6">
	<div class="form-group">
	<label>Nom:</label>
	<input type="text" name="nom_cand" class="form-control">
	</div>
	<div class="form-group">
	<label>Prenom:</label>
	<input type="text" name="prenom_cand" class="form-control" >
	</div>
	<div class="form-group">
		<div class="col-md-6" style="padding-left: 0px">
			<label for=" cand_date_naiss">Date de naissance :</label>
			    <input id=" cand_date_naiss" type="date" name=" cand_date_naiss" class="form-control required">
		</div>
		<div class="col-md-6" style="padding-right: 0px">
			<label for="cand_lieu_naiss">Lieu de naissance :</label>
		    <input id="cand_lieu_naiss" type="text" name="cand_lieu_naiss" class="form-control required">
		</div>
	</div> 
	<div class="form-group">
		<label for="cin_cand">CIN : </label>
		<input id="cin_cand" type="text" name="cin_cand" class="form-control required">
    </div>
    <div class="form-group">
		<div class="col-md-6" style="padding-left: 0px">
			<label for="cand_lieu_cin">Fait à : </label>
			<input id="cand_lieu_cin" type="text" name="cand_lieu_cin" class="form-control">
		</div>
		<div class="col-md-6"  style="padding-right: 0px">
			<label for="cand_du_cin">le : </label>
			<input id="cand_du_cin" type="date" name="cand_du_cin" class="form-control">
		</div>
	</div>
	<div class="form-group">
	<label>Date obtention baccaleaureat:</label>
	<input type="date" name="cand_anne_bac" class="form-control"  >
    </div>
    <div class="form-group">
	<label>Numero bacc:</label>
	<input type="text" name="cand_num_bac" class="form-control" >
    </div>
    <div class="form-group">
		<label for="centre_lieu">Centre d'examen:</label>
		<select name="centre_id" class="form-control required">
		    <option disabled hidden selected>Votre centre</option>
		    <?php foreach ($centrejoint as $centre) {?>
			    <option value="<?php echo $centre->centre_id;?>"><?php echo $centre->centre_lieu;?>
			    </option>
				<?php } ?>
		</select>
	</div>
	<div class="form-group">
	 	<label for="parc_nom">Parcours:</label>
	 	<select name="parc_id" class="form-control required">
	 		<option disabled hidden selected>Votre parcours</option>
	 		<?php foreach ($parcoursjoint as $parc) {?>
	 			<option value="<?php echo $parc->parc_id;?>"><?php echo $parc->parc_nom;?>
	 			</option>
	 		<?php } ?>
	 	</select>
	</div>
	<div class="form-group">
    	<div class="row">
	    	<div class="form-group">
	    		<label for="cand_sexe" class="col-lg-2 control-label">Sexe : </label>
		    		<div class="col-lg-10">
			    		<input type="radio" name="cand_sexe" checked value="Masculin">Masculin
			    		<input type="radio" name="cand_sexe" value="Féminin">Féminin
		    		</div>
	    	</div>
    	</div>
    </div>
    </section>
    <section class="col-md-6">
    	<div class="form-group">
			<label for="email_cand">Email :</label>
			<input id="email_cand" type="text" name="email_cand" class="form-control required">
		 </div>
		 <div class="form-group">
			<label for=" cand_indication">Indication baccaleaureat :</label>
			<input id=" cand_indication" type="text" name=" cand_indication" class="form-control required">
		 </div>
		<div class="form-group">
					<label>Série: </label>
					<select name="cand_serie" class="form-control required">
						<option value="A1">A1</option>
						<option value="A2">A2</option>
						<option value="D">D</option>
					    <option value="C">C</option>
					</select>
		</div>
		<div class="form-group">
			 <label for="tel_cand">Téléphone : </label>
			 <input id="tel_cand" type="text" name="tel_cand" class="form-control">
		</div>
		<div class="form-group">
			<label for=" cand_nationalite">Nationalité :</label>
			<input id=" cand_nationalite" type="text" name=" cand_nationalite" class="form-control required">
		 </div>
		 <div class="form-group">
			<label for=" cand_pays">Pays :</label>
			<input id=" cand_pays" type="text" name=" cand_pays" class="form-control required">
		 </div>
		 <div class="form-group">
			<label for=" cand_ville">Ville :</label>
			<input id=" cand_ville" type="text" name=" cand_ville" class="form-control required">
		 </div>
		 <div class="form-group">
			<label for="  cand_codepostale">Code postale :</label>
			<input id="  cand_codepostale" type="text" name="  cand_codepostale" class="form-control required">
		 </div>
		  <div class="form-group">
			<label for="  anne-acc">Année Accademique :</label>
			<input id="  anne_acc" type="date" name="anne_acc" class="form-control required">
		 </div>
    </section>
    </div>
    <div style="padding: 15px;float: right;">
         <button  value="Enregistre" class="btn btn-primary"> Enregistre</button>
         <button type="reset" class="btn btn-danger">Annuler</button>
	</div>
</form>