<div class="span12">
	<h3>Frequently Asked Questions</h3>
	<?php foreach($categories as $category): ?>
		<h5><?php echo $category['FaqCategory']['title'] ?></h5>
		<ul>
		<?php foreach($category['Faq'] as $faq): ?>
			<li><?php echo $this->Html->link($faq['question'],'#'.$faq['id']) ?></li>
		<?php endforeach ?>
		</ul>
	<?php endforeach ?>
	
	<?php foreach($faqs as $faq): ?>
	<div class="row-fluid">
		<div class="span12">
			<h5></h5>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4" id="<?php echo $faq['Faq']['id'] ?>">
			<b><?php echo $faq['Faq']['question'] ?></b>
		</div>
		<div class="span8">
			<p><?php echo $faq['Faq']['answer'] ?></p>
		</div>
	</div>
	<?php endforeach ?>
</div>