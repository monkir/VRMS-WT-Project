<?php
    $status="";
    $userid="";
    $user_profile_image="";
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
    if(file_exists("profile_image/{$userid}.png"))
    {
        $user_profile_image="profile_image/{$userid}.png";
    }
    else if(file_exists("profile_image/{$userid}.jpg"))
    {
        $user_profile_image="profile_image/{$userid}.jpg";
    }
    else
    {
        $user_profile_image="user-logo.png";
    }
?>
<div class="all-header-container">
    <div class="left-header-container">
        <div class="header-item">
            <img src="VRMS.png" alt="" width="20px">
        </div>
        <div class="header-item">
            Welcome to VRMS
        </div>
    </div>
    <div class="right-header-container">
        <div class="header-item">
            <a href="homepage.php">Home</a>
        </div>
        <div class="header-item">
            <?php
                if($status=="")
                {
                    ?>
                    <a href="login.php">
                        Login
                    </a>
                    <?php
                }
                else
                {
                    ?>
                    <a href="profile.php">
                        <img src="<?php echo $user_profile_image ?>" width="20px" alt="" style="border-radius: 50%;">
                        <?php echo $userid; ?>
                    </a>
                    <?php
                }
            ?>
        </div>
        <div class="header-item">
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
        </div>
    </div>
</div>
<hr>