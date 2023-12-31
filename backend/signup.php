<?php
	session_start();
    extract($_POST);
    
    if(($who)=="c"){
        header("Location:../custCrAcc.html");
    }
    if(($who)=="r"){
        header("Location:../restCrAcc.html");
    }
    if(($who)=="a"){
        header("Location:../agtCrAcc.html");
    }
    
?>