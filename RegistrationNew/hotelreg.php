<!DOCTYPE html>
<html>

<head>

    <title>Registration</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="newcss.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Permanent+Marker&display=swap" rel="stylesheet">

    <script language="javascript">
    function check() {
    

    var customername = document.forms["form1"]["cname"].value;
    var username = document.forms["form1"]["uname"].value;
var password = document.forms["form1"]["pwd"].value;
var confirmpassword = document.forms["form1"]["cpwd"].value;
var email = document.forms["form1"]["email"].value;
var confirmemail = document.forms["form1"]["cemail"].value;
var emailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;





if (customername == "") {
    alert("Please fill the name field");
    return false;

} else if (username == "") {
    alert("Please fill the username field");
    return false;
} else if (password.length <= 5) {
    alert("Please create a strong passsword containing more than 5 characters");
    return false;
} else if (password == "") {
    alert("Please Create a password");
    return false;
} else if (confirmpassword == "") {
    alert("Please fill the confirm password field");
    return false;
} else if (email == "") {
    alert("Please insert your email!");
    return false;

} else if (!emailformat.test(email)) {
    alert("Valid email address please");
    return false;

} else if (confirmemail == "") {
    alert("Please enter your confirm email address field");
    return false;
} else if (password != confirmpassword) {
    alert("Your password didn't matched, Please check again!");
    return false;
} else if (email != confirmemail) {
    alert("Your email didn't matched, Please check again!");
    return false;
} else {
    alert("Registration Successful!");
    return true;
}
    }
 </script>
</head>

<body class="body">







    <form name="form1" method="POST" action="usereg.php" onSubmit="return check();">


        <div class=form1>
            <h1>Registration</h1>
            <h4 class="required">Required Fields</h4>

            <style>
                .required:before {
                    content: "*";
                    color: red;
                }
                
                .required1:after {
                    content: "*";
                    color: red;
                }
            </style>




            <label class="required1">Name :</label>

            <br>

            <input type="text" class="textbox" name="cname" placeholder="name" required >
            <br>


            <label class="required1">User Name : </label>


            <br>
            <input type="text" class="textbox" name="uname" placeholder="username" required >
            <br>
            <label class="required1">Create a Password</label>
            <br>
            <input type="Password" class="textbox" name="pwd" placeholder="password">
            <br>
            <label class="required1">Confirm Password</label>
            <br>
            <input type="Password" name="cpwd" class="textbox" placeholder="password again">
            <br>
            <label class="required1">Email Address</label>

            <br>
            <input type="email" id="email" name="email" class="textbox" placeholder="mail address">
            <br>
            <label class="required1">Confirm Email Address</label>
            <br>
            <input type="text" name="cemail" class="textbox" placeholder="mail address again">
            <br>
            <br>
            <table>
                <tr>
                    <td><button class="button1" type="Submit" name="submit" >Register</button></td>
                    <td><button class="button2" type="reset">Clear</button></td>
                </tr>
            </table>

            <br>
            <a href="login.php" class="link">Registered User?</a>



        </div>
    </form>

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
    echo "<script><h2>Successfully Registered in ! </h2><br>Please Login through this <a href='login.php'>link</a></script>";
}
else{
    echo "<h2> failed, please try to <a href='hotelreg.php'>Registration</a></h2>" ;
}

}

?>



</body>


</html>