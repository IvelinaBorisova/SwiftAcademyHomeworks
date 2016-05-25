<?php
	session_start();
	require_once "/src/header.php";
	require_once "/src/mainmenu.php";

	require_once 'db.php';

	$name = $_POST['name'];
	$password =md5($_POST['password']);
	$sql = "SELECT* FROM users WHERE (name = '$name') && (password = '$password');";
	$result = $mysqli->query($sql);  
        $num_rows = $result->num_rows;
        //print_r($result);
	if ($num_rows == 0) {
                require_once "/src/header.php";
		require_once "/src/mainmenu.php";
		echo '<a href="login.php">Error: cannot execute query</a>';
                require_once "/src/footer.php";

		exit;
                
	}
        
   
             if ($num_rows >= 1) {
		$_SESSION['login'] = 'OK';
		$_SESSION['name'] = $name;
		header('Location: private.php ');
                
		exit();
	
        }
        require_once "/src/footer.php";
        //header('login.php');
	//close($mysqli);
	
?>