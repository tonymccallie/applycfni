<div class="span12">
	<h2>Step 6: Recommendations</h2>
	<?php 
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div class="row-fluid">
		<p>Your recommender must have known you for at least 6 months prior to filling out the recommendation. Please note, this form cannot be completed by a relative of the applicant.</p>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<h4>Pastoral Recommendation <a href="#" class="labeltooltip" data-toggle="tooltip" data-placement="top" title data-original-title="Your pastor must have known you for at least 6 months prior to filling out this recommendation.  If your pastor is related to you, please ask another member of the church’s pastoral staff who is familiar with you to complete this form and provide a letter of explanation."><i class="icon-question-sign"></i></a></h4>
			<?php
				echo $this->Form->input('Referral.0.id',array());
				echo $this->Form->input('Referral.0.first_name',array());
				echo $this->Form->input('Referral.0.last_name',array());
				echo $this->Form->input('Referral.0.email',array());
				echo $this->Form->input('Referral.0.sent',array('type'=>'hidden'));
				echo $this->Form->input('Referral.0.position',array('type'=>'hidden','value'=>0));
				if(!empty($this->data['Referral'][0]['sent'])) {
					//echo $this->Form->input('Referral.0.resend',array('type'=>'checkbox','label'=>'Email sent on '.date('l, M jS',strtotime($this->data['Referral'][0]['sent'])).', resend?'));
					echo '<label>Email sent on '.date('l, M jS',strtotime($this->data['Referral'][0]['sent'])).'</label>';
					echo $this->ExtendedForm->checkbox('Referral.0.resend',array('label'=>'Resend Email?','type'=>'checkbox'));
				}
			?>
		</div>
		<div class="span6">
			<h4>Personal Recommendation <a href="#" class="labeltooltip" data-toggle="tooltip" data-placement="top" title data-original-title="This form should be completed by a high school or college teacher, an employer or a friend, but NOT completed by a relative.  The recommender must have known you for at least 6 months prior to filling out this recommendation."><i class="icon-question-sign"></i></a></h4>
			<?php
				echo $this->Form->input('Referral.1.id',array());
				echo $this->Form->input('Referral.1.first_name',array());
				echo $this->Form->input('Referral.1.last_name',array());
				echo $this->Form->input('Referral.1.email',array());
				echo $this->Form->input('Referral.1.sent',array('type'=>'hidden'));
				echo $this->Form->input('Referral.1.position',array('type'=>'hidden','value'=>1));
				if(!empty($this->data['Referral'][1]['sent'])) {
					echo '<label>Email sent on '.date('l, M jS',strtotime($this->data['Referral'][1]['sent'])).'</label>';
					echo $this->ExtendedForm->checkbox('Referral.1.resend',array('label'=>'Resend Email?','type'=>'checkbox'));
				}
			?>
		</div>
	</div>
	<div class="btn-group pull-right">
	<?php
		echo $this->Html->link('Back',array('action'=>'spritual'),array('class'=>'btn btn-large pull-left','div'=>false));
		echo $this->Form->submit('Next',array('class'=>'btn btn-inverse btn-large','div'=>false));
	?>
	</div>
	<?php echo $this->Form->end(); ?>
</div>