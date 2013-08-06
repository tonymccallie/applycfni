<?php $url = 'https://www.applytocfni.com/admin/applications/edit/'.$applicant_id ?>
<p>Good news! <?php echo $applicant_name ?> has finished the application process.</p>
<p>Please click on this link to view the application:<br />
<?php echo $this->Html->link($url,$url,array('style'=>"font-weight:bold;text-decoration:none;")) ?><br />
