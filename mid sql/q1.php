<?php
require "db.php";
if(isset($_POST['login'])){
    $selectQ = "select * from users where name='".$_POST['uname']."' and pass = '".sha1($_POST['upass'])."'";
    $r = $conn->query($selectQ);
    if($r->num_rows > 0){
        $message = "Valid User!!";
    }
    else{
        $message = "Invlid User!!";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>login:<?php echo $message??""; ?></h2>
    <form action="" method="post">
    usrename: <input type="text" name="uname" id="">
    password: <input type="password" name="upass" id=""><br>
    <input type="submit" value="Login" name="login">

    </form>
</body>
</html>