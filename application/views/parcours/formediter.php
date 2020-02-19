<!DOCTYPE html>
<html>
<head>
	<title>Modification parcours</title>
</head>
<body>
<form method="post" action="<?= base_url('Parcours/modifier');?>">
	<input type="hidden" value="<?= $data->parc_id; ?>" name="txt_hidden"> 
	<h1>Formulaire parcours</h1>
	<label>Id:</label>
	<input type="text" name="parc_id" value="<?= $data->parc_id;?>"><br><br>
	<label>Nom:</label>
	<input type="text" name="parc_nom" value="<?= $data->parc_nom;?>"><br><br>
	<label>Diplôme:</label>
	<select name="parc_diplome" ">
			<option value="<?= $data->parc_diplome;?>">Licence</option>
			<option value="<?= $data->parc_diplome;?>">Master</option>
		</select><br><br>
	<button  value="Enregistre" class="btn btn-primary"> Enregistre</button>
	<button type="reset" class="btn btn-danger">Annuler</button>
</form>
</body>
</html>
