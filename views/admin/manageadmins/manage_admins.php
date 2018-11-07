<?php include_once('header.php') ?>

<header class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-6-md">
                    <h3> <i class="fa fa-cog"></i> Manage Admins</h3>
                </div>
            </div>
        </div>
    </header>


<div class="container">
	<div class="row">

		<?php  
                 foreach ($m->result() as $row)  
                 {  
                    ?>
                    <ul id="myUL" style="list-style: none; padding: 0; margin: 0;">
                    <li id="cardv">
                        <div class="col-lg-3 col-sm-6">

				            <div class="card hovercard">
				                <div class="cardheader">
				                	<a class="del"><?php echo anchor('admin_controller/check_perm_admin/'.$row->id,' ',['class'=>'delete-btn fa fa-times']) ?></a>

				                </div>
				                <div class="avatar">
				                    <img alt="" src="https://www.w3schools.com/howto/img_avatar.png">
				                </div>
				                <div class="info">
				                	<input type="hidden" name="catid" value="<?php echo $row->id; ?>">
				                    <div class="title">
				                        <a style="text-decoration: none; color: black;"><?php echo $row->name?></a>
				                    </div>
				                    <div class="desc"><?php echo $row->username ?></div>
				                </div>
				                <div class="bottom">
				                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
				                        <i class="fa fa-twitter"></i>
				                    </a>
				                    <a class="btn btn-danger btn-sm" rel="publisher"
				                       href="https://plus.google.com/+ahmshahnuralam">
				                        <i class="fa fa-google-plus"></i>
				                    </a>
				                    <a class="btn btn-primary btn-sm" rel="publisher"
				                       href="https://plus.google.com/shahnuralam">
				                        <i class="fa fa-facebook"></i>
				                    </a>
				                </div>
				            </div>

        			</div>
                </li>
            </ul>
                    
         <?php }  
         ?>  

	</div>
</div>


<?php include_once('footer.php') ?>

