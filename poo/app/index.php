<?php
	use \Tutoriel\HTML\BootstrapForm;
	use \Tutoriel\Autoloader;
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	<body>

<?php
	require 'class/Autoloader.php';
	Autoloader::register();
	$form = new BootstrapForm($_POST);
?>


		<form action="#" method="post">
		<?php
			echo $form->input('username');
			echo $form->input('password');
			echo $form->submit();
		?>
		</form>
	</body>
</html>
