<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Majors
		<div class="btn-group pull-right">
			<?php echo $this->Html->link('Add Major', array('action' => 'add'),array('class'=>'btn','escape'=>false)); ?>
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
		<?php foreach($majors as $major): ?>
			<tr>
				<td><?php echo $this->Html->link($major['Major']['title'],array('action'=>'edit',$major['Major']['id'])) ?></td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<?php echo $this->element('paging') ?>
</div>