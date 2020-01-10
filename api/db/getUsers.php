<?php
require 'DBSearch.php';

class GetUsers extends DBQuery {
    public function getAllUserData (){
        $sql = "SELECT * FROM users";
        $query = PDO::prepare($sql);
        $query->execute();
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        // print_r($response);
        if ($query->rowCount() == 0){
            return ['status'=>false,'message'=>"No record found", 'user'=>"none"];
        } else {
            return ['status'=>true, 'message'=>"Email address found!", 'user'=>$response];
        }
    }
}
?>