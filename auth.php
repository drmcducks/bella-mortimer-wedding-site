<?php
    session_start();
    require 'database-con.php';

    if(isset($_POST['email']) && isset($_POST['passwd'])){
        $email = $_POST['email'];
        $password = $_POST['passwd'];
    }

    if($stmt=$conn->prepare('SELECT id, password FROM user WHERE email = ?')){
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        $stmt->store_result();
            if($stmt->num_rows > 0){
                $stmt->bind_result($id, $password);
                $stmt->fetch();

                if($_POST['password'] === $password){
                    session_regenerate_id();
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['name'] = $_SESSION['name'];
                    $_SESSION['id'] = $id;
                    echo 'Welcome'.$_SESSION['name'].'!';
                }
                else{
                    echo "
                    <script>alert('Incorrect username/password!');</script>
                    ";
                }
            } else{
                echo "
                <script>alert('Incorrect username/password!');</script>
                ";
            }
        $stmt->close();
    }
?>