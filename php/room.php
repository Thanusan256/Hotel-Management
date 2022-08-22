<?php

$servername="localhost";
$username="root";
$password="";
$dbname="homedb";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
   die("connection faild".mysqli_connect_error());
}
else
{

   $room = $_POST['room'];

   $sql ="INSERT INTO availability(room) VALUES ('$room') ;";

  if(mysqli_query($conn,$sql)==TRUE)
  {
    echo '<script>alert("Your Room is booked ")</script>';
  }
  else
  {
      echo '<script>confirm("The Room IS Alredy Booked Some One Choese Other One")
    
      </script>';
  }

}


?>
