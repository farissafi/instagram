<?php session_start();?>
<?php
$msg = "";
if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];
    if (empty($username)) {
        $msg = "<div class='alert alert-danger' role='alert'>
      enter username
     </div>";
    } elseif (empty($_POST['password'])) {
        $msg = "<div class='alert alert-danger' role='alert'>
    enter password
   </div>";
    } else {
        include "_inc/conn.php";
        $sql = "select * from users where username='$username' and password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 0) {
            $msg = "<div class='alert alert-danger' role='alert'>
            Username or password error
       </div>";
        } else {
            $user = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $user['id'];
            header('Location:index.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.rtl.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form method="POST" class="box">
                        <?php if(isset($msg)){echo $msg;}?>
                        <h1>Login</h1>
                        <p class="text-muted"> Please enter your login and password!</p> <input type="text" name="username" placeholder="Username"> <input type="password" name="password" placeholder="Password"> <input type="submit" name="submit" value="Login">
                        <div class="col-md-12">
                            <ul class="social-network social-circle">
                                <li><a href="https://www.facebook.com/groups/1074687842893983/" class="icoFacebook" title="Facebook"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="#" class="icoTwitter" title="Twitter"><i class="bi bi-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/insta.followersbuy/" class="icoGoogle" title="Google +"><i class="bi bi-google"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.js"></script>
</body>

</html>