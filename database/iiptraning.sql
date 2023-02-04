-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 05:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iiptraning`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_content`, `created_at`, `updated_at`) VALUES
(6, '<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">\r\n<hr />\r\n<hr />\r\n<h2 style=\"font-style:italic\">At IIP Academy, students always had the access to Major &amp; Minor Projects in Website Development (PHP / MySQL)</h2>\r\n\r\n<p><strong>IIP Academy</strong> Provide best training in .<strong>NET &amp; PHP</strong>. So that students themselves can be able to develop projects and launch them LIVE on IIP Academy Online Servers. Our Students had developed several projects like wscubetech.com. Many students get easy job placements due to their online Projects on the IIP Academy. We are only institute in Jodhpur which provides free Web Hosting to our students on our servers.</p>\r\n\r\n<p>Engineering &amp; MCA <s>students can develop</s> any small minor projects in .NET or PHP and could extend as their Major Projects in further years.</p>\r\n\r\n<p>Minor Projects are really not hard to develop, as also the colleges generally are not strict in accepting the minor projects.Minor Projects can be small but it must be remarkable. Because details of Minor Projects are required to put in your Resume. And students with good minor projects can be easily placed in good companies during Campus Placements.</p>\r\n\r\n<p>IIP Academy Provides 45 Days Industrial Training for Engineering (B.E. / B.TECH.) Students</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Why IIP Adacemy</h3>\r\n\r\n<p>1. Live industrial projects</p>\r\n\r\n<p>2. Expert Developers</p>\r\n\r\n<p>3. Placement assistance.</p>\r\n\r\n<p>4. 100% Practical</p>\r\n\r\n<p>5. Interview preparation sessions.</p>\r\n\r\n<hr />\r\n<hr />\r\n<p>&nbsp;</p>\r\n</div>', '2022-07-02 21:08:08', '2022-07-02 22:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `mobile`, `email`, `website`, `address`, `map_link`, `created_at`, `updated_at`) VALUES
(1, '0151151570', '7073513966', 'sumitsaran800@gmail.com', 'www.iip.com', '<p>Mukta Parasd Colony Dada Pota Parak, Bikaner (Rajasthan)</p>', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe class=\"gmap_iframe\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=800&amp;height=400&amp;hl=en&amp;q=ecb collage bikner&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed\"></iframe><a href=\"https://www.kokagames.com/fnf-friday-night-funkin-mods/\">FNF</a></div><style>.mapouter{position:relative;text-align:right;width:800px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:800px;height:400px;}.gmap_iframe {width:700px!important;height:400px!important;}</style></div>', '2022-07-04 13:05:49', '2022-07-04 22:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1: Active , 0: Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'India', 1, '2022-07-04 10:22:22', '2022-07-04 10:22:22'),
(2, 'America', 1, '2022-07-04 10:33:27', '2022-07-04 10:33:27'),
(3, 'Pakisthan', 1, '2022-07-04 10:34:20', '2022-07-04 10:34:20'),
(4, 'ShriLanka', 1, '2022-07-04 10:36:07', '2022-07-04 10:36:07'),
(5, 'Japan', 1, '2022-07-04 10:36:22', '2022-07-04 10:36:22'),
(6, 'Bhutan', 1, '2022-07-04 10:36:41', '2022-07-04 10:36:41'),
(7, 'China', 1, '2022-07-04 10:37:27', '2022-07-04 10:37:27'),
(8, 'Myamar', 1, '2022-07-04 10:38:26', '2022-07-04 10:38:26'),
(11, 'Korean', 0, '2022-07-04 11:37:46', '2022-07-07 08:47:11'),
(12, 'Dubai', 0, '2022-07-04 22:10:32', '2022-07-07 20:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#00a8ec',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1: Active , 0: Inactive',
  `course_price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_title`, `course_description`, `course_logo`, `course_color`, `status`, `course_price`, `created_at`, `updated_at`) VALUES
(2, 'PHP', '<p>This Is Course Full Php Course This Course Avilable</p>\r\n\r\n<p>1. <strong>HTML</strong></p>\r\n\r\n<p>2. CSS</p>\r\n\r\n<p>3. JAVA SCRIPT</p>\r\n\r\n<p>4.JQUERY</p>\r\n\r\n<p>5.PHP MYSQL</p>\r\n\r\n<p>6. LARAVEL</p>', 'Gallery-030722_061841.png', '#09e12d', 1, '1999.00', '2022-07-03 12:48:41', '2022-07-03 23:27:05'),
(6, 'Java (WEB SITE)', '<p>THIS IS NEW WEBSITE COURSE</p>', 'Gallery-040722_043859.png', '#fb09a2', 1, '7888.00', '2022-07-03 23:08:59', '2022-07-03 23:08:59'),
(7, 'HTML ( Frontend WebSite)', '<blockquote>\r\n<p>In <strong>September</strong> of that year, Rasmus <em>expanded upon PHP and</em> - for a short time - actually dropped the PHP name. Now referring to the tools as FI (short for &quot;Forms Interpreter&quot;), the new implementation included some of the basic functionality of PHP as we know it today. It had Perl-like variables, automatic interpretation of form variables, and HTML embedded syntax. The syntax itself was similar to that of Perl, albeit much more limited, simple, and somewhat inconsistent. In fact, to embed the code into an <s>HTML file, developers had to use</s> HTML comments. Though this method was not entirely well-received, FI continued to enjoy growth and acceptance as a CGI tool --- but still not quite as a language. However, this began to change the following month; in October, 1995, Rasmus released a complete rewrite of the code. Bringing back the PHP name, it was now (briefly) named &quot;Personal Home Page Construction Kit,&quot; and was the first release to boast what was, at the time, considered an advanced scripting interface. The language was deliberately designed to resemble C in structure, making it an easy adoption for developers familiar with C, Perl, and similar languages. Having been thus far limited to UNIX and POSIX-compliant systems, the potential for a Windows NT implementation was being explored.</p>\r\n</blockquote>', 'Gallery-040722_050131.png', '#2012e2', 1, '999.00', '2022-07-03 23:31:31', '2022-07-03 23:45:01'),
(8, 'CSS (WebSite)', '<p>In September of that year, Rasmus expanded upon PHP and - for a short time - actually dropped the PHP name. Now referring to the tools as FI (short for &quot;Forms Interpreter&quot;), the new implementation included some of the basic functionality of PHP as we know it today. It had Perl-like variables, automatic interpretation of form variables, and HTML embedded syntax. The syntax itself was similar to that of Perl, albeit much more limited, simple, and somewhat inconsistent. In fact, to embed the code into an HTML file, developers had to use HTML comments. Though this method was not entirely well-received, FI continued to enjoy growth and acceptance as a CGI tool --- but still not quite as a language. However, this began to change the following month; in October, 1995, Rasmus released a complete&nbsp;</p>', 'Gallery-040722_050602.png', '#f50505', 1, '399.00', '2022-07-03 23:36:02', '2022-07-03 23:36:02'),
(9, 'JAVASCRIPT', '<p>September of that year, Rasmus expanded upon PHP and - for a short time - actually dropped the PHP name. Now referring to the tools as FI (short for &quot;Forms Interpreter&quot;), the new implementation included some of the basic functionality of PHP as we know it today. It had Perl-like variables, automatic interpretation of form variables, and HTML embedded syntax. The syntax itself was similar to that of Perl, albeit much more limited, simple, and somewhat inconsistent. In fact, to embed the</p>', 'Gallery-040722_051552.png', '#b806f9', 1, '399.00', '2022-07-03 23:45:52', '2022-07-03 23:45:52'),
(10, 'JQUERY', '<p>September of that year, Rasmus expanded upon PHP and - for a short time - actually dropped the PHP name. Now referring to the tools as FI (short for &quot;Forms Interpreter&quot;), the new implementation included some of the basic functionality of PHP as we know it today. It had Perl-like variables, automatic interpretation of form variables, and HTML embedded syntax. The syntax itself was similar to that of Perl, albeit much more limited, simple, and somewhat inconsistent. In fact, to embed the</p>', 'Gallery-040722_051619.png', '#f54105', 1, '299.00', '2022-07-03 23:46:20', '2022-07-03 23:46:20'),
(11, 'MYSQL', '<p>September of that year, Rasmus expanded upon PHP and - for a short time - actually dropped the PHP name. Now referring to the tools as FI (short for &quot;Forms Interpreter&quot;), the new implementation included some of the basic functionality of PHP as we know it today. It had Perl-like variables, automatic interpretation of form variables, and HTML embedded syntax. The syntax itself was similar to that of Perl, albeit much more limited, simple, and somewhat inconsistent. In fact, to embed the</p>', 'Gallery-040722_051647.png', '#fcd303', 1, '499.00', '2022-07-03 23:46:47', '2022-07-03 23:46:47'),
(12, 'BOOTSTRAP', '<p>September of that year, Rasmus expanded upon PHP and - for a short time - actually dropped the PHP name. Now referring to the tools as FI (short for &quot;Forms Interpreter&quot;), the new implementation included some of the basic functionality of PHP as we know it today. It had Perl-like variables, automatic interpretation of form variables, and HTML embedded syntax. The syntax itself was similar to that of Perl, albeit much more limited, simple, and somewhat inconsistent. In fact, to embed the</p>', 'Gallery-040722_051723.png', '#b4f207', 1, '599.00', '2022-07-03 23:47:23', '2022-07-03 23:47:23'),
(13, 'NODE.JS', '<p>September of that year, Rasmus expanded upon PHP and - for a short time - actually dropped the PHP name. Now referring to the tools as FI (short for &quot;Forms Interpreter&quot;), the new implementation included some of the basic functionality of PHP as we know it today. It had Perl-like variables, automatic interpretation of form variables, and HTML embedded syntax. The syntax itself was similar to that of Perl, albeit much more limited, simple, and somewhat inconsistent. In fact, to embed the</p>', 'Gallery-040722_051816.png', '#05f020', 1, '799.00', '2022-07-03 23:48:16', '2022-07-03 23:48:16'),
(14, 'EXPRESS.JS', '<h2><strong>September of that year, Rasmus expanded upon PHP and - for a short time - actually dropped the PHP name. Now referring to the tools as FI (short for &quot;Forms Interpreter&quot;), the new implementation included some of the basic functionality of PHP as we know it today. It had Perl-like variables, automatic interpretation of form variables, and HTML embedded syntax. The syntax itself was similar to that of Perl, albeit much more limited, simple, and somewhat inconsistent. In fact, to embed the</strong></h2>', 'Gallery-040722_051846.png', '#03dffc', 1, '199.00', '2022-07-03 23:48:46', '2022-07-03 23:59:38'),
(15, 'SSC', '<p>This Is A Scc Course</p>', 'Gallery-040722_052606.png', '#0956f1', 1, '799.00', '2022-07-03 23:56:06', '2022-07-03 23:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enquiry` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('M','F') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `contact`, `enquiry`, `gender`, `adress`, `country_id`, `state_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Sumit Saran', 'sureshsaran97@gmail.com', '7073513966', 'Php Course', NULL, 'gali no 20 bheem nagar rampura basti bikaner', 1, 1, 2, '2022-07-06 05:55:07', '2022-07-06 05:55:07'),
(2, 'Ravina dhaka', 'sureshsaran97@gmail.com', '7073513966', 'mysql', NULL, 'Raj shree madical collage 2018 banch\r\nGirl hostal 1', 1, 5, 11, '2022-07-06 07:29:55', '2022-07-06 07:29:55'),
(3, 'Sumit Saran', 'sureshsaran97@gmail.com', '7073513966', 'Php', 'F', 'gali no 20 bheem nagar rampura basti bikaner', 1, 1, 13, '2022-07-06 20:45:51', '2022-07-06 20:45:51'),
(4, 'Suvita', 'sureshsaran97@gmail.com', '7665380172', 'Java Course Purches Enquiry', 'M', 'Raj shree madical collage 2018 banch\r\nGirl hostal 1', 2, 6, 6, '2022-07-06 20:52:53', '2022-07-06 20:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1: active , 0: Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_name`, `image_title`, `image_status`, `created_at`, `updated_at`) VALUES
(1, 'gallery-030722_023535.jpg', 'Sandeep', 1, '2022-07-01 10:27:16', '2022-07-02 21:05:35'),
(2, 'gallery-010722_040147.jpg', 'Elephant', 1, '2022-07-01 10:31:47', '2022-07-01 10:31:47'),
(3, 'gallery-010722_042506.jpg', 'Jiya', 1, '2022-07-01 10:55:06', '2022-07-01 10:55:06'),
(4, 'gallery-010722_045245.jpg', 'Surendra', 0, '2022-07-01 11:22:45', '2022-07-02 21:03:06'),
(6, 'gallery-020722_033836.jpg', 'AjitPal Ji', 1, '2022-07-01 11:23:15', '2022-07-02 22:51:01'),
(7, 'gallery-010722_062404.jpg', 'Ravina Dhaka', 0, '2022-07-01 12:54:04', '2022-07-02 00:45:00'),
(9, 'gallery-020722_062533.jpg', 'Manoj', 1, '2022-07-02 00:55:33', '2022-07-02 00:55:33'),
(11, 'gallery-030722_042401.jpg', 'Suvita', 1, '2022-07-02 22:35:21', '2022-07-02 23:48:04'),
(12, 'gallery-030722_040626.jpg', 'Bidami Devi Dhaka', 1, '2022-07-02 22:36:26', '2022-07-02 22:36:26'),
(13, 'gallery-030722_051934.jpg', 'Mamta', 1, '2022-07-02 23:49:34', '2022-12-15 09:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2022_06_30_110554_create_gallery_table', 1),
(24, '2022_06_30_113157_create_about_table', 1),
(25, '2022_06_30_113229_create_contact_table', 1),
(26, '2022_06_30_113303_create_news_table', 1),
(27, '2022_07_01_032325_create_course_table', 1),
(28, '2022_07_01_032443_create_countries_table', 2),
(29, '2022_07_01_114432_create_enquiry_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_date` date NOT NULL,
  `news_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1:Active , 0: Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `expire_date`, `news_status`, `created_at`, `updated_at`) VALUES
(2, 'Hye How Are', '<p>Fine And Yoy</p>', '2022-07-06', 1, '2022-07-03 01:05:07', '2022-07-03 06:04:18'),
(4, 'Bidami Devi', '<p>Hye Biadmi Dhaka</p>', '2022-07-05', 0, '2022-07-03 01:12:50', '2022-07-03 06:04:02'),
(5, 'Addmission Open', '<p><strong>How Are You</strong></p>', '2022-07-09', 1, '2022-07-03 08:00:51', '2022-07-03 08:00:51'),
(6, 'Laravel includes a variety of global', '<p>Laravel includes a variety of global &quot;helper&quot; PHP functions. Many of these functions are used by the framework itself; however, you are free to use them in your own applications if you find them convenient.</p>', '2022-07-10', 1, '2022-07-03 08:49:07', '2022-07-03 08:49:07'),
(7, 'Laravel 5 was released in February 2015', '<p>Laravel&nbsp;5 was released in February 2015</p>', '2022-07-10', 1, '2022-07-03 08:51:53', '2022-07-03 08:51:53'),
(8, 'Taylor Otwell created Laravel as an attempt', '<p>Taylor Otwell created Laravel as an attempt to <strong>provide</strong> a more advanced alternative to the&nbsp;<a href=\"https://en.wikipedia.org/wiki/CodeIgniter\">CodeIgniter</a>&nbsp;framework, which did not provide certain features such as built-in support for user&nbsp;<s><a href=\"https://en.wikipedia.org/wiki/Authentication\">authentication</a></s>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Authorization\">authorization</a>. Laravel&#39;s first&nbsp;<a href=\"https://en.wikipedia.org/wiki/Beta_release\">beta release</a>&nbsp;was made available on June 9, 2011, followed by the Laravel&nbsp;1 release later in the same month. Laravel&nbsp;1 included built-in support for authentication,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Language_localisation\">localisation</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Model_(MVC)\">models</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/View_(MVC)\">views</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Session_(computer_science)\">sessions</a>, <big>routing and other mechanisms</big>, but lacked support for&nbsp;<a href=\"https://en.wikipedia.org/wiki/Controller_(MVC)\">controllers</a>&nbsp;that prevented it from being a true&nbsp;<a href=\"https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller\">MVC</a>&nbsp;framework.<a href=\"https://en.wikipedia.org/wiki/Laravel#cite_note-maxoffsky-1\">[1]</a></p>\r\n\r\n<p>Laravel&nbsp;2 was released in September 2011, bringing various improvements from the author and community. Major new features included the support for controllers, which made Laravel&nbsp;2 a fully MVC-compliant framework, built-in support for the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Inversion_of_control\">inversion of control</a>&nbsp;(IoC) principle, and a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Web_template_system\">templating system</a>&nbsp;called&nbsp;<em>Blade</em>. As a downside, support for third-party&nbsp;<a href=\"https://en.wikipedia.org/wiki/Software_component\">packages</a>&nbsp;was removed in Laravel&nbsp;2.<a href=\"https://en.wikipedia.org/wiki/Laravel#cite_note-maxoffsky-1\">[1]</a></p>\r\n\r\n<p>Laravel&nbsp;3 was released in February 2012 with a set of new features including the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Cmd.exe\">cmd</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Command-line_interface\">command-line interface</a>&nbsp;(CLI) named&nbsp;<em>Artisan</em>, built-in support for more&nbsp;<a href=\"https://en.wikipedia.org/wiki/Database_management_system\">database management systems</a>, database migrations as a form of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Version_control\">version control</a>&nbsp;for database layouts, support for handling&nbsp;<a href=\"https://en.wikipedia.org/wiki/Event_(computing)\">events</a>, and a packaging system called&nbsp;<em>Bundles</em>. An increase of Laravel&#39;s userbase and popularity lined up with the release of Laravel&nbsp;3.<a href=\"https://en.wikipedia.org/wiki/Laravel#cite_note-maxoffsky-1\">[1]</a></p>\r\n\r\n<p>Laravel&nbsp;4, codenamed&nbsp;<em>Illuminate</em>, was released in May 2013. It was made as a complete rewrite of the Laravel framework, migrating its layout into a set of separate packages distributed through&nbsp;<a href=\"https://en.wikipedia.org/wiki/Composer_(software)\">Composer</a>, which serves as an&nbsp;<a href=\"https://en.wikipedia.org/wiki/Application-level_package_manager\">application-level package manager</a>. Such a layout improved the extensibility of Laravel&nbsp;4, which was paired with its official regular release schedule spanning six months between minor&nbsp;<a href=\"https://en.wikipedia.org/wiki/Point_release\">point releases</a>. Other new features in the Laravel&nbsp;4 release include&nbsp;<a href=\"https://en.wikipedia.org/wiki/Database_seeding\">database seeding</a>&nbsp;for the initial population of databases, support for&nbsp;<a href=\"https://en.wikipedia.org/wiki/Message_queue\">message queues</a>, built-in support for sending different types of email, and support for delayed deletion of database records called&nbsp;<em>soft deletion</em></p>', '2022-07-09', 1, '2022-07-03 08:52:32', '2022-07-03 08:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `state_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1: Active , 0: Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`, `country_id`, `state_status`, `created_at`, `updated_at`) VALUES
(1, 'Rajasthan', 1, 1, '2022-07-05 07:08:12', '2022-07-07 10:10:39'),
(3, 'Hoolywood', 2, 1, '2022-07-05 07:20:48', '2022-07-07 06:44:17'),
(5, 'Bihar', 1, 0, '2022-07-05 10:51:55', '2022-07-07 06:44:13'),
(6, 'LosAngles', 2, 1, '2022-07-05 21:23:20', '2022-07-07 10:46:23'),
(7, 'Tanjaniya', 4, 1, '2022-07-05 21:23:39', '2022-07-07 06:44:20'),
(9, 'MP', 1, 1, '2022-07-06 22:26:17', '2022-07-07 09:50:07'),
(10, 'Abu Dabi', 12, 1, '2022-07-07 08:55:14', '2022-07-07 09:50:05'),
(11, 'Delhi', 1, 1, '2022-07-08 22:41:04', '2022-07-08 22:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sumit', 'sureshsaran97@gmail.com', NULL, '123', NULL, '2022-07-08 05:41:58', '2022-07-08 05:41:58'),
(3, 'jiya', 'rvnadhaka@gmail.com', NULL, '123', NULL, '2022-07-08 02:00:26', '2022-07-08 02:00:26'),
(4, 'suvita', 'suvita@gmail.com', NULL, '123', NULL, '2022-07-08 22:35:34', '2022-07-09 09:04:37'),
(5, 'admin', 'admin@gmail.com', NULL, 'admin', NULL, '2022-07-08 23:34:55', '2022-07-08 23:34:55'),
(6, 'Sumit Saran', 'sumitsaran800@gmail.com', NULL, NULL, NULL, '2022-07-14 07:22:34', '2022-07-14 07:22:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enquiry_country_id_foreign` (`country_id`),
  ADD KEY `enquiry_state_id_foreign` (`state_id`),
  ADD KEY `enquiry_course_id_foreign` (`course_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD CONSTRAINT `enquiry_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `enquiry_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `enquiry_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
