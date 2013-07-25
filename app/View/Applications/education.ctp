<div class="span12">
	<h2>Step 4: Educational History</h2>
	<p>Interesting text about educational transcripts and such...</p>
	<?php
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->Form->input('education',array('label'=>'What level of education have you completed?','options'=>array(
				'Some High School' => 'Some High School',
				'High School Graduate' => 'High School Graduate',
				'GED' => 'GED',
				'Some College' => 'Some College',
				'College Graduate' => 'College Graduate',
				'Other' => 'Other'
			))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<h4>Domestic Students</h4>
		<p>Text explaining how to send it in, Address</p>
	</div>
	<div class="row-fluid">
		<h4>International Students</h4>
		<p>Text explaining how to send it in and notes that we won't send it back, Address</p>
	</div>
	<div class="btn-group pull-right">
	<?php
		echo $this->Html->link('Back',array('action'=>'personal'),array('class'=>'btn btn-large pull-left','div'=>false));
		echo $this->Form->submit('Next',array('class'=>'btn btn-inverse btn-large','div'=>false));
	?>
	</div>
	<?php echo $this->Form->end(); ?>
</div>