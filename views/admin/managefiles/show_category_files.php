<?php include_once('header.php'); ?>


<header class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-6-md">
                    <h3> <i class="fa fa-cog"></i> Manage Assignment Files</h3>
                </div>
            </div>
        </div>
    </header>



	<section class="details-card">
    <div class="container">
        <div class="row">
            <?php  
                 foreach ($k->result() as $row)  
                 {  
                    ?>
                    <ul id="myUL" style="list-style: none; padding: 0; margin: 0;">
                    <li>
                        <div class="col-md-4">
                            <div class="card-content">
                            <div class="card-desc">
                                <input type="hidden" name="catname" value="<?php echo $row->category_name; ?>">
                                <h3 id="namecat">
                                    <a style="text-decoration: none !important;" href="<?php echo base_url('admin_controller/show_files/'.$row->category_name);?>">
                                        <?php echo $row->category_name ?>
                                    </a>
                                </h3>
                    
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
                    
         <?php }  
         ?>  
        </div>
    
    </div>
</section>


<?php include_once('footer.php'); ?>