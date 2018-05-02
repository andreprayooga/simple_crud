<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="<?php echo base_url() ?>assets/img/bootstrap.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Bootstrap
    </a>
  </nav>
  <main role="main" class="container">
    <div class="row">
      <div class="col">
        <?php echo  $error ?>
        <?php echo  validation_errors() ?>
        <?php echo form_open_multipart('Blog/update_view/'.$records[0]['id']);?>
        <div class="form-group">
          <label for="id">Id</label>
          <input type="text" class="form-control" id="id" name="id" value="<?php echo $records[0]['id'] ?>">
          <input type="hidden" name="old_id" value="<?php echo $records[0]['id']?>">
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input type="text" class="form-control" id="author" name="author" value="<?php echo $records[0]['author'] ?>">
        </div>
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" class="form-control" id="date" name="date" value="<?php echo $records[0]['date'] ?>">
        </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="<?php echo $records[0]['title'] ?>">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" id="content" name="content" rows="3" value="<?php echo $records[0]['content'] ?>">
          </textarea>
        </div>
        <img src="<?php echo base_url(); ?>/uploads/<?php echo $records[0]['image_file'] ?>" alt="File Tidak Ada" height="100px" width="100px">
        <div class="form-group">
          <label for="image_file">Image</label>
          <input type = "file" name = "image_file" size = "20" />
        </div>
        <input type="submit" name="update" value="Update" class="btn btn-success">
      </form>
    </div>
  </div>
</main>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>