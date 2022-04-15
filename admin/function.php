<?php
$conn = mysqli_connect("localhost", "root", "", "instagram");

if (isset($_POST["action"])) {
    // Choose a function depends on value of $_POST["action"]
    if ($_POST["action"] == "delete") {
        delete();
    }
}

function delete()
{
    global $conn;

    $id = $_POST["id"];

    $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE id = $id"));

    // Data with female gender
    if ($rows["gender"] == "Female") {
        echo 0;
        exit;
    }

    mysqli_query($conn, "DELETE FROM customers WHERE id = $id");
    echo 1;
}
