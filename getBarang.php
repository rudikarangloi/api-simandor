<?php 

require_once 'connect.php';

$kodeUpb = $_GET['kodeUpb'];
$kodeAset = $_GET['kodeAset'];

$query=" SELECT * FROM ta_kib_108 
			WHERE referensi LIKE '%' 
			AND extracom LIKE 'N' 
			AND Kd_UPB LIKE '$kodeUpb' 
			AND Kd_Ruang LIKE '%' 
			AND Kd_Aset_108 LIKE  '$kodeAset'
			AND Tgl_Perolehan >='1970-01-01' AND Tgl_Perolehan <='2022-12-31' 
			ORDER BY Kd_UPB, Tgl_Perolehan, Kd_Aset_108, No_Register LIMIT 0, 50;";
$data=array();
$result = mysqli_query($conn, $query);
while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
$response=array(
            'status' => 1,
            'message' =>'Get Data Successfully.',
            'value' => $data
        );
header('Content-Type: application/json');
echo json_encode($response);

?>