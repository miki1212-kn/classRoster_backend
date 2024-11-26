<?php
// データベース接続情報
$servername = "localhost"; 
$username = "root"; 
$password = "miki1212"; 
$dbname = "classroster"; 

// MySQLへの接続を作成
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続確認
if ($conn->connect_error) {
    die("接続失敗: " . $conn->connect_error);
} else {
    // 接続成功時のログ（デバッグ用）
    // echo "接続成功";
}
?>
