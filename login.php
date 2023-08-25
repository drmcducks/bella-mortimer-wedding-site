<<<<<<< HEAD
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
    <form id="frm-login" accept-charset="utf-8" action="auth.php" method="post">
           <label for="email">Email</label><br>
           <input type="text" name="email" id="email" placeholder="Input Your Email">
           <br>
           <label for="passwd">Password</label><br>
           <input type="password" class="pwinput" name="passwd" id="passwd" placeholder="Input Your Password">
           <br>
           <input type="submit" value="Login">
    </div>
    <footer>© 2023 Kuang Andrew | <a href="logout.php">Logout</a> | <a href="index.html">Home</a></footer>
</body>
=======
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
    <?php
    if (isset($_POST["Login"])){
        $email = $_POST["email"];
        $passwd = $_POST["passwd"];
        require_once "database-con.php";
        $sql = "SELECT * FROM login WHERE email = '$email' ";
        $result = mysqli_query($conn, $sql);
        $login = mysqli_fetch_array($result, MYSQLI_ASSOC);

    }
    ?>
    <div class="wrap">
    <form id="frm-login" accept-charset="utf-8" action="" method="post">
           <label for="email">Email</label><br>
           <input type="text" name="email" id="email" placeholder="Input Your Email">
           <br>
           <label for="passwd">Password</label><br>
           <input type="password" class="pwinput" name="passwd" id="passwd" placeholder="Input Your Password">
           <br>
           <input type="submit" value="Login">
    </div>
    <footer>© 2023 Drew | <a href="logout.php">Logout</a></footer>
</body>
>>>>>>> e9f329a2a1dbdd8ca2fc4097d6016c1edd36340b
</html>