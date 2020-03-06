<div class="card">
	<h2 class="card-header info-color white-text text-center py-4">
        <strong>Les notes obtenues</strong>
  </h2>
	<div class="card-body px-lg-5 pt-0">
		<table class="table table-border" align="center"  id="_useDataTable"><!--  id="_useDataTable" -->
			<thead>
				<tr>
					<th>#</th>
					<th>Nom</th>
					<th>Prénom</th>
					<th class="text-center">Année</th>
					<th class="text-center">Parcours</th>
					<th class="text-center">Moyenne</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($notes as $index => $candidat){?>
					<tr>
						<td><?= ($index+1) ?></td>
						<td><?= $candidat->nom_cand ?></td>
						<td><?= $candidat->prenom_cand ?></td>
						<td class="text-center"><?= $candidat->anne_acc ?></td>
						<td class="text-center"><?= $parcours->getParcById($candidat->parc_id)->parc_nom ?></td>
						<td>
							<div class="card">
								<h3 id="avg_<?= $candidat->cand_id; ?>" class="text-center"><?= round($candidat->moyenne,2); ?></h3>
							</div>
						</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</div>
