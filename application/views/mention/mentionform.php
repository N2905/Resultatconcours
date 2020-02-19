<!DOCTYPE html>
<html>
<head>
	<title>Enregistrement mention</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/css/bootstrap.min.css')?>">
</head>
<body>
<form method="post" action="<?= base_url('Mention/save'); ?> " >
	<h1>Formulaire mention</h1>
	<label>Nom:</label>
	<input type="text" name="ment_nom" ><br><br>
	<button  value="Enregistre" class="btn btn-primary"> Enregistre</button>
	<button type="reset" class="btn btn-danger">Annuler</button>
</form>
</body>
</html>
