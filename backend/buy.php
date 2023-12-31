<?php
	session_start();
    //var_dump($_GET);
    extract($_GET);

    if (isset($_SESSION["id"]))
    {
        $conn = mysqli_connect("localhost","root","");
        mysqli_select_db($conn,"dbms_project");

        $query = "SELECT MAX(order_no) as m FROM foodorder;";
        $res = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($res);
        $ord_id = ((int)$row['m'])+1;

        $l = $_SESSION["id"];
        $rname = (int)$rname;
        var_dump($ord_id);
        $query = "INSERT INTO foodorder VALUES ($ord_id,'$l',$rname);";
        $res = mysqli_query($conn,$query);
        var_dump($res);
        var_dump($items);
        foreach($items as $i => $item) {
            $item = (int)$item;
            $query = "INSERT INTO ordered_items VALUES ($ord_id, $item);";
            $res = mysqli_query($conn,$query);
        }

        $query = "SELECT MAX(Payment_Id) as m FROM Payment;";
        $res = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($res);
        $py_id = ((int)$row['m'])+1;

        $query = "INSERT INTO payment VALUES ($py_id, '$payment', $ord_id);";
        $res = mysqli_query($conn,$query);

        $rname = (int)$rname;
        $query = "SELECT Restaurant_Location as rl FROM Restaurant WHERE Restaurant_FSSAI_No=$rname;";
        $res = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($res);
        $rl = $row['rl'];

        $query = "SELECT Agent_Vehicle_No as vn FROM Agents_Areas WHERE Agent_Area='$rl';";
        $res = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($res);
        if ($row){
            $vn = $row['vn'];
            var_dump($vn);
            $query = "SELECT MAX(Delivery_Id) as m FROM Delivery;";
            $res = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($res);
            $dl_id = ((int)$row['m'])+1;
            $query = "INSERT INTO delivery VALUES ($dl_id, '$vn', $ord_id);";
            $res = mysqli_query($conn,$query);
            header("Location:ordersuccess.html");
        }
        else {
                header("Location:orderfailed.html");
        }
    }
    

?>