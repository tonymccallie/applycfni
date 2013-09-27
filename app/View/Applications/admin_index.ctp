<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Applications
		<div class="btn-group pull-right">
			<?php
				echo $this->Html->link('Show All','/admin/applications/index',array('escape'=>false,'class'=>'btn'));	
				foreach($app_status as $k => $status) {
					$active = '<i class="icon-check-empty"></i> ';
					if(isset($this->request->params['named']['status'])) {
						if($this->request->params['named']['status'] == $k) {
							$active = '<i class="icon-check"></i> ';
						}
					}
					echo $this->Html->link($active.$status,'/admin/applications/index/status:'.$k,array('escape'=>false,'class'=>'btn'));	
				}
			?>
		</div>
	</h3>
</div>
<div class="">
	<?php echo $this->element('search') ?>
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