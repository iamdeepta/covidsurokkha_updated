<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include 'css_master.php'; ?>

  <?php include 'js_master.php';?>
</head>
<body>

<div class="container col-md-3">

  <div class="card" style="margin-top: 50%">
    <div class="card-header" style="text-align: center">
        <h6>Covid Bangladesh Admin Panel</h6>
      </div>
    <div class="card-body">

      <?php if(@$_GET['msg']){?>
      <div class="alert alert-danger">
  <?php echo $_GET['msg'];?>
</div>
<?php }?>
      
        <form method="post" action="user_login.php">
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" placeholder="Enter username" id="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password" required>
  </div>
  <!-- <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div> -->
  <button type="submit" class="btn btn-primary" name="submit_admin">Submit</button>
</form>
    </div>
    
  </div>
  
</div>

</body>
</html>