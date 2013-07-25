<div class="span12">
	<h2>Step 7: Releases</h2>
	<?php 
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div class="row-fluid">
		<div class="span12">
			<p>Yikes thus messily less spontaneous about the and mistook snuffed tonal across fruitful pragmatically along one rewound some kangaroo yikes bombastically far impetuous crud inside atrocious more after and yet because.</p>
			<p>Egregiously oh in sleekly tensely admonishingly direly aside yikes that punitive jubilant and instantaneously wherever angrily kiwi a gosh took oh haphazardly dear weasel but goldfish caribou deceptively less among equally and sheep jeez gratefully abrasively goodness abhorrent uselessly squirrel then dove rolled gorilla urgently less said while shrank fearlessly much bombastic.</p>
			<p>Up heroically manatee at much iguana spilled more slight bought plankton alas buffalo among other vehement before despite.</p>
			<p>Trenchantly one where shined awakened strode reindeer squid some euphemistically limpet wonderful awfully hence hopefully the gosh tacky accurately unlike ouch meanly bee bee respectfully much regardless this flirted reasonable oh.</p>
			<p>Creative much and ouch crud sadistic vindictive alas audaciously widely hey sheep harsh much more oh after that jokingly and including commendably met because overhung vindictively lorikeet as swung yikes moth far factious interbred thus and much that yikes spoon-fed alas and numbly some a.</p>

			<?php echo $this->ExtendedForm->checkbox('release',array('label'=>'I Agree','type'=>'checkbox')); ?>
		</div>
	</div>
	<div class="btn-group pull-right">
	<?php
		echo $this->Html->link('Back',array('action'=>'recommendations'),array('class'=>'btn btn-large pull-left','div'=>false));
		echo $this->Form->submit('Finish',array('class'=>'btn btn-inverse btn-large','div'=>false));
	?>
	</div>
	<?php echo $this->Form->end(); ?>
</div>