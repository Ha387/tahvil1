<style>
    ne3{
        background-color: white ;
    }
    </style>
<?php include("header.php"); ?>
<body>
    <section id="a1" class="text-center py-5">
    <!-- <img src="Untitled-2.jpg" alt="" alt="Placeholder" class="img" > -->
        <h1 class="text-white"> وبگاه خبری دانش آموزان</h1>
        <h2 class="text-white"></h2>
        <p class="text-light">آخرین اخبار روز دنیا را در اینجا بخوانید.</p>
    </section>
    
<section id="ass">
<div class="slideshow-container">
        <a href="tabligh.php"><div class="slide fade">
            <img src="tab.png" alt="تبلیغ ۱">
        </div>
        <div class="slide fade">
            <img src="download.jfif" alt="تبلیغ ۲">
        </div>
        <div class="slide fade">
            <img src="download (1).jfif" alt="تبلیغ ۳">
        </div>
        </a>
    </div>
    </section>
<main class="container my-5">


    <script >
        let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("slide");

    // همه اسلایدها را مخفی کن
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // به اسلاید بعدی برو
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    // اسلاید فعلی را نمایش بده
    slides[slideIndex - 1].style.display = "block";

    // هر ۳ ثانیه اسلاید را تغییر بده
    setTimeout(showSlides, 3000);
}
    </script>
    <section id="news" class="news-section p-4 mb-4 bg-dark text-light rounded">
        <?php
        include("data.php");
            $result= mysqli_query($c,"SELECT * FROM `news`");
            mysqli_close($c);
            $row=mysqli_fetch_array($result);
            ?>
            <?php
            while($row){
            ?>
            <article class="news-item">
                <h2><?php echo($row["sartitr"]) ?></h2>
                <!-- <p></p> -->
                <a href="newes2.php?id=<?php echo($row["id"]); ?>" a class="btn btn-primary mt-3">ادامه مطلب</a>
                </article>
            <?php
            ?><p></p><?php
            $row=mysqli_fetch_array($result);}
            ?>
    </section> 

    <section id="contact" class="news-section p-4 mb-4 bg-dark text-light rounded">
        <h2> درباره ما و تماس با ما </h2>
        <p>برای تماس با تیم ما از طریق لینک زیر اقدام کنید.</p>
        <a href="obout.php" class="btn btn-primary mt-3">ادامه مطلب</a>
    </section>
</main>




<?php include("footer.php"); ?>

<style>
     #ass{
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;;
}

.slideshow-container {
    position: relative;
    width: 600px;
    height: 400px;
    overflow: hidden;
    border: 5px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.slide {
    display: none;
    width: 100%;
    height: 100%;
}

.slide img {
    width: 100%;
    height: 100%;

}

.fade {
    animation-name: fade;
    animation-duration: 1.5s;
}

@keyframes fade {
    from {
        opacity: 0.4;
    }
    to {
        opacity: 1;
    }
}
</style>