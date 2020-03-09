 
<form method="post" action="<?php echo base_url('Mention/recherche');?>" style="display: none;">
	<div class="cont-rechercher">
		<div class="input-group col-lg-5">
			<input type="text" placeholder="Réchercher..."  class="form-control"  style="text-align:right" name="motchermention">
			<span class="input-group-btn">
				<button class="btn btn-success" type="submit">Réchercher</button>
			</span>
		</div>
	</div>
</form>
<legend>Liste des Mentions</legend>
<div class="">
	<table class="table table-border" align="center" id="_useDataTable">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nom</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($data) > 0){?>
				<?php foreach ($data as $mentionjoin) {?>
					<tr>
						<td><?php echo $mentionjoin->ment_id; ?></td>
						<td><?php echo $mentionjoin->ment_nom; ?></td>
						<td>
							<a href="<?=base_url('Mention/editer/' .$mentionjoin->ment_id); ?>"><span class="glyphicon glyphicon-pencil btn btn-primary"></span></a>
							<a href="<?=base_url('Mention/delete/' .$mentionjoin->ment_id); ?>"><span class="glyphicon glyphicon-remove btn btn-danger btn btn-danger"></span></a>
						</td>
					</tr>
				<?php }?>
			<?php }?>

		</tbody>
	</table>
</div>
<a href="<?= base_url('Mention/ajout')?>"><h4 align="left"> 
	<button class="btn btn-primary">Nouveau</button></h4>
</a> 
