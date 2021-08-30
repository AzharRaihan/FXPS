<?php
$conn = mysqli_connect('localhost', 'root', '', 'fxps');

if (!$conn) {
die("not connected" . mysqli_error($conn));
}

?>