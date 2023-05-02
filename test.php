<pre>

<?php
include 'libs/load.php';







// print_r($_SERVER);
// print_r($_GET);
// print("get");
// print_r($_POST);
// print("post");
// print_r($_SERVER);
if (signup("Kmk01", "mar2001", "sibi@selfmade.ninja", "9999999999")) {
    echo "Success";
} else {
    echo "Fail";
}
?>
</pre>