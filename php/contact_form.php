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
    $email=$data->email;
    $phone=$data->phone;
    $select_service=$data->select_service;
    $pincode=$data->pincode;
    $address=$data->address;
    $city=$data->city;
    $state=$data->state;
    $message=$data->message;
//        $name="keerthi";
//    $email="keerthimandava@thethinktankers.in";
//    $phone=9999999999;
//    $message="ijshsyvf huhd";
    $time         = time();
    $created_time = date('Y-m-d H:i:s', $time);
     $message1 = '<b><u>Contact details:</u></b> <br/> <table><tr><td>Name:</td> <td> ' . $name . '</td></tr><tr><td>Email:</td> <td> ' . $email . '</td></tr><tr><td> Phone: </td> <td>' . $phone . '</td></tr><tr><td>Selected services:</td> <td> ' . $select_service . '</td></tr><tr><td>Pincode:</td> <td> ' . $pincode . '</td></tr><tr><td>Address:</td> <td> ' . $address . '</td></tr><tr><td>City:</td> <td> ' . $city . '</td></tr><tr><td>State:</td> <td> ' . $state . '</td></tr><tr><td>message:</td> <td>' . $message .'</td></tr>';

    
    if($name == null || $email == null || $phone == null){
              throw new Exception(-1);
        
    }
    else{
             $sql = "INSERT INTO `contact_form`(`name`, `phone_number`, `select_service`, `email`, `pincode`, `address`, `city`, `state`, `message`, `created_time`) VALUES (?,?,?,?,?,?,?,?,?,?)";
             $stmt=$conn->prepare($sql);
			if(!$stmt->execute(array($name,$phone,$select_service,$email,$pincode,$address,$city,$state,$message,$created_time))){
                throw new Exception(-2);
            
         }   
        else{
            $arrays = [
            'email'        => $email,
            'f_email'      => 'iamthinktanker@gmail.com',
            'f_name'       => 'Best Pharma',
            'to'           => array("keerthimandava@thethinktankers.in","ravikiran.thinktankers@gmail.com"),
            'subject'      => 'Best Pharma Contact Details',
            'user_subject' => 'Best Pharma',
            'user_message' => 'Thank you for contacting us, we will get back you soon.',
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
        $url = 'http://107.170.172.23/api/email/send_mail_service1.php';
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
                
}
    $conn=null;
    $output['result']=1;
    $output['status']=200;
    $output['message']="successfull";
     echo json_encode($output);
}
 catch(Exception $e){
    $conn=null;
    $output['status'] = 400;
	$output['result']=-1;
    $Error = $e->getMessage();
     if($Error==-1){
         
        $output['message'] ="input fields are missing"; 
     }
     else{
         
          $output['message'] = $e->getMessage();
     }
     
  
      echo json_encode($output);
   exit;
 }
?>
