<?php 
	$autoload = function ($class){
		if ($class === 'Email') {
			include "./classes/phpmailer/PHPMailerAutoload.php";
		}
		include "./classes/$class.php";
	};

	spl_autoload_register($autoload);

	$INCLUDE_PATH ='http://localhost/modulo_5/aula_01/';

?>