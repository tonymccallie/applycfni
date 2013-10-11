<?php
	$yesno = array(1 => 'Yes',0 => 'No',''=>'');
	$countries = Common::countries();
	$gender = array('M' => 'Male','F' => 'Female',''=>'');
?>
<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> New Student Application
		<div class="btn-group pull-right">
			<?php echo $this->Html->link('<i class="icon-trash"></i> ', array('action' => 'delete', $this->data['Application']['id']), array('id'=>'application_delete','escape'=>false,'class'=>'btn'),'Are you sure you want to delete this Application?'); ?>
		</div>
	</h3>
</div>
<div class="">
	<div class="row-fluid">
		<h2>Start</h2>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Student Type:</label> <?php echo $this->data['Application']['student_type'] ?>
		</div>
		<div class="span6">
			<label>Attendance Type:</label> <?php echo $this->data['Application']['attendance_type'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>Degree Type:</label> <?php echo $degrees[$this->data['Application']['degree_id']] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>Major</label> <?php echo $majors[$this->data['Application']['major_id']] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Semester:</label> <?php echo $semesters[$this->data['Application']['semester_id']] ?>
		</div>
		<div class="span6">
			<?php //echo $this->ExtendedForm->radio('international',array('label'=>'International Student?','type'=>'radio','options'=>array(1 => 'Yes',0 => 'No'))); ?>
		</div>
	</div>
	
	<div class="row-fluid">
		<h2>Personal</h2>
	</div>
	<div class="row-fluid">
		<div class="span3">
			<?php
				if(!empty($this->data['Application']['picture'])) {
					echo $this->Html->image('/profile_pictures/'.$this->data['Application']['picture']);
				}
			?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php 
				$middle = (!empty($this->data['Application']['mid_name']))?$this->data['Application']['mid_name'].' ':'';
			?>
			<label>Name:</label> <?php echo $this->data['Application']['first_name'].' '.$middle.$this->data['Application']['last_name'] ?>
		</div>
		<div class="span6">
			<label>Email:</label> <?php echo $this->data['User']['email'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php
				$address2 = (!empty($this->data['Application']['address2']))?$this->data['Application']['address2'].'<br/>':'';
			?>
			<label>Address:</label> <?php echo $this->data['Application']['address1'].'<br />'.$address2.$this->data['Application']['city'].', '.$this->data['Application']['state'].' '.$this->data['Application']['zip'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>Country:</label> <?php echo $countries[$this->data['Application']['country']] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Primary Phone:</label> <?php echo $this->data['Application']['phone_primary'] ?>
		</div>
		<div class="span6">
			<label>Secondary Phone:</label> <?php echo $this->data['Application']['phone_secondary'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<label>Twitter:</label> <?php echo $this->data['Application']['twitter'] ?>
		</div>
		<div class="span4">
			<label>Facebook:</label> <?php echo $this->data['Application']['facebook'] ?>
		</div>
		<div class="span4">
			<label>Instagram:</label> <?php echo $this->data['Application']['instagram'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Social Security Number:</label> <?php echo $this->data['Application']['ssn'] ?>
		</div>
		<div class="span6">
			<?php
				$age = date_diff(date_create($this->data['Application']['birth_date']),date_create('now'));
				$age = $age->format('%y');
			?>
			<label>Date of Birth:</label> <?php echo date('F d, Y',strtotime($this->data['Application']['birth_date'])).' ('.$age.' yrs old)' ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>City of Birth:</label> <?php echo $this->data['Application']['birth_city'] ?>
		</div>
		<div class="span3">
			<label>Birth State:</label> <?php echo $this->data['Application']['birth_state'] ?>
		</div>
		<div class="span3">
			<label>Birth Country:</label> <?php echo $countries[$this->data['Application']['birth_country']] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Gender:</label> <?php echo $gender[$this->data['Application']['gender']] ?>
		</div>
		<div class="span6">
			<label>Maiden Name:</label> <?php echo $this->data['Application']['maiden_name'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<h4>Citizenship</h4>
	</div>
	<div class="row-fluid">	
		<div class="span6">
			<label>Country of Citizenship:</label> <?php echo $countries[$this->data['Application']['citizen_country']] ?>
		</div>
		<div class="span6">
			<label>Are you a permanent resident/resident alien?:</label> <?php echo $yesno[$this->data['Application']['citizen_status']] ?>
		</div>
	</div>
	<div class="row-fluid">
		<h4>Finances</h4>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Do you have adequate finances to cover tuition and living costs?:</label> <?php echo $yesno[$this->data['Application']['finances']] ?>
		</div>
		<div class="span6">
			<label>Are you a U.S. veteran?:</label> <?php echo $yesno[$this->data['Application']['veteran']] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>Are you receiving any VA benefits?:</label> <?php echo $this->data['Application']['veteran_benefits'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<h4>Recruitment</h4>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>How did you hear about Christ for the Nations?:</label> <?php echo $this->data['Application']['how_hear'] ?>
		</div>
		<div class="span6">
			<label>I was recruited by:</label> <?php echo $this->data['Application']['recruiter'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Have you attended CFNI campus days?:</label> <?php echo $yesno[$this->data['Application']['recruit_campus']] ?>
		</div>
		<div class="span6">
			<label>Have you attended Youth for the Nations?:</label> <?php echo $yesno[$this->data['Application']['recruit_yfn']] ?>
		</div>
	</div>
	
	<div class="row-fluid">
		<h2>Background</h2>
	</div>
	
	<div class="row-fluid">
		<h4>Family</h4>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Marital Status:</label> <?php echo $this->data['Application']['marital_status'] ?>
		</div>
		<div class="span6">
			<?php
				$divorce = !empty($this->data['Application']['divorce_date'])?date('F d, Y',strtotime($this->data['Application']['divorce_date'])):'';
			?>
			<label>If Divorced or Seperated, When?:</label> <?php echo $divorce ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>First Name of spouse:</label> <?php echo $this->data['Application']['spouse_first'] ?>
		</div>
		<div class="span6">
			<label>Last Name of spouse:</label> <?php echo $this->data['Application']['spouse_last'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<label>Has your spouse accepted Christ?:</label> <?php echo $yesno[$this->data['Application']['spouse_saved']] ?>
		</div>
		<div class="span4">
			<label>Is your spouse coming with you?:</label> <?php echo $yesno[$this->data['Application']['spouse_coming']] ?>
		</div>
		<div class="span4">
			<label>Is your spouse applying to come to CFNI?:</label> <?php echo $yesno[$this->data['Application']['spouse_applying']] ?>
		</div>
	</div>
	<?php if(!empty($this->data['Application']['child1_name'])): ?>
	<div class="row-fluid">
		<div class="span4">
			<label>Child #1 Name:</label> <?php echo $this->data['Application']['child1_name'] ?>
		</div>
		<div class="span2">
			<label>Age:</label> <?php echo $this->data['Application']['child1_age'] ?>
		</div>
		<div class="span3">
			<label>Gender:</label> <?php echo $gender[$this->data['Application']['child1_gender']] ?>
		</div>
		<div class="span3">
			<label>Coming with you?:</label> <?php echo $yesno[$this->data['Application']['child1_coming']] ?>
		</div>
	</div>
	<?php endif ?>
	<?php if(!empty($this->data['Application']['child2_name'])): ?>
	<div class="row-fluid">
		<div class="span4">
			<label>Child #2 Name:</label> <?php echo $this->data['Application']['child2_name'] ?>
		</div>
		<div class="span2">
			<label>Age:</label> <?php echo $this->data['Application']['child2_age'] ?>
		</div>
		<div class="span3">
			<label>Gender:</label> <?php echo $gender[$this->data['Application']['child2_gender']] ?>
		</div>
		<div class="span3">
			<label>Coming with you?:</label> <?php echo $yesno[$this->data['Application']['child2_coming']] ?>
		</div>
	</div>
	<?php endif ?>
	<?php if(!empty($this->data['Application']['child3_name'])): ?>
	<div class="row-fluid">
		<div class="span4">
			<label>Child #3 Name:</label> <?php echo $this->data['Application']['child3_name'] ?>
		</div>
		<div class="span2">
			<label>Age:</label> <?php echo $this->data['Application']['child3_age'] ?>
		</div>
		<div class="span3">
			<label>Gender:</label> <?php echo $gender[$this->data['Application']['child3_gender']] ?>
		</div>
		<div class="span3">
			<label>Coming with you?:</label> <?php echo $yesno[$this->data['Application']['child3_coming']] ?>
		</div>
	</div>
	<?php endif ?>
	<?php if(!empty($this->data['Application']['child4_name'])): ?>
	<div class="row-fluid">
		<div class="span4">
			<label>Child #4 Name:</label> <?php echo $this->data['Application']['child4_name'] ?>
		</div>
		<div class="span2">
			<label>Age:</label> <?php echo $this->data['Application']['child4_age'] ?>
		</div>
		<div class="span3">
			<label>Gender:</label> <?php echo $gender[$this->data['Application']['child4_gender']] ?>
		</div>
		<div class="span3">
			<label>Coming with you?:</label> <?php echo $yesno[$this->data['Application']['child4_coming']] ?>
		</div>
	</div>
	<?php endif ?>
	<?php if(!empty($this->data['Application']['child5_name'])): ?>
	<div class="row-fluid">
		<div class="span4">
			<label>Child #5 Name:</label> <?php echo $this->data['Application']['child5_name'] ?>
		</div>
		<div class="span2">
			<label>Age:</label> <?php echo $this->data['Application']['child5_age'] ?>
		</div>
		<div class="span3">
			<label>Gender:</label> <?php echo $gender[$this->data['Application']['child5_gender']] ?>
		</div>
		<div class="span3">
			<label>Coming with you?:</label> <?php echo $yesno[$this->data['Application']['child5_coming']] ?>
		</div>
	</div>
	<?php endif ?>
	<?php if(!empty($this->data['Application']['child6_name'])): ?>
	<div class="row-fluid">
		<div class="span4">
			<label>Child #6 Name:</label> <?php echo $this->data['Application']['child6_name'] ?>
		</div>
		<div class="span2">
			<label>Age:</label> <?php echo $this->data['Application']['child6_age'] ?>
		</div>
		<div class="span3">
			<label>Gender:</label> <?php echo $gender[$this->data['Application']['child6_gender']] ?>
		</div>
		<div class="span3">
			<label>Coming with you?:</label> <?php echo $yesno[$this->data['Application']['child6_coming']] ?>
		</div>
	</div>
	<?php endif ?>
	<div class="row-fluid">
		<h4>History</h4>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Have you ever been arrested and convicted of a felony?:</label> <?php echo $yesno[$this->data['Application']['felony']] ?>
		</div>
		<div class="span6">
			<?php
				$felony = !empty($this->data['Application']['felony_date'])?date('F d, Y',strtotime($this->data['Application']['felony_date'])):'';
			?>
			<label>If yes, what was the date of the felony offense?:</label> <?php echo $felony ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Have you ever been arrested and convicted of a misdemeanor?:</label> <?php echo $yesno[$this->data['Application']['misdemeanor']] ?>
		</div>
		<div class="span6">
			<?php
				$misdemeanor = !empty($this->data['Application']['misdemeanor_date'])?date('F d, Y',strtotime($this->data['Application']['misdemeanor_date'])):'';
			?>
			<label>If yes, what was the date of the misdemeanor offense?:</label> <?php echo $misdemeanor ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Are you currently on probation or parole?:</label> <?php echo $yesno[$this->data['Application']['probation']] ?>
		</div>
		<div class="span6">
			<label>If you answered yes to any of the previous questions, please explain.:</label> <?php echo $this->data['Application']['criminal_explain'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<h4>Code of Conduct</h4>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>I understand and qualify to meet the requirements explained in the Code of Conduct:</label> <?php echo $yesno[$this->data['Application']['conduct_code']] ?>
		</div>
		<div class="span6">
			<label>If no, please explain:</label> <?php echo $this->data['Application']['conduct_reason'] ?>
		</div>
	</div>
	
	<div class="row-fluid">
		<h2>Education</h2>
	</div>
	
	<div class="row-fluid">
		<div class="span12">
			<label>What level of education have you completed?:</label> <?php echo $this->data['Application']['education'] ?>
		</div>
	</div>
	
	<div class="row-fluid">
		<h2>Spiritual</h2>
	</div>
	
	<div class="row-fluid">
		<h4>Testimony</h4>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>When did you accept Christ?:</label> <?php echo $this->data['Application']['salvation'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>What is your personal salvation experience? (250-500 Words):</label> <?php echo $this->data['Application']['testimony'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>Have you received the baptism of the Holy Spirit?:</label> <?php echo $yesno[$this->data['Application']['holy_spirit']] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>Please describe your history of ministry involvement:</label> <?php echo $this->data['Application']['christian_service'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<h4>Church</h4>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Do you attend church regularly?:</label> <?php echo $yesno[$this->data['Application']['church_attend']] ?>
		</div>
		<div class="span6">
			<label>Are you a member of a local church?:</label> <?php echo $yesno[$this->data['Application']['church_member']] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>Church Name:</label> <?php echo $this->data['Application']['church_name'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>Church Affiliation:</label> <?php echo $this->data['Application']['church_affiliation'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>Church Pastor:</label> <?php echo $this->data['Application']['church_pastor'] ?>
		</div>
	</div>
	
	<div class="row-fluid">
		<h2>Recommendations</h2>
	</div>

	<?php foreach($this->data['Referral'] as $referral): ?>
	<div class="row-fluid">
		<div class="span12">
			<label>Referral Name</label> <?php echo $referral['first_name'].' '.$referral['last_name'] ?>
		</div>
	</div>
	<?php endforeach ?>	

	<div class="row-fluid">
		<h2>Releases</h2>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<label>Standards:</label> <?php echo $yesno[$this->data['Application']['standards_release']] ?>
		</div>
		<div class="span4">
			<label>Criminal Background Check:</label> <?php echo $yesno[$this->data['Application']['background_check']] ?>
		</div>
		<div class="span4">
			<label>Application Completion:</label> <?php echo $yesno[$this->data['Application']['truthful_release']] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>Electronic Signature:</label> <?php echo $this->data['Application']['signature_name'] ?>
		</div>
	</div>
	<?php if(!empty($this->data['Coupon'])): ?>
	<div class="row-fluid">
		<div class="span12">
			<label>Coupon Used</label> <?php echo $this->Html->link($this->data['Coupon']['title'],'/admin/coupons/edit/'.$this->data['Coupon']['id']) ?>
		</div>
	</div>
	<?php endif ?>
	<div class="row-fluid">
		<div class="span12">
			<?php
				echo $this->Form->create();
					echo $this->Form->input('id',array());
					echo $this->Form->input('status',array('options'=>$app_status));
				echo $this->Form->end(array('label'=>'Save Application','class'=>'btn'));
			?>
		</div>
	</div>
</div>