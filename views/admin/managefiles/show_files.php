<?php include_once('header.php'); ?>

	<header class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-6-md">
					<h3> <i class="fa fa-cog"></i> Manage Assignments</h3>
				</div>
			</div>
		</div>
	</header>


	<section id="posts">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4>Uploaded Assignments 
							</h4>
						</div>

						<div class="table-responsive">
						<table id="dtBasicExample" class="table table-striped table-sm table-hover " cellspacing="0" width="100%">
						  <thead>
						    <tr>
						      <th class="th-sm">Title
						        <i class="fa fa-sort float-right" aria-hidden="true"></i>
						      </th>
						      <th class="th-sm">Topic
						        <i class="fa fa-sort float-right" aria-hidden="true"></i>
						      </th>
						      <th class="th-sm">Category
						        <i class="fa fa-sort float-right" aria-hidden="true"></i>
						      </th>
						      <th class="th-sm">File
						        <i class="fa fa-sort float-right" aria-hidden="true"></i>
						      </th>
						      <th class="th-sm">
						      </th>
						    </tr>
						  </thead>
						  <tbody>
						     <?php  
						         foreach ($filenames->result() as $row)  
						         {  
						            ?><tr class="tabd">   
						            <td><?php echo $row->title;?></td>
						            <td><?php echo $row->topic;?></td>
						            <td><?php echo $row->category_name;?></td>
						            <td><i class="fa fa-file-pdf"></i> <?php echo $row->assignment;?></td> 
						             <td class="btn btn-primary" style="margin-top: 7px;"><a style="text-decoration: none !important;color: white;" href="<?php echo base_url('assets/files/'.$row->assignment);?>" download>View</a></td>
						            <td><a href=""><?php echo anchor('admin_controller/check_perm_file/'.$row->id,'Delete',['class'=>'btn btn-warning']) ?> </td>
						            </tr>  

						         <?php }  
						         ?>  
						  </tbody>
						</table>


					</div>

					</div>
				</div>	
			</div>
		</div>
	</section>

</body>
</html>


<?php include_once('footer.php'); ?>