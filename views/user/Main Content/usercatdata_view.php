<?php include_once('header.php') ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/usercatdata.css') ?>">


<div class="container" id="blured">
<div class="row">
                  	
           <div class="col-md-3" id="cont">
            <div style="margin-top:0px !important; margin-left: -10px !important; margin-bottom: -40px !important;">
                <form class="navbar-form" role="search">
                    <div class="input-group"">
                        <input autocomplete="off" style="width:210px !important;" type="text" class="form-control" placeholder="Search" name="q" id="myInput" onkeyup="myFunction()">
                        <div class="input-group-btn">
                            <button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
           <table id="dtBasicExample" class="table table-hover table-sm table-condensed" cellspacing="0" width="100%">

                  <tbody id="contentlib">
                  	<tr id="title">
           				<div class="card-content" id="heding">
			                <div class="card-desc">
			                  	<h4><?php echo $_SESSION['catname']; ?></h4>
               				 </div>
            			</div>
           			</tr>
                  	<?php 
                  		foreach ($o->result() as $row)  
                 		{  
                 			?>
             		<tr>
                  <td style="padding:0 !important;">
         				<div class="card-content">
  		                <div class="card-desc">
		                  	<h5><?php echo $row->topic  ?></h5>
           				 </div>
        			</div>
              </td>
       			</tr>

       			<?php  
       		}
                  	 ?>
		       
		         	 </tbody>
            </table>
        	</div>

        		<div class="col-md-9" id="viewcontent">
					<?php  
			         foreach ($p->result() as $row)  
			         {  
			            ?>

			           <div class="card-content1" id="heding">
                            <div class="card-desc">
                                <h3>
                                	<?php echo $row->topic; ?>
                                </h3>
                            </div>
                        </div>
                        <div class="card-content1">
                            <div class="card-desc1">
                              <?php echo $row->data; ?>
                            </div>
                        </div>

                        <div class="card-content1">
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
</body>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dtBasicExample");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("h5")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<?php include_once('footer.php'); ?>