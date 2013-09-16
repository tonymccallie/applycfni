<div class="span12">
	<h2>Step 4: Educational History</h2>
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
		<p>Please provide an official transcript from your high school and any other institute of learning you have attended. Home school transcripts need to be notarized.  Please send transcripts to:  Christ For The Nations Institute *Attention:  Admissions Office* 444 Fawn Ridge Drive, Dallas, TX 75224</p>
	</div>
<!--
	<div class="row-fluid">
		<h4>International Students</h4>
		<p><span class="text-error">Please be aware that once we receive a transcript, we will NOT return it to you.</span>  If you only have access to one original in your lifetime, we encourage you to obtain and send us a stamped, notarized copy of the original.  All international transcripts must be officially translated into English or Spanish.  Please send transcripts to :  Christ For The Nations Institute *Attention:  Admissions Office* P.O. Box 769000 Dallas, TX 75376-9000 </p>
	</div>
-->
	<div class="btn-group pull-right">
	<?php
		echo $this->Html->link('Back',array('action'=>'personal'),array('class'=>'btn btn-large pull-left','div'=>false));
		echo $this->Form->submit('Next',array('class'=>'btn btn-inverse btn-large','div'=>false));
	?>
	</div>
	<?php echo $this->Form->end(); ?>
</div>