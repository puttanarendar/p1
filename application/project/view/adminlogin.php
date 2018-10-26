<!DOCTYPE html>
<html>
<head>
<title>Register Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-color:lightgreen;">
<div class="container">
 <div class="row">
  <div class="col-md-6">
    <div class="jumbotron" style="margin-top:100px;margin-left:300px;width:600px;">
      <h4 style="text-align:center;">Login</h4>
      <?php echo validation_errors('<div class="text-danger">','</div>');?>
      <form class="form-horizontal" action="<?= base_url().index_page().'/auth/login';?>"  method="post">
       <div class="form-group">
         <label class="control-label col-sm-2" for="email">Email:</label>
         <div class="col-sm-10"> 
          <input type="email" class="form-control"  name="email" required>
         </div>
      </div>
    <div class="form-group">
         <label class="control-label col-sm-2" for="password">Password:</label>
         <div class="col-sm-10"> 
          <input type="password" class="form-control" name="password" required>
         </div>
      </div>
    <div class="form-group"> 
       <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
        <label><input type="checkbox" required> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="login" >Login</button><a style="text-decoration:none;" href="<?= base_url().index_page().'/auth/login'; ?>">To Register</a>
    </div>
  </div>
</form>
    </div>
   </div>

</div>




</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
