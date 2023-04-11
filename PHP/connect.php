<?php
$con =  mysqli_connect ("localhost", "root", "");
if (!mysqli_select_db($con, "finalproject"))
{

    die ("connection error");
}

?>