<div id="modalUsersEdit" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= $this->Form->create($user); ?>
        <div class="form-group">
			<?= $this->Form->control('username', ['type' => 'text']); ?>
        </div>
        <div class="form-group">
			<?= $this->Form->control('password'); ?>
        </div>
        <div class="form-group">
			<?= $this->Form->control('fullname', ['type' => 'text']); ?>
        </div>
        <div class="form-group">
			<?= $this->Form->control('email'); ?>
        </div>
        <div style="display: none">
	        <?= $this->Form->button('save'); ?>
        </div>
		<?= $this->Form->end(); ?>
      </div>
      <div class="modal-footer">
        <button id="btnSave" type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		// remove modal element from DOM
		$('#modalUsersEdit').on('hidden.bs.modal', function (e) {
			$('#modalUsersEdit').remove();	
		});
		
		// AJAX Forms
		$('#modalUsersEdit form').ajaxForm({method: 'POST', success: function() { 
        	alert("done");
        }});
		
		$('#modalUsersEdit #btnSave').click(function(){
			$('#modalUsersEdit form').ajaxSubmit();
		});
		
		 
	});
</script>