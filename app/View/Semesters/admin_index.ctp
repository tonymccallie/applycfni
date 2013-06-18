<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Semesters
		<div class="btn-group pull-right">
			<?php echo $this->Html->link('Add Semester', array('action' => 'add'),array('class'=>'btn','escape'=>false)); ?>
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
				<th>
					<?php echo $this->Paginator->sort('start','<i class="icon-sort"></i> Start',array('escape'=>false)); ?>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($semesters as $semester): ?>
			<tr>
				<td><?php echo $this->Html->link($semester['Semester']['title'],array('action'=>'edit',$semester['Semester']['id'])) ?></td>
				<td><?php echo $semester['Semester']['start'] ?></td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<?php echo $this->element('paging') ?>
</div>