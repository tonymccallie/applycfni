<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Degrees
		<div class="btn-group pull-right">
			<?php echo $this->Html->link('Add Degree', array('action' => 'add'),array('class'=>'btn','escape'=>false)); ?>
		</div>
	</h3>
</div>
<div class="">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>
					<?php echo $this->Paginator->sort('title','<i class="icon-sort"></i> Title',array('escape'=>false)); ?>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($degrees as $degree): ?>
			<tr>
				<td><?php echo $this->Html->link($degree['Degree']['title'],array('action'=>'edit',$degree['Degree']['id'])) ?></td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<?php echo $this->element('paging') ?>
</div>