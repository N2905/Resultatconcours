
<div class="table-responsive">
	<table class="table table-border" align="center">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th class="text-center">Année</th>
				<th class="text-center">Moyenne</th>
				<th class="text-center">Note</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($candidats->getCandidat() as $candidat){?>
				<tr>
					<td><?= $candidat->cand_id ?></td>
					<td><?= $candidat->nom_cand ?></td>
					<td><?= $candidat->prenom_cand ?></td>
					<td class="text-center"><?= $candidat->anne_acc ?></td>
					<td>
						<div class="card">
						    <h3 class="text-center"><?= round($notes->getMoyenne($candidat->cand_id)->moyenne,2); ?></h3>
						</div>
					</td>
					<td>
						<form method="post" action="<?= base_url('Note/modifier/').$candidat->cand_id;?>" class="col-sm-12">
							<?php
							foreach ($candidats->getMatiereInParcours(null, $candidat->cand_id) as $key => $note){?>
								<div class="form-group row">
									<input type="hidden" value="<?= $note->note_id; ?>" name="note_id_<?= $key; ?>">
									<label for="note_<?= $key ?>" class="col-sm-4 col-form-label"><?= $note->epre_nom_mat ?></label>
									<div class="col-sm-8">
										<input type="number" name="note_<?= $key ?>" class="form-control" value="<?= $note->note ?>">
									</div>
								</div>
							<?php } ?>
							<div class="text-center" style="float: right;">
						    <button type="submit" class="btn btn-primary">Enregistrer</button>
						    <a href="#" class="btn btn-default">PDF</a>
							</div>
						</form>
					</td>
				</tr>
			<?php }?>
		</tbody>
	</table>
</div>
</form>
