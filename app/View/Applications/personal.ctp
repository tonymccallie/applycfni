<div class="span12">
	<h2>Step 2: Personal Information</h2>
	<?php 
		echo $this->Form->create('Application',array('type' => 'file'));
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
			<?php echo $this->Form->input('twitter',array('label'=>'Twitter <a href="#" class="labeltooltip" data-toggle="tooltip" data-placement="top" title data-original-title="Please insert your twitter handle if you have one."><i class="icon-question-sign"></i></a>','class'=>'span12')); ?>
		</div>
		<div class="span4">
			<?php echo $this->Form->input('facebook',array('label'=>'Facebook <a href="#" class="labeltooltip" data-toggle="tooltip" data-placement="top" title data-original-title="Please insert the full url for your facebook profile page if you have one."><i class="icon-question-sign"></i></a>','class'=>'span12')); ?>
		</div>
		<div class="span4">
			<?php echo $this->Form->input('instagram',array('label'=>'Instagram <a href="#" class="labeltooltip" data-toggle="tooltip" data-placement="top" title data-original-title="Please insert your instagram handle if you have one."><i class="icon-question-sign"></i></a>','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('ssn',array('label'=>'Social Security Number <a href="#" class="labeltooltip" data-toggle="tooltip" data-placement="top" title data-original-title="Please use the format 555-55-5555"><i class="icon-question-sign"></i></a>','class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('birth_date',array('label'=>'Date of Birth','class'=>'span4','empty'=>true,'minYear' => date('Y') - 70,'maxYear'=>date('Y'))); ?>
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
			<?php echo $this->Form->input('birth_country',array('label'=>'Birth Country <a href="#" class="labeltooltip" data-toggle="tooltip" data-placement="top" title data-original-title="Birth Country info..."><i class="icon-question-sign"></i></a>','options'=>Common::countries(),'empty'=>'--','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span3">
			<?php echo $this->ExtendedForm->radio('gender',array('label'=>'Gender','type'=>'radio','options'=>array('M' => 'Male','F' => 'Female'))); ?>
		</div>
		<div class="span3">
			<?php
				echo $this->Form->input('ethnicity',array('class'=>'span12','options'=>array(
					'' => 'Please Choose',
					'Asian' => 'Asian',
					'African' => 'African',
					'African American' => 'African American',
					'Caucasian' => 'Caucasian',
					'Hispanic' => 'Hispanic',
					'Other' => 'Other',
				)));
			?>
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
			<?php echo $this->Form->input('citizen_country',array('label'=>'Country of Citizenship','options'=>Common::countries(),'empty'=>'--','class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('citizen_status',array('label'=>'Are you a citizen/permanent resident/resident alien?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->ExtendedForm->radio('deferred_action',array('label'=>'Are you Deferred Action? <a href="#" class="labeltooltip" data-toggle="tooltip" data-placement="top" title data-original-title="Description of deferred action"><i class="icon-question-sign"></i></a>','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
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
		<div class="span6">
			<?php echo $this->Form->input('how_hear',array('label'=>'How did you hear about Christ for the Nations?','class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('recruiter',array('label'=>'I was recruited by','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('recruit_campus',array('label'=>'Have you attended CFNI campus days?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('recruit_yfn',array('label'=>'Have you attended Youth for the Nations?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->ExtendedForm->radio('live_on_campus',array('label'=>'Are you planning on living on campus? <a href="#" class="labeltooltip" data-toggle="tooltip" data-placement="top" title data-original-title="All full-time students enrolled in day classes, single and married, are required to live on campus unless the student is able to provide proof of residency in the Dallas/Ft. Worth area for at least six (6) consecutive months prior to their initial application.  If residency was established by living with a parent, the student may remain off campus as long as they continue to live with their parent.  To be considered for off-campus living, an application must be submitted to director of student services at least 7 days prior to registering for classes.  Applications are subject to approval by the director of student services."><i class="icon-question-sign"></i></a>','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<h4>Photo</h4>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<p>Please upload a photo of yourself.</p>
		</div>
		<div class="span4">
			<?php
				echo $this->Form->input('picture',array('type'=>'file')); 
			?>
		</div>
		<div class="span4">
			<?php
				if(!empty($this->data['Application']['picture'])) {
					echo $this->Html->image('/profile_pictures/'.$this->data['Application']['picture']);
				}
			?>
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

