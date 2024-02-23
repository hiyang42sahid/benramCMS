<?php

ob_start();
session_start(); 
include("config.php"); 
if (isset($_POST['Username'])){


    $Username =mysqli_real_escape_string( $dbc,$_POST['Username']);
    $Password = mysqli_real_escape_string( $dbc,$_POST['Password']);   
    $sql= mysqli_query($dbc,"SELECT * FROM users WHERE Username = '".$Username."'  ");
    $msg1= mysqli_error($dbc);

    if($row = mysqli_fetch_array($sql)){ 
		if($row['Password'] == md5($Password)){

			if($row['Status'] == 1){
				$arr = array(
					'UserId'		 => $row['ID'],
					'Fullname'		 => $row['Firstname'].' '.$row['Lastname'],
					'Photo'		     => $row['Avatar'], 
					'Username'		 => $row['Username']);
				$_SESSION['objLogin'] = $arr; 
				echo 'exist'.'.'.$_SESSION['objLogin']['Fullname'];
			}
			//
		}
		else{
			echo 'Sorry your account is Inactive.';
		}

    }
    else{
        echo 'Please Enter Correct Username/Password. '.$msg1;
    } 

}
?>