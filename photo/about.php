<?php
    $con= mysqli_connect('localhost', 'root');

    if($con) {
        echo  "Connection Successful";
    }
    else {
        echo "Connection failed";
    }
    mysqli_select_db($con, 'photography');

    $name  = $_POST['name'];
    $email = $_POST['email'];

    $query = "INSERT INTO users (name,email) VALUES('$name', '$email')";

    mysqli_query($con, $query);
    header('location:index.php#contact');
?> 