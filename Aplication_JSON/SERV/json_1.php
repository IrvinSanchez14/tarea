<?php
require_once '../config.php';
$query = "SELECT * from productos";
$result = mysqli_query($con, $query);
$data = array();
while($row = mysqli_fetch_array($result)){
    $data['producto'][] = $row;  
}
$query2 = "SELECT * from adicionables";
$result1 = mysqli_query($con, $query2);
while($row1 = mysqli_fetch_array($result1)){
    $data['adicionables'][] = $row1;  
}
echo json_encode($data);

