<!DOCTYPE html>
<html>
<head>
	<title>Modification mention</title>
</head>
<body>
<form method="post" action="<?= base_url('Mention/modifier');?>">
	<input type="hidden" value="<?= $data->ment_id; ?>" name="txt_hidden"> 
	<h1>Formulaire mention</h1>
	<label>Id:</label>
	<input type="text" name="ment_id" value="<?= $data->ment_id;?>"><br><br>
	<label>Nom:</label>
	<input type="text" name="ment_nom" value="<?= $data->ment_nom;?>"><br><br>
	<button  value="Enregistre" class="btn btn-primary"> Enregistre</button>
	<button type="reset" class="btn btn-danger">Annuler</button>
</form>
</body>
</html>
