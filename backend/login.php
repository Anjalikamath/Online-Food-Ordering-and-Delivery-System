<?php
	session_start();
    extract($_POST);
    
    if(($who)=="c"){
        $query = "select Customer_Password as pwd from Customer where Customer_Email_Id='$loginid' ;";
    }
    if(($who)=="r"){
        $query = "select Restaurant_Password as pwd from Restaurant where Restaurant_FSSAI_No='$loginid' ;";
    }
    if(($who)=="a"){
        $query = "select Agent_Password as pwd from Agents where Agent_Vehicle_No='$loginid' ;";
    }


    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"dbms_project");
    $res = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($res);

    if ($row['pwd']==$password) {
        $_SESSION["cat"] = $who;
        $_SESSION["id"] = $loginid;

        setcookie("user_cat",$who);
        setcookie("user_id",$loginid);

    	if($who=="c") {
			header("Location:custHome.php");
    	}
    	if($who=="r") {
			header("Location:restHome.php");
    	}
    	if($who=="a") {
			header("Location:agtHome.php");
    	}
	}
	else {
		header("Location:../Login.html");
    }
    
?>