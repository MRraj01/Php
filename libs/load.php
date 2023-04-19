<?php

function load_template($name)
{
    /*print(__FILE__); for tracking the files*/
    include  $_SERVER['DOCUMENT_ROOT']."/app/_template/$name.php";
}
?>
<!--__DIR__.<- this for only using in one directory but using server we can eaily accesss everywhere ..$_SERVER is a super global variable -->