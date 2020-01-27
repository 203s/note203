<?php
    require_once("setting.php");
    require_once("es_cken/es_cken.php");
    require_once("pdo_functions.php");

    $connectDB = new PDOfunctions();

    //行われている通信がPOST通信ならば
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        try{
            $res = $connectDB->post();
            //データのタイプを指定
            // header('Content-Type: application/json');
            // echo json_encode($res);
            exit;
        }catch(Exception $e){
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
            echo $e->getMessage();
        }
    }