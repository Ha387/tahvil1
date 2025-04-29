<?php
include("header.php");
?>
    <title>درباره ما و تماس | دارک نیوز</title>
    <style>
        :root {
            --dark-primary: #0a0a0a;
            --dark-secondary: #1a1a1a;
            --accent-color: #8b0000;
            --text-primary: #e0e0e0;
            --text-secondary: #a0a0a0;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:B nazanin;
            color: white;
        }
        
        body {
            background-color: var(--dark-primary);
            color: var(--text-primary);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background-color: var(--dark-secondary);
            padding: 20px 0;
            border-bottom: 2px solid var(--accent-color);
        }
        
        .logo {
            font-size: 28px;
            font-weight: bold;
            color: var(--accent-color);
            text-decoration: none;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-right: 20px;
        }
        
        .nav-links a {
            color: var(--text-primary);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--accent-color);
        }
        
        .about-section {
            padding: 60px 0;
            background-color: var(--dark-secondary);
            margin: 40px 0;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }
        
        .about-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 40px;
        }
        
        .about-text {
            flex: 1;
            min-width: 300px;
        }
        
        .about-image {
            flex: 1;
            min-width: 300px;
            text-align: center;
        }
        
        .about-image img {
            max-width: 100%;
            border-radius: 8px;
            border: 2px solid var(--accent-color);
        }
        
        h1 {
            color: var(--accent-color);
            font-size: 36px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 80px;
            height: 3px;
            background-color: var(--accent-color);
        }
        
        h2 {
            color: var(--text-primary);
            font-size: 24px;
            margin: 25px 0 15px;
        }
        
        h3 {
            color: var(--accent-color);
            font-size: 20px;
            margin: 20px 0 10px;
        }
        
        p {
            margin-bottom: 15px;
            color: var(--text-secondary);
        }
        
        .team-section, .contact-section {
            margin: 60px 0;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }
        
        .team-member {
            background-color: var(--dark-secondary);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s;
            border-bottom: 3px solid var(--accent-color);
        }
        
        .team-member:hover {
            transform: translateY(-10px);
        }
        
        .team-member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid var(--accent-color);
        }
        
        .member-name {
            font-size: 20px;
            color: var(--text-primary);
            margin-bottom: 5px;
        }
        
        .member-position {
            color: var(--accent-color);
            font-size: 14px;
            margin-bottom: 15px;
        }
        
        .contact-methods {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 40px;
        }
        
        .contact-card {
            flex: 1;
            min-width: 250px;
            background-color: var(--dark-secondary);
            padding: 30px;
            border-radius: 8px;
            border-left: 4px solid var(--accent-color);
            transition: transform 0.3s;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
        }
        
        .contact-icon {
            font-size: 30px;
            color: var(--accent-color);
            margin-bottom: 15px;
        }
        
        .contact-form {
            background-color: var(--dark-secondary);
            padding: 40px;
            border-radius: 8px;
            margin-top: 40px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-primary);
        }
        
        .form-control {
            width: 100%;
            padding: 12px;
            background-color: var(--dark-primary);
            border: 1px solid #333;
            border-radius: 4px;
            color: var(--text-primary);
            font-size: 16px;
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--accent-color);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background-color: #6b0000;
        }
        
        footer {
            background-color: var(--dark-secondary);
            padding: 40px 0;
            text-align: center;
            margin-top: 60px;
            border-top: 2px solid var(--accent-color);
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }
        
        .social-links a {
            color: var(--text-primary);
            font-size: 20px;
            transition: color 0.3s;
        }
        
        .social-links a:hover {
            color: var(--accent-color);
        }
        
        .copyright {
            color: var(--text-secondary);
            font-size: 14px;
        }
        
        @media (max-width: 768px) {
            .about-content {
                flex-direction: column;
            }
            
            .nav-links {
                display: none;
            }
            
            h1 {
                font-size: 28px;
            }
            
            .contact-methods {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>    
    <main class="container">
        <section class="about-section">
            <div class="about-content">
                <div class="about-text">
                    <h1>درباره دارک نیوز</h1>
                    <p>خبرنگاری دانش اموزان
                     یک پلتفرم خبری مستقل و پیشرو است که با تمرکز بر ارائه تحلیل‌های عمیق و گزارش‌های تحقیقی، به دنبال کشف حقایق پنهان در پس رویدادهای روز است.</p>
                    <p>تیم ما متشکل از روزنامه‌نگاران حرفه‌ای و تحلیل‌گران باتجربه است که با تعهد به اصول اخلاقی روزنامه‌نگاری، اخبار را بدون جانبداری و با دقت بالا منتشر می‌کنند.</p>
                    <h2>ماموریت ما</h2>
                    <p>ماموریت ما روشنگری، افزایش آگاهی عمومی و ارائه اطلاعات دقیق و قابل اعتماد به مخاطبان است. ما به شفافیت و پاسخگویی اعتقاد داریم و همواره به دنبال گفتن حقایق ناگفته هستیم.</p>
                </div>
                <div class="about-image">
                    <img src="Screenshot 2025-04-21 192253.png" alt="تیم دارک نیوز">
                </div>
            </div>
        </section>
        
        <section class="contact-section" id="contact">
            <h1>ارتباط با ما</h1>
            <p>نظرات، پیشنهادات و انتقادات خود را با ما در میان بگذارید. تیم دارک نیوز آماده شنیدن صدای شماست.</p>
            
            <div class="contact-methods">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>ایمیل</h3>
                    <p>Ha3an87.z@gmail.com</p>
                    <p>Student.news@ gmail.com</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>تلفن</h3>
                    <p>031-42238210</p>
                    <p>0901-750-9627 (پیامک)</p>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>آدرس</h3>
                    <p>نجف اباد-خیابان شهدا-هنرستان شهید طالبی</p>
                    <p>کد پستی: ۱۲۳۴۵۶۷۸۹۰</p>
                </div>
            </div>
            
            <div class="contact-form">
                <h2>فرم تماس</h2>
                <form action="form.php" method="POST">
                    <div class="form-group">
                        <label for="name">نام کامل</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">ایمیل</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">موضوع</label>
                        <input type="text" id="subject" name="subject" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">پیام شما</label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn">ارسال پیام</button>
                </form>
            </div>
        </section>
    </main>
    
    <footer>

    </footer>
    
    <!-- آیکون فونت آوسام -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>
<?php
include("footer.php");
?>
