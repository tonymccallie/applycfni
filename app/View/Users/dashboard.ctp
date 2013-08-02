<div class="span12">
<?php if(empty($application)): ?>
	<h2><i class="icon-dash"></i>Welcome</h2>
	<p>Thank you for considering Christ For The Nations Institute for your biblical training. You are about to embark on the most rewarding journey of your life.
As you begin your application process, a checklist will be provided to indicate information needed for acceptance. Please refer to this form as you check off the necessary items needed to complete your application form. </p>

<!-- I PUT THIS AS A PLACE HOLDER FOR SCREENSHOTS, NOT SURE IF IT IS RIGHT -->
	<a href="/applycfni/applications/start" class="btn btn-large btn-inverse">Start the Application</a>

<?php else: ?>
	<h1>Thank You.</h1>
	<p>Thank you for beginning the application process to attend CFNI.  An admissions advisor will be contacting you soon.  There are a few documents we will need to complete your enrollment.  At this point, you will not be able to change your application information online.  If any changes are needed, please contact the admissions office at <a href="mailto:admissions@cfni.org">admissions@cfni.org.</a>  We are excited that you have chosen CFNI for biblical training.  As always, your admissions advisor is here to answer any questions you may have. 
We look forward to serving you during this process.
The CFNI Admissions Team</p>
	<?php 
		$action = 'start';
		$text = 'Start The Application';
		if(!empty($application)) {
			$text = 'Continue The Application';
			switch($application['Application']['step_completed']) {
				case 1:
					$action = 'personal';
					break;
				case 2:
					$action = 'education';
					break;
				case 3:
					$action = 'spiritual';
					break;
				case 4:
					$action = 'recommendations';
					break;
				case 5:
					$action = 'releases';
					break;
			}
			
		}
		
		echo $this->Html->link('<i class="icon-check"></i> '.$text,array('controller'=>'applications','action'=>$action),array('class'=>'btn btn-large btn-inverse','escape'=>false));
	?>
<?php endif ?>	
</div>


