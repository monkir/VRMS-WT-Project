<?php

use LDAP\Result;

    require_once 'header.php';
    //checking cookie
    $trip_id="";
    if(isset($_COOKIE['status']))
    {
        //header("location: homepage.php?err=already_loggedin");
        if(isset($_GET['tripid']))
        {
            $trip_id=$_GET['tripid'];
        }
        else
        {
            header("location: ../homepage.php?err=bad_request");
        }
    }
    //checking sessoin
    else if(isset($_SESSION['status']))
    {
        if(isset($_GET['tripid']))
        {
            $trip_id=$_GET['tripid'];
        }
        else
        {
            header("location: ../homepage.php?err=bad_request");
        }
    }
    else
    {
        header("location: ../login.php?request=login");
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
        <?php 
            //echo "Trip id: ".$trip_id."<br>"; 
            echo '<br><br>';
            require_once '../model/trip_model.php';
            $result=tripDetails($trip_id);
            if ($result) 
            {
                // Fetch one and one row
                while ($row = $result->fetch_assoc()) 
                {
                  ?>
                  <table>
                    <tr>
                        <th align="right">Trip ID:</th>
                        <td align="left"><?php echo $row['trip_id'];?></td>
                    </tr>
                    <tr>
                        <th align="right">Departure:</th>
                        <td align="left"><?php echo $row['departure'];?></td>
                    </tr>
                    <tr>
                        <th align="right">Destination:</th>
                        <td align="left"><?php echo $row['destination'];?></td>
                    </tr>
                    <tr>
                        <th align="right">Price:</th>
                        <td align="left"><?php echo $row['price'];?> taka</td>
                    </tr>
                    <tr>
                        <th align="right">Distance:</th>
                        <td align="left"><?php echo $row['distance'];?>Km</td>
                    </tr>
                  </table>
                  <form action="../payment.php" method="get">
                    <?php $_SESSION['trip_id']=$trip_id;?>
                    <input type="checkbox" name="book_return">Book return trip also<br>
                    <input type="submit" value="Book Now">
                  </form>
                  <?php
                }
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