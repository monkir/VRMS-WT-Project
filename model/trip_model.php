<?php
    require_once 'db.php';
    function tripDetails($trip_id)
    {
        $conn = getconnection();
        $sql = "select * from trips where trip_id='{$trip_id}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        // Closing database connection
        $conn->close();
    
        if($count == 1)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }
?>