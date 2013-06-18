<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Add Degree
	</h3>
</div>
<div class="">
	<?php
		echo $this->Form->create();
			echo $this->Form->input('title',array());
		echo $this->Form->end(array('label'=>'Add Degree','class'=>'btn'));
	?>
</div>