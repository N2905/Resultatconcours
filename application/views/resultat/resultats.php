<div class="card">
  <h2 class="card-header info-color white-text text-center py-4">
    <strong>Resultat concours</strong>
  </h2>
  <h3 class="subtitle">Parcours : <?= $parcours->getParcById($idparcours)->parc_nom ?></h3>
  <div class="card-body px-lg-5 pt-0">
    <!-- tab1 -->
    <ul class="nav nav-tabs">
       <?php
          foreach ($candidats->getAnneAccademique() as $index => $candidat) { ?>
            <li class="<?php echo ($index == 0) ? 'active' : ''; ?>">
              <a data-toggle="tab" href="#content_anne_<?= $index ?>"><?= $candidat->anne_acc ?></a>
            </li>
        <?php } ?>
    </ul><br>
    <div id="_content" class="tab-content">
      <?php
        foreach ($candidats->getAnneAccademique() as $index => $candidat) { ?>
            <!-- <h1><?= $candidat->anne_acc ?></h1> -->
            <div id="content_anne_<?= $index ?>" class="tab-pane fade <?php echo ($index == 0) ? 'in active' : ''; ?>">
                <table class="table table-border" align="center"  id="_tabanne<?= $index ?>">
                  <!-- haeder tab -->
                  <?php include('tab-header.php'); ?>
                  <tbody>
                    <?php foreach ($resultats->listeResultats($idparcours, $candidat->anne_acc) as $index => $candidat){?>
                      <?php
                        if( $type_resultat== 'admis' && $candidat->moyenne >= 12 ){
                            include('tab-ligne.php');
                        }else if($type_resultat == 'liste_attente' && ($candidat->moyenne >= 10 && $candidat->moyenne <= 11 ) ){
                            include('tab-ligne.php');
                        }
                      ?>
                    <?php }?>
                  </tbody>
                </table>
                <!-- PDF -->
                <a href="<?php echo base_url()?>pdf/pdfResultat/<?= $idparcours ?>/<?= $candidat->anne_acc ?>" target="_blanck">
                  <button class="btn btn-success" style="text-align: left">PDF</button>
                </a>
            </div>
        <?php } ?>
    </div>
  </div>
</div>
