
<form method="post" action="<?php echo base_url('Parcours/recherche');?>" style="display: none;">
	<div class="cont-rechercher">
		<div class="input-group col-lg-5">
			<input type="text" placeholder="Réchercher..."  class="form-control"  style="text-align:right" name="motcherparcours">
			<span class="input-group-btn">
				<button class="btn btn-success" type="submit">Réchercher</button>
			</span>
		</div>
	</div>

</form>
<legend>Liste parcours existant</legend>
<div class="">
	<table class="table table-border" align="center" id="_useDataTable">
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
							<a href="<?=base_url('Parcours/editer/'. $parcoursjoint->parc_id);?>"><span class="glyphicon glyphicon-pencil btn btn-primary"></span></a>
							<a href="<?=base_url('Parcours/delete/'.$parcoursjoint->parc_id)?>"><span class="glyphicon glyphicon-remove btn btn-danger btn btn-danger"></span></a>
						</td>
					</tr>
				<?php }?>
			<?php }?>
		</tbody>
	</table>
</div>
</form>
<a href="<?= base_url('Parcours/ajout');?>"><h4 align="left"> 
	<button class="btn btn-primary">Nouveau</button></h4>
</a>
