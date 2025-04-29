-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2025 at 06:08 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgahdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8mb3_persian_ci,
  `approved` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creataccant`
--

DROP TABLE IF EXISTS `creataccant`;
CREATE TABLE IF NOT EXISTS `creataccant` (
  `name` text COLLATE utf8mb3_persian_ci NOT NULL,
  `email` text COLLATE utf8mb3_persian_ci NOT NULL,
  `password` text COLLATE utf8mb3_persian_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `creataccant`
--

INSERT INTO `creataccant` (`name`, `email`, `password`, `is_admin`) VALUES
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('saddsasd', 'ha3an87.z@gmail.com', 'asdsdasd', 0),
('saddsasd', 'ha3an87.z@gmail.com', 'asdsdasd', 0),
('mahdi', 'mahdi@gmail.com', '1234', 1),
('hasan', 'ha3an87.z@gmail.com', '1234', 0),
('hasan', 'ha3an87.z@gmail.com', '1234', 0),
('hasan', 'ha3an87.z@gmail.com', '1234', 0),
('hasan', 'ha3an87.z@gmail.com', '123456789', 0),
('hasan', 'ha3an87.z@gmail.com', '123456789', 0),
('hasan', 'ha3an87.z@gmail.com', '123456', 0),
('hasan', 'ha3an87.z@gmail.com', '123456', 0),
('hasan', 'ha3an87.z@gmail.com', '123456', 0),
('hasan', 'ha3an87.z@gmail.com', '123456', 0),
('hasan', 'ha3an87.z@gmail.com', '123456', 0),
('hasan', 'ha3an87.z@gmail.com', '123456', 0),
('hasan', 'ha3an87.z@gmail.com', '123456', 0),
('hasan', 'ha3an87.z@gmail.com', '123456', 0),
('hasan', 'ha3an87.z@gmail.com', '123456', 0),
('hasan', 'ha3an87.z@gmail.com', '123456', 0),
('hasan', 'ha3an87.z@gmail.com', '123456', 0),
('hasan', 'ha3an87.z@gmail.com', '123456', 0),
('hasan', 'ha3an87.z@gmail.com', '123456', 0),
('hasan', 'ha3an87.z@gmail.com', '123456', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '2552525', 0),
('hasan', 'ha3an87.z@gmail.com', '113131', 0),
('hasan', 'ha3an87.z@gmail.com', '15', 0),
('', '', '', 0),
('sgddsf', 'ha3an87.z@gmail.com', 'dfsf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
CREATE TABLE IF NOT EXISTS `form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `mozoe` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `text` text COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `email` text COLLATE utf8mb3_persian_ci NOT NULL,
  `pas` text COLLATE utf8mb3_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `pas`) VALUES
('', ''),
('SFFFFFFF@gmail.com', 'assssssssas'),
('', ''),
('Csdfgsddfdf@gmail.com', 'sfbgsdf'),
('Csdfgsddfdf@gmail.com', 'sfbgsdf'),
('ha3an87.z@gmail.com', '123456789'),
('ha3an87.z@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sartitr` text NOT NULL,
  `news` text NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `sartitr`, `news`, `img`) VALUES
