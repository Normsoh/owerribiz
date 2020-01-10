<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: appication/json; charset = UFT-8");

require '../db/getUsers.php';

$getAllUsers = new GetUsers;

$json = json_encode($getAllUsers->getAllUserData());

// if ($json['status']) {
//     http_response_code(200);
    echo $json;
// } else {
//     http_response_code(404);
//     echo $json;
// }

?>