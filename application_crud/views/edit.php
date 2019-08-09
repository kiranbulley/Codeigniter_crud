<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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

<h3>Update User</h3>

        <hr />
    <div class="row">
        <div class="col-md-6">
          <form method="post" action="http://localhost:8888/CodeIgniter-new/index.php/users/edit/<?php echo $users['id'] ?>">
            
            <div class="form-group">
            <label for="name">Name:</label>
            
            <input type="text" class="form-control" value="<?php echo set_value('name',$users['name']); ?>" id="name" placeholder="Enter Name" name="name">
            <?php echo form_error('name'); ?>
        </div>
            
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" value="<?php echo set_value('email',$users['email']); ?>" id="email" placeholder="Enter email" name="email">
            <?php echo form_error('email'); ?>
            </div>
            
             <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" value="<?php echo set_value('address',$users['address']); ?>" id="address" placeholder="Enter address" name="address">
         <?php echo form_error('address'); ?>    
        </div>
            
            <button type="submit" class="btn btn-default">Update</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>
