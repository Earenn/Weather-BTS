<!DOCTYPE html>
<!--
  File      : index.html
  Update at : 28/09/2018
  Update by : CARDINAL FLorian
-->
<?php
	session_start();
	if(isset($_GET['logout'])) { session_destroy(); header('location: ./'); }
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Météo BTS</title>
		<link rel="icon" type="image/ico" href="./pics/icon.ico" />
		<link rel="stylesheet" type="text/css" href="./css/style.css" />
		<link rel="stylesheet" type="text/css" href="./css/scroll.css" />
		<link rel="stylesheet" type="text/css" href="./css/color-default.css" />
		<script language="javascript" type="text/javascript" src="./js/script.js"></script>
	</head>
	<body onload="nav.main(); nav.sub();">
		<div class="bg"></div>
		<?php
			require('./assets/nav.php');
			require('./assets/header.html');
		?>
		<section>
			<aside>
				<?php
					if(isset($_GET['index'])) {
						if($_GET['index'] !== 'login' && !isset($_SESSION['user'])) { header('location: ./?index=login'); }
						switch($_GET['index']) {
							case 'home':
							default: echo('<h2>Bienvenu</h2>');
								for($i = 0; $i < 10; $i++) { echo('<p>blabla</p>'); } break;
							case 'live': require('./assets/live.php'); break;
							case 'story': require('./assets/story.php'); break;
							case 'contact': require('./assets/contact.html'); break;
							case 'login': require('./assets/login.html');
								if(isset($_GET['error'])) {
									echo('<fieldset class="infoBox">
											<p class="error">Identifiants Incorrect</p>
										</fieldset>');
								} break;
						}
					} else { header('location: ./?index=home'); }
				?>
			</aside>
		</section>
		<?php require('./assets/footer.html'); ?>
	</body>
</html>
<!-- END -->
