<?php
	session_start();
    extract($_POST);
    
    $query = "INSERT INTO restaurant VALUES ('$Name','$cost','$fssai','$location','$Rating','$password','$website');";

    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"dbms_project");
    $res = mysqli_query($conn,$query);
    
    header("Location:../Login.html");
        
?>