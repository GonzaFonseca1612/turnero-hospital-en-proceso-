<?php

	session_start();
	session_destroy();

	header('Location: ../medico/loginMed.php');
?>