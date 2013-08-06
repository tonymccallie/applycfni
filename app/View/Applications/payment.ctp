<div class="span6">
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript">
	/* <![CDATA[ */
	
	Stripe.setPublishableKey('pk_live_KsWmMYVFBYlaF0tQN1wVjXJh');
	
	$(document).ready(function() {
		$('#ApplicationPaymentForm').submit(function(event) {
			var $form = $(this);
			//disable button
			$('#errors').hide();
			$('#submit_payment').attr('disabled',true);
			Stripe.createToken($form, stripeResponse);
			return false;
		});
	});
	
	var stripeResponse = function(status, response) {
		console.log([status, response]);
		var $form = $('#ApplicationPaymentForm');

		if (response.error) {
			// Show the errors on the form
			$form.find('.payment-errors').text(response.error.message);
			$('#error_message').html(response.error.message);
			$('#errors').show();
			$('#submit_payment').attr('disabled',false);
		} else {
		// token contains id, last4, and card type
			var token = response.id;
			// Insert the token into the form so it gets submitted to the server
			$form.append($('<input type="hidden" name="stripeToken" />').val(token));
			// and submit
			$form.get(0).submit();
		}
	}
	
	/* ]]> */
	</script>
	<h2>Step 8: Payment Information</h2>
	<p>In order to process your application, a $50.00 application fee is required. Please enter your credit card or debit card information. This is the final step in processing your application to Christ For The Nations Institute. Please note, all credit/debit card information is encrypted.</p>
</div>
<div class="span6">
	<?php 
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div id="errors" class="alert alert-error hide">
		<i class="icon-remove-sign"></i> <span id="error_message"></span>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->Form->input('name_on_card',array('data-stripe'=>'name','class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span9">
			<?php echo $this->Form->input('credit_card_number',array('data-stripe'=>'number','class'=>'span12'));  ?>
		</div>
		<div class="span3">
			<?php echo $this->Form->input('cvc',array('label'=>'CVC','data-stripe'=>'cvc','class'=>'span12')); ?>
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