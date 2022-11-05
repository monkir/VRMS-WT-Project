<?php
    //checking cookie
    //session_start();
    require_once "header.php";
    $userid=$_SESSION['userid'];
    if(isset($_COOKIE['status']))
    {
        //header("location: homepage.php?err=already_loggedin");
        //echo "hi";
    }
    //checking sessoin
    else if(isset($_SESSION['status']))
    {
        //echo "hi";
    }
    else
    {
        header("location: ../homepage.php?err=bad_request");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
            <a href="profile.php">See profile</a>|
            <a href="trip_history.php">Trip History</a>|
            <a href="">Change Profile</a>|
            <a href="">Change Password</a>
            <?php
                require_once '../model/trip_model.php';
                $result=getPassengerTripHistory($userid);
                if ($result) 
                {
                    // Fetch one and one row
                    
                    ?>
                    <table border="5px">
                        <tr>
                            <th>Trip History ID</th>
                            <th>Trip ID</th>
                            <th>Trip Date</th>
                            <th>Price</th>
                        </tr>
                        <?php
                        while ($row = $result->fetch_assoc()) 
                        {
                        ?>
                        <tr>
                            <td><?php echo $row['th_id']?></th>
                            <td><?php echo $row['trip_id']?></th>
                            <td><?php echo $row['trip_date']?></th>
                            <td><?php echo $row['price']?></th>
                        </tr>
                        <?php
                        }
                        ?>

                    </table>
                    <?php
                    mysqli_free_result($result);
                }
                else
                {
                    ?>
                    <h1>Cant Find Trip ID: <?php echo $trip_id;?></h1>
                    <?php
                }
            ?>
    </center>
    

</body>
</html>