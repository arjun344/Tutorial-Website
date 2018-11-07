  <div class="modal fade" id="login-modal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                
                <div class="modal-header bg-success text-black">
                  <button class="close" data-dismiss="modal"><span>&times;</span></button>
                  <h3 class="modal-title">Welcome</h3>  
                </div>

                <div class="modal-body">
                  <div class="row">
                  <div class="col-xs-6">
                      <div class="well">

                         <?php 
                            $attributes = array('id' => 'Login');
                            echo form_open('user_login_controller/login_pro',$attributes); 
                          ?>

                          <?php 
                          if($login_error = $this->session->flashdata('login_error')) {?>

                            <div class="alert alert-danger">
                              <?php echo $this->session->flashdata('login_error') ?>
                              
                            </div>
                          <?php } 

                          else if($blank_error = $this->session->flashdata('blank_error')) {?>

                            <div class="alert alert-danger">
                              <?php echo $blank_error ?>
                              
                            </div>
                          <?php } 
                          ?>
                    
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <?php 
                                    echo form_input(['type'=>'email', 'class'=>'form-control', 'id'=>'inputEmail', 'placeholder'=>'Email Address','name'=>'Username']);
                                  ?>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <?php 
                                      echo form_input(['type'=>'password', 'class'=>'form-control', 'id'=>'inputPassword', 'placeholder'=>'Password','name'=>'Password']);
                                    ?>
                                  <a style="text-decoration: none;color: grey;" href="">Forgot Password ?</a>
                              </div>
                              <div>
                                <button type="submit" class="btn btn-success btn-block" id="loginbut">Login</button>
                              <button class="btn btn-success btn-block" id="signupbut" data-toggle="modal" data-dismiss="modal" data-target="#signup-modal">Sign Up</button>
                              </div>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">

                    <img src="http://www.izkocluk.com/wp-content/uploads/2017/09/e%C4%9Fitim.gif">
                      
                  </div>
              </div>
                </div>


            </div>
            
        </div>
    </div>


      <div class="modal fade" id="signup-modal" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                
                <div class="modal-header bg-success text-black">
                  <button class="close" data-dismiss="modal"><span>&times;</span></button>
                  <h3 class="modal-title">Welcome</h3>  
                </div>

                <div class="modal-body">
                  <div class="row">
                  <div class="col-xs-6">
                      <div class="modal-body">
          <form action="<?php echo base_url('admin_controller/add_user');?>" method="POST">

            <div class="form-group">
              <label for="name" class="form-control-label">Name</label>
              <input type="name" name="user_name" class="form-control">
            </div>

            <div class="form-group">
              <label for="username" class="form-control-label">Username/Email</label>
              <input type="username" name="user_email" class="form-control">
            </div>

            <div class="form-group">
              <label for="password" class="form-control-label">Password</label>
              <input type="password" name="user_password" class="form-control">
            </div>

            <div class="form-group">
              <label for="cpassword" class="form-control-label">Confirm Password</label>
              <input type="cpassword" name="cuser_password" class="form-control">
            </div>
          

        <div>
            <button type="submit" class="btn btn-success btn-block" id="loginbut" data-toggle="modal">Sign Up</button>
            </div>
        </form>
        </div>
                  </div>
                  <div class="col-xs-6">

                    <img src="http://www.izkocluk.com/wp-content/uploads/2017/09/e%C4%9Fitim.gif">
                      
                  </div>
              </div>
                </div>


            </div>
            
        </div>
    </div>
</body>

  <input type="hidden" id="check" value="<?php 
  if ($_SESSION['userid'] == 0)
    {
      $output="0";
      echo htmlspecialchars($output);
    }
  else
  {
    $output="1";
    echo htmlspecialchars($output);
  }

 ?>">

 <input type="hidden" id="check" value="<?php 
  if ($_SESSION['username'] == "0")
    {
      $output="0";
      echo htmlspecialchars($output);
    }
  else
  {
    
    echo htmlspecialchars($_SESSION['username']);
  }

 ?>">


<script>
    $("document").ready( function () {
      var flag = document.getElementById("check");
      var myData = flag.value;
            if (myData==0) {
                 $('#login-modal').modal('show');
            }
    }); 
</script>