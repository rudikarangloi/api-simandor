<?php

require_once 'connect.php';

$code = $_GET['kode'];

$query = "SELECT * FROM ta_kib_108  WHERE kode_bar = '$code'";	
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);	
echo json_encode($data);



?>