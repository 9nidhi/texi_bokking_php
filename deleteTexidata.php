<?php 
error_reporting(0);

 header("Content-Type: application/json");
 header("Access-Control-Allow-Methods: DELETE");
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

 $data=json_decode(file_get_contents("php://input"));
 include('db.php');

 date_default_timezone_set('Asia/Kolkata'); 

 if(isset($data->cash,$data->vendor,$data->commission,$data->date,$data->phoneno));


$sql = "DELETE  FROM  texidata WHERE  id='$data->id'";

if(mysqli_query($conn,$sql)){

    echo json_encode(['status'=>'success','msg'=>'Data Deleted.']); 
}
else{
    echo json_encode(['status'=>'fail','msg'=>'Data Not Deleted.']); 
}


?> 