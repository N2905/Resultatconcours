<!DOCTYPE html>
<html>
<head>
	<title>Modification Centre</title>
</head>
<body>
<form method="post" action="<?= base_url('Centre/modifier');?>">
	<input type="hidden" value="<?= $data->centre_id; ?>" name="txt_hidden">
	<legend>Formulaire centre d'examen</legend> 
	<div class="form-group">
	<label>Id:</label>
	<input type="text" class="form-control" name="centre_id" value="<?= $data->centre_id;?>">
    </div>
    <div class="form-group">
	<label>Lieu:</label>
	<input type="text" class="form-control" name="centre_lieu" value="<?= $data->centre_lieu;?>">
    </div>
	<button  value="Enregistre" class="btn btn-primary"> Enregistre</button>
	<button type="reset" class="btn btn-danger">Annuler</button>
</form>
</body>
</html>
