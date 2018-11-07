<?php include_once('header.php'); ?>

<div class="modal fade" id="dialog-model" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <form method="POST" action="<?php echo base_url('admin_controller/delete_file');?>">
                <div class="modal-body">

                    <?php  
                 foreach ($l->result() as $row)  
                 {  
                    ?>
                    <input type="hidden" name="id" value="<?php echo $row->id ;?>">
                    <input type="hidden" name="categ" value="<?php echo $row->category_name ;?>">
                    
                 <?php }  
                 ?>  


                    <h3>Are you sure you want to remove this ?</h3>
                    <h5>Data cannot be recovered..</h5>                    
                </div>

                <div class="modal-footer">

                        <button class="btn btn-secondary" data-dismiss="modal" id="cancel" onclick="go_back()">Cancel</button>
                        <button class="btn btn-secondary" type="submit" id="delete">Remove</button>
                        
                    </div>
                </form>

            </div>
            
        </div>
    </div>

<script type="text/javascript">
    $(window).on('load',function(){
        $('#dialog-model').modal('show');
    });

    function go_back()
    {
        window.history.back();
    }
</script>


<?php include_once('footer.php'); ?>