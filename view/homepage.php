<?php
    $status="";
    $name="";
    $errorMessage="";
    session_start();
    if(isset($_COOKIE['status']))
    {
        $status=$_COOKIE['status'];
        $name=$_COOKIE['user']['name'];
    }
    else if(isset($_SESSION['status']))
    {
        $status=$_SESSION['status'];
        $userid=$_SESSION['userid'];
    }
    if(isset($_GET['err']))
    {
        if($_GET['err']=='already_loggedin')
        $errorMessage= "Already Logged In!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VRMS Home Page</title>
</head>
<body>
    <center>
        <span style="color: red;">
            <?php echo $errorMessage ?><br>
        </span>
        Welcome to VRMS
        <table>
            <tr>
                <td>
                    <a href="homepage.php">Home</a>|
                    <?php
                        if($status=="")
                        {
                            ?>
                            <a href="login.php">Login</a>|
                            <?php
                        }
                        else
                        {
                            echo "Logged in as ". $userid." | ";
                        }
                    ?>
                    <?php
                        if($status=="")
                        {
                            ?>
                            <a href="registration.php">Registration</a>
                            <?php
                        }
                        else
                        {
                            ?>
                            <a href="logout.php">logout</a>
                            <?php
                        }
                    ?>
                </td>
            </tr>
        </table>
        <form action="">
            <table>
                <tr>
                    <td>From</td>
                    <td>
                    <select name="departure" id="departure">
                        <option value="Dhaka">Dhaka</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Rangpur">Rangpur</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>To</td>
                    <td>
                    <select name="destination" id="destination">
                        <option value="Dhaka">Dhaka</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Rangpur">Rangpur</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>
                        <input type="date">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="middle">
                        <input type="submit" name="book" value="Book">
                    </td>
                </tr>
            </table>
        </form>
        
    </center>
    
</body>
</html>