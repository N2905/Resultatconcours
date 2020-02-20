<!DOCTYPE html>
<html>
<head>
	<title>Liste Mention</title>
</head>
<body>
<legend>Liste des Mentions</legend>
 <div class="table-responsive">
 <table class="table table-border" align="center">
 	<a href="<?= base_url('Mention/ajout')?>"><h4 align="left"> <button class="btn btn-primary">Nouveau</button></h4></a>
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Nom</th>
 			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
 			<?php if(count($data) > 0){?>
			<?php foreach ($data as $ment) {?>
 		<tr>
 		     <td><?php echo $ment->ment_id; ?></td>
 			<td><?php echo $ment->ment_nom; ?></td> 
 			<td>
 				<a href="<?=base_url('Mention/editer/' .$ment->ment_id); ?>"><span class="glyphicon glyphicon-edit btn-info btn btn-primary"></span></a>
 				<a href="<?=base_url('Mention/delete/' .$ment->ment_id); ?>"><span class="glyphicon glyphicon-minus btn btn-default btn btn-danger"></span></a>
 			</td>
 		</tr>
 		<?php }?>
 		<?php }?>
 		
 	</tbody>
 </table>
 </div>
</body>
</html>