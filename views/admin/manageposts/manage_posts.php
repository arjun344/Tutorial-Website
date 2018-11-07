<?php include_once('header.php'); ?>


<header class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-6-md">
                    <h3> <i class="fa fa-cog"></i> Manage Posts</h3>
                </div>
            </div>
        </div>
    </header>



	<section class="details-card">
    <div class="container">
        <div class="row">
            <ul id="myUL" style="list-style: none; padding: 0; margin: 0;">
            <?php  
                 foreach ($k->result() as $row)  
                 {  
                    ?>
                    <li>
                        <div class="col-md-4">
                            <div class="card-content">
                            <div class="card-desc">
                                <input type="hidden" name="catid" value="<?php echo $row->category_id; ?>">
                                <input type="hidden" name="catname" value="<?php echo $row->category_name; ?>">
                                <button class="del"><?php echo anchor('admin_controller/check_perm/'.$row->category_id,' ',['class'=>'delete-btn fa fa-times']) ?></button>
                                <h3 id="namecat"><?php echo $row->category_name; ?></h3>
                                <p><?php echo $row->category_data ?></p>
                                <button class="btn-card btn-primary" style="text-decoration: none;"><?php echo anchor('admin_controller/show_category_topic/'.$row->category_name,'View',['class'=>'removecol']) ?></button>   
                            </div>
                        </div>
                    </div>
                </li>
            
                    
         <?php }  
         ?>  
         </ul>
        </div>
    </div>
</section>


<?php include_once('footer.php'); ?>