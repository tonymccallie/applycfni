<?php $url = 'https://www.applytocfni.com/admin/referrals/edit/'.$referral_id ?>
<p>Good news! <?php echo $referral_name ?> has finished a referral.</p>
<p>Please click on this link to view the referral:<br />
<?php echo $this->Html->link($url,$url,array('style'=>"font-weight:bold;text-decoration:none;")) ?><br />
