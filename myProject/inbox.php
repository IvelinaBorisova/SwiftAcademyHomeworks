<?php
session_start();
require 'db.php';
require_once 'src/header.php';
require_once 'src/mainmenu.php';



?>
<body>
<h3>My Messages:</h3>
<table>
		<?php
                        $name = $_SESSION['name'];
			$qu = $mysqli->query( "SELECT * FROM `messages` WHERE `toUser`='$name'");
			if (mysqli_num_rows($qu) > 0) {
				while ($row = mysqli_fetch_array($qu)) {
					echo '<tr>'
                                                . '<td>'.'From User: '. $row["fromUser"] .'</td>'
                                                . '<td>'.' Message: '.$row["message"].'</td>'
                                                . '<td>'.' Date: '.$row["date_of_creation"].'</td>'
                                                .'</tr>';
				}
			}
                        if (mysqli_num_rows($qu)==0){
                            echo 'Empty Inbox! ';
                        }
		?>
	
</table>
</body>

    <?php   
                require_once 'src/footer.php';
                ?>