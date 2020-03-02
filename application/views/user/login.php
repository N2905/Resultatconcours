<div id="login-full-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div id="login-box">
                    <div id="login-box-holder">
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <header id="login-header">
                                    <div id="login-logo">
                                        <h2 class="form-signin-heading">INSPC</h2>
                                    </div>
                                </header>
                                <div id="login-box-inner">
                                    <!-- login -->
                                    <div id="mainConnect">
                                        <!--  -->
                                        <?php
                                            if ($this->session->flashdata('register_info')){ ?>
                                                <div class="alert alert-success">
                                                    <?= $this->session->flashdata('register_info') ?>
                                                </div>
                                            <?php }
                                                echo validation_errors('<div class="alert alert-danger">', '</div>');
                                        ?>
                                        <!--  -->
                                        <?php
                                        $attributes = array('class' => 'form-signin');
                                        echo form_open('login-post', $attributes);
                                        if ($this->session->flashdata('login_info')){ ?>
                                            <div class="alert alert-danger">
                                                <?= $this->session->flashdata('login_info') ?>
                                            </div>
                                        <?php }
                                            // echo $this->session->flashdata('login_info');
                                            echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                                            <div class="input-group col-md-12">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-user mx-auto"></i>
                                                    </div>
                                                </div>
                                                    <?php
                                                      $data = array(
                                                                'name'          => 'username',
                                                                'id'            => 'username',
                                                                'class'         => 'form-control',
                                                                'placeholder'   => 'Username'
                                                                //'required'      => 'required'
                                                            );
                                                        echo form_input($data);
                                                    ?>
                                        	</div>
                                            <div class="input-group col-md-12">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-key mx-auto"></i>
                                                    </div>
                                                </div>
                                            	<?php
                                             	  $attributes = array(
                                                            'class' => 'sr-only'
                                                    );
                                                ?>

                                                <?php
                                                    echo form_label('Password', 'inputPassword', $attributes);
                                                    $data = array(
                                                            'type'          => 'password',
                                                            'name'          => 'password',
                                                            'id'            => 'inputPassword',
                                                            'class'         => 'form-control',
                                                            'placeholder'   => 'Password'
                                                            //'required'      => 'required'
                                                    );
                                                    echo form_input($data);
                                                ?>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php
                                                        $data = array(
                                                                'class'         => 'btn btn-lg btn-success  btn-block',
                                                                'value'      => 'Se connecter'
                                                            );
                                                        echo form_submit($data);
                                                    ?>
                                                </div>
                                                <div id="col-md-12">
                                                    <a class="col-md-12 text-right" href="#" data-toggle="modal" data-target="#exampleModal">Créer un compte</a>
                                                </div>
                                            </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block-popup"></div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h2 class="modal-title" id="exampleModalLabel">Création compte</h2>
      </div>
      <div class="modal-body">
        <form method="post" id="form-signin" action="<?= base_url('register') ?>" class="form-signin">

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="lastname">Prénom</label>
                <input type="text" class="form-control" name="lastname">
            </div>
            <div class="form-group">
                <label for="username">Identifiant</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="inputEmail">Addresse e-mail</label>
                <input type="email" class="form-control" name="email" id="inputEmail">
            </div>
            <div class="form-group">
                <label for="inputPassword">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="inputPassword">
            </div>
            <div class="form-group">
                <label for="inputPassword">Répeter mot passe</label>
                <input type="password" class="form-control" name="passwordagain" id="inputPassword">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" onclick="$('#form-signin').submit();" class="btn btn-primary">Enregistrer</button>
      </div>
    </div>
  </div>
</div>
