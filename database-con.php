<<<<<<< HEAD
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "belmort";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn -> connect_error){
        die("Connection Failed: ".$conn->connect_error);
    }
    echo ""
=======
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "belmort";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn -> connect_error){
        die("Connection Failed: ".$conn->connect_error);
    }
    echo ""
>>>>>>> e9f329a2a1dbdd8ca2fc4097d6016c1edd36340b
?>