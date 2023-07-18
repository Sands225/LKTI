<?php

require '../functions.php';
$query = mysqli_query($conn, "SELECT * FROM mood");
$response = array();
$json = [];


foreach($query as $data){
    array_push($response, $data);
}

$json['data'] = $response;
$json['email'] = $email;


echo json_encode($json);

?>