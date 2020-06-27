<?php	
	error_reporting(E_ALL);
    ini_set('display_errors','on');
	require "connect.inc.php";
    require "mail_service.php";
	try
	{

    $phone 	 =  $_POST['phone'];
    $prescription =  $_FILES["prescription"]["name"];
    $uploaded = "uploads/";
    $target_file = $uploaded.basename($_FILES["prescription"]["name"]);
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
       if($FileType == "pdf" || $FileType == "doc" || $FileType =="png" || $FileType =="jpg") {
         if(move_uploaded_file($_FILES["prescription"]["tmp_name"], $target_file)){
          $query = "INSERT INTO `prescription_form`(`phone_number`,`precription`) VALUES (?,?)";
		$sth = $conn->prepare($query);
		if(!$sth->execute(array($phone,$target_file)))
		{
			throw new Exception(-2);
		}
         else{
              $to=["ravikiran.thinktankers@gmail.com","keerthi.thinktankers@gmail.com"];
              $subject = "Precription!";
              $message = 'Hello,<br/><br/><b><u>Precription details:</u></b> <br/> <table><tr><td> Phone: </td> <td>' . $phone . '</td></tr></table>';
              $obj=new EMail();
                            for($i=0;$i<sizeof($to);$i++)
                         {
                             $obj->send_mail($to[$i],$subject,$message,$target_file);
                         }
         }
        
       }
       $conn = null;
		$output['result']=1;
        $output['message']="precription successfully send!";
//		echo json_encode($output); 
        echo '<script type="text/javascript">alert("' . $output['message'] . '");window.location.assign("../clinic.php")</script>';
    }
       	
	}//try close
	catch(Exception $e)
    {
		$conn = null;
		$output['result'] = $e->getmessage();
		echo json_encode($output);
	}
?>
