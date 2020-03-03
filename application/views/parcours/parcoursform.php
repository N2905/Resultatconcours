<form method="post" action="<?= base_url('Parcours/save'); ?> " >
	<div class="row">
	<legend>Formulaire parcours</legend>
	<div class="form-group">
	<label>Nom:</label>
	<input type="text" name="parc_nom" class="form-control">
	</div>
	<div class="form-group">
		<label>Mention:</label>
		<select name="ment_id" class="form-control required">
		    <option disabled hidden selected>Votre mention</option>
		    <?php foreach ($mentionjoin as $ment) {?>
				<option value="<?php echo $ment->ment_id;?>"><?php echo $ment->ment_nom;?></option>
				<?php } ?>
		</select>
	</div>
	<div class="form-group">
	<label>Diplôme:</label>
	    <select name="parc_diplome" class="form-control">
			<option value="Licence">Licence</option>
			<option value="Master">Master</option>
		</select>
	</div>
	</div>
    <button  value="Enregistre" class="btn btn-primary"> Enregistre</button>
	<button type="reset" class="btn btn-danger">Annuler</button>
</form>

