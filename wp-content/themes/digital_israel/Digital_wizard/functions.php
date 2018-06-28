<?php 
// http://api-wp.mly.co.il/wp-content/themes/digital_israel/Digital_wizard/functions.php

require_once $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/digital_israel/kint-master/Kint.class.php';


session_start();
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']=="http://api-wp.mly.co.il/%D7%91%D7%93%D7%99%D7%A7%D7%94-%D7%93%D7%99%D7%92%D7%99%D7%98%D7%9C%D7%99%D7%AA/" && $_POST['token'] == $_SESSION['token']){
	//valid
}else{
	header('Location: http://api-wp.mly.co.il' );
	exit();
}


$mysqli = new mysqli("localhost", "mlycoil_api_wp_user", "murcrfv2018", "mlycoil_Digital_wizard");
$mysqli->set_charset("utf8");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


if($_POST['action'] == 'selectQuestions'){
	for ($i=1; $i <= 2; $i++) { 
		$query = "SELECT `ID` , `TEXT` FROM `QUESTION` WHERE `AREA_ID` = $i ORDER BY `QUESTION`.`ID`  ASC" ;
		if ($result = $mysqli->query($query)) {
			$questions = array();
			$ids = array();
		    while ($obj = $result->fetch_object()) {
		    	$questions[] = $obj->TEXT;
		    	$ids[] = $obj->ID;
		    }
		}
		$questionsArr[$i - 1][] = $questions;
		$questionsArr[$i - 1][] = $ids;
	}
	$result->close();
	$SendResult = $questionsArr;
}elseif ($_POST['action'] == 'addToForm_info') {
	$query = "INSERT INTO `FORM_INFO`(`fileType`, `ManagerName`, `ManagerTel`) VALUES (
		'".$_POST['Name']."',
		'".$_POST['Tel']."',
		'".$_POST['Job']."'
	)";
	$mysqli->query($query);
	$SendResult = array('New_Record_id' => $mysqli->insert_id);

}elseif ($_POST['action'] == 'saveUserAnswersToDb') {
	foreach ($_POST['ANSWERS'] as $value) {
	    $query = "INSERT INTO `USER_ANSWERS`(`USER_ID`, `ANSWER_ID`, `FORM_INFO_ID`) VALUES (
	                ".$_POST['USER_ID'].",
	                ".$value.",
	                ".$_POST['FORM_INFO_ID']."
	              )";
	    $result = $mysqli->query($query);
	    $New_Record_ids[] = $mysqli->insert_id;
	}

    $SendResult = $New_Record_ids;
    // $result->close();
    // exit('--');

}else{
	$SendResult = array('status' => 'action var is required');
}
echo json_encode($SendResult);

exit;





// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();





 ?>