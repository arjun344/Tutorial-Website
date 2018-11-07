<?php include_once('header.php') ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/content_library.css') ?>">


<div class="container">
<div class="row">
  <div style="margin-top: -30px !important;margin-left:22%;">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input autocomplete="off" type="text" class="form-control" placeholder="Search" name="q" id="myInput" onkeyup="myFunction()">
                        <div class="input-group-btn">
                            <button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
                  	<?php 
                  	$k=0; 
                 foreach ($content as $value)  
                 {  
                 	?>
                 	<div class="col-md-3">
           <table id="dtBasicExample" class="table table-hover table-sm table-condensed" cellspacing="0" width="100%">

                  <tbody id="contentlib">
                  	<tr id="title">
           				<div class="card-content" id="heding">
			                <div class="card-desc">
			                  	<h4><?php echo $catname[$k];$k=$k+1; ?></h4>
               				 </div>
            			</div>
           			</tr>
           			<?php  
                 	foreach ($value as $value2) 
                 	{
                 	?>
                 		 <tr>
           				<div class="card-content">
			                <div class="card-desc">
			                  	<h5><i class="fa fa-angle-right"></i> <?php echo $value2;?></h5>
               				 </div>
            			</div>
           			</tr> 
		         <?php } 

		         	?>
		         	 </tbody>
                </table>
        	</div>
        	<?php

		     		} 
		         ?>  
                 

       </div>
</div>

<?php include_once('footer.php'); ?>