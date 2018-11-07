<?php include_once('header.php'); ?>
	<section class="details-card">
    <div class="container">
        <div class="row">
             <div style="margin-top: -4px !important;margin-left:22%;">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input autocomplete="off" type="text" class="form-control" placeholder="Search" name="q" id="myInput" onkeyup="myFunction()">
                        <div class="input-group-btn">
                            <button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
                <ul id="myUL" style="list-style: none; padding: 0; margin: 0;">
            <?php  
                 foreach ($catwise->result() as $row)  
                 {  
                    ?>
                    <li>
                        <div class="col-md-3" style="background: none !important; margin-top: 15px !important; " >
                            <div class="card-content" id="topics">
                            <div class="card-desc">
                                <input type="hidden" name="catname" value="<?php echo $row->category_name; ?>">
                                <h3 id="namecat">
                                    <a id="top" style="text-decoration: none !important;" href="<?php echo base_url('user_controller/usercat_view/'.$row->category_name.'/'.$row->topic_name)  ?>">
                                        <?php echo $row->topic_name ?>
                                    </a>
                                </h3>
                    
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

<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>



<?php include_once('footer.php'); ?>