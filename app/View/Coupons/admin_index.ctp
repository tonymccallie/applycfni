<div class="admin_header">
	<h3>
		<i class="icon-edit"></i> Coupons
		<div class="btn-group pull-right">
			<?php echo $this->Html->link('Add Coupon', array('action' => 'add'),array('class'=>'btn','escape'=>false)); ?>
		</div>
	</h3>
</div>
<div class="">
	<?php echo $this->element('search') ?>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>
					<?php echo $this->Paginator->sort('title','<i class="icon-sort"></i> Title',array('escape'=>false)); ?>
				</th>
				<th>
					<?php echo $this->Paginator->sort('code','<i class="icon-sort"></i> Code',array('escape'=>false)); ?>
				</th>
				<th>
					<?php echo $this->Paginator->sort('qty','<i class="icon-sort"></i> Qty',array('escape'=>false)); ?>
				</th>
				<th>
					<?php echo $this->Paginator->sort('used_qty','<i class="icon-sort"></i> Used',array('escape'=>false)); ?>
				</th>
				<th>
					<?php echo $this->Paginator->sort('start_date','<i class="icon-sort"></i> Start',array('escape'=>false)); ?>
				</th>
				<th>
					<?php echo $this->Paginator->sort('stop_date','<i class="icon-sort"></i> Stop',array('escape'=>false)); ?>
				</th>
				<th>
					<?php echo $this->Paginator->sort('type','<i class="icon-sort"></i> Type',array('escape'=>false)); ?>
				</th>
				<th>
					<?php echo $this->Paginator->sort('value','<i class="icon-sort"></i> Value',array('escape'=>false)); ?>
				</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($coupons as $coupon): ?>
			<tr>
				<td><?php echo $this->Html->link($coupon['Coupon']['title'],array('action'=>'edit',$coupon['Coupon']['id'])) ?></td>
				<td><?php echo $coupon['Coupon']['code'] ?></td>
				<td><?php echo $coupon['Coupon']['qty'] ?></td>
				<td><?php echo $coupon['Coupon']['used_qty'] ?></td>
				<td><?php echo $coupon['Coupon']['start_date'] ?></td>
				<td><?php echo $coupon['Coupon']['stop_date'] ?></td>
				<td><?php echo $coupon['Coupon']['type'] ?></td>
				<td><?php echo $coupon['Coupon']['value'] ?></td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<?php echo $this->element('paging') ?>
</div>