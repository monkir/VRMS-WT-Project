
// Get the modal
var deletemodal = document.getElementById("delete-modal");

// Get the button that opens the modal
var deletebtn = document.getElementById("delete-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
deletebtn.onclick = function() {
  deletemodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  deletemodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }

function deletePassenger(userid, userimage)
{
    deletemodal.style.display = "block";
    document.getElementById("deletepara").innerHTML="Do you wand to delete ID: "+userid;
    document.getElementById('deleteuserimg').setAttribute("src", "../profile_image/"+userimage);
}
function blockPassenger()
{
    if(confirm("Sure to block this passenger"))
    {
        alert("Successfully blocked");
    }
    else
    {
        alert("Not blocked");
    }
}
function searchpassenger(userid) {
 
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("userslist").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("POST","userslist.php?",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send("userid="+userid);
}