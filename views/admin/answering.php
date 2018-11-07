<?php include_once('header.php'); ?>

	<div class="container">
		<nav class="navbar navbar-inverse navbar-fixed-top ">
			<div class="container">

				<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-target="#navdata" data-toggle="collapse">

					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					
				</button>
			</div>
			<a href="<?php echo base_url('admin_controller');?>" class="navbar-brand">Admin Portal</a>

			<div class="navbar-collapse collapse" id="navdata">
				<ul class="nav navbar-nav">
					<li class="active navd"><a href="index.php">Dashboard</a></li>
					<li class="navd"><a href="#">Post</a></li>
					<li class="navd"><a href="#">Category</a></li>
					<li class="navd"><a href="#">Users</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="navd"><a href="#"><i class="fa fa-user"></i>  Welcome Admin </a></li>
					<li class="navd"><a href="<?php echo base_url('admin_controller/logout');?>"><i class="fa fa-user-times"></i>  Logout </a></li>
				</ul>

			</div>
				
			</div>
		</nav>
	</div>


	<header class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-6-md">
					<h3> <i class="fa fa-cog"></i> <?php echo $result->query_id; echo "."; echo $result->query_data; ?></h3>
				</div>
			</div>
		</div>
	</header>


	<section id="posts">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="card">
						<div class="card-header">
						</div>

	<div>
	<form action="<?php echo base_url('admin_controller/add_answer');?>" method="POST">
				<div class="form-group">
					<label for="body">Answer Here . . .</label>
					<input type="hidden" name="ans_id" value=" <?php echo $result->query_id;?>">
					<textarea name="editor2" class="form-control ckeditor"></textarea>
					
				</div>

				<div class="form-group">
					
					<button class="btn btn-primary" type="submit" >Submit</button>
				</div>
					
		</form>
	</div>


	<script type="text/javascript">

	    function go_back()
	    {
	    	window.history.back();
	    }
	</script>

	<script type="text/javascript">
      CKEDITOR.replace( 'editor2' );
      CKEDITOR.add            
   </script>

<?php include_once('footer.php'); ?>