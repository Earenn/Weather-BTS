<?php
	/*******************************
	*                              *
	* File      : process.php      *
	* Update at : 29/09/2018       *
	* Update by : CARDINAL Florian *
	*                              *
	*******************************/
	
	function verifyData($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(isset($_GET['login']) && (verifyData($_POST['user']) && verifyData($_POST['pass'])) && (($_POST['user'] === 'admin') && ($_POST['pass'] === 'admin'))) {
			session_start();
			$_SESSION['user'] = $_POST['user'];
			header('location: ./');
		} else { header('location: ./?index=login&error'); }
	}
	
	// END
?>
