<div class="span12">
	<h2>Step 3: Background Information</h2>
	<?php 
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div class="row-fluid">
		<h4>Family</h4>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('marital_status',array('options'=>array(
				'Single' => 'Single',
				'Married' => 'Married',
				'Divorced' => 'Divorced',
				'Separated' => 'Separated',
				'Widowed' => 'Widowed'),'empty'=>'--','class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('divorce_date',array('label'=>'If Divorced or Seperated, When?','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('spouse_first',array('label'=>'Spouse First Name','class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('spouse_last',array('label'=>'Spouse Last Name','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('spouse_saved',array('label'=>'Has your spouse accepted Christ?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('spouse_coming',array('label'=>'Is your Spouse applying to come to CFNI?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<?php echo $this->Form->input('child1_name',array('label'=>'Child #1 Name','class'=>'span12')); ?>
		</div>
		<div class="span2">
			<?php echo $this->Form->input('child1_age',array('label'=>'Age','class'=>'span12')); ?>
		</div>
		<div class="span3">
			<?php echo $this->ExtendedForm->radio('child1_gender',array('label'=>'Gender','type'=>'radio','options'=>array('M' => 'Male','F' => 'Female'))); ?>
		</div>
		<div class="span3">
			<?php echo $this->ExtendedForm->radio('child1_coming',array('label'=>'Coming with you?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<?php echo $this->Form->input('child2_name',array('label'=>'Child #2 Name','class'=>'span12')); ?>
		</div>
		<div class="span2">
			<?php echo $this->Form->input('child2_age',array('label'=>'Age','class'=>'span12')); ?>
		</div>
		<div class="span3">
			<?php echo $this->ExtendedForm->radio('child2_gender',array('label'=>'Gender','type'=>'radio','options'=>array('M' => 'Male','F' => 'Female'))); ?>
		</div>
		<div class="span3">
			<?php echo $this->ExtendedForm->radio('child2_coming',array('label'=>'Coming with you?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<?php echo $this->Form->input('child3_name',array('label'=>'Child #3 Name','class'=>'span12')); ?>
		</div>
		<div class="span2">
			<?php echo $this->Form->input('child3_age',array('label'=>'Age','class'=>'span12')); ?>
		</div>
		<div class="span3">
			<?php echo $this->ExtendedForm->radio('child3_gender',array('label'=>'Gender','type'=>'radio','options'=>array('M' => 'Male','F' => 'Female'))); ?>
		</div>
		<div class="span3">
			<?php echo $this->ExtendedForm->radio('child3_coming',array('label'=>'Coming with you?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<?php echo $this->Form->input('child4_name',array('label'=>'Child #4 Name','class'=>'span12')); ?>
		</div>
		<div class="span2">
			<?php echo $this->Form->input('child4_age',array('label'=>'Age','class'=>'span12')); ?>
		</div>
		<div class="span3">
			<?php echo $this->ExtendedForm->radio('child4_gender',array('label'=>'Gender','type'=>'radio','options'=>array('M' => 'Male','F' => 'Female'))); ?>
		</div>
		<div class="span3">
			<?php echo $this->ExtendedForm->radio('child4_coming',array('label'=>'Coming with you?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<?php echo $this->Form->input('child5_name',array('label'=>'Child #5 Name','class'=>'span12')); ?>
		</div>
		<div class="span2">
			<?php echo $this->Form->input('child5_age',array('label'=>'Age','class'=>'span12')); ?>
		</div>
		<div class="span3">
			<?php echo $this->ExtendedForm->radio('child5_gender',array('label'=>'Gender','type'=>'radio','options'=>array('M' => 'Male','F' => 'Female'))); ?>
		</div>
		<div class="span3">
			<?php echo $this->ExtendedForm->radio('child5_coming',array('label'=>'Coming with you?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<?php echo $this->Form->input('child6_name',array('label'=>'Child #6 Name','class'=>'span12')); ?>
		</div>
		<div class="span2">
			<?php echo $this->Form->input('child6_age',array('label'=>'Age','class'=>'span12')); ?>
		</div>
		<div class="span3">
			<?php echo $this->ExtendedForm->radio('child6_gender',array('label'=>'Gender','type'=>'radio','options'=>array('M' => 'Male','F' => 'Female'))); ?>
		</div>
		<div class="span3">
			<?php echo $this->ExtendedForm->radio('child6_coming',array('label'=>'Coming with you?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<h4>History</h4>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('felony',array('label'=>'Have you ever been arrested and convicted of a felony?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('felony_date',array('label'=>'If yes, what was the date of the felony offense?','empty'=>true,'type'=>'date','class'=>'span4')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('misdemeanor',array('label'=>'Have you ever been arrested and convicted of a misdemeanor?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('misdemeanor_date',array('label'=>'If yes, what was the date of the misdemeanor offense?','empty'=>true,'type'=>'date','class'=>'span4')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('criminal_explain',array('label'=>'If you answered yes to any of the previous questions, please explain.','type'=>'textarea','class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('probation',array('label'=>'Are you currently on probation or parole?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="btn-group pull-right">
	<?php
		echo $this->Html->link('Back',array('action'=>'start'),array('class'=>'btn btn-large pull-left','div'=>false));
		echo $this->Form->submit('Next',array('class'=>'btn btn-inverse btn-large','div'=>false));
	?>
	</div>
	<?php echo $this->Form->end(); ?>
</div>

