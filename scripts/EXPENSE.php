<?php
require("connection.php");
$output=array();
$success=array();
$failure=array();

$ba_name=mysqli_real_escape_string ( $connect ,$_POST['ba_name']);
$ba_phone=mysqli_real_escape_string ( $connect ,$_POST['ba_phone']);
$ba_region=mysqli_real_escape_string ( $connect ,$_POST['ba_region']);
$sub_1_1=mysqli_real_escape_string ( $connect ,$_POST['sub_1_1']);
$sub_1_2=mysqli_real_escape_string ( $connect ,$_POST['sub_1_2']);
$sub_1_3=mysqli_real_escape_string ( $connect ,$_POST['sub_1_3']);
$sub_1_4=mysqli_real_escape_string ( $connect ,$_POST['sub_1_4']);
$sub_1_5=mysqli_real_escape_string ( $connect ,$_POST['sub_1_5']);
$sub_1_6=mysqli_real_escape_string ( $connect ,$_POST['sub_1_6']);
$sub_1_7=mysqli_real_escape_string ( $connect ,$_POST['sub_1_7']);
$sub_1_8=mysqli_real_escape_string ( $connect ,$_POST['sub_1_8']);
$sub_1_9=mysqli_real_escape_string ( $connect ,$_POST['sub_1_9']);
$sub_1_10=mysqli_real_escape_string ( $connect ,$_POST['sub_1_10']);
$sub_1_10_1=mysqli_real_escape_string ( $connect ,$_POST['sub_1_10_1']);
$sub_1_11=mysqli_real_escape_string ( $connect ,$_POST['sub_1_11']);
$sub_1_12=mysqli_real_escape_string ( $connect ,$_POST['sub_1_12']);
$sub_1_13=mysqli_real_escape_string ( $connect ,$_POST['sub_1_13']);
$sub_1_14=mysqli_real_escape_string ( $connect ,$_POST['sub_1_14']);
$sub_1_15=mysqli_real_escape_string ( $connect ,$_POST['sub_1_15']);


      mysqli_query($connect,"INSERT INTO `cng_tz_expense`( `ba_name`, `ba_phone`, `ba_region`, `sub_1_1`, `sub_1_2`, `sub_1_3`, `sub_1_4`, `sub_1_5`, `sub_1_6`, `sub_1_7`, `sub_1_8`, `sub_1_9`, `sub_1_10`, `sub_1_10_1`, `sub_1_11`, `sub_1_12`, `sub_1_13`, `sub_1_14`, `sub_1_15`, `record_date`) VALUES ( '$ba_name', '$ba_phone', '$ba_region', '$sub_1_1', '$sub_1_2', '$sub_1_3', '$sub_1_4', '$sub_1_5', '$sub_1_6', '$sub_1_7', '$sub_1_8', '$sub_1_9', '$sub_1_10', '$sub_1_10_1', '$sub_1_11', '$sub_1_12', '$sub_1_13', '$sub_1_14',  '$sub_1_15',  '$date')") or die(mysqli_error($connect));



        if (mysqli_affected_rows($connect)>0) 
        {
        $output['response']="success";  
        }
        else
        {
        $output['response']="fail";
        
        }






$output['success']=$success;
$output['failure']=$failure;
$json = json_encode($output);

    echo $json;
exit;


        
        

function checkRecord($outlet_id,$team_leader_id)
{
    global $connect;
    $sql="SELECT * FROM training WHERE outlet_id='$outlet_id' and ba_name='$team_leader_id'" ;
    //echo $sql;
    $res=mysqli_query($connect,$sql);
if (mysqli_num_rows($res)>0) {
//  echo $TID." sync now \n";
    return true;
    //echo $TID;
}
else
{
    return false;
//  echo $TID." sync fail \n";
}
}


