<?php  
	require_once('db/dbconf.php');
	require_once('salt.php');

	if (isset($_POST['sign-in']) && $_POST['username']!='') {
		$username = $_POST['username'];
		$password = crypt($_POST['password'], KEY_SALT);

		$sql = "SELECT *
				FROM account 
				WHERE username = '$username' AND password = '$password'";	

		$result = $db->query($sql);

		if ($result->num_rows > 0) { // num_rows : Retourne le nombre de lignes dans un résultat
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;

			if ($_POST['r'] == 'remember') {
				setcookie('username', $username);
			}
			header('Location: index.php');
		}
		else {
			header('Location: login.php');
		}
	}
	else {
		header('Location: login.php');
	}
?>