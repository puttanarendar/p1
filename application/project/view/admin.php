<!DOCTYPE html>
<html>
<head>
<title>Add User</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-color:lightgreen;">
<div class="container">
 <div class="row">
  <div class="col-md-6">
    <div class="jumbotron" style="margin-top:100px;margin-left:300px;width:600px;">
      <h4 style="text-align:center;"><b>Add User</b></h4>
      <?= validation_errors('<div class="text-danger">','</div>');?>
      <form class="form-horizontal" action="<?= base_url().index_page().'/auth/save1';?>"  method="post" enctype="multipart/form-data" >
         <div class="form-group">
            <label class="control-label col-sm-2" for="username" >Username:</label>
           <div class="col-sm-10">
              <input type="text" class="form-control" id="username" name="username" required>
           </div>
        </div>
       <div class="form-group">
         <label class="control-label col-sm-2" for="email">Email:</label>
         <div class="col-sm-10"> 
          <input type="email" class="form-control" id="email" name="email" required>
         </div>
      </div>
    <div class="form-group">
         <label class="control-label col-sm-2" for="password">Password:</label>
         <div class="col-sm-10"> 
          <input type="password" class="form-control" id="password" name="password" required>
         </div>
      </div>
     <div class="form-group">
         <label class="control-label col-sm-2" for="confirmpassword">Confirm Password:</label>
         <div class="col-sm-10"> 
          <input type="password" class="form-control" id="cpassword" name="cpassword" required>
         </div>
      </div>
    <div class="form-group">
         <label class="control-label col-sm-2" for="file">Upload image:</label>
         <div class="col-sm-10"> 
          <input type="file" class="form-control" id="file" name="file"  required>
         </div>
      </div>
      <div class="form-group">
         <label class="control-label col-sm-2" for="file">Upload File:</label>
         <div class="col-sm-10"> 
          <input type="file" class="form-control" id="file" name="file1" >
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
      <button  class="btn btn-primary" name="upload" >Register</button> <a style="text-decoration:none;" href="<?= base_url().index_page().'/auth/login'; ?>">Already you having account</a>
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
