<div class="span12">
	<h2>Step 1: Start The Application</h2>
	<?php 
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('student_type',array('options'=>array(
				'New Student' => 'New Student',
				'Re-Admission' => 'Re-Admission',
				'Transfer' => 'Transfer',
			),'class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('attendance_type',array('options'=>array(
				'Full Time' => 'Full Time',
				'Part Time' => 'Part Time',
				'Audit' => 'Audit',
				'Online' => 'Online',
				'Evenings & Weekends' => 'Evenings & Weekends'
			),'class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->Form->input('degree_id',array('options'=>$degrees,'empty'=>'Please choose a Degree Type','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->Form->input('major_id',array('options'=>$majors,'empty'=>'Please choose a Major','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('semester_id',array('label'=>'Expected entrance term <a href="/test" class="labeltooltip" data-toggle="tooltip" data-placement="top" title data-original-title="International Students cannot apply for the Fall 2013 semester, Please choose Spring 2014"><i class="icon-question-sign"></i></a>','options'=>$semesters,'empty'=>'--','class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->ExtendedForm->radio('international',array('label'=>'International Student?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	<?php echo $this->Form->end(array('label'=>'Next','class'=>'btn btn-inverse btn-large pull-right')); ?>
</div>


