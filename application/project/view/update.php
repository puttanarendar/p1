<!DOCTYPE html>
<html>
<head>
<title>Register Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:lightgreen;">
<div class="container">
 <div class="row">
  <div class="col-md-6">
    <div class="jumbotron" style="margin-top:100px;margin-left:300px;width:600px;">
      <h4 style="text-align:center;"><b>Update</b></h4>
      <?= validation_errors();?>
      <form class="form-horizontal" action="<?= base_url().index_page().'/auth/update/'.$results->id;?>"  method="post" enctype="multipart/form-data">
		  <? php $results as $r;?>
         <div class="form-group">
            <label class="control-label col-sm-2" for="username" >Username:</label>
           <div class="col-sm-10">
              <input  type="text" class="form-control" id="username" name="username"  value="<?= $results->username;?>">
           </div>
        </div>
       <div class="form-group">
         <label class="control-label col-sm-2" for="email">Email:</label>
         <div class="col-sm-10"> 
          <input type="email" class="form-control" id="email" name="email"  value="<?= $results->email;?>">
         </div>
      </div>
      <div class="form-group">
         <label class="control-label col-sm-2" for="email">Password:</label>
         <div class="col-sm-10"> 
          <input type="password" class="form-control" id="password" name="password"  value="<?= $results->password;?>">
         </div>
      </div>
      <div class="form-group">
         <label class="control-label col-sm-2" for="file">Upload File:</label>
         <div class="col-sm-10"> 
          <input type="file" class="form-control" id="password" name="file1" >
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
      <button  type ="submit" class="btn btn-primary" name="upload" id="btn1">Update</button>
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
