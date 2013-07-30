<div class="span12">
	<h2>Step 2: Personal Information</h2>
	<?php 
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div class="row-fluid">
		<div class="span4">
			<?php echo $this->Form->input('first_name',array('class'=>'span12')); ?>
		</div>
		<div class="span4">
			<?php echo $this->Form->input('mid_name',array('label'=>'Middle Name','class'=>'span12')); ?>
		</div>
		<div class="span4">
			<?php echo $this->Form->input('last_name',array('class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<?php echo $this->Form->input('address1',array('label'=>'Current Address','class'=>'span12')); ?>
	</div>
	<div class="row-fluid">
		<?php echo $this->Form->input('address2',array('label'=>'Address Line Two','class'=>'span12')); ?>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('city',array('label'=>'City','class'=>'span12')); ?>
		</div>
		<div class="span3">
			<?php echo $this->Form->input('state',array('options' => Common::states(),'empty'=>'--','class'=>'span12'));?>
		</div>
		<div class="span3">
			<?php echo $this->Form->input('zip',array('label'=>'Zip Code','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->Form->input('country',array('options'=>Common::countries(),'empty'=>'--','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('phone_primary',array('label'=>'Primary Phone','class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('phone_secondary',array('label'=>'Secondary Phone','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<?php echo $this->Form->input('twitter',array('class'=>'span12')); ?>
		</div>
		<div class="span4">
			<?php echo $this->Form->input('facebook',array('class'=>'span12')); ?>
		</div>
		<div class="span4">
			<?php echo $this->Form->input('instagram',array('class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('ssn',array('label'=>'Social Security Number','class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('birth_date',array('label'=>'Date of Birth','class'=>'span4','empty'=>true)); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('birth_city',array('label'=>'City of Birth','class'=>'span12')); ?>
		</div>
		<div class="span3">
			<?php echo $this->Form->input('birth_state',array('options' => Common::states(),'empty'=>'--','class'=>'span12'));?>
		</div>
		<div class="span3">
			<?php echo $this->Form->input('birth_country',array('options'=>Common::countries(),'empty'=>'--','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('gender',array('label'=>'Gender','type'=>'radio','options'=>array('M' => 'Male','F' => 'Female'))); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('maiden_name',array('label'=>'Maiden Name','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<h4>Citizenship</h4>
	</div>
	<div class="row-fluid">	
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('citizen_us',array('label'=>'Are you a US Citizen?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('citizen_status',array('label'=>'Are you a permanent resident/resident alien?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<?php echo $this->Form->input('citizen_country',array('label'=>'Country of Citizenship','options'=>Common::countries(),'empty'=>'--','class'=>'span12')); ?>
	</div>
	<div class="row-fluid">
		<h4>Finances</h4>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('finances',array('label'=>'Do you have adequate finances to cover tuition and living costs?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('veteran',array('label'=>'Are you a U.S. veteran?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<?php echo $this->ExtendedForm->radio('veteran_benefits',array('label'=>'Are you receiving any VA benefits?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
	</div>
	<div class="row-fluid">
		<h4>Recruitment</h4>
	</div>
	<div class="row-fluid">
		<?php echo $this->Form->input('recruit_location',array('label'=>'How did you hear about Christ for the Nations?','class'=>'span12')); ?>
	</div>
	<div class="row-fluid">
		<?php echo $this->Form->input('recruiter',array('label'=>'I was recruited by','class'=>'span12')); ?>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('recruit_campus',array('label'=>'Have you attended CFNI campus days?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('recruit_yfn',array('label'=>'Have you attended Youth for the Nations?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
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

