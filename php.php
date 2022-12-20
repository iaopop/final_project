<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'webpage');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
//check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if($link)
{
    $uname = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "insert into feedback values ('" . $uname . "', '" . $phone . "', '" . $email . "', '" . $message . "')";
    echo $sql;
    $result = mysqli_query($link, $sql);

    if($result){
        echo "Success!";
        exit();
    }
    else{
        echo "Wrong!";
        exit();
    }
}