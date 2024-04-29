<?php 
error_reporting(0);

 header("Content-Type: application/json");
 header("Access-Control-Allow-Methods: POST");
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

 $data=json_decode(file_get_contents("php://input"));
 include('db.php');

$query = "SELECT * FROM texidata";
 $run=mysqli_query($conn,$query);

$texidata = mysqli_fetch_all($run,MYSQLI_ASSOC);
echo json_encode($texidata);
?>