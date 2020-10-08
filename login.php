<?php
$con=mysqli_connect("localhost","root","","loginecom");

if(isset($_POST['name']) && !empty($_POST['name'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$retype=$_POST['retype'];

mysqli_query($con,"insert into userdetails(name,emailid,password,reenter)values('$name','$email','$password','$retype')");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginpage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="design.css">
        <link rel="stylesheet" href="design1.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
   
    <h1><i class="fa fa-pagelines"></i><span class="start">l</span><span class="end">ooks</span></h1>
    <div class="menu">
        <ul>
            <li>
               <i class="fa fa-home"></i><a href=main.php>HOME</a>
            </li>
            <li>
                <i class="fa fa-user"></i><a href=login.php>LOGIN</a>
            </li>
            <li>
                <i class="fa fa-envelope"></i><a href=contact.php>CONTACT US </a>
            </li>
        </ul>

    </div>
    <img src="blu.svg"></img>
   
   <div class="logincontainer">
        <form action="main.php" method="get">
            <fieldset>
                <legend><i class="fa fa-user" aria-hidden="true">log-in</i>
                </legend>
            <input type="text" class="in" placeholder="enter your email id">
            <input type="password" class="pa" placeholder="enter your password">
            <input type="submit" class="sub" >
            </fieldset>
        </form>
   </div>
   
   <div class="signup">
    <form action="login.php" method="POST">
        <fieldset>
            <legend><i class="fa fa-user" aria-hidden="true">signup</i>
            </legend>
        <input type="text" name="name" class="in" placeholder="enter your name">
        <input type="text" name="email" class="in" placeholder="create your email id">
        <input type="password" name="password" class="pa" placeholder="create your password">
        <input type="password" name="retype" class="pa" placeholder="confirm your password">
        <input type="submit" name="sub" class="sub">
        </fieldset>
    </form>
</div>
<div class="mes"><i class="fa fa-comment-o" aria-hidden="true"><?php echo"welcome"." "."$name";   ?></i></div>
<div class="foot">
   
    <ul>
        <li>
           <i class="fa fa-facebook-official"></i>
        </li>
        <li>
            <i class="fa fa-instagram"></i>
        </li>
        <li>
            <i class="fa fa-envelope"></i>
        </li>
    </ul>
</div>
  <script>
    

  </script>  
</body>
</html>