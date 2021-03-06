<?php require APPPATH . 'views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <?php if($this->session->flashdata('success')){
                echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
            }  
        ?>
         <?php if($this->session->flashdata('failure')){
                echo '<div class="alert alert-danger">'.$this->session->flashdata('failure').'</div>';
            }  
        ?>
        <h2>Login</h2>
        <p>Please fill in your credentials to log in</p>
        <form action="<?php echo base_url(); ?>auth/login" method="post">
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty(form_error('email'))) ? 'is-invalid' : ''; ?>" value="<?php echo set_value('email'); ?>">
            <span class="invalid-feedback"><?php echo form_error('email'); ?></span>
          </div>
          <div class="form-group">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty(form_error('password'))) ? 'is-invalid' : ''; ?>" value="<?php echo set_value('password'); ?>">
            <span class="invalid-feedback"><?php echo form_error('password'); ?></span>
          </div>
          <div class="row">
            <div class="col">
              <input type="submit" value="Login" class="btn btn-success btn-block">
            </div>
            <div class="col">
              <a href="<?php echo base_url(); ?>auth/register" class="btn btn-light btn-block">No account? Register</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php require APPPATH . 'views/inc/footer.php'; ?>