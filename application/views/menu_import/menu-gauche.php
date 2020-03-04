<div class="col-sm-12 col-md-3 col-lg-3">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Parametrage concours
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="<?php echo base_url()?>mention">Mention</a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php echo base_url()?>parcours" >Parcours</a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php echo base_url()?>centre">Centre</a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php echo base_url()?>epreuve">Epreuve</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- fin menu-Paramétrage -->
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" onclick="">
                       Traitement candidat(e)
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="<?php echo base_url()?>candidat" >Candidat</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" data-toggle="modal" data-target="#_choix_parcours">liste candidat</a><!-- <?php #echo base_url()?>candidat/listeCandidat -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Traitement note
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="<?php echo base_url()?>note/saisie" >Saisie</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" >Modification</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!----menu-gauche.php-->
<?php $this->view('/dialog/dialog_candidat'); ?>