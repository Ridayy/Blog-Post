<?php require APPPATH . 'views/inc/header.php'; ?>
<a href="<?php echo base_url(); ?>posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<br>
<h1><?php echo $post['title']; ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
  Written by <?php echo $post['name']; ?> on <?php echo $post['created_at']; ?>
</div>
<p><?php echo $post['body']; ?></p>

<?php if($post['user_id'] == $_SESSION['user_id']) : ?>
  <hr>
  <a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['id']; ?>" class="btn btn-dark">Edit</a>

  <form class="pull-right" action="<?php echo base_url(); ?>/posts/delete/<?php echo $post['id']; ?>" method="post">
    <input type="submit" value="Delete" class="btn btn-danger">
  </form>
<?php endif; ?>

<?php require APPPATH . 'views/inc/footer.php'; ?>