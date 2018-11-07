<?php include_once('header.php'); ?>

    <div id="myCarousel" class="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" class="active"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img id="backim" src="https://i1.wp.com/edugog.com/wp-content/uploads/2018/06/educational-design-services.jpg?resize=1024%2C981&ssl=1">
            <div class="carousel-caption">
                
                <div>
                    <h4 id="stylish">
                        You are browsing the best resource for <b>Online Education</b>
                    </h4>
                </div>

                <div>
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="q" id="myInput">
                            <div class="input-group-btn">
                                <button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                        </form>
                </div>

                <div class="CircleCards container">
                    
                    <div class="col-md-2">
                       <a href="<?php echo base_url('user_controller/usercattopic_view/'.'Parallel Computing')  ?>">
                          <img src="http://www.neurosolutions.com/images/Computer-Networking.jpg" title="Parallel Computing Tutorials"> <br/><br>PC
                       </a>     
                    </div>
                    <div class="col-md-2">
                       <a href="<?php echo base_url('user_controller/usercattopic_view/'.'Data Structures')  ?>">
                          <img src="https://apprecs.org/gp/images/app-icons/300/b5/com.marcyliao.app.algnote.jpg"  title="Data Structure Tutorials"> <br/><br>Data Structures
                       </a>     
                    </div>
                    <div class="col-md-2">
                       <a href="<?php echo base_url('user_controller/usercattopic_view/'.'Web Development')  ?>">
                          <img src="https://static1.squarespace.com/static/54691977e4b0773873087bc2/t/54ab5fece4b08dbf5e1dd416/1420517356806/Doozy+Labs+Responsive+Website+Development+Icon" title="Web Development Tutorials"> <br/><br>Web Dev
                       </a>     
                    </div>
                    <div class="col-md-2">
                       <a href="<?php echo base_url('user_controller/usercattopic_view/'.'Deep Learning')  ?>">
                          <img src="https://cdn3.iconfinder.com/data/icons/artificial-intelligence-machine-learning/240/01_artificial_intelligence-512.png" title="Deep Learning Tutorials"> <br/><br>Deep Learning 
                       </a>     
                    </div>
                   <div class="col-md-2">
                       <a href="">
                          <img src="https://cdn.icon-icons.com/icons2/534/PNG/512/data-connection_icon-icons.com_52841.png"> <br/><br>Databases
                       </a>     
                    </div>
                    <div class="col-md-2">
                       <a href="<?php echo base_url('user_controller/usercattopic_view/'.'Operating Systems')?>">
                          <img src="https://www.epicor.com/uploadedImages/US/Images/Blogs/Icon-Circle-Blue-Research-Data-0417.png"> <br/><br>OS
                       </a>     
                    </div>
                 </div>
            </div>

          </div>
        </div>
    </div>

    <?php 
      if ($_SESSION['userid'] == 0)
      {
        ?>
          <div id="library">
        <h1><a href="<?php echo base_url('user_controller/content_library'); ?>" title="tutorialspoint library"><i class="fa fa-cubes"></i> Tutorials <b>Library</b> <br/></a></h1>
    </div>
    <?php  
      }
      ?>
    <?php 
      if ($_SESSION['userid'] == 1)
      {
        ?>
          <div id="library">
        <h1><a href="<?php 
        foreach ($userdata->result() as $value)  
        {
            echo base_url('user_controller/content_librarylogin/'.$value->username);
        }?> " title="tutorialspoint library"><i class="fa fa-cubes"></i> Tutorials <b>Library</b> <br/></a></h1>
    </div>
    <?php  
      }
      ?>

   <section class="details-card">
    <div class="container">
        <div class="row">
            <?php  
                 foreach ($k->result() as $row)  
                 {  
                    ?>
                    <ul id="myUL" style="list-style: none; padding: 0; margin: 0;">
                    <li>
                        <div class="col-md-6">
                            <div class="card-content">
                            <div class="card-desc">
                                <input type="hidden" name="catid" value="<?php echo $row->category_id; ?>">
                                <input type="hidden" name="catname" value="<?php echo $row->category_name; ?>">
                                <h3 id="namecat"><?php echo $row->category_name; ?></h3>
                                <p><?php echo $row->category_data ?></p>
                                <button class="btn-card btn-primary" style="text-decoration: none;"><?php echo anchor('user_controller/usercattopic_view/'.$row->category_name,'View',['class'=>'removecol']) ?></button>   
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


    <?php 
      if ($_SESSION['userid'] == 0)
      {
        ?>
          <div id="button">
        <a href="<?php echo base_url('user_controller/content_library');?>">
        <button class="btn btn-success" ><i class="fa fa-align-justify"></i> Browse All Library</button>
        </a>
    </div>
    <?php  
      }
      ?>
    <?php 
      if ($_SESSION['userid'] == 1)
      {
        ?>
          <div id="button">
        <a href="<?php 
        foreach ($userdata->result() as $value)  
        {
            echo base_url('user_controller/content_librarylogin/'.$value->username);
        }?>">
        <button class="btn btn-success" ><i class="fa fa-align-justify"></i> Browse All Library</button>
        </a>
    </div>
    <?php  
      }
      ?>

    <div id="button">
        <button class="btn btn-success"><i class="fa fa-code"></i> Coding Platform</button>
    </div>

    <div id="footerinfo">

        <div class="col-md-4">
            <div class="card-content">
                <div class="card-desc" id="footer-aboutus">
                   <h4 style="color: white;">About Us</h4>
                   <table id="dtBasicExample" class="table table-sm" cellspacing="0" width="100%">
                          <tbody id="content">
                            <tr class="tabd">   
                                    <td><a href=""><h4>Company</h4></a></td>
                            </tr> 
                            <tr class="tabd">   
                                    <td><a href=""><h4>Our Team</h4></a></td>
                            </tr> 
                            <tr class="tabd">   
                                    <td><a href=""><h4>Work With Us</h4></a></td>
                            </tr>  
                            <tr class="tabd">   
                                    <td><a href=""><h4>Privacy Policy</h4></a></td>
                            </tr>  
                          </tbody>
                        </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-content">
                <div class="card-desc" id="footer-aboutus">
                   <h4 style="color: white;">Extra Links</h4>
                   <table id="dtBasicExample" class="table table-sm" cellspacing="0" width="100%">
                          <tbody id="content">
                            <tr class="tabd">   
                                    <td><a href=""><h4>Articles</h4></a></td>
                            </tr> 
                            <tr class="tabd">   
                                    <td><a href=""><h4>Q/A</h4></a></td>
                            </tr> 
                            <tr class="tabd">   
                                    <td><a href=""><h4>Whiteboard</h4></a></td>
                            </tr>  
                          </tbody>
                        </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-content">
                <div class="card-desc" id="footer-aboutus">
                   <h4 style="color: white;">Contact Us</h4>
                   <table id="dtBasicExample" class="table table-sm" cellspacing="0" width="100%">
                          <tbody id="content">
                            <tr class="tabd">   
                                    <td><a href=""><h4>National Institute Of technology,
                                    Surathkal Karnataka,Mega Tower 2</h4></a></td>
                            </tr> 
                            <tr class="tabd">   
                                    <td style="border-top:none"><a href=""><h4>Mobile : 8789273106</h4></a></td>
                            </tr> 
                            <tr class="tabd">   
                                    <td style="border-top:none"><a href=""><h4>Email : karjun344@gmail.com</h4></a></td>
                            </tr> 
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
        
    </div>
     <nav class="navbar navbar-inverse navbar-fixed-bottom" id="follownav">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#follownav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="follownavdata">
                <ul class="nav navbar-nav navbar-centre">
                    <li><a href="">
                         <div class="CircleCardsf">
                              <img src="https://www.defietsmaker.nl/wp-content/uploads/2017/06/697057-facebook-512.png" title="facebook">   
                        </div>
                        </a>
                    </li>
                    <li><a href="">
                         <div class="CircleCardsf">
                              <img src="https://cdn2.iconfinder.com/data/icons/minimalism/512/twitter.png" title="Twitter">   
                        </div>
                        </a>
                    </li>
                    <li><a href="">
                         <div class="CircleCardsf">
                              <img src="https://cdn1.iconfinder.com/data/icons/iconza-circle-social/64/697037-youtube-512.png" title="YouTube">   
                        </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<?php include_once('footer.php'); ?>