<div class="span12">
	<h2>Recommendation Form</h2>
	<p>This is a recommendation form for <?php echo $referral['Application']['first_name'].' '.$referral['Application']['last_name'] ?></p>
	<p>More interesting text about the importance of referrals...</p>
	<?php
		echo $this->Form->create();
			echo $this->Form->input('id',array());
			echo $this->Form->input('content',array());
		echo $this->Form->end(array('label'=>'Save Recommendation','class'=>'btn'));
	?>
</div>