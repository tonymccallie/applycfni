<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Edit Semester
		<div class="btn-group pull-right">
			<?php echo $this->Html->link('<i class="icon-trash"></i> ', array('action' => 'delete', $this->data['Semester']['id']), array('escape'=>false,'class'=>'btn'),'Are you sure you want to delete this Semester?'); ?>
		</div>
	</h3>
</div>
<div class="">
	<?php
		echo $this->Form->create();
			echo $this->Form->input('id',array());
			echo $this->Form->input('title',array());
			echo $this->Form->input('start',array());
		echo $this->Form->end(array('label'=>'Save Semester','class'=>'btn'));
	?>
</div>