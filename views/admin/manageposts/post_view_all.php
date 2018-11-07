<?php include_once('header1.php'); ?>
	
	<header class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-12-md">
                    <h3> <i class="fa fa-cog"></i> Manage Categories</h3>
                </div>
            </div>
        </div>
    </header>

 		<section id="section">
		<div class="container">
			<div class="row">
				<div class="col-md-3 scrollable fixpos" >
					
					<table id="dtBasicExample" class="table table-sm table-hover " cellspacing="0" width="100%">
						  
						  <tbody>
						     <tr class="tabd">   

						     	<div class="card-content">
				        			<div class="card-desc1">
				                    <p>

				                    	<strong>Table Of Content</strong>
				                    </p>
				                </div>
						            <?php  
						         foreach ($o->result() as $row)  
						         {  
						            ?><tr class="tabd">   
						            	<div class="card-content1">
                            			<div class="card-desc1">
		                                <a>
		                                	<?php echo anchor('admin_controller/view_cat_data/'.$row->id.'/'.$row->category_name.'/'.$row->topic_group,$row->topic,['class'=>'check']) ?>
		                                </a>
			                            </div>
	                       			 </div>
									</tr>  
						         <?php }  
						         ?>  
						     </tr>  						 
						  </tbody>
						</table>

				</div>

				<div class="col-md-9 scrollable2">



					<?php  
			         foreach ($q->result() as $row)  
			         {  
			            ?>

			           <div class="card-content">
                            <div class="card-desc">
                            	

                            	<button class="del"><?php echo anchor('admin_controller/check_perm_delete/'.$row->id.'/'.$row->category_name,' ',['class'=>'delete-btn fa fa-times']) ?></button>

                            	<button class="del"><?php echo anchor('admin_controller/edit_post/'.$row->id.'/'.$row->category_name,' ',['class'=>'edit-btn fa fa-edit']) ?></button>

                                <h3>
                                	<?php echo $row->topic; ?>
                                </h3>

                            </div>
                        </div>



                        <div class="card-content">
                            <div class="card-desc">
                                <p>
                                	<?php echo $row->data; ?>
                                </p>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="card-desc">
                                <iframe width="775" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
								</iframe>

								<div class="col-md-2" style="float: left; margin-top: 20px;">
									<a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModel">
										<i class="fa fa-angle-double-left"></i>  Previous
									</a>
								</div>	

								<div class="col-md-2" style="float: right; margin-top: 20px;">
									<a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModel">
										<i class="fa fa-angle-double-right"></i>  Next
									</a>
								</div>	
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="card-desc">
                                

								
                            </div>
                        </div>
                   


			         <?php }  
			         ?>  
					
				</div>	
				
		
			</div>
		</div>
	</section>

<?php include_once('footer1.php'); ?>