
// Get the modal
var deletemodal = document.getElementById("delete-modal");
var blockmodal = document.getElementById("block-modal");
var unblockmodal = document.getElementById("unblock-modal");

var globalid="";
// When the user clicks on <span> (x), close the modal
function cancelDelete() {
  deletemodal.style.display = "none";
}
function cancelBlock() {
  blockmodal.style.display = "none";
}
function cancelUnblock() {
  unblockmodal.style.display = "none";
}
// Confirm Delete
function confirmDelete() {
  deletemodal.style.display = "none";
  //using ajax
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      //document.getElementById("userslist").innerHTML=this.responseText;
      var response= this.responseText;
      //alert("Delete: "+response+" Global id:"+globalid);
      searchpassenger(document.getElementById("search-box").value)
    }
  }
  xmlhttp.open("POST","../../controller/employee/control_delete_passenger.php?",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send("userid="+globalid);
}
// Confirm Block
function confirmBlock() {
  blockmodal.style.display = "none";
  //using ajax
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      //document.getElementById("userslist").innerHTML=this.responseText;
      var response= this.responseText;
      //alert("Delete: "+response+" Global id:"+globalid);
      searchpassenger(document.getElementById("search-box").value)
    }
  }
  xmlhttp.open("POST","../../controller/employee/control_block_passenger.php?",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send("userid="+globalid);
}
// Confirm unBlock
function confirmUnblock() {
  unblockmodal.style.display = "none";
  //using ajax
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      //document.getElementById("userslist").innerHTML=this.responseText;
      var response= this.responseText;
      //alert("Delete: "+response+" Global id:"+globalid);
      searchpassenger(document.getElementById("search-box").value)
    }
  }
  xmlhttp.open("POST","../../controller/employee/control_unblock_passenger.php?",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send("userid="+globalid);
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
    document.getElementById('delete-userimg').setAttribute("src", "../profile_image/"+userimage);
    globalid=userid;
}
function blockPassenger(userid, userimage)
{
  blockmodal.style.display = "block";
  document.getElementById("block-para").innerHTML="Do you wand to Block ID: "+userid;
  document.getElementById('block-userimg').setAttribute("src", "../profile_image/"+userimage);
  globalid=userid;
}
function unblockPassenger(userid, userimage)
{
  unblockmodal.style.display = "block";
  document.getElementById("unblock-para").innerHTML="Do you wand to unblock ID: "+userid;
  document.getElementById('unblock-userimg').setAttribute("src", "../profile_image/"+userimage);
  globalid=userid;
}
function searchpassenger(userid) {
 
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("userslist").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("POST","passenger_list.php?",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send("userid="+userid);
}
function search_driver(userid) {
 
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("driver-list").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("POST","driver_list.php?",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send("userid="+userid);
}
  