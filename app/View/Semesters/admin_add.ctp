<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Add Semester
	</h3>
</div>
<div class="">
	<?php
		echo $this->Form->create();
			echo $this->Form->input('title',array());
			echo $this->Form->input('start',array('label'=>'Semester Start'));
			echo $this->Form->input('late',array('label'=>'Begin Charging for Late Registration'));
			echo $this->Form->input('close',array('label'=>'Semester Registration Closed'));
		echo $this->Form->end(array('label'=>'Add Semester','class'=>'btn'));
	?>
</div>