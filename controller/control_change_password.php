<?php
    $userid="";
    session_start();
    if(isset($_SESSION['userid']))
    {
        $userid=$_SESSION['userid'];
    }
    else if(isset($_COOKIE['userid']))
    {
        $userid=$_COOKIE['userid'];
    }
    else
    {
        header("location: ../homepage.php?err=bad_request");
    }
    $trip_id="";
    if(isset($_SESSION['trip_id']))
    {
        $trip_id=$_SESSION['trip_id'];
    }
    else if(isset($_COOKIE['trip_id']))
    {
        $trip_id=$_COOKIE['trip_id'];
    }
    else
    {
        header("location: ../homepage.php?err=bad_request");
    }
    $trip_date="";
    $status=true;
    if(isset($_POST['trip_date']))
    {
        $trip_date=date('Y-m-d', strtotime($_POST['trip_date']));
    }
    else
    {
        $status=false;
        header("location: ../homepage.php?err=bad_request");
    }
    if($status)
    {
        require_once '../model/trip_model.php';
        $result = tripDetails($trip_id);
        //session_unset();
        while ($row = $result->fetch_assoc()) 
        {
            $result2=pay_and_add_trip($row['trip_id'], $userid, $trip_date, $row['price']);
            if($result2)
            {
                echo "Payment done";
                header("location: ../view/profile.php");
            }
        }
    }
    

?>