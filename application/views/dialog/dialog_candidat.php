<div class="modal fade" id="_choix_parcours" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h2 class="modal-title" id="exampleModalLabel">Critères</h2>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#parcours">Parcours</a></li>
          <li><a data-toggle="tab" href="#centre">Centre</a></li>
        </ul>

        <div class="tab-content">
          <div id="parcours" class="tab-pane fade in active">
             <ul class="list-group">
               <?php
                 $CI   = &get_instance();
                 $data = $CI->modal_model->getParcours();
                 foreach ($data as $parcour) {
               ?>
                <!-- <li class="list-group-item disabled">Cras justo odio</li> -->
                 <li class="list-group-item">
                   <a href="<?php echo base_url()?>candidat/listeCandidat/<?= $parcour->parc_id ?>"><?= $parcour->parc_nom ?></a>
                 </li>
               <?php } ?>
             </ul>
          </div>
          <div id="centre" class="tab-pane fade">
              ....
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
