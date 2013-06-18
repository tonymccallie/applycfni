<div class="span12">
	<h2>Step 5: Recommendations</h2>
	<?php 
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('rec1',array('label'=>'Email address of Pastor for Pastor\'s Recommendation','placeholder'=>'Email Address','class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('rec1',array('label'=>'Email address of person for personal recommoendation','placeholder'=>'Email Address','class'=>'span12')); ?>
		</div>
	</div>
	<div class="btn-group pull-right">
	<?php
		echo $this->Html->link('Back',array('action'=>'spritual'),array('class'=>'btn btn-large pull-left','div'=>false));
		echo $this->Form->submit('Next',array('class'=>'btn btn-inverse btn-large','div'=>false));
	?>
	</div>
	<?php echo $this->Form->end(); ?>
</div>