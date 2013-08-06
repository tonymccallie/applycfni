<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Referrals
		<div class="btn-group pull-right">
			<?php //echo $this->Html->link('Add Referral', array('action' => 'add'),array('class'=>'btn','escape'=>false)); ?>
		</div>
	</h3>
</div>
<div class="">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>
					<?php echo $this->Paginator->sort('last_name','<i class="icon-sort"></i> Referral',array('escape'=>false)); ?>
				</th>
				<th>
					<?php echo $this->Paginator->sort('applicant_id','<i class="icon-sort"></i> Applicant',array('escape'=>false)); ?>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($referrals as $referral): ?>
			<tr>
				<td><?php echo $this->Html->link($referral['Referral']['last_name'].', '.$referral['Referral']['first_name'],array('action'=>'edit',$referral['Referral']['id'])) ?></td>
				<td><?php echo $referral['Application']['first_name'].' '.$referral['Application']['last_name'] ?></td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<?php echo $this->element('paging') ?>
</div>