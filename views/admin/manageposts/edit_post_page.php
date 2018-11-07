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
		                                	<?php echo anchor('admin_controller/view_cat_data/'.$row->id.'/'.$row->category_name,$row->topic,['class'=>'check']); ?>
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

                                <h3>
                                	<?php echo $row->topic; ?>
                                </h3>

                            </div>
                        </div>



                        <div class="card-content">
                            <div class="card-desc">
                               
                                <form action="<?php echo base_url('admin_controller/update_post');?>" method="POST">

									<div class="form-group">
										<label for="body">Edit Post . . .</label>
										<input type="hidden" name="idedit" value="<?php echo $row->id; ?>">
										<input type="hidden" name="categoryname" value="<?php echo $row->category_name; ?>">
										<textarea name="editor2" class="form-control ckeditor" value=<?php echo $row->data;?> ></textarea>
										
									</div>
									<button class="btn btn-primary" type="submit" >Update</button>

								</form>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="card-desc">
                                <iframe width="775" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
								</iframe>
                            </div>
                        </div>
                   


			         <?php }  
			         ?>  
					
				</div>	
				
		
			</div>
		</div>
	</section>


	<script type="text/javascript">

    function go_back()
    {
        window.history.back();
    }
</script>

<?php include_once('footer1.php'); ?>