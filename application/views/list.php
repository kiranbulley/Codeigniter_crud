<!DOCTYPE html>
<html lang="en">
<head>
  <title>Curd Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Curd Example</a>
    </div>
    
  </div>
</nav>  

<div class="container">
    <div class="row">
    
<div class="col-6"><h3>All User</h3></div>
<div class="col-6">
    <a href="http://localhost:8888/CodeIgniter-new/index.php/Users/create" 
    class="btn btn-primary">Add User</a> 

    </div>
</div>


        <hr />
    <div class="row">
        <div class="col-md-8">
          <table class="table table-striped">
    <thead>
      <tr>
          <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th width="100">Edit</th>
        <th width="100"> Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php if(!empty($users)){ 
            
            foreach($users as $user){?>
      <tr>
          <th><?php echo $user['id']; ?></th>
        <td><?php echo $user['name']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td><?php echo $user['address']; ?></td>
        <td><a href="http://localhost:8888/CodeIgniter-new/index.php/users/edit/<?php echo $user['id'] ?>"   type="button" class="btn btn-info">Edit</a></td>
        <td><a href="http://localhost:8888/CodeIgniter-new/index.php/users/delete/<?php echo $user['id'] ?>" type="button" class="btn btn-danger">Delete</a></td>
      </tr>
        <?php } }?>
    </tbody>
  </table>
        </div>
    </div>
</div>


</body>
</html>
