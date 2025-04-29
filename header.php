<?php
session_start();

// متغیرهای کمکی برای ساده‌سازی شرط‌ها
$isLoggedIn = isset($_SESSION['login']);
$isAdmin = $isLoggedIn && isset($_SESSION['admin']);
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خبرنگاری دانش آموزان</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="newes1.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">خبرنگاری دانش آموزان</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- صفحه اصلی -->
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">صفحه اصلی</a>
                    </li>

                    <!-- ورود / خروج -->
                    <?php if ($isLoggedIn) { ?>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">خروج</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">ورود | ثبت نام</a>
                        </li>
                    <?php } ?>

                    <!-- بخش‌های مدیریت (فقط برای ادمین‌ها) -->
                    <?php if ($isAdmin) { ?>
                        <li class="nav-item">
                            <a href="modiriat.php" class="nav-link">ویرایش | اضافه خبر</a>
                        </li>
                        <li class="nav-item">
                            <a href="didgah.php" class="nav-link">دیدگاه ها</a>
                        </li>
                    <?php } ?>

                    <!-- لینک‌های عمومی -->
                    <li class="nav-item">
                        <a class="nav-link" href="#news">اخبار</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="obout.php">تماس با ما</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>