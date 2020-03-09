<div class="card">
	<h2 class="card-header info-color white-text text-center py-4">
        <strong>Saisie note</strong>
    </h2>
    <h4 class="text-center">Parcours : <?= $parcours->parc_nom ?> </h4>
	<div class="card-body px-lg-5 pt-0">
		<table class="table table-border" align="center"><!--  id="_useDataTable" -->
			<thead>
				<tr>
					<th>#</th>
					<th>Nom</th>
					<th>Prénom</th>
					<th class="text-center">Année</th>
					<th class="text-center">Moyenne</th>
					<th class="text-center">Note</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($notes as $index => $candidat){?>
					<tr>
						<td><?= ($index+1) ?></td>
						<td><?= $candidat->nom_cand ?></td>
						<td><?= $candidat->prenom_cand ?></td>
						<td class="text-center"><?= $candidat->anne_acc ?></td>
						<td>
							<div class="card">
								<h3 id="avg_<?= $candidat->cand_id; ?>" class="text-center"><?= round($candidat->moyenne,2); ?></h3>
							</div>
						</td>
						<td>
							<form method="post" id="formcand_<?= $candidat->cand_id; ?>" action="<?= base_url('Note/modifier/').$candidat->cand_id;?>" class="col-sm-12">
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
									<button type="button" class="btn btn-primary" onclick="saveNote(this);">Enregistrer</button>
								</div>
							</form>
						</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</form>
</div>
