<?php
	$conn=mysqli_connect("localhost","root","","resulatconcours");
	$req_mention ="SELECT * FROM mention ORDER BY ment_nom ASC";
	$res_mention = mysqli_query($conn,$req_mention) or die(mysqli_error($conn));
?>
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
			    <?php while($ment=mysqli_fetch_array($res_mention,MYSQLI_ASSOC)){ ?>
					<option value="<?php echo $ment["ment_id"] ?>"><?php echo $ment["ment_nom"]?></option>
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

