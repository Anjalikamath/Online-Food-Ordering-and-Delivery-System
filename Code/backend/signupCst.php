<?php
	session_start();
    extract($_POST);
    
    $query = "INSERT INTO customer VALUES ('$firstname','$middlename','$lastname','$email','$phoneno','$password');";

    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"dbms_project");
    $res = mysqli_query($conn,$query);
    
    header("Location:../Login.html");
        
?>