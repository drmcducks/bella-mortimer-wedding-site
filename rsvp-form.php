<?php
require 'database-con.php';

if(isset($_POST["submit"])){
    $name = $_POST["fname"];
    $email = $_POST["gemail"];
    $attend = $_POST["attend"];

    $query = "INSERT INTO guest VALUES('', '$name', '$email', '$attend')";
    mysqli_query($conn, $query);
    echo
    "
    <script>alert('Thank you for filling the RSVP');</script>
    ";
}
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
        <h1 class="title" onclick="window.location='index.html'">Bella & Mortimer</h1>
        <form id="frm-rspnd" accept-charset="utf-8" action="" method="post">
           <label for="fname">Full Name</label><br>
           <input type="text" name="fname" id="fname" placeholder="Input Your Name Here">
           <br>
           <label for="gemail">E-mail</label><br>
           <input type="text" name="gemail" id="gemail" placeholder="Input Your E-mail Here">
           <br>
           <label for="attend">Will You Be Attending?</label><br>
           <select name="attend" id="attend" required="">
                <option value="" selected="" disabled="">Select</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
           </select><br>
           <input type="submit" value="RSVP" name="submit">
        </form>
    </div>
    <footer>© 2023 Drew | <a href="login.html">Log-in</a></footer>
</body>
</html>