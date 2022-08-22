<html>
<body>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="contactinfor";




$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
        die("connection failed");
}
else
{

 $FirstName = $_POST['fname'];
 $lastname = $_POST['lastname'];
 $phonenumber = $_POST['phonenumber'];
 $email= $_POST['email'];
 $message=$_POST['WriteMessage'];

 $sql="INSERT INTO cinfor(FirstName,LastName,PhoneNumber,Email,Messagefromclient)
      VALUES('$FirstName','$lastname','$phonenumber','$email','$message');";

      if(mysqli_query($con,$sql)==TRUE)
      {
              echo "Thank for your response";
      }
      else
      {
              echo "error";
      }
}
  


?>

</body>
</html>



