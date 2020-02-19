<!DOCTYPE html>
<html>
<head>
	<title>Enregistrement centre</title>
</head>
<body>
<form method="post" action="<?= base_url('Centre/save'); ?> " >
	<legend>Formulaire centre d'examen</legend>
	<div class="form-group">
	<label>Lieu:</label>
	<input type="text" name="centre_lieu" class="form-control" >
	</div>
	<button  value="Enregistre" class="btn btn-primary"> Enregistre</button>
	<button type="reset" class="btn btn-danger">Annuler</button>
</form>
</body>
</html>
