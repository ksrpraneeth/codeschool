<?php
include './../database.php';

try{
    $pdo = connect();
    $statement = $pdo -> prepare("select room_id,room_type from roomtype");
    $statement -> execute();
    $roomtypes = $statement->fetchAll(PDO::FETCH_ASSOC);
    $response['status'] = true;
    $response['message'] = "Data Printed Successfully";
    $response['data'] =   $roomtypes;
    echo json_encode($response);
    
} catch(PDOException $e){
    $response['status'] = false;
    $response['message'] = "error";
    $response['data'] =   $roomtypes;
    echo json_encode($response);
}
