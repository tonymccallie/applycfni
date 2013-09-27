<?php
	$yesno = array(1 => 'Yes',0 => 'No',''=>'');
	$countries = Common::countries();
	$letter = array(
		0 => 'Pastoral',
		1 => 'Personal'
	);
?>
<div class="admin_header">
	<h3>
		<?php 
			$middle = (!empty($this->data['Application']['mid_name']))?$this->data['Application']['mid_name'].' ':'';
		?>
		<i class="icon-edit"></i> <?php echo $letter[$this->data['Referral']['position']] ?> Referral for <?php echo $this->data['Application']['first_name'].' '.$middle.$this->data['Application']['last_name'] ?>
		<div class="btn-group pull-right">
			<?php echo $this->Html->link('<i class="icon-trash"></i> ', array('action' => 'delete', $this->data['Application']['id']), array('id'=>'application_delete','escape'=>false,'class'=>'btn'),'Are you sure you want to delete this Referral?'); ?>
		</div>
	</h3>
</div>
<div class="">
	<?php
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div class="row-fluid">
		<div class="span12">
			<label>Name:</label> <?php echo $this->data['Referral']['first_name'].' '.$this->data['Referral']['last_name'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Phone:</label> <?php echo $this->data['Referral']['phone'] ?>
		</div>
		<div class="span6">
			<label>Email:</label> <?php echo $this->data['Referral']['email'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>How long have you known the applicant?:</label> <?php echo $this->data['Referral']['how_long'] ?>
		</div>
		<div class="span6">
			<label>Your relationship to the applicant:</label> <?php echo $this->data['Referral']['relationship'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>How well do you know the applicant?:</label> <?php echo $this->data['Referral']['how_well'] ?>
		</div>
		<div class="span6">
			<label>To your knowledge, has the applicant made a personal commitment to Christ?:</label> <?php echo $this->data['Referral']['saved'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>To your knowledge, what Christian service has the applicant participated in regularly? (such as a Sunday school teacher, youth leader, nursery worker, etc.):</label> <?php echo $this->data['Referral']['christian_service'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>To your knowledge, does the applicant:</label>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<div class="row-fluid">
				<label>Smoke?:</label> <?php echo $yesno[$this->data['Referral']['smoke']] ?>
			</div>
			<div class="row-fluid">
				<label>Drink?:</label> <?php echo $yesno[$this->data['Referral']['drink']] ?>
			</div>
			<div class="row-fluid">
				<label>Use illegal drugs?:</label> <?php echo $yesno[$this->data['Referral']['drugs']] ?>
			</div>
		</div>
		<div class="span8">
			<label>Comments on these activities:</label> <?php echo $this->data['Referral']['lifestyle_comments'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>The applicants influence on his or her peers is:</label> <?php echo $this->data['Referral']['peers'] ?>
		</div>
		<div class="span6">
			<div class="row-fluid">
				<label>Which characteristics best describe the applicant?</label>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<?php
						$characteristics = array(
							'warmhearted' => 'Warmhearted',
							'critical' => 'Critical',
							'tolerant' => 'Tolerant',
							'sympathetic' => 'Sympathetic',
							'rebellious' => 'Rebellious',
							'respectful' => 'Respectful',
							'enthusiastic' => 'Enthusiastic',
							'loving' => 'Loving',
						);
						
						$strChar = '';
						
						foreach($characteristics as $k => $char) {
							if($this->data['Referral'][$k]) {
								$strChar.=$char.', ';
							}
						}
						
						$strChar = substr($strChar, 0, strlen($strChar)-2);
						echo $strChar;
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Please indicate what you consider to be the applicants strengths:</label> <?php echo $this->data['Referral']['strengths'] ?>
		</div>
		<div class="span6">
			<label>Please describe any weaknesses of the applicant of which we should be aware:</label> <?php echo $this->data['Referral']['weaknesses'] ?>
		</div>
	</div>
	<?php if($this->data['Referral']['position'] == 0): ?>
	<div class="row-fluid">
		<div class="span4">
			<label>Church Name:</label> <?php echo $this->data['Referral']['church_name'] ?>
		</div>
		<div class="span4">
			<label>Title:</label> <?php echo $this->data['Referral']['title'] ?>
		</div>
		<div class="span4">
			<label>Denomination:</label> <?php echo $this->data['Referral']['denomination'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php
				$address2 = (!empty($this->data['Referral']['address2']))?$this->data['Referral']['address2'].'<br/>':'';
			?>
			<label>Address:</label> <?php echo $this->data['Referral']['address1'].'<br />'.$address2.$this->data['Referral']['city'].', '.$this->data['Referral']['state'].' '.$this->data['Referral']['zip'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>Country:</label> <?php echo $countries[$this->data['Referral']['country']] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>To what extent is the applicant engaged in the activities of your church?:</label> <?php echo $this->data['Referral']['involvement'] ?>
		</div>
		<div class="span6">
			<label>Please describe home factors which might affect the applicants success at CFNI:</label> <?php echo $this->data['Referral']['home_factors'] ?>
		</div>
	</div>
	<?php endif; ?>
	<div class="row-fluid">
		<div class="span6">
			<label>Do you have any concerns about the applicants personal character? Please Explain:</label> <?php echo $this->data['Referral']['concerns'] ?>
		</div>
		<div class="span6">
			<label>Please add any further comments you may have which would help in our evaluation:</label> <?php echo $this->data['Referral']['comments'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label>Do you recommend the applicant to CFNI?:</label> <?php echo $this->data['Referral']['recommend'] ?>
		</div>
		<div class="span6">
			<label>If you checked \'I recommend with reservation\' or \'I cannot recommend\' please give a brief explanation:</label> <?php echo $this->data['Referral']['recommend_explain'] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label>I hereby agree all information is true and complete to the best of my knowledge.</label> <?php echo $yesno[$this->data['Referral']['honest']] ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php
				echo $this->Form->create();
					echo $this->Form->input('id',array());
					//echo $this->Form->input('status',array('options'=>$app_status));
				echo $this->Form->end(array('label'=>'Save Referral','class'=>'btn'));
			?>
		</div>
	</div>
</div>