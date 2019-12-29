<?php require APPPATH . '/views/inc/header.php'; ?>
  <a href="<?php echo base_url(); ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="card card-body bg-light mt-5">
    <h2>Add Post</h2>
    <p>Create a post with this form</p>
    <form action="<?php echo base_url(); ?>/posts/add" method="post">
      <div class="form-group">
        <label for="title">Title: <sup>*</sup></label>
        <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty(form_error('title'))) ? 'is-invalid' : ''; ?>" value="<?php echo set_value('title'); ?>">
        <span class="invalid-feedback"><?php echo form_error('title'); ?></span>
      </div>
      <div class="form-group">
        <label for="body">Body: <sup>*</sup></label>
        <textarea name="body" class="form-control form-control-lg <?php echo (!empty(form_error('body'))) ? 'is-invalid' : ''; ?>"><?php echo set_value('body'); ?></textarea>
        <span class="invalid-feedback"><?php echo form_error('body'); ?></span>
      </div>
      <input type="submit" class="btn btn-success" value="Submit">
    </form>
  </div>
<?php require APPPATH . '/views/inc/footer.php'; ?>