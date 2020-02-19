<!DOCTYPE html>
<html>
<head>
	<title>Enregistrement epreuve</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/bootstrap.min.css')?>">
</head>
<body>
<form method="post" action="<?= base_url('Epreuve/save'); ?> " >
	<legend>Formulaire epreuve</legend>
	<div class="form-group">
	<label>Epreuve:</label>
	<input type="text" name="epre_nom_mat" class="form-control">
    </div>
    <div class="form-group">
	<label>Coefficient:</label>
	<input type="text" name="coefficient" class="form-control" >
    </div>
    <button  value="Enregistre" class="btn btn-primary"> Enregistre</button>
    <button type="reset" class="btn btn-danger">Annuler</button>
	
</form>
</body>
</html>
