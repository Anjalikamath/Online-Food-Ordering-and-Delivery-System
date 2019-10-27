<?php
    session_start();
    session_destroy();
    if (isset($_SESSION["Id"]))
    {
		setcookie("user_id", "", time() - 3600);
		setcookie("user_cat", "", time() - 3600);
        session_destroy();
    }
    header("Location:../index.html");
?>