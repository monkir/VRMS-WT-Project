<?php
    //checking cookie
    session_start();
    if(isset($_COOKIE['status']))
    {
        header("location: homepage.php?err=already_loggedin");
    }
    //checking sessoin
    else if(isset($_SESSION['status']))
    {
        echo "hi";
        header("location: homepage.php?err=already_loggedin");
    }
    //declaring variables for all input data
    $name=$email=$contact=$adress=$userid=$password=$cpassword="";
    //declaring variables for all input error
    $nameErr=$emailErr=$contactErr=$adressErr=$useridErr=$passwordErr=$cpasswordErr="";
    //checking if request method is post
    if(isset($_GET['err']))
    {
        if($_GET['err'] == 'invalid')
        {
            //session_start();
            //input values
            if(isset($_SESSION['name']))
            {
                $name=$_SESSION['name'];
            }
            if(isset($_SESSION['email']))
            {
                $email=$_SESSION['email'];
            }
            if(isset($_SESSION['contact']))
            {
                $contact=$_SESSION['contact'];
            }
            if(isset($_SESSION['adress']))
            {
                $adress=$_SESSION['adress'];
            }
            if(isset($_SESSION['userid']))
            {
                $userid=$_SESSION['userid'];
            }
            if(isset($_SESSION['password']))
            {
                $password=$_SESSION['password'];
            }
            if(isset($_SESSION['cpassword']))
            {
                $cpassword=$_SESSION['cpassword'];
            }
            //Error values
            if(isset($_SESSION['nameErr']))
            {
                $nameErr=$_SESSION['nameErr'];
            }
            if(isset($_SESSION['emailErr']))
            {
                $emailErr=$_SESSION['emailErr'];
            }
            if(isset($_SESSION['contactErr']))
            {
                $contactErr=$_SESSION['contactErr'];
            }
            if(isset($_SESSION['adressErr']))
            {
                $adressErr=$_SESSION['adressErr'];
            }
            if(isset($_SESSION['useridErr']))
            {
                $useridErr=$_SESSION['useridErr'];
            }
            if(isset($_SESSION['passwordErr']))
            {
                $passwordErr=$_SESSION['passwordErr'];
            }
            if(isset($_SESSION['cpasswordErr']))
            {
                $cpasswordErr=$_SESSION['cpasswordErr'];
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="userscript.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?><script>
    document.getElementById("registration").hidden=true;
</script>
    <center>
        <h1>Welcome to VRMS</h1>
        <img src="VRMS.png" alt="" width="100px">
        <form action="../controller/control_registration.php" method="POST">
            <fieldset>
                <legend>Registration</legend>
                <table>
                    <tr>
                        <!-- Name -->
                        <td align="left" valign="top">Name: </td>
                        <td align="left">
                            <input type="text" name="name" value="<?php echo $name;?>">
                            <span style="color: white;">*</span><br>
                            <span style="color: white;"><?php echo $nameErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <!-- Email -->
                        <td align="left" valign="top">Email: </td>
                        <td align="left" valign="top">
                            <input type="text" name="email" value="<?php echo $email;?>">
                            <span style="color: white;">*</span><br>
                            <span style="color: white;"><?php echo $emailErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <!-- contact -->
                        <td align="left" valign="top">contact: </td>
                        <td align="left" valign="top">
                            <input type="text" name="contact" value="<?php echo $contact;?>">
                            <span style="color: white;">*</span><br>
                            <span style="color: white;"><?php echo $contactErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <!-- address -->
                        <td align="left" valign="top">
                            Address:
                        </td>
                        <td align="left" valign="top">
                            <textarea name="adress" rows="5" cols="30" ><?php echo $adress;?></textarea>
                            <span style="color: white;">
                                *<br>
                                <?php echo $adressErr;?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <!-- userid -->
                        <td align="left" valign="top">Choose User ID: </td>
                        <td align="left">
                            <input type="text" name="userid" value="<?php echo $userid;?>">
                            <span style="color: white;">*</span><br>
                            <span style="color: white;"><?php echo $useridErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <!-- password -->
                        <td align="left" valign="top">Password: </td>
                        <td align="left" valign="top">
                            <input type="password" name="password" value="<?php echo $password;?>">
                            <span style="color: white;">*</span><br>
                            <span style="color: white;"><?php echo $passwordErr;?></span>
                        </td>
                    </tr>
                    <tr>
                        <!-- cpassword -->
                        <td align="left" valign="top">Confirm password: </td>
                        <td align="left" valign="top">
                            <input type="password" name="cpassword" value="<?php echo $cpassword;?>">
                            <span style="color: white;">*</span><br>
                            <span style="color: white;"><?php echo $cpasswordErr;?></span>
                        </td>
                    </tr>
                </table>
                <hr>
                <input type="submit" name="submit">
            </fieldset>
        </form>
    </center>
    <?php require_once 'footer.php'; ?>
</body>
</html>