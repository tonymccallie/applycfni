<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Applications
		<div class="btn-group pull-right">
			<?php //echo $this->Html->link('Add Application', array('action' => 'add'),array('class'=>'btn','escape'=>false)); ?>
		</div>
	</h3>
</div>
<div class="">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>
					<?php echo $this->Paginator->sort('last_name','<i class="icon-sort"></i> Name',array('escape'=>false)); ?>
				</th>
				<th>
					<?php echo $this->Paginator->sort('status','<i class="icon-sort"></i> Status',array('escape'=>false)); ?>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($applications as $application): ?>
			<tr>
				<td><?php echo $this->Html->link($application['Application']['last_name'].', '.$application['Application']['first_name'],array('action'=>'edit',$application['Application']['id'])) ?></td>
				<td><?php echo $app_status[$application['Application']['status']] ?></td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<?php echo $this->element('paging') ?>
</div>