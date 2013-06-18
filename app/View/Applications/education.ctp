<div class="span12">
	<h2>Step 3: Educational History</h2>
	<p>Interesting text about educational transcripts and such...</p>
	<?php
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div class="btn-group pull-right">
	<?php
		echo $this->Html->link('Back',array('action'=>'personal'),array('class'=>'btn btn-large pull-left','div'=>false));
		echo $this->Form->submit('Next',array('class'=>'btn btn-inverse btn-large','div'=>false));
	?>
	</div>
	<?php echo $this->Form->end(); ?>
</div>