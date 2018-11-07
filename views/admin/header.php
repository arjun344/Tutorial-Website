<!DOCTYPE html>
<html>
<head>
	<title>Admin Portal | dashBoard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin_portal.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/admin_table.js');?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/modal_custom.css');?>">

  <script type="text/javascript">
			$(document).ready(function() {
				CKEDITOR.replace( 'editor1');
				CKEDITOR.replace( 'ckeditor',{
				        skin: "kama"
				});

			});


		</script>
  
</head>

	<div class="container">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">

				<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-target="#navdata" data-toggle="collapse">

					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					
				</button>
			</div>
			<a href="#" class="navbar-brand">Admin Portal</a>

			<div class="navbar-collapse collapse" id="navdata">
				<ul class="nav navbar-nav">
					<li class="active navd"><a href="<?php echo base_url('admin_controller') ?>">Dashboard</a></li>
					<li class="navd"><a href="<?php echo base_url('admin_controller/manage_posts') ?>">Post</a></li>
					<li class="navd"><a href="<?php echo base_url('admin_controller/manage_admins') ?>">Admins</a></li>
					<li class="navd"><a href="<?php echo base_url('admin_controller/manage_users') ?>">Users</a></li>
					<li class="navd"><a href="<?php echo base_url('admin_controller/show_category_files') ?>">Files</a></li>
					<li class="navd"><a href="<?php echo base_url('user_controller') ?>">View</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="navd"><a href="#"><i class="fa fa-user"></i>  Welcome Admin </a></li>
					<li>
						<form class="navbar-form" role="search">
				        <div class="input-group">
				            <input type="text" class="form-control" placeholder="Search" name="q" id="myInput" onkeyup="myFunction()">
				            <div class="input-group-btn">
				                <button class="btn btn-default" disabled><i class="glyphicon glyphicon-search"></i></button>
				            </div>
				        </div>
				        </form>
					</li>
					<li class="navd"><a href="<?php echo base_url('admin_controller/logout');?>"><i class="fa fa-user-times"></i>  Logout </a></li>
				</ul>

			</div>
				
		</div>
		</nav>
	</div>
<body>
</body>