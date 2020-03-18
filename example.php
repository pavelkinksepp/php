<?php
if (!isset($_COOKIE["name"])) {
	setcookie("name", 1,time()+3600);
	echo "Это мой первый визит";
} else {
	$vizit = $_COOKIE["name"];
	$vizit++;
	setcookie("name", 1,time()+3600);
	echo "Это мой первый $vizit визит";
}

?>