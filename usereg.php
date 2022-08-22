
<?php



$hostname = "localhost";
$username ="root";
$password ="";
$dbname = "registration";

$conn = mysqli_connect($hostname,$username,$password,$dbname);

if ($conn == false)
{
    die ("Conncection failed".mysqli_connect_error());
}



 if(isset($_REQUEST['cname']))
{  
$Name = $_REQUEST['cname'];
$Uname = $_REQUEST['uname'];
$Password1 = $_REQUEST['pwd'];
$Password2 = $_REQUEST['cpwd'];
$Email1 = $_REQUEST['email'];
$Email2 = $_REQUEST['cemail'];

$sql = "INSERT INTO users (Name,Username,Password1,Password2,Email,CEmail) Values ('$Name','$Uname','$Password1','$Password2','$Email1','$Email2')";
$result = mysqli_query($conn,$sql);

if ($result==true)
{
    echo "<h2>Successfully Registered in ! </h2><br>Please Login through this <a href='login.php'>link</a> ";
}
else{
    echo "<h2> failed, please try to <a href='hotelreg.php'>Registration</a></h2>" ;
}

}

?>