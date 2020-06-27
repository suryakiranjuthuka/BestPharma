<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
require 'connect.inc.php';
date_default_timezone_set("Asia/Kolkata");
try
{
    $data =[];
    $data = json_decode(file_get_contents('php://input'));
    $name=$data->name;
	$phone=$data->phone;
	$date=$data->request_date;
    $from_address=$data->from_address;
    $to_address=$data->to_address;
//    $name="keerthi";
//	$phone=9999999999;
//   $date='21/08/2018'; 
//   $from_address="srnagar";
//    $to_address="srinagar";
    $time         = time();
    $created_time = date('Y-m-d H:i:s', $time);
    $message1 = '<b><u>Ambulance prebooking details:</u></b> <br/> <table><tr><td>Name:</td> <td> ' . $name . '</td></tr><tr><td> Phone: </td> <td>' . $phone . '</td></tr><tr><td> Bookingdate: </td> <td>' . $date .'</td></tr><tr><td> From Address: </td> <td>' . $from_address . '</td></tr><tr><td>To address:</td> <td>' . $to_address .'</td></tr>';
             $sql = "INSERT INTO `prebooking_form`(`request_name`, `request_contact`, `request_date`, `request_from_address`, `request_to_address`, `created_time`) VALUES (?,?,?,?,?,?)";
             $stmt=$conn->prepare($sql);
			if(!$stmt->execute(array($name,$phone,$date,$from_address,$to_address,$created_time))){
                throw new Exception(-1);	
                

                            
}
   else{
            $arrays = [
            'f_email'      => 'iamthinktanker@gmail.com',
            'f_name'       => 'Best Pharma',
            'to'           => array("keerthimandava@thethinktankers.in","ravikiran.thinktankers@gmail.com"),
            'subject'      => 'Best Pharma Ambulance Booking Details',
            'message1'     => $message1,
            'user_name'    => 'iamthinktanker@gmail.com',
            'password'     =>'tnt12345',
        ];

        function http_build_query_for_curl($arrays, &$new = array(), $prefix = null)
        {

            if (is_object($arrays)) {
                $arrays = get_object_vars($arrays);
            }

            foreach ($arrays as $key => $value) {
                $k = isset($prefix) ? $prefix . '[' . $key . ']' : $key;
                if (is_array($value) or is_object($value)) {
                    http_build_query_for_curl($value, $new, $k);
                } else {
                    $new[$k] = $value;
                }
            }
        }

        http_build_query_for_curl($arrays, $post);
        $url = 'http://107.170.172.23/api/email/oneway_send_mail_service.php';
        $ch  = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

        $data1 = curl_exec($ch);
        curl_close($ch);
        echo $data1;
        }
    $conn=null;
    $output['result']=1;
    $output['status']=200;
    $output['message']="Ambulance booked";
     echo json_encode($output);
}
 catch(PDOException $e){
//     echo "Error: " . $e->getMessage();
     $output['result']=-1;
    $output['status']=400;
    $output['message'] = $e->getMessage();
     echo json_encode($output);
 }  
?>
