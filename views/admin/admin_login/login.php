<?php include_once 'header.php'; ?>
<div class="container">
		<body id="LoginForm">
			<div class="container">
				<div class="login-form">
				<div class="main-div">
				    <div class="panel">
				   <h2>Admin Login</h2>
				   <p>Please enter your email and password</p>
				   </div>

				   <?php 
				   		$attributes = array('id' => 'Login');
				   		echo form_open('login_controller/login_pro',$attributes); 
				   	?>

				   	<?php 
				   	if($login_error = $this->session->flashdata('login_error')) {?>

				   		<div class="alert alert-danger">
				   			<?php echo $login_error ?>
				   			
				   		</div>
				   	<?php } 

				   	else if($blank_error = $this->session->flashdata('blank_error')) {?>

				   		<div class="alert alert-danger">
				   			<?php echo $blank_error ?>
				   			
				   		</div>
				   	<?php } 
				   	?>

				 <!-- <form id="Login"> --> 

				        <div class="form-group">

				        	<?php 
				        		echo form_input(['type'=>'email', 'class'=>'form-control', 'id'=>'inputEmail', 'placeholder'=>'Email Address','name'=>'Username']);
				        	?>
				          <!--  <input type="email" class="form-control" id="inputEmail" placeholder="Email Address"> -->
				   

				        </div>

				        <div class="form-group">

				        	<?php 
				        		echo form_input(['type'=>'password', 'class'=>'form-control', 'id'=>'inputPassword', 'placeholder'=>'Password','name'=>'Password']);
				        	?>

				         <!--   <input type="password" class="form-control" id="inputPassword" placeholder="Password"> -->
			

				        </div>
				        <div class="forgot">
				        	<a href="">Forgot password?</a>
						</div>
				        
				        <button type="submit" class="btn btn-primary">Login</button>

				    </form>
				 </div>
			</div>


		</body>



<?php include_once 'footer.php';?>