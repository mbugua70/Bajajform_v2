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
$sub_2_1=mysqli_real_escape_string ( $connect ,$_POST['sub_2_1']);
$sub_2_2=mysqli_real_escape_string ( $connect ,$_POST['sub_2_2']);
$sub_2_3=mysqli_real_escape_string ( $connect ,$_POST['sub_2_3']);
$sub_3_1=mysqli_real_escape_string ( $connect ,$_POST['sub_3_1']);
$sub_3_2=mysqli_real_escape_string ( $connect ,$_POST['sub_3_2']);
$sub_3_3=mysqli_real_escape_string ( $connect ,$_POST['sub_3_3']);
$sub_3_4=mysqli_real_escape_string ( $connect ,$_POST['sub_3_4']);
$sub_4_1=mysqli_real_escape_string ( $connect ,$_POST['sub_4_1']);
$sub_4_2=mysqli_real_escape_string ( $connect ,$_POST['sub_4_2']);
$sub_4_3=mysqli_real_escape_string ( $connect ,$_POST['sub_4_3']);
$sub_5_1=mysqli_real_escape_string ( $connect ,$_POST['sub_5_1']);
$sub_5_2=mysqli_real_escape_string ( $connect ,$_POST['sub_5_2']);
$sub_5_3=mysqli_real_escape_string ( $connect ,$_POST['sub_5_3']);
$sub_5_4=mysqli_real_escape_string ( $connect ,$_POST['sub_5_4']);
$sub_5_5=mysqli_real_escape_string ( $connect ,$_POST['sub_5_5']);
$sub_6_1=mysqli_real_escape_string ( $connect ,$_POST['sub_6_1']);
$sub_6_2=mysqli_real_escape_string ( $connect ,$_POST['sub_6_2']);
$sub_6_3=mysqli_real_escape_string ( $connect ,$_POST['sub_6_3']);
$sub_6_4=mysqli_real_escape_string ( $connect ,$_POST['sub_6_4']);
$sub_6_5=mysqli_real_escape_string ( $connect ,$_POST['sub_6_5']);
$sub_6_6=mysqli_real_escape_string ( $connect ,$_POST['sub_6_6']);
$sub_6_7=mysqli_real_escape_string ( $connect ,$_POST['sub_6_7']); 
$sub_6_8=mysqli_real_escape_string ( $connect ,$_POST['sub_6_8']);
$sub_6_9=mysqli_real_escape_string ( $connect ,$_POST['sub_6_9']);
$sub_7_1=mysqli_real_escape_string ( $connect ,$_POST['sub_7_1']);
$sub_7_2=mysqli_real_escape_string ( $connect ,$_POST['sub_7_2']);
$sub_7_3=mysqli_real_escape_string ( $connect ,$_POST['sub_7_3']);
$sub_8_1=mysqli_real_escape_string ( $connect ,$_POST['sub_8_1']);
$sub_8_2=mysqli_real_escape_string ( $connect ,$_POST['sub_8_2']);
$sub_8_3=mysqli_real_escape_string ( $connect ,$_POST['sub_8_3']);

$sub_2_4=mysqli_real_escape_string ( $connect ,$_POST['sub_2_4']);
$sub_2_5=mysqli_real_escape_string ( $connect ,$_POST['sub_2_5']);
$sub_2_6=mysqli_real_escape_string ( $connect ,$_POST['sub_2_6']);
$sub_2_7=mysqli_real_escape_string ( $connect ,$_POST['sub_2_7']);
$sub_2_8=mysqli_real_escape_string ( $connect ,$_POST['sub_2_8']);
$sub_2_9=mysqli_real_escape_string ( $connect ,$_POST['sub_2_9']);
$sub_6_10=mysqli_real_escape_string ( $connect ,$_POST['sub_6_10']);




      mysqli_query($connect,"INSERT INTO `cng_tz`( `ba_name`, `ba_phone`, `ba_region`, `sub_8_3`, `sub_8_2`, `sub_8_1`, `sub_7_3`, `sub_7_2`, `sub_7_1`, `sub_6_9`, `sub_6_8`, `sub_6_7`, `sub_6_6`, `sub_6_5`, `sub_6_4`, `sub_6_3`, `sub_6_2`, `sub_6_1`, `sub_5_5`, `sub_5_4`, `sub_5_3`, `sub_5_2`, `sub_5_1`, `sub_4_3`, `sub_4_2`, `sub_4_1`, `sub_3_4`, `sub_3_3`, `sub_3_2`, `sub_3_1`, `sub_2_3`, `sub_2_2`, `sub_2_1`, `sub_1_6`, `sub_1_5`, `sub_1_4`, `sub_1_3`, `sub_1_2`, `sub_1_1`,`sub_1_7`,record_date,sub_2_4,sub_2_5,sub_2_6,sub_2_7,sub_2_8,sub_2_9,sub_6_10
) VALUES ( '$ba_name', '$ba_phone', '$ba_region', '$sub_8_3', '$sub_8_2', '$sub_8_1', '$sub_7_3', '$sub_7_2', '$sub_7_1', '$sub_6_9', '$sub_6_8', '$sub_6_7', '$sub_6_6', '$sub_6_5', '$sub_6_4', '$sub_6_3', '$sub_6_2', '$sub_6_1', '$sub_5_5', '$sub_5_4', '$sub_5_3', '$sub_5_2', '$sub_5_1', '$sub_4_3', '$sub_4_2', '$sub_4_1', '$sub_3_4', '$sub_3_3', '$sub_3_2', '$sub_3_1', '$sub_2_3', '$sub_2_2', '$sub_2_1', '$sub_1_6', '$sub_1_5', '$sub_1_4', '$sub_1_3', '$sub_1_2', '$sub_1_1','$sub_1_7', '$date','$sub_2_4','$sub_2_5','$sub_2_6','$sub_2_7','$sub_2_8','$sub_2_9','$sub_6_10')") or die(mysqli_error($connect));



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


 function generateImage($img,$folderPath,$image_name_prefix)
    {

        global $PID,$DID,$connect,$text,$arr,$IMAGE_BLANK;
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("uploads/", $image_parts[0]);
        $image_base64 = base64_decode($image_parts[1]);
        $name = $image_name_prefix.uniqid() . '.png';
        $file = $folderPath . $name;

       
            file_put_contents($file, $image_base64);
        
        

            return $name;

    }


?>