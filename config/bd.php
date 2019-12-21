<?php

//connect to MYSQL
$con = mysqli_connect('localhost','root','','wstorage');
//Test connexion 
if (mysqli_connect_errno()) {
	echo 'Failled to connect to MYSQL: '.$mysqli_connect_errno();
}

?>