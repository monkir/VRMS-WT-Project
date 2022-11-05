<?php
    $status="";
    session_start();
    if(isset($_COOKIE['status']))
    {
        $status=$_COOKIE['status'];
        $userid=$_COOKIE['userid'];
    }
    else if(isset($_SESSION['status']))
    {
        $status=$_SESSION['status'];
        $userid=$_SESSION['userid'];
    }
?>
<center>
    
<h1>Welcome to VRMS</h1>
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
                        ?>
                        <a href="profile.php">
                            <?php echo "Logged in as ". $userid." | "; ?>
                        </a>
                        <?php
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
</center>