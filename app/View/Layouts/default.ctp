<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CFNI Student Application: <?php echo $title_for_layout ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

<?php
	$develop = true;
	if($develop):
?>
	<link rel="stylesheet/less" type="text/css" href="<?php echo $this->webroot ?>css/styles.less?<?php echo time() ?>" />
	<script type="text/javascript">
		less = {
			env: "development", // or "production"
			poll: 1000,         // when in watch mode, time in ms between polls - add '#!watch' to url to enable or less.watch(); in console
			dumpLineNumbers: "mediaQuery", // or "mediaQuery" or "all"
		};
	</script>
	<script src="<?php echo $this->webroot ?>js/less-1.3.3.min.js"></script>
<?php else: ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot ?>css/styles.min.css" />
<?php endif ?>
	
	
	<!-- Le Scripts -->
	<script src="<?php echo $this->webroot ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo $this->webroot ?>js/bootstrap.min.js"></script>
	<script src="<?php echo $this->webroot ?>js/custom.js"></script>
	<script type="text/javascript" src="//use.typekit.net/rfu1sqf.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
	
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->webroot ?>ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->webroot ?>ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->webroot ?>ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo $this->webroot ?>ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="<?php echo $this->webroot ?>ico/favicon.png">
	
	<!-- Google Analytics -->
	<!-- /Google Analytics -->
</head>

<body class="<?php echo $this->name ?>" id="<?php echo $this->name.'-'.$this->action ?>" >
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- Mobile Menu Button -->
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- /Mobile Menu Button -->

				<?php echo $this->Html->link($this->Html->image('logo.png'),'/',array('class'=>'brand','escape'=>false)) ?>

				<div class="nav-collapse collapse pull-right">
					<ul class="nav">
						<li class="active"><?php echo $this->Html->link('Home','/') ?></li>
						<li><?php echo $this->Html->link('FAQs','/faqs') ?></li>
						<?php if(Authsome::get('Role.name') == 'Admin'): ?>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="admin_dropdown">Admin <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><?php echo $this->Html->link('Applications','/admin/applications') ?></li>
									<li><?php echo $this->Html->link('Users','/admin/users') ?></li>
									<li><?php echo $this->Html->link('Semesters','/admin/semesters') ?></li>
									<li><?php echo $this->Html->link('Majors','/admin/majors') ?></li>
									<li><?php echo $this->Html->link('Degrees','/admin/degrees') ?></li>
									<li><?php echo $this->Html->link('FAQs','/admin/faqs') ?></li>
								</ul>
							</li>
						<?php endif ?>
						<?php if(Authsome::get('email') == 'guest@greyback.net'): ?>
							<li class=""><?php echo $this->Html->link('Login','/users/login') ?></li>
						<?php else: ?>
							<li class=""><?php echo $this->Html->link('Change Password','/users/password') ?></li>
							<li class=""><?php echo $this->Html->link('Logout','/users/logout') ?></li>
						<?php endif ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div id="steps">
		<?php
			$steps = array(
				1 => array('01. Start','/applications/start'),
				2 => array('02. Personal','/applications/personal'),
				3 => array('03. Background','/applications/background'),
				4 => array('04. Education','/applications/education'),
				5 => array('05. Spiritual','/applications/spiritual'),
				6 => array('06. Recommendations','/applications/recommendations'),
				7 => array('07. Releases','/applications/releases'),
				8 => array('08. Payment','/applications/payment'),
				9 => array('Status','/applications/status')
			);
			if(!empty($application)) {
				for($i=1; $i <= $application['Application']['step_completed']+1;$i++) {
					if($i > 1) {
						echo '<i class="icon-chevron-right"></i>';
					}
					echo $this->Html->link($steps[$i][0],$steps[$i][1]);
				}
			}
		?>
	</div>

	<div class="container">

		<?php echo $this->Session->flash(); ?>
		<div class="row-fluid">
			<?php echo $content_for_layout ?>
		</div>
	</div>

	<div id="footer">
		<div class="container">
			<div class="row-fluid">
				<div class="span12 text-center">
					<p>&copy;<?php echo date('Y') ?> Christ for the Nations Institute |  1-800-933-CFNI (2364)  |  <a href="mailto:info@cfni.org">info@cfni.org</a>  | <a href="http://apply.cfni.org/privacypolicy.html">Privacy Policy </a> | <a href="http://apply.cfni.org/termsandconditions.html">Terms & Conditions </a> | <a href="http://apply.cfni.org/eula.html">EULA </a> </p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
