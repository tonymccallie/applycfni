<div class="span6">
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript">
	/* <![CDATA[ */
	
	Stripe.setPublishableKey('pk_test_Ncl1E5iRvaODV8641OJ6whwf');
	
	$(document).ready(function() {
		$('#ApplicationPaymentForm').submit(function(event) {
			var $form = $(this);
			//disable button
			$('#submit_payment').attr('disabled',true);
			Stripe.createToken($form, stripeResponse);
			return false;
		});
	});
	
	var stripeResponse = function(status, response) {
		console.log([status, response]);
	}
	
	/* ]]> */
	</script>
	<h2>Step 8: Payment Information</h2>
	<p>Abortively and staid unwillingly blew dark much far eager hawk noticeably independent much much well excepting that smelled before built crane onto while then far this as so ouch taught hello told healthy that scratched terrier pled some however darn one.</p>
	<p>Piquantly that and then sped and vicious much at much tart one anteater scallop hello horrendous much more gosh wholesome much jeepers darn much wove congenial some whooped this the goat one one before a more a this more measurable grew oh mumbled extrinsically reindeer various darkly connected oh some.</p>
</div>
<div class="span6">
	<?php 
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div class="row-fluid">
		<div class="span9">
			<?php echo $this->Form->input('credit_card_number',array('data-stripe'=>'number','class'=>'span12'));  ?>
		</div>
		<div class="span3">
			<?php echo $this->Form->input('cvc',array('data-stripe'=>'cvc','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Form->input('exp_month',array('type'=>'date','dateFormat'=>'M','class'=>'span12','data-stripe'=>'exp-month')); ?>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('exp_year',array('type'=>'date','dateFormat'=>'Y','class'=>'span12','data-stripe'=>'exp-year','minYear'=>date('Y'),'minYear'=>date('Y'),)); ?>
		</div>
	</div>
	<div class="btn-group pull-right">
		<?php
			echo $this->Html->link('Back',array('action'=>'releases'),array('class'=>'btn btn-large pull-left','div'=>false));
			echo $this->Form->submit('Finish',array('id'=>'submit_payment','class'=>'btn btn-inverse btn-large','div'=>false));
		?>
	</div>
	<?php
		echo $this->Form->end();
	?>
</div>