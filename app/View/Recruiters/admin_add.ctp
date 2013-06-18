<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Add Recruiter
	</h3>
</div>
<div class="">
	<?php
		echo $this->Form->create();
			echo $this->Form->input('first_name',array());
			echo $this->Form->input('last_name',array());
		echo $this->Form->end(array('label'=>'Add Recruiter','class'=>'btn'));
	?>
</div>