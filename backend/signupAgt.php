<?php
	session_start();
    extract($_POST);
    
    $query = "INSERT INTO agents VALUES ('$vehicleno','$phoneno','$firstname','$middlename','$lastname', '$password');";

    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"dbms_project");
    $res = mysqli_query($conn,$query);
    
    header("Location:../Login.html");
        
?>