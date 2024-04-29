<?php 
error_reporting(0);

 header("Content-Type: application/json");
 header("Access-Control-Allow-Methods: POST");
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

 $data=json_decode(file_get_contents("php://input"));
 include('db.php');



date_default_timezone_set('Asia/Kolkata'); 

if(isset($data->cash,$data->vendor,$data->commission,$data->phoneno));


if(!$data->cash)echo json_encode(['status'=>'failed','msg'=>'Enter Your cash. ']);
if(!$data->vendor) echo json_encode(['status'=>'failed','msg'=>'Enter Your vendor. ']);
// if(!$data->commission) echo json_encode(['status'=>'failed','msg'=>'Enter Your commission. ']);
if(!$data->phoneno) echo json_encode(['status'=>'failed','msg'=>'Enter Your phoneno. ']);

   
$data->cash;
echo $data->cash;

$data->vendor;
echo $data->vendor;


$data->commission=$data->cash-$data->vendor;  
echo $data->commission;

if(empty($data->cash && $data->vendor && $data->commission && $data->phoneno)){
   echo !$run;
}else{
  
   $query = "INSERT INTO  texidata(cash,vendor,commission,phoneno)";
   $query.="VALUES
   ('$data->cash',
   '$data->vendor',
   '$data->commission',
   '$data->phoneno'
   )";
   $run=mysqli_query($conn,$query);
}

 if($run){
    echo json_encode(['status'=>'success','msg'=>'Data Inserted Successfully.']);
 }else{
    echo json_encode(['status'=>'fail','msg'=>'Data Not Inserted Successfully.']);
}


// $date = date('Y-m-d');
// echo $date;

?>       

