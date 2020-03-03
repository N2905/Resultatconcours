<div class="col-md-6 card">
    <h5 class="card-header">Featured</h5>
    <?php
    if ($this->session->flashdata('register_info')){ ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('register_info') ?>
        </div>
    <?php }
    echo validation_errors('<div class="alert alert-danger">', '</div>');
    ?>
    <form method="post" action="<?= base_url('register') ?>" class="form-signin">
        <div class="form-group">
            <label for="username">Login</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label for="inputEmail">Email address</label>
            <input type="email" class="form-control" name="email" id="inputEmail">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" name="password" id="inputPassword">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password again</label>
            <input type="password" class="form-control" name="passwordagain" id="inputPassword">
        </div>
        <input type="submit" value="Enregistrer" class="btn btn-lg btn-primary btn-block">
    </form>
</div>
