
<?php 
	$conn=mysqli_connect("localhost","root","","resulatconcours");
	$req_parcours="SELECT * FROM parcours ORDER BY parc_nom ASC";
	$res_parcours=mysqli_query($conn,$req_parcours) or die(mysqli_error($conn));
 ?>
<form method="post" action="<?= base_url('Epreuve/modifier');?>">
	<input type="hidden" value="<?= $data->epre_id; ?>" name="txt_hidden">
	<legend>Formulaire epreuve</legend> 
	<div class="form-group">
	<label>Id:</label>
	<input type="text" class="form-control" name="epre_id" value="<?= $data->epre_id;?>">
	</div>
	<div class="form-group">
	<label>Epreuve:</label>
	<input type="text" class="form-control" name="epre_nom_mat" value="<?= $data->epre_nom_mat;?>">
    </div>
    <div class="form-group">
	<label>Coefficient:</label>
	<input type="text" class="form-control" name="coefficient" value="<?= $data->coefficient;?>">
    </div>
	 	<div class="form-group">
	 	<label for="parc_nom">Parcours:</label>
	 	<select name="parc_id" class="form-control required">
	 		<option disabled hidden selected>Votre parcours</option>
	 		<?php while($parc=mysqli_fetch_array($res_parcours,MYSQLI_ASSOC)){?>
	 			<option value="<?php echo $parc["parc_id"] ?>"> <?php echo $parc["parc_nom"] ?>
	 			</option>
	 		<?php } ?>
	 	</select>
	</div>
	<button  value="Enregistre" class="btn btn-primary"> Enregistre</button>
	 <button type="reset" class="btn btn-danger">Annuler</button>
</form>