(44, 'سیاسی:   ایران و آمریکا در آستانه مذاکرات غیرمستقیم؟ ', '### **اخبار کامل مذاکرات ایران و آمریکا: زمینه‌ها، چالش‌ها و سناریوهای پیش‌رو**  \r\n\r\n#### **۱. زمینه‌های اخیر مذاکرات غیرمستقیم**  \r\nدر هفته‌های اخیر، گزارش‌هایی از احتمال ازسرگیری **مذاکرات غیرمستقیم** بین ایران و آمریکا درباره برنامه هسته‌ای و تحریم‌ها منتشر شده است. این گفت‌وگوها احتمالاً با میانجیگری **عمان و قطر** انجام خواهد شد.  \r\n\r\n- **آمریکا**: به دنبال جلوگیری از پیشرفت برنامه هسته‌ای ایران و آزادی شهروندان زندانی خود است.  \r\n- **ایران**: خواهان لغو تحریم‌ها، آزادی دارایی‌های بلوکه‌شده و تضمین‌های اقتصادی است.  \r\n\r\n#### **۲. مواضع فعلی دو طرف**  \r\n\r\n##### **🇺🇸 موضع آمریکا:**  \r\n- تأکید بر محدودیت‌های برنامه هسته‌ای ایران (به‌ویژه غنی‌سازی ۶۰٪).  \r\n- درخواست آزادی شهروندان آمریکایی زندانی در ایران.  \r\n- عدم تمایل به لغو کامل تحریم‌ها، اما احتمال اعطای برخی تسهیلات اقتصادی.  \r\n\r\n##### **🇮🇷 موضع ایران:**  \r\n- ادامه مذاکرات تنها در صورت **رفع تحریم‌ها** و تضمین‌های عملی.  \r\n- عدم تمایل به مذاکره مستقیم با آمریکا (حفظ چارچوب مذاکرات غیرمستقیم).  \r\n- تأکید بر حق غنی‌سازی اورانیوم برای اهداف صلح‌آمیز.  \r\n\r\n#### **۳. نقش میانجی‌گران (عمان و قطر)**  \r\n- **عمان**: همچنان نقش کلیدی در انتقال پیام‌ها بین دو طرف دارد.  \r\n- **قطر**: اخیراً تلاش‌هایی برای تسهیل گفت‌وگوها انجام داده است.  \r\n\r\n#### **۴. چالش‌های اصلی پیش‌رو**  \r\n- **اعتمادسازی**: عدم اعتماد دو طرف به تعهدات یکدیگر (به‌ویژه پس از خروج آمریکا از برجام در ۲۰۱۸).  \r\n- **تحریم‌ها**: آمریکا حاضر به لغو کامل تحریم‌ها نیست و ایران نیز بدون رفع آن‌ها، محدودیتی در برنامه هسته‌ای نمی‌پذیرد.  \r\n- **مسائل منطقه‌ای**: تنش‌های ایران با اسرائیل و گروه‌های مقاومت بر پیچیدگی مذاکرات افزوده است.  \r\n\r\n#### **۵. سناریوهای محتمل**  \r\n\r\n##### **الف) توافق موقت (مانند تبادل زندانی + تسهیلات محدود اقتصادی)**  \r\n- آمریکا ممکن است بخشی از دارایی‌های ایران را آزاد کند.  \r\n- ایران غنی‌سازی ۶۰٪ را متوقف یا کاهش دهد.  \r\n\r\n##### **ب) بن‌بست و تشدید تنش‌ها**  \r\n- در صورت شکست مذاکرات، احتمال افزایش تحریم‌ها و گسترش برنامه هسته‌ای ایران وجود دارد.  \r\n\r\n##### **ج) بازگشت به برجام (کم‌احتمال اما ممکن)**  \r\n- در صورت توافق گسترده، دو طرف ممکن است به چارچوب برجام بازگردند.  \r\n\r\n#### **۶. واکنش‌های داخلی و بین‌المللی**  \r\n- **ایران**: جناح‌های تندرو با هرگونه تعامل با آمریکا مخالفند، اما دولت به دنبال کاهش فشار اقتصادی است.  \r\n- **آمریکا**: مخالفت جمهوری‌خواهان با هرگونه توافق با ایران ادامه دارد.  \r\n- **اسرائیل**: نگران کاهش فشار بر ایران است و ممکن است اقدامات خرابکارانه را افزایش دهد.  \r\n\r\n#### **۷. چشم‌انداز آینده**  \r\n- مذاکرات در مرحله حساسی قرار دارد، اما هنوز **قطعیت**ی درباره نتیجه وجود ندارد.  \r\n- اگر دو طرف به یک توافق موقت برسند، ممکن است تنش‌ها کاهش یابد، اما حل کامل اختلافات بعید به نظر می‌رسد.  \r\n\r\n---\r\n\r\n### **جمع‌بندی نهایی**  \r\nمذاکرات ایران و آمریکا در شرایطی پیچیده و با چالش‌های متعدد ادامه دارد. اگرچه دو طرف به دنبال کاهش تنش‌ها هستند، اما اختلافات اساسی و عدم اعتماد متقابل، دستیابی به توافق را دشوار کرده است. نتیجه این مذاکرات می‌تواند تأثیرات بزرگی بر **اقتصاد ایران، امنیت منطقه و روابط بین‌الملل** داشته باشد.  \r\n\r\n**📌 آیا تحلیل بیشتری درباره تأثیر این مذاکرات بر بازار نفت یا روابط ایران با اروپا می‌خواهید؟**', 'uploads/Untitled.jpg'),
(42, 'افزایش قیمت جهانی نفت به بالای ۸۵ دلار', '### **خبر افزایش قیمت نفت به بالای ۸۵ دلار: علل، پیامدها و پیش‌بینی آینده**  \r\n\r\n#### **📌 خلاصه خبر:**  \r\nقیمت جهانی نفت خام در هفته گذشته **به بالای ۸۵ دلار در هر بشکه** رسید که بالاترین سطح در چند ماه اخیر محسوب می‌شود. این افزایش عمدتاً ناشی از **تمدید کاهش تولید اوپک+**، تنش‌های خاورمیانه و بهبود تقاضای جهانی است.  \r\n\r\n---\r\n\r\n### **🔍 علل افزایش قیمت نفت:**  \r\n\r\n#### **۱. تصمیم اوپک+ برای تمدید کاهش تولید (تا پایان ۲۰۲۴)**  \r\n- اوپک+ به‌رغم فشارهای غرب، **کاهش تولید ۲.۲ میلیون بشکه‌ای در روز** را تا پایان سال جاری میلادی تمدید کرد.  \r\n- عربستان سعودی همچنان تولید خود را در سطح **۹ میلیون بشکه در روز** نگه داشته است.  \r\n\r\n#### **۲. تشدید تنش‌های خاورمیانه**  \r\n- **درگیری اسرائیل و حماس** و احتمال گسترش جنگ به لبنان، نگرانی‌ها درباره اختلال در عرضه نفت را افزایش داده است.  \r\n- **حمله اخیر به تاسیسات نفتی روسیه** توسط اوکراین نیز بر بازار تأثیر گذاشته است.  \r\n\r\n#### **۳. افزایش تقاضای جهانی (به‌ویژه از چین و آمریکا)**  \r\n- چین به‌عنوان بزرگترین واردکننده نفت، **ذخیره‌سازی خود را افزایش داده** که نشان‌دهنده بهبود تقاضاست.  \r\n- فصل مسافرت‌های تابستانی در آمریکا و اروپا نیز مصرف سوخت را بالا برده است.  \r\n\r\n---\r\n\r\n### **📊 آمار و ارقام کلیدی:**  \r\n| نوع نفت | قیمت فعلی (دلار) | تغییرات ماهانه |  \r\n|----------|------------------|----------------|  \r\n| نفت برنت | ۸۵.۶۰ | ▲ +۴.۲٪ |  \r\n| نفت WTI | ۸۱.۹۰ | ▲ +۳.۸٪ |  \r\n\r\n---\r\n\r\n### **💡 پیامدهای افزایش قیمت نفت:**  \r\n\r\n#### **۱. تأثیر بر تورم جهانی:**  \r\n- افزایش قیمت نفت می‌تواند **تورم را در اروپا و آمریکا تشدید کند** و بانک‌های مرکزی را مجبور به حفظ نرخ بهره بالا نماید.  \r\n\r\n#### **۲. تأثیر بر اقتصاد ایران:**  \r\n- ایران با وجود تحریم‌ها، **صادرات نفت خود را به ۱.۵ میلیون بشکه در روز** رسانده که درآمد ارزی بیشتری ایجاد می‌کند.  \r\n- اما افزایش قیمت دلار در ایران (به بالای ۵۸ هزار تومان) ممکن است اثرات مثبت این درآمد را خنثی کند.  \r\n\r\n#### **۳. واکنش کشورهای مصرف‌کننده:**  \r\n- آمریکا ممکن است **از ذخایر استراتژیک نفت (SPR)** استفاده کند تا قیمت‌ها را کنترل نماید.  \r\n- هند و چین به دنبال **تنوع بخشیدن به منابع نفتی** خود هستند.  \r\n\r\n---\r\n\r\n### **🔮 پیش‌بینی آینده:**  \r\n- **سناریوی خوش‌بینانه (قیمت ۸۰-۹۰ دلار):** در صورت تداوم کاهش تولید اوپک+ و عدم جنگ گسترده در خاورمیانه.  \r\n- **سناریوی بدبینانه (قیمت +۱۰۰ دلار):** اگر جنگ اسرائیل و حزب‌الله آغاز شود یا تولید نفت روسیه بیشتر مختل گردد.  \r\n\r\n---\r\n\r\n### **🎯 جمع‌بندی:**  \r\nافزایش قیمت نفت به **بالای ۸۵ دلار** نتیجه ترکیبی از **عرضه محدود، تقاضای فزاینده و نااطمینانی‌های ژئوپلیتیک** است. این روند اگر ادامه یابد، می‌تواند بر رشد اقتصادی جهان تأثیر منفی بگذارد و سیاست‌گذاران را با چالش‌های جدیدی روبه‌رو کند.  \r\n\r\n**✍️ آیا تحلیل بیشتری درباره تأثیر این افزایش قیمت بر بازارهای مالی یا اقتصاد ایران نیاز دارید؟**', 'uploads/نفت.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
