<div class="span12">
	<div class="row-fluid">
		<h2>Recommendation Form</h2>
		<p>This is a recommendation form for <?php echo $referral['Application']['first_name'].' '.$referral['Application']['last_name'] ?></p>
	</div>
	<?php
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('first_name',array('class'=>'span12')); ?>
		</div>
		<div class="span6">
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
			<?php echo $this->Form->input('phone',array('label'=>'Phone','class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('email',array('label'=>'Email','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('how_long',array('label'=>'How long have you known the applicant?','class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('relationship',array('label'=>'Your relationship to the applicant','empty'=>true,'class'=>'span12','options'=> array(
				'High School Teacher/ Counselor' => 'High School Teacher/ Counselor',
				'College Teacher/ Counselor' => 'College Teacher/ Counselor',
				'Pastor' => 'Pastor',
				'Employer' => 'Employer',
				'Friend' => 'Friend',
				'Other' => 'Other'
			))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('how_well',array('label'=>'How well do you know the applicant?','empty'=>true,'class'=>'span12','options'=> array(
				'Very Well' => 'Very Well',
				'Fairly Well' => 'Fairly Well',
				'Casually' => 'Casually',
				'By Name and Sight' => 'By Name and Sight'
			))); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('saved',array('label'=>'To your knowledge, has the applicant made a personal commitment to Christ?','empty'=>true,'class'=>'span12','options'=> array(
				'Yes' => 'Yes',
				'No' => 'No',
				'I Don\'t Know' => 'I Don\'t Know',
			))); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->Form->input('christian_service',array('label'=>'To your knowledge, what Christian service has the applicant participated in regularly?
(such as a Sunday school teacher, youth leader, nursery worker, etc.)','class'=>'span12','type'=>'textarea')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<lable>To your knowledge, does the applicant:
	</div>
	<div class="row-fluid">
		<div class="span4">
			<div class="row-fluid">
				<?php echo $this->ExtendedForm->radio('smoke',array('label'=>'Smoke?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->ExtendedForm->radio('drink',array('label'=>'Drink?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
			</div>
			<div class="row-fluid">
				<?php echo $this->ExtendedForm->radio('drugs',array('label'=>'Use illegal drugs?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
			</div>
		</div>
		<div class="span8">
			<?php echo $this->Form->input('lifestyle_comments',array('label'=>'Comments on these activities:','type'=>'textarea','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('peers',array('label'=>'The applicants influence on his or her peers is:','empty'=>true,'class'=>'span12','options'=> array(
				'Positive' => 'Positive',
				'Neutral' => 'Neutral',
				'Negative' => 'Negative'
			))); ?>
		</div>
		<div class="span6">
			<div class="row-fluid">
				<label>Which characteristics best describe the applicant?</label>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<?php echo $this->ExtendedForm->checkbox('warmhearted',array('label'=>'Warmhearted','type'=>'checkbox')); ?>
				</div>
				<div class="span6">
					<?php echo $this->ExtendedForm->checkbox('warmhearted',array('label'=>'Critical','type'=>'checkbox')); ?>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<?php echo $this->ExtendedForm->checkbox('warmhearted',array('label'=>'Tolerant','type'=>'checkbox')); ?>
				</div>
				<div class="span6">
					<?php echo $this->ExtendedForm->checkbox('warmhearted',array('label'=>'Sympathetic','type'=>'checkbox')); ?>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<?php echo $this->ExtendedForm->checkbox('warmhearted',array('label'=>'Rebellious','type'=>'checkbox')); ?>
				</div>
				<div class="span6">
					<?php echo $this->ExtendedForm->checkbox('warmhearted',array('label'=>'Respectful','type'=>'checkbox')); ?>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<?php echo $this->ExtendedForm->checkbox('warmhearted',array('label'=>'Enthusiastic','type'=>'checkbox')); ?>
				</div>
				<div class="span6">
					<?php echo $this->ExtendedForm->checkbox('warmhearted',array('label'=>'Loving','type'=>'checkbox')); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('strengths',array('label'=>'Please indicate what you consider to be the applicants strengths.','type'=>'textarea','class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('weaknesses',array('label'=>'Please describe any weaknesses of the applicant of which we should be aware.','type'=>'textarea','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<h4>To be completed only if you are the applicants pastor:</h4>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<?php echo $this->Form->input('church_name',array('class'=>'span12')); ?>
		</div>
		<div class="span4">
			<?php echo $this->Form->input('title',array('class'=>'span12')); ?>
		</div>
		<div class="span4">
			<?php echo $this->Form->input('denomination',array('class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('involvement',array('label'=>'To what extent is the applicant engaged in the activities of your church?','empty'=>true,'class'=>'span12','options'=> array(
				'Enthusiastically, Deeply involved' => 'Enthusiastically, Deeply involved',
				'Cooperative, Usually willing to help' => 'Cooperative, Usually willing to help',
				'Seldom Participates, although attends regularly' => 'Seldom Participates, although attends regularly',
				'Attends Irregularly, Shows little interest' => 'Attends Irregularly, Shows little interest'
			))); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('home_factors',array('label'=>'Please describe home factors which might affect the applicants success at CFNI.','type'=>'textarea','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('concerns',array('label'=>'Do you have any concerns about the applicants personal character? Please Explain:','type'=>'textarea','class'=>'span12')); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('comments',array('label'=>'Please add any further comments you may have which would help in our evaluation.','type'=>'textarea','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('recommend',array('label'=>'Do you recommend the applicant to CFNI?','empty'=>true,'class'=>'span12','options'=> array(
				'I highly recommend' => 'I highly recommend',
				'I recommend' => 'I recommend',
				'I recommend with reservation' => 'I recommend with reservation',
				'I cannot recommend' => 'I cannot recommend'
			))); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('recommend_explain',array('label'=>'If you checked \'I recommend with reservation\' or \'I cannot recommend\' please give a brief explanation.','type'=>'textarea','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<p>I hereby agree all information is true and complete to the best of my knowledge.</p>
		</div>
		<div class="span6">
			<?php echo $this->ExtendedForm->checkbox('honest',array('label'=>'I agree','type'=>'checkbox')); ?>
		</div>
	</div>
	<?php
		echo $this->Form->end(array('label'=>'Save Recommendation','class'=>'btn'));
	?>
</div>