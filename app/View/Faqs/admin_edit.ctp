<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Edit Faq
		<div class="btn-group pull-right">
			<?php echo $this->Html->link('<i class="icon-trash"></i> Delete', array('action' => 'delete', $this->data['Faq']['id']), array('escape'=>false,'class'=>'btn'),'Are you sure you want to delete this Faq?'); ?>
		</div>
	</h3>
</div>
<div class="">
	<?php
		echo $this->Form->create();
			echo $this->Form->input('id',array());
			echo $this->Form->input('question',array('class'=>'span12'));
			echo $this->Form->input('answer',array('class'=>'span12'));
			echo $this->Form->input('category_id',array('options'=>$categories));
		echo $this->Form->end(array('label'=>'Save Faq','class'=>'btn'));
	?>
</div>