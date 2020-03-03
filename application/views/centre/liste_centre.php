<!DOCTYPE html>
<html>
<head>
	<title>Liste Centre</title>
</head>
<body>
<form method="post" action="<?php echo base_url('Centre/recherche');?>">
			<div class="cont-rechercher">
			<div class="input-group col-lg-5">
		    <input type="text" placeholder="Réchercher..."  class="form-control"  style="text-align:right" name="motchercentre">
		    <span class="input-group-btn">
		      <button class="btn btn-success" type="submit">Réchercher</button>
		    </span>
		  </div>
		</div>

</form>
<legend>Liste des Centres</legend>
 <a href="<?php echo base_url('Centre/ajout')?>"><button class="btn btn-primary" style="text-align: left">Nouveau</button></a>
 <div class="table-responsive">
 <table class="table table-border" align="center">
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Lieu</th>
 			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
 			<?php if(count($data) > 0){?>
			<?php foreach ($data as $centrejoint) {?>
 		<tr>
 		     <td><?php echo $centrejoint->centre_id; ?></td>
 			<td><?php echo $centrejoint->centre_lieu; ?></td>
 			<td>
 				<a href="<?=base_url('Centre/editer/' .$centrejoint->centre_id); ?>"><span class="glyphicon glyphicon-pencil btn btn-primary"></span></a>
 				<a href="<?=base_url('Centre/delete/' .$centrejoint->centre_id); ?>"><span class="glyphicon glyphicon-remove btn btn-danger btn btn-danger"></span></a>
 			</td>
 		</tr>
 		<?php }?>
 		<?php }?>

 	</tbody>
 </table>
 </div>
</body>
</html>
