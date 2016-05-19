<?php

$nome = $_REQUEST['nome'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$curso = $_REQUEST['curso'];

if ($nome === '') :
	echo "<div>Este campo deve ser preenchido</div>";
endif;

?>