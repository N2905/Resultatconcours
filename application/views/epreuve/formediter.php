<!DOCTYPE html>
<html>
<head>
	<title>Modification epreuve</title>
</head>
<body>
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
	<button  value="Enregistre" class="btn btn-primary"> Enregistre</button>
	 <button type="reset" class="btn btn-danger">Annuler</button>
</form>
</body>
</html>
