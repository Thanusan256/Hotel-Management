
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



    session_start();
     
    if (isset($_POST['uname']))
    {
        $username = mysqli_real_escape_string($conn,$_REQUEST['uname']);
        $password = mysqli_real_escape_string($conn,$_REQUEST['pwd']);

        $qry = "SELECT * from users WHERE Username = '$username' and Password1 = '$password' ";

        $result = mysqli_query($conn,$qry);         
        $rows = mysqli_num_rows($result);
               if($rows==1){
            $_SESSION['Username'] = $username;

                   
            echo "<h2>Successfully login! Please go visit the home</h2>";}
            else {

            
                
            echo "<h2>Password/Username is incorrect </h2><br/>Click here to <a href='login.php'>Login</a> again";}
            
        }
           
       ?>

