<?php include_once('header.php'); ?>

	<header class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-6-md">
					<h3> <i class="fa fa-cog"></i> Dashboard</h3>
				</div>
			</div>
		</div>
	</header>


	<section id="section">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModel">
						<i class="fa fa-plus"></i>  Add Post
					</a>
				</div>	
				<div class="col-md-2">
					<a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModel">
						<i class="fa fa-plus"></i>  Add Category
					</a>
				</div>
				<div class="col-md-2">
					<a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addTopicModel">
						<i class="fa fa-plus"></i>  Add Topic
					</a>
				</div>			
				<div class="col-md-2">
					<a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addUserModel">
						<i class="fa fa-plus"></i>  Add User
					</a>
				</div>	
				<div class="col-md-2">
					<a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addAdminModel">
						<i class="fa fa-plus"></i>  Add Admin
					</a>
				</div>
				<div class="col-md-2">
					<a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addFileModel">
						<i class="fa fa-upload"></i>  Upload
					</a>
				</div>		
		
			</div>
		</div>
	</section>


	<section id="posts">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="card">
						<div class="card-header">
							<h4>Latest Queries 
							</h4>
						</div>

						<div class="table-responsive">
						<table id="dtBasicExample" class="table table-striped table-sm table-hover" cellspacing="0" width="100%">
						  <thead>
						    <tr>
						      <th class="th-sm">Category
						        <i class="fa fa-sort float-right" aria-hidden="true"></i>
						      </th>
						      <th class="th-sm">Date Created
						        <i class="fa fa-sort float-right" aria-hidden="true"></i>
						      </th>
						      <th class="th-sm">Status
						        <i class="fa fa-sort float-right" aria-hidden="true"></i>
						      </th>
						      <th class="th-sm">
						      </th>
						    </tr>
						  </thead>
						  <tbody>
						     <?php  
						         foreach ($h->result() as $row)  
						         {  
						            ?><tr class="tabd">   
						            <td><?php echo $row->category;?></td>
						            <td><?php echo $row->date_created;?></td> 
						            <td><?php echo $row->status;?></td> 
						            <td><?php echo anchor('admin_controller/answer_query/'.$row->query_id,'Add answer',['class'=>'btn btn-primary']) ?> </td>
						            </tr> 
						            <tr class="tabd">   
						            <td><?php echo $row->category;?></td>
						            <td><?php echo $row->date_created;?></td> 
						            <td><?php echo $row->status;?></td> 
						            <td><?php echo anchor('admin_controller/answer_query/'.$row->query_id,'Add answer',['class'=>'btn btn-primary']) ?> </td>
						            </tr> 
						            <tr class="tabd">   
						            <td><?php echo $row->category;?></td>
						            <td><?php echo $row->date_created;?></td> 
						            <td><?php echo $row->status;?></td> 
						            <td><?php echo anchor('admin_controller/answer_query/'.$row->query_id,'Add answer',['class'=>'btn btn-primary']) ?> </td>
						            </tr>  
						         <?php }  
						         ?>  
						  </tbody>
						</table>


					</div>

					</div>
				</div>	


				<div class="col-md-3">
					<div class="card card-primary">
						<a href="<?php echo base_url('admin_controller/manage_posts');?> " style="text-decoration: none">
							<div class="card-block" id="manageposts">
							<h3>Manage Posts</h3>
							<h1 class="display-4"><i class="fa fa-pencil-alt"></i></h1>
						</div>
							
						</a>
					</div>

					<div class="card card-success">
						<a href="<?php echo base_url('admin_controller/show_category_files') ?>" style="text-decoration: none">
							<div class="card-block" id="managecategories">
							<h3>Manage Uploads</h3>
							<h1 class="display-4"><i class="fa fa-upload"></i></h1>
						</div>
						</a>
					</div>

					<div class="card card-warning">
						<a href="<?php echo base_url('admin_controller/manage_users') ?>" style="text-decoration: none">
							<div class="card-block" id="manageusers">
							<h3>Manage Users</h3>
							<h1 class="display-4"><i class="fa fa-user"></i></h1>	
						</div>
							
						</a>
					</div>
				</div>






			</div>
		</div>		
	</section>


	<div class="modal fade" id="addPostModel" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-primary text-white">
					<h5 class="modal-title">Add Post</h5>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>	
				</div>


				<div class="modal-body">
					<form action="<?php echo base_url('admin_controller/add_post');?>" method="POST">
						<div class="form-group">
							<label for="title" class="form-control-label">Title</label>
							<input type="text" name="postname" class="form-control">
						</div>

						<div class="form-group">
							<label for="category" class="form-control-label">Category</label>
							<select  class="form-control" name="categoryname">
								<?php  
							         foreach ($g->result() as $row)  
							         {  
							            ?>
							            <option><?php echo $row->category_name ?></option>
					         <?php }  
					         ?>  
							</select>
							
						</div>

						<div class="form-group">
							<label for="topic" class="form-control-label">Topic</label>
							<select  class="form-control" name="topicname">
								<?php  
							         foreach ($topiclist->result() as $row)  
							         {  
							            ?>
							            <option><?php echo $row->topic_name ?></option>
					         <?php }  
					         ?>  
							</select>
							
						</div>

						<div class="form-group">
							<label for="body">Body</label>
							<textarea name="editor1" class="form-control ckeditor"></textarea>
							
						</div>
					

				<div class="modal-footer">
					<button class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button class="btn btn-primary" type="submit" id="addpost" >Add Post</button>

				</div>
				</form>
				</div>

			</div>
			
		</div>
	</div>


	<div class="modal fade" id="addTopicModel" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-primary text-white">
					<h5 class="modal-title">Add Topic</h5>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>	
				</div>


				<div class="modal-body">
					<form action="<?php echo base_url('admin_controller/add_topic');?>" method="POST">
						<div class="form-group">
							<label for="title" class="form-control-label">Topic Name</label>
							<input type="text" name="postname" class="form-control">
						</div>

						<div class="form-group">
							<label for="category" class="form-control-label">Category</label>
							<select  class="form-control" name="categoryname">
								<?php  
							         foreach ($g->result() as $row)  
							         {  
							            ?>
							            <option><?php echo $row->category_name ?></option>
					         <?php }  
					         ?>  
							</select>
							
						</div>
					
				<div class="modal-footer">
					<button class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button class="btn btn-primary" type="submit" id="addpost" >Add Topic</button>

				</div>
				</form>
				</div>

			</div>
			
		</div>
	</div>



	<div class="modal fade" id="addCategoryModel" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-success text-white">
					<h5 class="modal-title">Add Category</h5>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>	
				</div>

				<div class="modal-body">
					<form action="<?php echo base_url('admin_controller/add_category');?>" method="POST">
						<div class="form-group">
							<label for="title" class="form-control-label">Title</label>
							<input type="title" name="category" class="form-control">
						</div>
						<div class="form-group">
							<label for="category_data" class="form-control-label">About</label>
							<textarea name="category_data" class="form-control"></textarea>
						</div>

				<div class="modal-footer">
					<button class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button class="btn btn-success" type="submit">Add Category</button>

				</div>

				</form>
				</div>

			</div>
			
		</div>
	</div>


	<div class="modal fade" id="addUserModel" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-warning text-white">
					<h5 class="modal-title">Add User</h5>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>	
				</div>

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
					

				<div class="modal-footer">
					<button class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button class="btn btn-warning" type="submit">Add User</button>

				</div>
				</form>
				</div>

			</div>
			
		</div>
	</div>


	<div class="modal fade" id="addAdminModel" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-warning text-white">
					<h5 class="modal-title">Add Admin</h5>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>	
				</div>

				<div class="modal-body">
					<form action="<?php echo base_url('admin_controller/add_admin');?>" method="POST">

						<div class="form-group">
							<label for="name" class="form-control-label">Name</label>
							<input type="name" name="Admin_name" class="form-control">
						</div>

						<div class="form-group">
							<label for="username" class="form-control-label">Admin/Email</label>
							<input type="username" name="Admin_email" class="form-control">
						</div>

						<div class="form-group">
							<label for="password" class="form-control-label">Password</label>
							<input type="password" name="Password" class="form-control">
						</div>

						<div class="form-group">
							<label for="cpassword" class="form-control-label">Confirm Password</label>
							<input type="cpassword" name="Password_conf" class="form-control">
						</div>
				

				<div class="modal-footer">
					<button class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button class="btn btn-success" type="submit">Add Admin</button>

				</div>
				</form>
				</div>

			</div>
			
		</div>
	</div>

	<div class="modal fade" id="addFileModel" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-primary text-white">
					<h5 class="modal-title">Upload File</h5>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>	
				</div>

				<div class="modal-body">
					<form action="<?php echo base_url('admin_controller/add_file');?>" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="title" class="form-control-label">Title</label>
							<input type="title" name="title" class="form-control" value="<?= set_value('title');?>">
						</div>
						<div class="form-group">
							<label for="category" class="form-control-label">Category</label>
							<select value="<?= set_value('categoryname');?>"  class="form-control" name="categoryname">
								<?php  
							         foreach ($g->result() as $row)  
							         {  
							            ?>
							            <option ><?php echo $row->category_name ?></option>
					         <?php }  
					         ?>  
							</select>
						</div>

						<div class="form-group">
							<label for="topic" class="form-control-label">Topic</label>
							<select  class="form-control" name="topicname">
								<?php  
							         foreach ($topiclist->result() as $row)  
							         {  
							            ?>
							            <option><?php echo $row->topic_name ?></option>
					         <?php }  
					         ?>  
							</select>
							
						</div>


						<div class="form-group files">
			                <label>Upload Your File </label>
			                <input  name="pdffile" title="Drag and Drop" type="file" class="form-control" multiple="" aria-describedby="filehelp">
			             </div>

							
				<div class="modal-footer">
					<button class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button class="btn btn-success" type="submit">Upload</button>

				</div>

				</form>
				</div>

			</div>
			
		</div>
	</div>



</body>
</html>

<?php include_once('footer.php'); ?>