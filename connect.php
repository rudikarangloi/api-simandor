<?php 
define('host','localhost');
define('name', 'proiso');
define('pass', 'ra11-19');
define('dbase', 'sipandabmd');

$conn = mysqli_connect(host, name, pass, dbase,3306) or die('Unable to connect');


?>