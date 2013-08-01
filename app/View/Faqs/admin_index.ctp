<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Faqs
		<div class="btn-group pull-right">
			<?php echo $this->Html->link('Add Faq', array('action' => 'add'),array('class'=>'btn','escape'=>false)); ?>
			<?php echo $this->Html->link('Manage Categories', array('action'=>'index','controller'=>'faq_categories'),array('class'=>'btn')) ?>
		</div>
	</h3>
</div>
<div class="">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>
					<?php echo $this->Paginator->sort('question','<i class="icon-sort"></i> Question',array('escape'=>false)); ?>
				</th>
				<th>
					<?php echo $this->Paginator->sort('category_id','<i class="icon-sort"></i> Category',array('escape'=>false)); ?>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($faqs as $faq): ?>
			<tr>
				<td><?php echo $this->Html->link($faq['Faq']['question'],array('action'=>'edit',$faq['Faq']['id'])) ?></td>
				<td><?php echo $faq['FaqCategory']['title'] ?></td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<?php echo $this->element('paging') ?>
</div>