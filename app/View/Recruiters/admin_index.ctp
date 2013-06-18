<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Recruiters
		<div class="btn-group pull-right">
			<?php echo $this->Html->link('Add Recruiter', array('action' => 'add'),array('class'=>'btn','escape'=>false)); ?>
		</div>
	</h3>
</div>
<div class="">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>
					<?php echo $this->Paginator->sort('first_name','<i class="icon-sort"></i> Name',array('escape'=>false)); ?>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($recruiters as $recruiter): ?>
			<tr>
				<td><?php echo $this->Html->link($recruiter['Recruiter']['first_name'].' '.$recruiter['Recruiter']['last_name'],array('action'=>'edit',$recruiter['Recruiter']['id'])) ?></td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<?php echo $this->element('paging') ?>
</div>