<?php
if (isset($_GET['id'])) {
    include '_inc/conn.php';
    $sql = "delete from customers where id=" . $_GET["id"];
    $rsDelete = mysqli_query($conn, $sql);
    if ($rsDelete) {
      header('location:index.php?success=true');
      exit();
    }
  }
?>