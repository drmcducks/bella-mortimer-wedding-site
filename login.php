<?php
    session_start();
    include ("database-con.php");
    if(isset($_SESSION['loggedin'])){
        echo "<script>alert('You already logged-in');
            window.location.href='guest-list.php';
        </script>";
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bella And Mortimer Wedding</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrap">
    <div class="heads">
            <h1 class="title" onclick="window.location='login.php'">Login</h1>
        </div>
    <form id="frm-login" accept-charset="utf-8" action="auth.php" method="post">
           <label for="email">Email</label><br>
           <input type="text" name="email" id="email" placeholder="Input Your Email">
           <br>
           <label for="passwd">Password</label><br>
           <input type="password" class="pwinput" name="passwd" id="passwd" placeholder="Input Your Password">
           <br>
           <input type="submit" value="Login">
    </div>
    <footer>© 2023 Made with ☕by Kuang Andrew |
    <?php
       if(!isset($_SESSION['loggedin'])){
        echo "<a href='index.html'>Home</a></footer>";
       }else{
        echo "<a href='logout.php'>Logout</a> | <a href='index.html'>Home</a></footer>";
       }
    ?>
</body>
</html>
<?php
    }
?>