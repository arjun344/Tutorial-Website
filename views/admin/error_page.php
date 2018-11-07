<?php include_once('header.php'); ?>

<div class="modal fade" id="dialog-model" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header bg-success text-white">
					<h5 class="modal-title">Error Ocurred !</h5>	
				</div>

				<div class="modal-body">
					<h3>Please Enter Valid Inputs !</h3>
				<div class="modal-footer">
					<button class="btn btn-success" data-dismiss="modal" onclick="go_back()">Go Back</button>
				</div>

				</form>
				</div>

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