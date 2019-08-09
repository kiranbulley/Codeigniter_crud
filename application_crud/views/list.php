<!DOCTYPE html>
<html lang="en">
<head>
  <title>Curd Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   <script src="http://localhost:8888/CodeIgniter-ajax-crud/assets/js/script.js"></script>

  </head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Curd Example </a>
    </div>
    
  </div>
</nav>  

<div class="container">
    <div class="row">
    <div class="alert alert-success" style="display:none;">
</div>
<div class="col-6"><h3>All User</h3>

<div class="col-6">
    <!-- <a href="http://localhost:8888/CodeIgniter-new/index.php/Users/create" 
    class="btn btn-primary">Add User</a>  -->

     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Add User
  </button>

    </div>
</div>


        
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
        <td><a href="http://localhost:8888/CodeIgniter-new/index.php/users/edit/<?php echo $user['id'] ?>"     class="btn btn-primary">Edit</a></td>
        <td><a href="http://localhost:8888/CodeIgniter-new/index.php/users/delete/<?php echo $user['id'] ?>"  class="btn btn-primary">Delete</a></td>
      </tr>
        <?php } }?>
    </tbody>
  </table>
        </div>
    </div>
</div>


<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" method="post" class="form-horizontal" id="create_user">
    <div class="form-group">
      <label for="uname">Name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="name" >
      <!-- <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
     -->
     </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter password" name="email" >
       </div>

  <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter password" name="address" >
      </div>

    <button type="submit" id ="addUser" class="btn btn-primary">Submit</button>
  </form>

</div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  

</body>
</html>
