<!DOCTYPE html>
<html>
<head>
	<title>Ajout parcours</title>
</head>
<body>
	<legend>Liste parcours existant</legend>
	<a href="<?= base_url('Parcours/ajout');?>"><h4 align="left"> <button class="btn btn-primary">Nouveau</button></h4></a>
	<div class="table-responsive">
<table class="table table-border" align="center">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nom</th>
			<th>Diplome</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php if(count($data)>0){?>
		<?php foreach ($data as $parcoursjoint){?>
		<tr>
			<td><?php echo $parcoursjoint->parc_id;?></td>
			<td><?php echo $parcoursjoint->parc_nom;?></td>
			<td><?php echo $parcoursjoint->parc_diplome;?></td>
			<td>
				<a href="<?=base_url('Parcours/editer/'. $parcoursjoint->parc_id);?>"><span class="glyphicon glyphicon-edit btn-info btn btn-primary"></span></a>
				<a href="<?=base_url('Parcours/delete/'.$parcoursjoint->parc_id)?>"><span class="glyphicon glyphicon-minus btn btn-default btn btn-danger"></span></a>
			</td>
		</tr>
		<?php }?>
		<?php }?>
	</tbody>
</table>
</div>	
</form>
</body>
</html>