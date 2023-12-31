<?php
	session_start();
    print($_POST);
    /*
    $query = "select * from users_db where id='$Id' ;";

    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"wt_project_db");
    $res = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($res)==0) {
    	$query = "select * from users_db where email='$Id' ;";
	    $res = mysqli_query($conn,$query);
    }

    $row = mysqli_fetch_assoc($res);
    if (mysqli_num_rows($res)!=0 && $row['pwd']==$Pwd) {
        setcookie("user_id",$row['id']);
		setcookie("user_name",$row['name']);
		setcookie("user_email",$row['email']);
        $_SESSION["Id"] = $row['id'];
        if (isset($_SESSION["last_activity"]) && (time()- $_SESSION["last_activity"])>1000) {
			setcookie("user_id", "", time() - 3600);
			setcookie("user_name", "", time() - 3600);
			setcookie("user_email", "", time() - 3600);
	        session_destroy();
	        header("Location:OUT too long.php");
        }
		else {
			$_SESSION["last_activity"] = time();
			header("Location:loginHome.php");
		}
	}
	else
	{
		header("Location:newHomePagewrongLogin.html");
    }
    */
?>