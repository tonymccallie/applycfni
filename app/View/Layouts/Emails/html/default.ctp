<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Email Template</title>
</head>
<body style="background: #D1D2D4;">
	<div id="BodyNewsletter" style="margin: 0px auto; width: 600px;">
		<table id="NewsletterHeader" border="0" cellspacing="0" cellpadding="0" width="600" style="margin-top:15px; margin-bottom:15px;">
	        <tr>
	            <td>
	                <img src="https://applytocfni.com/img/email-logo.gif" alt="logo" width="600" height="36" />
	            </td>
	        </tr>
	    </table>
	    <table id="NewsletterHeader" border="0" cellspacing="0" cellpadding="0" width="600">
	        <tr>
	            <td style="background: #FFFFFF;color:#58585B;font-family: Helvetica, Arial, sans-serif; padding:18px; font-size:14px;">
	                <?php echo $content_for_layout;?>
	            </td>
	        </tr>
	    </table>
	    <table id="NewsletterHeader" border="0" cellspacing="0" cellpadding="0" width="600" style="margin-top:15px; margin-bottom:15px;">
	        <tr>
		            <td style="color:#58585B;font-size:12px; padding: 18px; margin-top:15px" align="center">
					©2013 Christ for the Nations Institute<br />
					444 Fawn Ridge Drive Dallas, Texas 75224<br />
					1-800-933-CFNI (2364) | adminssions@cfni.org<br />
	        	</td>
	        </tr>
	    </table>
	</div>
</body>
</html>