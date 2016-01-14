<div class="modal fade" id="modal">
    <div class="modal-dialog">
    	<div class="modal-content">
      		<?php echo $__env->make('templates.modal_content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
    </div>
</div>