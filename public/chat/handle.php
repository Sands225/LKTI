<?php

require '../functions.php';
$query = mysqli_query($conn, "SELECT * FROM chat");
$response = array();
$json=[];


foreach($query as $data){

array_push($response, $data);
}
$json['data']=$response;
$json['privil']=$privil;

    echo json_encode($json);

?>