<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Add Semester
	</h3>
</div>
<div class="">
	<?php
		echo $this->Form->create();
			echo $this->Form->input('title',array());
			echo $this->Form->input('start',array());
		echo $this->Form->end(array('label'=>'Add Semester','class'=>'btn'));
	?>
</div>