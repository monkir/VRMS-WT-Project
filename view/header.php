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
<img src="VRMS.png" alt="" width="100px">
    <table >
        <tr>
            <td>
                <h2>
                    <a href="homepage.php">Home</a>
                </h2>
            </td>
            <td style="width: 500px;" align="right" valign="top">
                <h2>
                    <img src="user-logo.png" width="40px" alt="">
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
                                <?php echo $userid." | "; ?>
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
                </h2>
                
            </td>
        </tr>
    </table>
    <hr>
</center>