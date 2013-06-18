<div class="span12">
	<h2><i class="icon-dash"></i>Welcome</h2>
	<p>Your consideration of Christ For The Nations Institute is something for which we are very thankful. A check list is provided which will indicate
information needed for acceptance. Please keep this form and refer to it when you send information to Enrollment Services.</p>
	<p>More text and directons will go here...</p>
	<?php 
		$action = 'start';
		$text = 'Start The Application';
		if(!empty($application)) {
			$text = 'Continue The Application';
			switch($application['Application']['step_completed']) {
				case 1:
					$link = 'personal';
					break;
				case 2:
					$link = 'education';
					break;
				case 3:
					$link = 'spiritual';
					break;
				case 4:
					$link = 'recommendations';
					break;
				case 5:
					$link = 'releases';
					break;
			}
			
		}
		
		echo $this->Html->link('<i class="icon-check"></i> '.$text,array('controller'=>'applications','action'=>$action),array('class'=>'btn btn-large btn-inverse','escape'=>false));
	?>
</div>