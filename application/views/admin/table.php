<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DataTable</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">MyCodeIgniter</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url('index.php/Admin_user/Index') ?>">Home</a></li>
        <li class="active"><a href="#">Blog</a></li>
        <li><a href="<?php echo base_url('index.php/Admin_user/user') ?>">User</a></li>
      </ul>
    </div>
  </nav>
  <main role="main" class="container">
     <a href="<?php echo base_url('index.php/blog/add_view') ?>" class="btn btn-primary mb-3 ml-3"><i class="glyphicon glyphicon-plus"></i> Add Blog</a>
    <br></br>
    <table id="dt-basic" class="table table-striped table-bordered" width="100%">
     <thead>
       <tr>
         <th>ID</th>
         <th>Author</th>
         <th>Date</th>
         <th>Title</th>
         <th>Image</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>
      <?php foreach ($records as $d) : ?>
       <tr>
         <td><?php echo $d['id'] ?></td>
         <td><?php echo $d['author'] ?></td>
         <td><?php echo $d['date'] ?></td>
         <td><?php echo $d['title'] ?></td>
         <td><?php echo $d['image_file'] ?></td>
         <td>
      <a class="btn btn-sm btn-warning mb-1" href="<?php echo base_url('index.php/Blog/update_view/'.$d['id']) ?>"><i class="glyphicon glyphicon-pencil"></i> Edit </a>
       <a class="btn btn-sm btn-info mb-1" href="<?php echo base_url('index.php/Blog/byId/'.$d['id']) ?>"><i class="glyphicon glyphicon-zoom-in"></i> View</a>
            <a class="btn btn-sm btn-danger mb-1" href="<?php echo base_url('index.php/Blog/delete_action/'.$d['id']) ?>"><i class="glyphicon glyphicon-trash"></i> Delete </a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</main>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#dt-basic').DataTable();
  } );
</script>
</body>
</html>