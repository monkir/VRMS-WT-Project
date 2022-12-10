<?php
    function gotoLoginPage()
    {
        global $userid, $password, $useridErr, $passwordErr;
        session_start();
        $_SESSION['userid']=$userid;
        $_SESSION['password']=$password;
        $_SESSION['useridErr']=$useridErr;
        $_SESSION['passwordErr']=$passwordErr;
        header("location: ../view/login.php?err=invalid");
    }
    function goto_hompage($userimage)
    {
        global $userid;
        session_start();
        $_SESSION['userid']=$userid;
        $_SESSION['usertype']='passenger';
        $_SESSION['userimage']=$userimage;
        if (isset($_POST['remember']))
        {
            setcookie("userid", $userid, time()+3600, '/');
            setcookie("usertype", "passenger", time()+3600, '/');
            setcookie("userimage", $userimage, time()+3600, '/');
        }
        header("location: ../view/homepage.php");
    }
    function goto_adminview($userimage)
    {
        global $userid;
        session_start();
        $_SESSION['userid']=$userid;
        $_SESSION['usertype']='admin';
        $_SESSION['userimage']=$userimage;
        if (isset($_POST['remember']))
        {
            setcookie("userid", $userid, time()+3600, '/');
            setcookie("usertype", "admin", time()+3600, '/');
            setcookie("userimage", $userimage, time()+3600, '/');
        }
        header("location: ../view/admin/adminview.php");
    }
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //declaring variables for all input data
    $userid=$password="";
    //declaring variables for all input error
    $useridErr=$passwordErr="";
    //checking if request method is post
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // User ID validatoin
        if(isset($_POST['userid']))
        {
            $userid=test_input($_POST['userid']);
            if($userid=="")
            {
                $useridErr="Please enter User ID";
            }
        }
        // Password validatoin
        if(isset($_POST['password']))
        {
            $password=test_input($_POST['password']);
            if($password=="")
            {
                $passwordErr="Please enter Password";
            }
        }
        if($useridErr=="" && $passwordErr=="")
        {
            include "../model/user_model.php";
            if($userdetails = login($userid, $password))
            {
                $userstatus=$userdetails['status'];
                $usertype=$userdetails['usertype'];
                $userimage=$userdetails['userimage'];
                if($userstatus=='active')
                {
                    if($userdetails['usertype']=='passenger')
                    {
                        goto_hompage($userimage);
                    }
                    elseif($userdetails['usertype']=='admin')
                    {
                        goto_adminview($userimage);
                    }
                }
                else
                {
                    ?>
                    <script>
                        if(!alert("Your account is blocked!"))
                        {
                            window.location.replace("../view/login.php");
                        }
                    </script>
                    <?php
                }
                // if($userdetails=='passenger')
                // {
                //     goto_hompage();
                // }
                // elseif($userdetails=='admin')
                // {
                //     echo "You are logged as an admin";
                //     //header('location: ../view/admin/adminview.php');
                //     goto_adminview();
                // }
            }
            else
            {
                $useridErr=$passwordErr="Invalid User ID or Password";
                gotoLoginPage();
            }
            
        }
        else
        {
            gotoLoginPage();
        }
    }
    else
    {
        header("location: ../view/homepage.php?err=bad_request");
    }

?>