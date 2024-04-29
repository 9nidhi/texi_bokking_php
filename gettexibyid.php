<?php 
    error_reporting(0);

    header("Content-Type: application/json");
    header("Access-Control-Allow-Methods: GET ");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $data=json_decode(file_get_contents("php://input"));
    include('db.php');

 $id = $data->id;



$sql = "SELECT * FROM  texidata WHERE id='$data->id'";

$result = mysqli_query($conn, $sql);



if(mysqli_num_rows($result) > 0 ){
	
	$output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);


}else{

 echo json_encode(array('message' => 'No Record Found.', 'status' => false));

}    
 ?>
    
