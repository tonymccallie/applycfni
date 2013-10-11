<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Edit Coupon
		<div class="btn-group pull-right">
			<?php echo $this->Html->link('<i class="icon-trash"></i> ', array('action' => 'delete', $this->data['Coupon']['id']), array('escape'=>false,'class'=>'btn'),'Are you sure you want to delete this Coupon?'); ?>
		</div>
	</h3>
</div>
<div class="">
	<?php
		echo $this->Form->create();
	?>
	<div class="row-fluid">
		<div class="span6">
			<?php
				echo $this->Form->input('id',array());
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
				echo $this->Form->input('code',array('class'=>'span12'));
				echo $this->Form->input('qty',array('label'=>'Number available','class'=>'span12'));
				echo $this->Form->input('start_date',array('class'=>'span4','empty'=>true));
				echo $this->Form->input('stop_date',array('class'=>'span4','empty'=>true));
			?>
			<h4>Applications using this coupon</h4>
			<?php foreach($this->data['Application'] as $application): ?>
				<div class="row-fluid">
					<?php echo $this->Html->link($application['first_name'].' '.$application['last_name'],'/admin/applications/edit/'.$application['id']) ?>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<?php
		echo $this->Form->end(array('label'=>'Save Coupon','class'=>'btn'));
	?>
</div>