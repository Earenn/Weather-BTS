<?php
	/*******************************
	*                              *
	* File      : process.php      *
	* Update at : 29/09/2018       *
	* Update by : CARDINAL Florian *
	*                              *
	*******************************/
	
	if(isset($_GET['login'])) {
		session_start();
		
		if(($_POST['user'] === 'admin') && ($_POST['pass'] === 'admin')) {
			$_SESSION['user'] = $_POST['user'];
			header('location: ./');
		} else { header('location: ./?index=login&error'); }
	}
	
	if(isset($_GET['contact'])) {
		header('location: ./');
	}
	
	// END
?>