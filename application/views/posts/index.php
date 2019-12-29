<?php require APPPATH. '/views/inc/header.php'; ?>
<?php if($this->session->flashdata('success')){
        echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
    }  
?>
<?php if($this->session->flashdata('delete_success')){
        echo '<div class="alert alert-success">'.$this->session->flashdata('delete_success').'</div>';
    }  
?>
  <div class="row mb-3">
    <div class="col-md-6">
      <h1>Posts</h1>
    </div>
    <div class="col-md-6">
      <a href="<?php echo base_url(); ?>posts/add" class="btn btn-primary pull-right">
        <i class="fa fa-pencil"></i> Add Post
      </a>
    </div>
  </div>
  <?php foreach($posts as $post) : ?>
    <div class="card card-body mb-3">
      <h4 class="card-title"><?php echo $post['title']; ?></h4>
      <div class="bg-light p-2 mb-3">
        Written by <?php echo $post['name']; ?> on <?php echo $post['created_at']; ?>
      </div>
      <p class="card-text"><?php echo $post['body']; ?></p>
      <a href="<?php echo  base_url(); ?>posts/show/<?php echo $post['id']; ?>" class="btn btn-dark">More</a>
    </div>
  <?php endforeach; ?>
  <?php require APPPATH. '/views/inc/footer.php'; ?>