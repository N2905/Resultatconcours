<!DOCTYPE html>
<html>
<head>
	<title>Enregistrement mention</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/bootstrap.min.css')?>">
</head>
<body>
<form method="post" action="<?= base_url('Mention/save'); ?> " >
	<div class="row">
		<legend>Formulaire mention</legend>
		<div class="form-group">
	<label>Nom:</label>
	<input type="text" name="ment_nom" class="form-control" >
	</div>
	</div>
	<button  value="Enregistre" class="btn btn-primary"> Enregistre</button>
	<button type="reset" class="btn btn-danger">Annuler</button>
</form>
</body>
</html>
