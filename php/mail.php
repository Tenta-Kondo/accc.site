<html>

<head>
	<meta charset="utf-8" />
</head>

<body>
	<?php

	mb_language("Japanese");
	mb_internal_encoding("UTF-8");
	$adress = $_POST['adress'];
	$name = $_POST['name'];
	$mailadress = $_POST['mailadress'];
	$content = $_POST['content'];

	if ($_POST["name"] === "" || $_POST["mailadress"] === "") {
		header('location: ../contact.php');
		exit();
	} else {
		mb_send_mail($adress, $name, $mailadress, $content);		
	}
	?>
</body>

</html>