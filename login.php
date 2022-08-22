
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

                   header("location: index.html");
        }
            else {
                $error="Your Password/Username Incorrect ! Please Try Again !";
                echo "<script type='text/javascript'>alert('$error');</script>" ;    
            
        }
    }
           
       ?>





<html>

<head>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Permanent+Marker&display=swap" rel="stylesheet">
</head>

    </head>
    <body class="body">


    <form name="formlogin" class="formlogin" method="POST" >

        <h1>Login</h1>


        <br>
        <label>User Name</label>
        <br>

        <input type="text" class="textbox" name="uname" placeholder="username" required>
        <br>
        <br>
        <label>Password</label>
        <br>


        <input type="Password" class="textbox" name="pwd" placeholder="password"required>
        <br>
        <table>
            <tr>
                <td><button class="button1">Login</button></td>
                <td><button class="button2" type="reset">Clear</button></td>
            </tr>
        </table>
        <br>

        <a href="hotelreg.php" class="link">Not a Registered user?</a>

        <br>

       
        



    </form>

   



         




</body>

</html>