<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Faqs
		<div class="btn-group pull-right">
			<?php echo $this->Html->link('Add Faq', array('action' => 'add'),array('class'=>'btn','escape'=>false)); ?>
		</div>
	</h3>
</div>
<div class="">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>
					<?php echo $this->Paginator->sort('question','<i class="icon-sort"></i> Title',array('escape'=>false)); ?>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($faqs as $faq): ?>
			<tr>
				<td><?php echo $this->Html->link($faq['Faq']['question'],array('action'=>'edit',$faq['Faq']['id'])) ?></td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<?php echo $this->element('paging') ?>
</div>