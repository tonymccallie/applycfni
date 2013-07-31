<div class="span12">
	<h2>Step 5: Spiritual Information</h2>
	<?php 
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div class="row-fluid">
		<h4>Testimony</h4>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->Form->input('salvation_date',array('label'=>'When did you accept Christ?','empty'=>true,'type'=>'date','class'=>'span4')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->Form->input('testimony',array('label'=>'What is your personal salvation experience? (250-500 Words)','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->ExtendedForm->radio('holy_spirit',array('label'=>'Have you received the baptism of the Holy Spirit?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->Form->input('christian_service',array('label'=>'Please describe your history of ministry involvement. ','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<h4>Church</h4>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('church_attend',array('label'=>'Do you attend church regularly?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('church_member',array('label'=>'Are you a member of a local church?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->Form->input('church_name',array('label'=>'Church Name','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->Form->input('church_affiliation',array('label'=>'Church Affiliation','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->Form->input('church_pastor',array('label'=>'Church Pastor','class'=>'span12')); ?>
		</div>
	</div>
	<div class="btn-group pull-right">
	<?php
		echo $this->Html->link('Back',array('action'=>'education'),array('class'=>'btn btn-large pull-left','div'=>false));
		echo $this->Form->submit('Next',array('class'=>'btn btn-inverse btn-large','div'=>false));
	?>
	</div>
	<?php echo $this->Form->end(); ?>
</div>