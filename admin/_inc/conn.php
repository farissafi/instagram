<?php
$conn = mysqli_connect("localhost", "root", "", "instagram");
if (!$conn) {
  die("No connect" . mysqli_connect_errno());
}
?>