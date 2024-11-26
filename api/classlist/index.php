<?php

const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASSWORD = "miki1212";
const DB_DRIVER = "mysql";
const DB_NAME = "classroster";
const DB_DSN = DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME;

try{
  $db = new PDO(DB_DSN,DB_USER,DB_PASSWORD);
  $sql = "SELECT * FROM class_list";


  $stmt = $db -> prepare($sql);
  $stmt -> execute();
  //連想配列のみかえす
  while ($row = $stmt -> fetchAll(PDO::FETCH_ASSOC)){
    $classList[] = $row;
  }
}
catch(PDOException $e){
  print $e -> getMessage();

};

//返ってきた
var_dump($classList); 


header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

print json_encode($classList);
