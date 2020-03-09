<div class="card">
	<h2 class="card-header info-color white-text text-center py-4">
		<strong>Les notes obtenues</strong>
	</h2>
	<div class="card-body px-lg-5 pt-0">
				<!-- tab1 -->
		<ul class="nav nav-tabs">
			<li class="active">
				<a data-toggle="tab" href="#parcours_1">Parcours</a>
			</li>
			<li><a data-toggle="tab" href="#centre_1">Centre</a></li>
			<li><a data-toggle="tab" href="#anne_1">Année</a></li>
		</ul>
		<div id="_content" class="tab-content">
			<div id="parcours_1" class="tab-pane fade in active">
				<!-- tab parcours -->
				<ul class="nav nav-tabs">
					<?php
						foreach ($parcours->getParcours() as $index => $parcour) { ?>
							<li class="<?php echo ($index == 0) ? 'active' : ''; ?>">
								<a data-toggle="tab" href="#content_parcour_<?= $index ?>"><?= $parcour->parc_nom ?></a>
							</li>
					<?php } ?>
				</ul>
				<br>
				<div class="tab-content">
					<?php
						foreach ($parcours->getParcours() as $index => $parcour) { ?>
		          <div id="content_parcour_<?= $index ?>" class="tab-pane fade <?php echo ($index == 0) ? 'in active' : ''; ?>">
								<table class="table table-border" align="center"  id="_tabparcours<?= $index ?>">
									<!-- haeder tab -->
									<?php include('tab-header.php'); ?>
									<tbody>
										<?php foreach ($notes->listeNotesCandidats($parcour->parc_id,"parcours") as $index => $candidat){?>
												<?php include('tab-ligne.php'); ?>
										<?php }?>
									</tbody>
								</table>
							</div>
					<?php } ?>
				</div>
			</div><!-- end parcours-->
			<div id="centre_1" class="tab-pane fade">
				<!-- tab centre -->
				<ul class="nav nav-tabs">
					<?php
						foreach ($centres->getCentre() as $index => $centre) { ?>
							<li class="<?php echo ($index == 0) ? 'active' : ''; ?>">
								<a data-toggle="tab" href="#content_centre_<?= $index ?>"><?= $centre->centre_lieu ?></a>
							</li>
					<?php } ?>
				</ul>
				<br>
				<div class="tab-content">
					<?php
						foreach ($centres->getCentre() as $index => $centre) { ?>
		          <div id="content_centre_<?= $index ?>" class="tab-pane fade <?php echo ($index == 0) ? 'in active' : ''; ?>">
								<table class="table table-border" align="center"  id="_tabcentre<?= $index ?>">
									<!-- haeder tab -->
									<?php include('tab-header.php'); ?>
									<tbody>
										<?php foreach ($notes->listeNotesCandidats($centre->centre_id,"centre") as $index => $candidat){?>
												<?php include('tab-ligne.php'); ?>
										<?php }?>
									</tbody>
								</table>
							</div>
					<?php } ?>
				</div>
			</div><!-- end centre-->
			<div id="anne_1" class="tab-pane fade">
				<!-- tab anne -->
				<ul class="nav nav-tabs">
					<?php
						foreach ($candidats->getAnneAccademique() as $index => $candidat) { ?>
							<li class="<?php echo ($index == 0) ? 'active' : ''; ?>">
								<a data-toggle="tab" href="#content_anne_<?= $index ?>"><?= $candidat->anne_acc ?></a>
							</li>
					<?php } ?>
				</ul>
				<br>
				<div class="tab-content">
					<?php
						foreach ($candidats->getAnneAccademique() as $index => $candidat) { ?>
								<!-- <h1><?= $candidat->anne_acc ?></h1> -->
								<div id="content_anne_<?= $index ?>" class="tab-pane fade <?php echo ($index == 0) ? 'in active' : ''; ?>">
									<table class="table table-border" align="center"  id="_tabanne<?= $index ?>">
										<!-- haeder tab -->
										<?php include('tab-header.php'); ?>
										<tbody>
											<?php foreach ($notes->listeNotesCandidats($candidat->anne_acc,"anne") as $index => $candidat){?>
												<?php include('tab-ligne.php'); ?>
											<?php }?>
										</tbody>
									</table>
								</div>
					<?php } ?>
				</div>
			</div><!-- end anne-->
		</div>
	</div>
</div>
