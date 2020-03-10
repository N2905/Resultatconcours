<div class="modal fade" id="_choix_note" tabindex="-1" role="dialog" aria-labelledby="_choix_note" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h2 class="modal-title" id="_choix_note">Critères</h2>
      </div>
      <div class="modal-body">
        <ul class="list-group">
         <?php
              $CI   = &get_instance();
              $data = $CI->modal_model->getParcours();
              foreach ($data as $index => $parcour) {
               ?>
                <!-- <li class="list-group-item disabled">Cras justo odio</li> -->
               <li class="list-group-item">
                 <a href="<?php echo base_url()?>note/saisie/<?= $parcour->parc_id ?>"><?= $parcour->parc_nom ?></a>
                 <select id="_select_<?= $index ?>" style="float: right;" onchange="ampioSoratraUrl(this);return false;">
                   <?php
                    foreach ($CI->modal_model->getAnne() as $index => $candidat) { ?>
                      <option data-url="<?= base_url()?>note/saisie/<?= $parcour->parc_id ?>/<?= $candidat->anne_acc ?>"><?= $candidat->anne_acc ?></option>
                  <?php } ?>
                 </select>
               </li>
              <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</div>
