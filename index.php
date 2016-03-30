<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        <form action="index.php" method="post">
		Vul je username in: <input type="text" name="username" /><br /><br />
		<input type="submit" name="verzend" value="Verzend" />
		</form>

        ?>
    </body>
</html>


<?php
	// Hier wordt gecontroleerd of er op de verzendknop is geklikt
	if(isset($_POST["verzend"]))
	{
				
	// Hier wordt alle input opgehaald
        $username = $_POST["username"];
	

	// Hier wordt de username getoond
	echo"Hallo $username";
		}
?>