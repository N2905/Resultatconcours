 
<form method="post" action="<?php echo base_url('Epreuve/recherche');?>" style="display: none;">
	<div class="cont-rechercher">
		<div class="input-group col-lg-5">
			<input type="text" placeholder="Réchercher..."  class="form-control"  style="text-align:right" name="motcherepre">
			<span class="input-group-btn">
				<button class="btn btn-success" type="submit">Réchercher</button>
			</span>
		</div>
	</div>

</form>
<legend>Liste des Epreuves</legend>
<div class="">
	<table class="table table-border" align="center" id="_useDataTable">
		<thead>
			<tr>
				<th>ID</th>
				<th>Epreuve</th>
				<th>Coefficient</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($data) > 0){?>
				<?php foreach ($data as $epre) {?>
					<tr>
						<td><?php echo $epre->epre_id; ?></td>
						<td><?php echo $epre->epre_nom_mat; ?></td>
						<td> <?php echo $epre->coefficient; ?></td>
						<td></td>
						<td>
							<a href="<?=base_url('Epreuve/editer/' .$epre->epre_id); ?>"><span class="glyphicon glyphicon-pencil btn btn-primary"></span></a>
							<a href="<?=base_url('Epreuve/delete/' .$epre->epre_id); ?>"><span class="glyphicon glyphicon-remove btn btn-danger btn btn-danger"></span></a>
						</td>		
					</tr>
				<?php }?>
			<?php }?>

		</tbody>
	</table>
</div>
<a href="<?= base_url('Epreuve/ajout')?>"><h4 align="left"> <button class="btn btn-primary"> Nouveau</button></h4></a>
