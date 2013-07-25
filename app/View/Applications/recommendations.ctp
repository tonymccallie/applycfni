<div class="span12">
	<h2>Step 5: Recommendations</h2>
	<?php 
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div class="row-fluid">
		<p>Maybe some details about the recomendations...</p>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<h4>Pastoral Recommendation</h4>
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
			<h4>Personal Recommendation</h4>
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