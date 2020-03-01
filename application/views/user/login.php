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
                                        <img src="/images/website/bao/logo-bao.png" alt=""/>
                                    </div>
                                </header>
                                <div id="login-box-inner">
                                    <!-- login -->
                                    <div id="mainConnect">
                                        <?php
                                        $attributes = array('class' => 'form-signin');
                                        echo form_open('login-post', $attributes); ?>
                                        <!-- <form class="form-signin" method="POST"> -->
                                          <h2 class="form-signin-heading">Please Login</h2>
                                          <?php
                                            echo $this->session->flashdata('login_info');
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
                                                                'value'      => 'Login'
                                                            );
                                                        echo form_submit($data);
                                                    ?>
                                                </div>
                                                <div id="remember-me-wrapper">
                                                    <a class="col-12" href="<?php echo base_url(); ?>register">Register</a>
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
