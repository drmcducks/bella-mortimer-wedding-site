<?php
session_start(); //checking if the user has logged-in
include("database-con.php");
if(!isset($_SESSION['loggedin'])){
    echo "<script>alert('You need to log-in first');
            window.location.href='login.php';
        </script>";
} //redirect to login.php page if not
//setting up variables for table column, table, and db connection for data fetching
$query = "SELECT fname, eemail, attendance FROM guest";
$result = $conn->query($query);
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
            <h1 class="title" onclick="window.location='guest-list.php'">Bella & Mortimer</h1>
        </div>
        <div class="contnts">
            <h2>Guest List</h2>
           <table class="dtable">
                <tr>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Attendance</th>
                </tr>
                <?php
                    if ($result->num_rows> 0 ){
                        $sn=1;
                        while($data = $result->fetch_assoc()){
                ?>
                <tr>
                <td><?php echo $data['fname']; ?> </td>
                <td><?php echo $data['eemail']; ?> </td>
                <td><?php echo $data['attendance']? 'Attend' : 'Absent'; ?> </td>
                <tr>
                    <?php
                    $sn++;}} else {?>
                    <tr>
                        <td colspan="8"> No Data</td>
                    </tr>
                    <?php }?>
                
           </table>
        </div>
    </div>
    <footer>© 2023 Made with ☕by Kuang Andrew | <a href="logout.php">Log-out</a> </footer>
</body>
</html>