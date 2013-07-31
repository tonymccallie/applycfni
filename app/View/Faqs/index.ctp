<div class="span12">
	<h3>Frequently Asked Questions</h3>
	<ul>
	<?php foreach($faqs as $faq): ?>
		<li><?php echo $this->Html->link($faq['Faq']['question'],'#'.$faq['Faq']['id']) ?></li>
	<?php endforeach ?>
	</ul>
	<?php foreach($faqs as $faq): ?>
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