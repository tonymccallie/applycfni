<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Add Coupon
	</h3>
</div>
<div class="">
	<?php
		echo $this->Form->create();
	?>
	<div class="row-fluid">
		<div class="span6">
			<?php
				echo $this->Form->input('title',array('class'=>'span12'));
				echo $this->Form->input('descr',array('class'=>'span12'));
				echo $this->Form->input('type',array('class'=>'span12','options'=>array(
					'percentage' => 'Percentage discount',
					'amount' => 'Amount discount'
				)));
				echo $this->Form->input('value',array('class'=>'span12'));
			?>
		</div>
		<div class="span6">
			<?php
				echo $this->Form->input('qty',array('label'=>'Number available','class'=>'span12'));
				echo $this->ExtendedForm->checkbox('multiple',array('label'=>'Create separate coupons for each?','type'=>'checkbox'));
				echo $this->Form->input('start_date',array('class'=>'span4','empty'=>true));
				echo $this->Form->input('stop_date',array('class'=>'span4','empty'=>true));
			?>
		</div>
	</div>
	<?php
		echo $this->Form->end(array('label'=>'Add Coupon','class'=>'btn'));
	?>
</div>