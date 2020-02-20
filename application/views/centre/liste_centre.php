<!DOCTYPE html>
<html>
<head>
	<title>Liste Centre</title>
</head>
<body>
<legend>Liste des Centres</legend>
 <div class="table-responsive">
 <table class="table table-border" align="center">
 	<a href="<?= base_url('Centre/ajout')?>"><h4 align="left"><button class="btn btn-primary">Nouveau</button></h4></a>
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Lieu</th>
 			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
 			<?php if(count($data) > 0){?>
			<?php foreach ($data as $centre) {?>
 		<tr>
 		     <td><?php echo $centre->centre_id; ?></td>
 			<td><?php echo $centre->centre_lieu; ?></td> 
 			<td>
 				<a href="<?=base_url('Centre/editer/' .$centre->centre_id); ?>"><span class="glyphicon glyphicon-edit btn-info btn btn-primary"></span></a>
 				<a href="<?=base_url('Centre/delete/' .$centre->centre_id); ?>"><span class="glyphicon glyphicon-minus btn btn-default btn btn-danger"></span></a>
 			</td>
 		</tr>
 		<?php }?>
 		<?php }?>
 		
 	</tbody>
 </table>
 </div>
</body>
</html>