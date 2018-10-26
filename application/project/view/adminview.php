<!DOCTYPE html>
<html>
<head>
<title>Register Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
table tr th{
	text-align:center;
	} 
table tr th{
	text-transform:Uppercase;
	}
</style>
</head>
<body style="background-color:lightgreen;">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin Page</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
		<li style="margin-top:20px;font-size:20px;"></li>
		<li class="fa fa-user-circle" style="font-size:40px;margin-top:20px;"></li>
      <li><a href="<?= base_url().index_page().'/auth/logout';?>"><button class="btn btn-danger" style="margin-top:10px;">Logout</button></a></li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-8">
			<a href="<?= base_url().index_page().'/auth/index';?>"><button class ="btn btn-primary">Add User</button></a>
		</div>
	</div>
</div>
<table border="5"  style ="margin-left:300px;width:800px;height:40vh;text-align:center;background-color:white;margin-top:60px;background-image:transparent;color:black;font-size:18px;">
<tr>
<th style="width:40px;text-align:center;height:8vh;">id</th>
<th>Username</th>
<th>Email</th>
<th>image</th>
<th>Update</th>
<th>Delete</th>
</tr>
<?php $i=1;?>
<?php foreach ($results as $r): ?>

<tr>
<td><?= $i;?></td>
<td><?= $r->username;?></td>
<td><?= $r->email;?></td>
<td><img class="img-thumbnail" style ="width:100px;height:20vh;" src="<?= base_url().'/uploads/'.$r->file;?>"/></td>
<td style="color:white;padding:20px;"><a href="<?= base_url().index_page().'/auth/edit?id='.$r->id;?>"><button class ="btn btn-primary">Edit</button></a></td>
<td style="padding:20px;"><a href="<?= base_url().index_page().'/auth/deleteuser?id='.$r->id;?>"><button class ="btn btn-success">Delete</button></a></td>
</tr>
<?php $i++;?>
<?php endforeach;?>
</table>
	
	
	
	
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
  function popup(){
		var n1=document.getElementById('btn1');
		n1.comfirm('u want to delete the user');
		}
 popup();
</script>
</body>
</html>
