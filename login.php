<?php
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$link=mysqli_connect("localhost", "root", "", "webgahdatabase");
$result=mysqli_query($link,"INSERT INTO `creataccant`(`name`, `email`, `password`) 
VALUES ('$name','$email','$password');");
mysqli_close($link);

if($result=true){
?>
<div>
<link rel="stylesheet" href="login_register.css">
    <p class="salam">ثبت نام انجام شد</p>
    <p class="button" >نام کاربری: <?php echo($name); ?></p>
    <p class="button" > رمز عبور: <?php echo($password); ?></p>
    <p class="button" > ایمیل: <?php echo($email); ?></p>
    <p style="text-align: center;"><a class="button" href="index.php"> برو به خانه</a></p>
</div>



<?php
}else{
    ?>
    <p>ثبت نام انجام نشد</p>

    <?php
}
    //echo($name);
    //echo($password);
    //echo($email);
?>