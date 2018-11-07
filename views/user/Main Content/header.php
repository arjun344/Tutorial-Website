<!DOCTYPE html>
<html>
<head>
	<title>Landing Page | User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/landing.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/usertopic.css'); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src=""></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-centre">
                    <li><a href="<?php echo base_url('user_controller');?>"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href=""><i class="fa fa-question"></i> Ask</a></li>
                    <li><a href="<?php 
                    if ($_SESSION['userid'] == 1)
                    {
                                foreach ($userdata->result() as $value)  
                                {
                                    echo base_url('user_controller/content_librarylogin/'.$value->username);
                                }}?>"><i class="fa fa-paperclip"></i> Contents</a></li>
                    <li><a href=""><i class="fa fa-code"></i> Code Examples</a></li>
                    <li><a href=""><i class="fa fa-pen-nib"></i> Online Tests</a></li>
                    <li><a href="<?php echo base_url('user_controller');?>"><i class="fa fa-file-alt"></i> Assignments</a></li>
                    <li><a href=""><i class="fa fa-info"></i> Contacts</a></li>
                    <li><a href="<?php echo base_url('admin_controller'); ?>"><i class="fa fa-plus"></i> Add Content</a></li>
                    <li><a href="https://www.tutorialspoint.com/whiteboard.htm" target="_blank" title="Free Online Whiteboard"><i class="fa fa-chalkboard"></i> <span> Whiteboard</span></a></li>
                    <li><a href=""><i class="fa fa-angle-right"></i> BBS</a></li>
                    <?php 
                      if ($_SESSION['userid'] == 0)
                        {
                          ?>
                          <li style="margin-left:120px;">
                          <a href="" data-toggle="modal" data-target="#login-modal" id="navlogin"><i class="fa fa-sign-in-alt"></i> Login</a></li>
                          <?php
                        }
                      else
                      {
                        ?>
                        <li>
                          <a style="hover:none;" href="#" data-toggle="dropdown" id="navlogin">
                             <span class="glyphicon glyphicon-user"></span> <?php 

                            foreach ($userdata->result() as $value) {

                               echo "Welcome ".substr($value->name, 0, strrpos($value->name, ' '));
                            }
                         ?></a></li>
                         <li><a href="<?php echo base_url('user_controller/logout'); ?>"><i class="fa fa-sign-out-alt"></i></a></li>
                        <?php
                      }

                     ?>
                </ul>
            </div>
        </div>
    </nav>
  
  