<?php
    include 'db.php';
    // Add passenger ID method
    function passengerRegistration($name, $email, $contact, $adress, $userid, $password)
    {
        // Connecting to database
        $con = getconnection();
        // Inserting data into login table
        $usertype="passenger";
        $status="active";
        $sql= "INSERT INTO users (userid, password,  usertype, status, name, email, contact, adress) 
            VALUES ('{$userid}', '{$password}', '{$usertype}', '{$status}', '{$name}', '{$email}', '{$contact}', '{$adress}')";
        $result=mysqli_query($con, $sql);
        
        // Closing database connection
        $con->close();
		if($result)
        {
            $history_details="userid: {$userid}, password: {$password}, usertype: {$usertype}, status: {$status}, name: {$name}, email: {$email}, contact: {$contact}, adress: {$adress}";
            addHistory($userid, "registration", $history_details);
			return true;
		}
        else
        {
			return false;
		}
    }
    function login($userid, $password)
    {
        $conn = getconnection();
        $sql = "select * from users where userid='{$userid}' and password='{$password}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        // Closing database connection
        $conn->close();
        if($count == 1)
        {
            return true;
        }else
        {
            return false;
        }
    }
    
    function userid_exists($userid)
    {
        $conn = getconnection();
        $sql = "select * from users where userid='{$userid}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        // Closing database connection
        $conn->close();
    
        if($count > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

?>