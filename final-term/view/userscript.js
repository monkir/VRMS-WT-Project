function validateLoginForm() 
{
    var userid = document.getElementById("userid").value;
    var password = document.getElementById("password").value;
    var noFormErr = true;
    if (userid=="") 
    {
        document.getElementById("useridErr").innerHTML = "Enter User ID";
        noFormErr = false;
    }
    if (password=="") 
    {
        document.getElementById("passwordErr").innerHTML = "Enter Password";
        noFormErr = false;
    }
    return noFormErr;
}