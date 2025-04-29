<?php
session_start();
$gmail = $_POST["gmail"];
$pas = $_POST["pas"];

// اتصال به دیتابیس
$link=mysqli_connect("localhost", "root", "", "webgahdatabase");
$query = "SELECT * FROM `creataccant` WHERE `email`='$gmail' AND `password`='$pas'";
$result = mysqli_query($link, $query);
mysqli_close($link);

$row = mysqli_fetch_array($result);

if ($row) {
    // لاگین موفق
    $_SESSION['login'] = true;

    // بررسی وضعیت ادمین بودن
    if ($row['is_admin'] == 1) { // فرض کنید فیلد is_admin در دیتابیس وجود داره
        $_SESSION['admin'] = true;
    } else {
        $_SESSION['admin'] = false;
    }

    // هدایت به صفحه اصلی
    ?>
    <script>
        location.replace("index.php");
    </script>
    <?php
} else {
    // لاگین ناموفق
    ?>
    <div>
        <link rel="stylesheet" href="login_register.css">
        <p class="salam">نام کاربری یا رمز عبور صحیح نیست</p>
        <a class="button" href="login.html">بازگشت</a>
    </div>
    <?php
}
?>