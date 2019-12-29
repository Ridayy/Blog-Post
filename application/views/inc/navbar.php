<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>pages/about">About</a>
          </li>
        </ul>
        
        <ul class="navbar-nav ml-auto">
          <?php if(isset($_SESSION['user_id'])) : ?>
          <li class="nav-item">
              <a class="nav-link" href="#">Welcome User</a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>auth/logout">Logout</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>auth/register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>auth/login">Login</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>