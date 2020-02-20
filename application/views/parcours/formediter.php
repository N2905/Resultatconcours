<!DOCTYPE html>
<html>
<head>
	<title>Modification parcours</title>
</head>
<body>
<form method="post" action="<?= base_url('Parcours/modifier');?>">
	<input type="hidden" value="<?= $data->parc_id; ?>" name="txt_hidden"> 
	<div class="row">
		<legend>Formulaire parcours</legend>
		<div class="form-group">
			<label>Id:</label>
			<input type="text" name="parc_id" class="form-control" value="<?= $data->parc_id;?>">
        </div>
        <div class="form-group">
	<label>Nom:</label>
	<input type="text" name="parc_nom" class="form-control" value="<?= $data->parc_nom;?>">
  </div>
  <div class="form-group">
	<label>Diplôme:</label>
	<select name="parc_diplome" class="form-control">
			<option value="<?= $data->parc_diplome;?>">Licence</option>
			<option value="<?= $data->parc_diplome;?>">Master</option>
		</select>
	</div>
	<button  value="Enregistre" class="btn btn-primary"> Enregistre</button>
	<button type="reset" class="btn btn-danger">Annuler</button>
</form>
</body>
</html>
