<?php

function load_template($name)
{
    /*print(__FILE__); for tracking the files*/
    include  $_SERVER['DOCUMENT_ROOT']."/Php/_template/$name.php";
}

/*_DIR__.<- this for only using in one directory but using server we can eaily accesss everywhere ..$_SERVER is a super global variable */
function validate_credentials($username, $password)
{
    if ($username == "kmk@gamil.com" and $password == "kmk01") {
        return true;
    } else {
        return false;
    }
}

function signup($user, $phone, $email, $pass)
{

    $servername = "mysql.selfmade.ninja:3306";
    $username = "Kmk01";
    $password = "KMK@mar2001";
    $dbname = "Kmk01_newdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `auth01` (`username`, `phonenumber`, `email`, `password`, `active`, `block`);
   VALUES ('$user', '$pass', '$email', '$phone', '1');";;
    if ($conn->query($sql) === true) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}
