<!DOCTYPE html>
<html>
<head>
	<title>Modification mention</title>
</head>
<body>
<form method="post" action="<?= base_url('Mention/modifier');?>">
	<input type="hidden" value="<?= $data->ment_id; ?>" name="txt_hidden"> 
	<div class="row">
	<legend>Formulaire mention</legend>
		<div class="form-group">
	        <label>Id:</label>
	        <input type="text" name="ment_id" class="form-control" value="<?= $data->ment_id;?>">
        </div>
        <div class="form-group">
	        <label>Nom:</label>
	        <input type="text" name="ment_nom" class="form-control" value="<?= $data->ment_nom;?>">
	    </div>
    </div>
	<button  value="Enregistre" class="btn btn-primary"> Enregistre</button>
	<button type="reset" class="btn btn-danger">Annuler</button>
</form>
</body>
</html>
