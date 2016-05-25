<body>
<?php
	session_start();
	
	require_once "/validate.php";
	require_once "/src/header.php";
	require_once "/src/mainmenu.php";
?>
        <h2>Welcome!</h2>

	<p><a href="exit.php">Exit</a></p>
        <p><a href="inbox.php">Inbox</a></p>
        <p><a href="sendMessage.php">Send Message</a></p>

    </body>
<?php	
	require_once "/src/footer.php";
?>