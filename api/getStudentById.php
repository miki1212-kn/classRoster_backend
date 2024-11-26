<?php
include '../db/connection.php';

if(isset($_GET['id'])){
  $studentId = $_GET['id'];

  $query = "SELECT * FROM class_list WHERE id = ?";

$stmt = $conn->prepare($query);
$stmt -> bind_param("i",$studentId);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $student = $result->fetch_assoc();
  echo json_encode($student);
} else {
  echo json_encode(["error" => "学生情報が見つかりません"]);
}
} else {
echo json_encode(["error" => "学生IDが指定されていません"]);



}
$conn->close();
?>