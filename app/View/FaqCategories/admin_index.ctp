<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Faq Categories
		<div class="btn-group pull-right">
			<?php echo $this->Html->link('Add Category', array('action' => 'add'),array('class'=>'btn','escape'=>false)); ?>
			<?php echo $this->Html->link('Manage Faqs', array('action'=>'index','controller'=>'faqs'),array('class'=>'btn')) ?>
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
		<?php foreach($categories as $category): ?>
			<tr>
				<td><?php echo $this->Html->link($category['FaqCategory']['title'],array('action'=>'edit',$category['FaqCategory']['id'])) ?></td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<?php echo $this->element('paging') ?>
</div>