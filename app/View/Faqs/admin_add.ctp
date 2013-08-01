<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Add Faq
	</h3>
</div>
<div class="">
	<?php
		echo $this->Form->create();
			echo $this->Form->input('question',array('class'=>'span12'));
			echo $this->Form->input('answer',array('class'=>'span12'));
			echo $this->Form->input('category_id',array('options'=>$categories));
		echo $this->Form->end(array('label'=>'Add Faq','class'=>'btn'));
	?>
</div>