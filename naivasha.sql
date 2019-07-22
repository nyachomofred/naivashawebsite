-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 03:31 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naivasha`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutslider`
--

CREATE TABLE `aboutslider` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutslider`
--

INSERT INTO `aboutslider` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'slider1.jpg', NULL, NULL),
(2, 'slider2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transparency` longtext COLLATE utf8mb4_unicode_ci,
  `obedience` longtext COLLATE utf8mb4_unicode_ci,
  `accuracy` longtext COLLATE utf8mb4_unicode_ci,
  `fairness` longtext COLLATE utf8mb4_unicode_ci,
  `ability` longtext COLLATE utf8mb4_unicode_ci,
  `patriotism` longtext COLLATE utf8mb4_unicode_ci,
  `togetherness` longtext COLLATE utf8mb4_unicode_ci,
  `courtesy` longtext COLLATE utf8mb4_unicode_ci,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discipline` longtext COLLATE utf8mb4_unicode_ci,
  `disp_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tradition` longtext COLLATE utf8mb4_unicode_ci,
  `tradition_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `name`, `transparency`, `obedience`, `accuracy`, `fairness`, `ability`, `patriotism`, `togetherness`, `courtesy`, `bg_image`, `discipline`, `disp_image`, `tradition`, `tradition_image`, `created_at`, `updated_at`) VALUES
(1, 'Discipline', 'To conduct ourselves in an honest, accountable and transparent manner consistently.', 'To be obedient to the rules of the school and the laws of the land', 'To do the right thing at the right time in the right place and in the right way.', 'To be fair in all our undertakings within and without our school community', 'To work to the best of our ability at all times', 'Too demonstrate loyalty and patriotism to the school and the nation', 'To work together to realize the best in each one of us', 'To exercise courtesy at all times.', 'DJI_005809.jpg', '<p>Naivasha Girls is one of the most disciplined schools in the country. We have not experienced any student unrest for many years, the reason being that those that join the school are high achievers. <br /><br />A lot of counselling is done both internally and also by counsellors from without. Students have an open forum to air their views regarding the running of the school. <br /><br />The teachers and non teaching staff are also role models. All work in co-operation with the Administration and hence things run very smoothly. Special thanks goes to the parents for moulding their children well.</p>', 'planting.jpg', '<p>When form ones join the school, they are welcomed by the form twos. Each for one is attached to a form two who becomes her mother. They help in orienting the form ones to the school and teaching the form ones the traditions of the school. This helps form ones settle quickly. They also learn to respect their seniors. <br /><br />The school routine starts at 5.00 a.m. It ends at 9.30 p.m. The school does not &lsquo;police&rsquo; the students but puts much emphasis on the importance of good performance in school. It is with all what has been discussed that the school has had a very steady progress in all fields. <br /><br />Long live our beloved school, long live Naivasha Girls!</p>', 'IMG_7526.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academics`
--

INSERT INTO `academics` (`id`, `name`, `bg_image`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'academics', 'Physicss.jpg', '<p>Naivasha Girls follows the 8-4-4 system of education with the curriculum provided by the Kenya Institute of Curriculum Development under the Ministry of Education. <br /><br /> The subjects offered in the school are as follows: </p>', 'Curriculum-Academic.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `anthem`
--

CREATE TABLE `anthem` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verse1` longtext COLLATE utf8mb4_unicode_ci,
  `verse2` longtext COLLATE utf8mb4_unicode_ci,
  `verse3` longtext COLLATE utf8mb4_unicode_ci,
  `chorus` longtext COLLATE utf8mb4_unicode_ci,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anthem`
--

INSERT INTO `anthem` (`id`, `name`, `verse1`, `verse2`, `verse3`, `chorus`, `bg_image`, `image1`, `created_at`, `updated_at`) VALUES
(1, 'anthem', '<p>Naivasha Girls my school<br />Bountiful fountain of blessing<br />Mother away from home<br />Ever loving and helpful</p>', '<p>Roaring youthful tiger<br />Up higher blazing banner<br />Shining a flaming star<br />Striding ahead all confident</p>', '<p>Wholly leaning and trusting<br />God almighty strengthening<br />To excellence endeavor<br />Serving a nation with fervour</p>', '<p>In my future destination<br />You are my solid foundation<br />Long live my beloved school<br />God bless my beloved school</p>', '1.jpg', '4.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `basics`
--

CREATE TABLE `basics` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtarget` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basics`
--

INSERT INTO `basics` (`id`, `key`, `name`, `type`, `key1`, `subtarget`, `data`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Home', 'menu', NULL, NULL, '/', NULL, '2019-06-24 09:25:30'),
(2, 'discipline', 'Discipline', 'menu', NULL, NULL, 'discipline', NULL, NULL),
(3, 'school-anthem', 'School Anthem', 'menu', NULL, NULL, 'school-anthem', NULL, NULL),
(4, 'academics', 'Academics', 'menu', NULL, NULL, 'academics', NULL, NULL),
(5, 'departments', 'Departments', 'menu', '1', NULL, '#', NULL, NULL),
(6, 'sciences', 'Sciences', 'sub', NULL, 'departments', 'sciences', NULL, NULL),
(7, 'mathematics', 'Mathematics', 'sub', NULL, 'departments', '#', NULL, NULL),
(8, 'postal', 'postal', NULL, NULL, NULL, 'P O Box 155-20117', NULL, '2019-06-24 07:56:59'),
(9, 'fav-icon', 'fav-icon', NULL, NULL, NULL, 'NaivashaLogo.png', NULL, NULL),
(10, 'phone', 'phone', NULL, NULL, NULL, '0729089216', NULL, '2019-01-20 07:53:06'),
(11, 'email', 'email', NULL, NULL, NULL, 'info@naivashagirls.sc.ke', NULL, '2019-01-20 07:53:11'),
(12, 'facebook', 'facebook', NULL, NULL, NULL, '#', NULL, '2019-06-24 08:00:41'),
(13, 'twitter', 'twitter', NULL, NULL, NULL, '#', NULL, '2019-01-20 07:54:06'),
(14, 'instagram', 'instagram', NULL, NULL, NULL, '#', NULL, '2019-01-20 07:54:14'),
(15, 'you-tube', 'you-tube', NULL, NULL, NULL, '#', NULL, '2019-01-20 07:54:23'),
(16, 'logo', 'logo', NULL, NULL, NULL, 'NaivashaLogo.png', NULL, NULL),
(17, 'footer', 'footer', NULL, NULL, NULL, 'Copyright 2019 All rights reserved.', NULL, NULL),
(18, 'technical-and-applied', 'Technical and applied', 'sub', NULL, 'departments', '#', NULL, NULL),
(19, 'humanities', 'Humanities', 'sub', NULL, 'departments', '#', NULL, NULL),
(20, 'english', 'English', 'sub', NULL, 'departments', '#', NULL, NULL),
(21, 'kiswahili', 'Kiswahili', 'sub', NULL, 'departments', '#', NULL, NULL),
(22, 'examinations', 'Examinations', 'sub', NULL, 'departments', '#', NULL, NULL),
(23, 'guidance', 'Guidance and counselling', 'sub', NULL, 'departments', '#', NULL, NULL),
(24, 'history', 'History', 'menu', NULL, NULL, 'history', NULL, NULL),
(25, 'events', 'Events', 'menu', NULL, NULL, 'events', NULL, NULL),
(26, 'cocurriculor', 'Co-curriculum activities', 'sub', NULL, 'departments', 'cocurriculor', NULL, NULL),
(27, 'contact', 'Contact Us', 'menu', NULL, NULL, 'contact', NULL, NULL),
(29, 'location', 'location', NULL, NULL, NULL, '00100 Naivasha', NULL, NULL),
(30, 'footer-image', 'Footer Image', NULL, NULL, NULL, 'Naivasha-Girls.fw_.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `boarding`
--

CREATE TABLE `boarding` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boarding`
--

INSERT INTO `boarding` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Boarding', '<div class=\"col-md-12\">	\r\n<h3 style=\"text-align: center;\">Boarding Department</h3>\r\n<p>Loreto Limuru opened its doors in 1936 with seven girls. With time, it has grown from a one stream school to six streams in form one and five streams in forms two, three and four. The school is shy of 1200 students who are housed in ten dormitories. Among the dormitories, there still stand two of them that reminds us of 1936; Haiti, and Rusinga. Each dormitory has a dorm mistress to oversee the welfare of the students.</p>\r\n<p>Being a national school, we receive students from all over the country and the boarding team ensures that the girls live in harmony and cohesion. The dormitories were named after famous islands. Plans are underway to name them after its founders. We thank the entire Loreto Limuru parents&rsquo; body for providing their daughters with personal effects so as to make their stay in school comfortable.<br /> God bless Loreto Limuru.<br /><br /> The dorm mistresses incharge of each dormitory are:</p>\r\n<div class=\"col-md-12\">\r\n<table class=\"table\">\r\n <thead class=\"thead-light\">\r\n <tr>\r\n <th scope=\"col\">Dorm Mistress</th>\r\n <th scope=\"col\">Dormitory</th>\r\n </tr>\r\n </thead>	\r\n<tbody>\r\n<tr>\r\n<td scope=\"row\">1. Gladys Njeri</td>\r\n<td scope=\"row\">HOD boarding department</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">2. Damary Kataka</td>\r\n<td scope=\"row\">Bahamas dorm mistress</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">3. Dorcas Kaniu</td>\r\n<td scope=\"row\">New hawaii dorm mistress</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">4. Rosemary Kuru</td>\r\n<td scope=\"row\">Haiti dorm mistress</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">5. Sr. Maria Nyamusi</td>\r\n<td scope=\"row\">Tazmania dorm mistress</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">6. Lillian Ng&rsquo;ang&rsquo;a</td>\r\n<td scope=\"row\">New hawaii dorm mistress</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">7. Fancy Cherono</td>\r\n<td scope=\"row\">New hawaii dorm mistress</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">8. Judy Monari</td>\r\n<td scope=\"row\">Haiti dorm mistress</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">9. Margaret Riika</td>\r\n<td scope=\"row\">Rusinga dorm mistress</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">10. Christine Mbogo</td>\r\n<td scope=\"row\">Mauritius dorm mistress</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">11. Nelisa Mbogo</td>\r\n<td scope=\"row\">Tazmania dorm mistress</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">12. Rose Kang&rsquo;ethe</td>\r\n<td scope=\"row\">Mauritius dorm mistress</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">13. Dinah Wanjala</td>\r\n<td scope=\"row\">Tazmania dorm mistress</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">14. Rahab Taitho</td>\r\n<td scope=\"row\">Migingo/ Taiwan dorm mistress</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<p><br /> The following are the dorm captains who oversee the activities in the dorms;</p>\r\n<div class=\"col-md-12\">\r\n<table class=\"table\">\r\n <thead class=\"thead-light\">\r\n <tr>\r\n <th scope=\"col\">Dormitory</th>\r\n <th scope=\"col\">Dorm Captain</th>\r\n <th scope=\"col\">Name</th>\r\n\r\n </tr>\r\n </thead>\r\n<tbody>\r\n<tr>\r\n<td scope=\"row\">1. Bahamas</td>\r\n<td scope=\"row\">Diana Ofwona</td>\r\n<td scope=\"row\">3P</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">2. Tazmania</td>\r\n<td scope=\"row\">Deborah Jepleting</td>\r\n<td scope=\"row\">3P</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">3. Tazmania</td>\r\n<td scope=\"row\">Elsie Kemunto</td>\r\n<td scope=\"row\">3R</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">4. Tazmania</td>\r\n<td scope=\"row\">Maggie Atieno</td>\r\n<td scope=\"row\">3R</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">5. Tazmania</td>\r\n<td scope=\"row\">Joan Silole</td>\r\n<td scope=\"row\">3b</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">6. Bermudas/Tsavo HSE captain</td>\r\n<td scope=\"row\">Precious Mukiri</td>\r\n<td scope=\"row\">2A</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">7. Bermudas/Amboseli HSE captain</td>\r\n<td scope=\"row\">Nelly Nyauntu</td>\r\n<td scope=\"row\">2R</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">8. Mauritius/Kora HSE captain</td>\r\n<td scope=\"row\">Angela Murwani</td>\r\n<td scope=\"row\">2B</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">9. Mauritius/Aberdare HSE captain</td>\r\n<td scope=\"row\">Abigael Muthoni</td>\r\n<td scope=\"row\">2B</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">10. Bahamas/Samburu HSE captain</td>\r\n<td scope=\"row\">Wishgranted Amadi</td>\r\n<td scope=\"row\">2P</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">11. New hawaii/Mara HSE captai</td>\r\n<td scope=\"row\">Joan Mwaura</td>\r\n<td scope=\"row\">2A</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">12. New hawaii</td>\r\n<td scope=\"row\">Stephanie Wanja</td>\r\n<td scope=\"row\">1B</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">13. New hawaii</td>\r\n<td scope=\"row\">Kimberly Birir</td>\r\n<td scope=\"row\">1M</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">14. New hawaii</td>\r\n<td scope=\"row\">Rebecca Achieng</td>\r\n<td scope=\"row\">1N</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">15. Haiti main/Extension</td>\r\n<td scope=\"row\">Keaton Gift</td>\r\n<td scope=\"row\">1N</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">16. Rusinga</td>\r\n<td scope=\"row\">Wanjiku Wamai</td>\r\n<td scope=\"row\">1A</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">17. seychelles</td>\r\n<td scope=\"row\">Shally Moraa</td>\r\n<td scope=\"row\">1A</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">18. Taiwan</td>\r\n<td scope=\"row\">Natalia Auma</td>\r\n<td scope=\"row\">1N</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `boardingslider`
--

CREATE TABLE `boardingslider` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boardingslider`
--

INSERT INTO `boardingslider` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'slider2.jpg', NULL, NULL),
(2, 'slider1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'sectionA', '2019-06-24 21:00:00', '2019-06-24 21:00:00'),
(2, 'sectionB', '2019-06-24 21:00:00', '2019-06-24 21:00:00'),
(3, 'sectionC', '2019-06-24 21:00:00', '2019-06-24 21:00:00'),
(4, 'sectionD', '2019-06-24 21:00:00', '2019-06-24 21:00:00'),
(5, 'societies', '2019-06-24 21:00:00', '2019-06-24 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `clubsslider`
--

CREATE TABLE `clubsslider` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clubsslider`
--

INSERT INTO `clubsslider` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'slider10.jpg', NULL, NULL),
(2, 'slider11.jpg', NULL, NULL),
(3, 'slider12.jpg', NULL, NULL),
(4, 'slider13.jpg', NULL, NULL),
(5, 'slider14.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cocurriculor`
--

CREATE TABLE `cocurriculor` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_desc` longtext COLLATE utf8mb4_unicode_ci,
  `more_about_dep` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cocurriculor`
--

INSERT INTO `cocurriculor` (`id`, `name`, `bg_image`, `brief_desc`, `more_about_dep`, `created_at`, `updated_at`) VALUES
(1, 'cocurriculor', 'Physicss.jpg', '<h5>The school offers a wide range of co-curriculum activities e.g.</h5>', '<h5>Ball games &ndash; Basketball, handball, hockey, volleyball, football and netball.</h5>\r\n<h5>Athletics &ndash; We participate in all races- short races, 100M, 400M&ndash; High jump, long jump, javelin and Shot Putt</h5>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'contact', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `english`
--

CREATE TABLE `english` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hod_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_desc` longtext COLLATE utf8mb4_unicode_ci,
  `more_about_dep` longtext COLLATE utf8mb4_unicode_ci,
  `hod_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `english`
--

INSERT INTO `english` (`id`, `name`, `bg_image`, `hod_name`, `brief_desc`, `more_about_dep`, `hod_pic`, `created_at`, `updated_at`) VALUES
(1, 'english', 'Sciences.jpg', 'HOD: Mrs Jacinta Migwi', '<p>The department takes care of three subjects namely; Chemistry, Biology and Physics. For Kenya to realize her vision 2030, the learners must perform very well in the kiswahilis. Currently, there are fourteen (14) qualified kiswahili teachers. <br /><br />Our school is a STEM school and also a SMASE center which is as a result of our very good performance in the kiswahili subjects. We have four well-equipped kiswahili laboratories and therefore our girls do a lot of hands-on activities.</p>', '<p>The teachers apply ASEI/PDSI together with IBL/PBL which help the learners develop a positive attitude towards the subjects. Teachers are using ICT in teaching and learning. This has helped in enhancing learners&rsquo; interest.</p>\r\n<p>We have been participating in KSEF and our girls, with proper guidance by the teachers, go up to the National level. The department organizes an annual kiswahili contest in May which enables the learners and teachers from different schools to meet and exchange ideas.</p>\r\n<p>The girls have been doing very in kiswahilis in KCSE and this has resulted to most of them being offered kiswahili-related courses such as Engineering and Medicine in our Public Universities.</p>\r\n<p>The members of the department work as a team and with God, we shall move to greater heights. We appreciate our principal, Ms Mundia, for supporting the department&rsquo;s academic programs. God bless us, God bless Naivasha Girls.</p>', 'HodScience.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `content`, `bg_image`, `created_at`, `updated_at`) VALUES
(1, 'Events', NULL, 'DJI_005809.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eventsimages`
--

CREATE TABLE `eventsimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eventsslider`
--

CREATE TABLE `eventsslider` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eventsslider`
--

INSERT INTO `eventsslider` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'slider32.jpg', NULL, NULL),
(2, 'slider33.jpg', NULL, NULL),
(3, 'slider34.jpg', NULL, NULL),
(4, 'slider35.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `examinations`
--

CREATE TABLE `examinations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hod_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_desc` longtext COLLATE utf8mb4_unicode_ci,
  `more_about_dep` longtext COLLATE utf8mb4_unicode_ci,
  `hod_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examinations`
--

INSERT INTO `examinations` (`id`, `name`, `bg_image`, `hod_name`, `brief_desc`, `more_about_dep`, `hod_pic`, `created_at`, `updated_at`) VALUES
(1, 'examinations', 'Sciences.jpg', 'HOD: Mrs Jacinta Migwi', '<p>The department takes care of three subjects namely; Chemistry, Biology and Physics. For Kenya to realize her vision 2030, the learners must perform very well in the examinationss. Currently, there are fourteen (14) qualified examinations teachers. <br /><br />Our school is a STEM school and also a SMASE center which is as a result of our very good performance in the examinations subjects. We have four well-equipped examinations laboratories and therefore our girls do a lot of hands-on activities.</p>', '<p>The teachers apply ASEI/PDSI together with IBL/PBL which help the learners develop a positive attitude towards the subjects. Teachers are using ICT in teaching and learning. This has helped in enhancing learners&rsquo; interest.</p>\r\n<p>We have been participating in KSEF and our girls, with proper guidance by the teachers, go up to the National level. The department organizes an annual examinations contest in May which enables the learners and teachers from different schools to meet and exchange ideas.</p>\r\n<p>The girls have been doing very in examinationss in KCSE and this has resulted to most of them being offered examinations-related courses such as Engineering and Medicine in our Public Universities.</p>\r\n<p>The members of the department work as a team and with God, we shall move to greater heights. We appreciate our principal, Ms Mundia, for supporting the department&rsquo;s academic programs. God bless us, God bless Naivasha Girls.</p>', 'HodScience.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galary`
--

CREATE TABLE `galary` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galary`
--

INSERT INTO `galary` (`id`, `name`, `bg_image`, `created_at`, `updated_at`) VALUES
(1, 'galary', 'DJI_005809.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Games', '<div class=\"col-md-12\">	\r\n<h3 style=\"text-align: center;\">Games Department</h3>\r\n<p>This department is one of the most vibrant and successful among others. It&rsquo;s the department that takes care of the physical health of the girls all the year round. The head of the department is Mr. Thandi, who is also the patron Young farmers club. He has a wide knowledge in all the common ball games, racket games, swimming and athletics. He involved in actual teaching, training and also coaching. The department is a host of several teachers who teaches other subjects but they also offer their valued, expertise in various disciplines that have excelled well. The school offers many games and sports to the girls. They include;</p>\r\n<div class=\"col-md-12\">\r\n<table class=\"table\">\r\n <thead class=\"thead-light\">\r\n <tr>\r\n <th scope=\"col\">Sport</th>\r\n <th scope=\"col\">Patron(s)</th>\r\n </tr>\r\n </thead>\r\n<tbody>\r\n<tr>\r\n<td scope=\"row\">1. Basketball</td>\r\n<td scope=\"row\">Mr. Francis Sori, Mr. S. Muniu, Mrs. C. Mbogo</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">2. Hockey</td>\r\n<td scope=\"row\">Mr. N. Ambege</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">3. Football</td>\r\n<td scope=\"row\">Mr. R. Tinega, Mr. M. Ng&rsquo;aru</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">4. Handball</td>\r\n<td scope=\"row\">Ms. Nelisa</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">5. Volleyball</td>\r\n<td scope=\"row\">Ms. R. Taitho</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">6. Netball</td>\r\n<td scope=\"row\">Ms. C. Taitho</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">7. Athletics</td>\r\n<td scope=\"row\">Mr. L. Thandi</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">8. Table Tennis</td>\r\n<td scope=\"row\">Mr. L. Thandi</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">9. Badminton</td>\r\n<td scope=\"row\">Mr. L. Thandi</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">10. Lawn tennis</td>\r\n<td scope=\"row\">Mr. L. Thandi, Mr. F. Sori</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<br />\r\n<h5>Performance</h5>\r\n<p>The department has registered very good results for the last five years. The school has seen many teams that compete at National level and even at the East Africa secondary schools championships. <br />God bless Loreto Limuru.</p>\r\n</div>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gamesslider`
--

CREATE TABLE `gamesslider` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gamesslider`
--

INSERT INTO `gamesslider` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'slider2.jpg', NULL, NULL),
(2, 'slider1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `garlaryimages`
--

CREATE TABLE `garlaryimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `garlaryimages`
--

INSERT INTO `garlaryimages` (`id`, `image`, `text`, `created_at`, `updated_at`) VALUES
(1, 'img_7477.jpg', 'Physics class', '2019-06-23 21:00:00', NULL),
(2, 'dji_005809.jpg', 'School', '2019-06-23 21:00:00', NULL),
(3, 'img_7528.jpg', 'Home science', '2019-06-23 21:00:00', NULL),
(4, 'img_7690.jpg', 'Physics Ptacticals', '2019-06-02 21:00:00', NULL),
(5, 'img_7706.jpg', 'Stem Club', '2019-06-03 21:00:00', NULL),
(6, 'img_7491.jpg', 'Group Challange', '2019-06-07 21:00:00', NULL),
(7, 'img_7519.jpg', 'Home science', '2019-06-18 21:00:00', NULL),
(8, 'img_7589.jpg', 'Image', '2019-06-01 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guidance`
--

CREATE TABLE `guidance` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hod_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_desc` longtext COLLATE utf8mb4_unicode_ci,
  `more_about_dep` longtext COLLATE utf8mb4_unicode_ci,
  `hod_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guidance`
--

INSERT INTO `guidance` (`id`, `name`, `bg_image`, `hod_name`, `brief_desc`, `more_about_dep`, `hod_pic`, `created_at`, `updated_at`) VALUES
(1, 'guidance', 'Sciences.jpg', 'HOD: Mrs Jacinta Migwi', '<p>The department takes care of three subjects namely; Chemistry, Biology and Physics. For Kenya to realize her vision 2030, the learners must perform very well in the guidances. Currently, there are fourteen (14) qualified guidance teachers. <br /><br />Our school is a STEM school and also a SMASE center which is as a result of our very good performance in the guidance subjects. We have four well-equipped guidance laboratories and therefore our girls do a lot of hands-on activities.</p>', '<p>The teachers apply ASEI/PDSI together with IBL/PBL which help the learners develop a positive attitude towards the subjects. Teachers are using ICT in teaching and learning. This has helped in enhancing learners&rsquo; interest.</p>\r\n<p>We have been participating in KSEF and our girls, with proper guidance by the teachers, go up to the National level. The department organizes an annual guidance contest in May which enables the learners and teachers from different schools to meet and exchange ideas.</p>\r\n<p>The girls have been doing very in guidances in KCSE and this has resulted to most of them being offered guidance-related courses such as Engineering and Medicine in our Public Universities.</p>\r\n<p>The members of the department work as a team and with God, we shall move to greater heights. We appreciate our principal, Ms Mundia, for supporting the department&rsquo;s academic programs. God bless us, God bless Naivasha Girls.</p>', 'HodScience.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guidanceslider`
--

CREATE TABLE `guidanceslider` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guidanceslider`
--

INSERT INTO `guidanceslider` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'slider8a.jpg', NULL, NULL),
(2, 'slider9.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_text` longtext COLLATE utf8mb4_unicode_ci,
  `brief_intro` longtext COLLATE utf8mb4_unicode_ci,
  `intro_text` longtext COLLATE utf8mb4_unicode_ci,
  `school` longtext COLLATE utf8mb4_unicode_ci,
  `school_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `history_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `history` longtext COLLATE utf8mb4_unicode_ci,
  `performance` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `name`, `bg_image`, `bg_text`, `brief_intro`, `intro_text`, `school`, `school_pic`, `history_pic`, `history`, `performance`, `created_at`, `updated_at`) VALUES
(1, 'history', 'physics.jpg', '<h4>Naivasha girls is a Provincial school.</h4>', '<p>In the interest of ensuring our students are well fit for the industry we have categorized our courses into various levels. This is in order to ensure our students get gradual learning and understanding in software development and engineering. The levers include; Basic, Standard, Advanced, Digital Media and Diploma in Software development</p>', '<h2>Some of the skills we offer are:</h2>', '<p>Naivasha girls is a Provincial school standing on 17.62 Hectares. It is double streamed with 412 students twenty three (26) teachers and twenty two members of the Non teaching staff. The school originally started in 1961 as a primary school for white children only, then known as Hill school. It had classes from standard one to six. In December 1964, the school closed down when the whites left and was re-opened in 1966 as a mixed day single stream secondary school. In 1968, parents saw the need to have boarding facilities and made it a boarding school the same year.</p>', 'history1.png', 'history0.jpg', '<p>In 1975, the school became a single Girls boarding secondary school. The boy students were transferred to Koelel High school in Gilgil swapping with the girls in the same school. Four years later, the school became double streamed and an &lsquo;A&rsquo; level arts class was started. The School has grown over the years. The current population is 1,000 ( 0ne thousand) students. Naivasha Girls has a national outlook because the selection of students who join form one come from all parts of the country. It is one of the best performing schools in Nakuru County.</p>', '<h2 class=\"title\">Our performance.</h2>\r\n<h5 class=\"description\">The school maintained high level of academic performance over the years, with a pass rate of over 90% . Below is a summary of KCSE Results of the last five years:-</h5>\r\n<table class=\"table table-sm\">\r\n<thead class=\"thead-dark\">\r\n<tr>\r\n<th scope=\"col\">Year</th>\r\n<th scope=\"col\">Entry</th>\r\n<th scope=\"col\">A</th>\r\n<th scope=\"col\">A-</th>\r\n<th scope=\"col\">B+</th>\r\n<th scope=\"col\">B</th>\r\n<th scope=\"col\">B-</th>\r\n<th scope=\"col\">C+</th>\r\n<th scope=\"col\">C</th>\r\n<th scope=\"col\">C-</th>\r\n<th scope=\"col\">D+</th>\r\n<th scope=\"col\">D</th>\r\n<th scope=\"col\">D-</th>\r\n<th scope=\"col\">E</th>\r\n<th scope=\"col\">M.S</th>\r\n<th scope=\"col\">M.G</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<th scope=\"row\">2011</th>\r\n<td>108</td>\r\n<td>13</td>\r\n<td>28</td>\r\n<td>21</td>\r\n<td>30</td>\r\n<td>14</td>\r\n<td>8</td>\r\n<td>4</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>9.908</td>\r\n<td>B+</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">2012</th>\r\n<td>106</td>\r\n<td>6</td>\r\n<td>16</td>\r\n<td>27</td>\r\n<td>30</td>\r\n<td>17</td>\r\n<td>7</td>\r\n<td>2</td>\r\n<td>1</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>9.555</td>\r\n<td>B+</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">2013</th>\r\n<td>142</td>\r\n<td>11</td>\r\n<td>25</td>\r\n<td>34</td>\r\n<td>26</td>\r\n<td>29</td>\r\n<td>11</td>\r\n<td>6</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>9.514</td>\r\n<td>B+</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">2014</th>\r\n<td>148</td>\r\n<td>12</td>\r\n<td>37</td>\r\n<td>35</td>\r\n<td>25</td>\r\n<td>13</td>\r\n<td>19</td>\r\n<td>3</td>\r\n<td>3</td>\r\n<td>1</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>9.6</td>\r\n<td>B+</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">2015</th>\r\n<td>188</td>\r\n<td>5</td>\r\n<td>32</td>\r\n<td>51</td>\r\n<td>50</td>\r\n<td>23</td>\r\n<td>17</td>\r\n<td>6</td>\r\n<td>3</td>\r\n<td>1</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>0</td>\r\n<td>9.4</td>\r\n<td>B+</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h5 class=\"description\">Last year, the school produced two students with A plain of 84 points which was among the best in the Country; out of 188 students who sat for the exam, 178 will make it to university, a pass rate of 95%.</h5>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_statement` longtext COLLATE utf8mb4_unicode_ci,
  `motto` longtext COLLATE utf8mb4_unicode_ci,
  `vission` longtext COLLATE utf8mb4_unicode_ci,
  `stem_vision` longtext COLLATE utf8mb4_unicode_ci,
  `bg_text` longtext COLLATE utf8mb4_unicode_ci,
  `school_values` longtext COLLATE utf8mb4_unicode_ci,
  `general_statement` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `name`, `mission_statement`, `motto`, `vission`, `stem_vision`, `bg_text`, `school_values`, `general_statement`, `created_at`, `updated_at`) VALUES
(1, 'home', 'To prepare the girl child for total integration and participation in national and international life through holistic and quality education.', 'Diligence and Discipline for Excellence', 'To make Naivasha Girls a global centre of excellence in girl child education', 'To equip the girl child with innovative skills for sustainable development', 'The school originally started in 1961 as a primary school for white children only, then known as Hill school. It had classes from standard one to six. In December 1964, the school closed down when the whites left and was re-opened in 1966 as a mixed day single stream secondary school. In 1968, parents saw the need to have boarding facilities and made it a boarding school the same year.', '\"We at Naivasha Girls Secondary School Endeavour to function within a set of ethical values and virtues that form the fabric of our core values and operating ethos.\"', 'Naivasha Girls is a Center of Excellence in Girl Child Education', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `homeslider`
--

CREATE TABLE `homeslider` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homeslider`
--

INSERT INTO `homeslider` (`id`, `url`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'Welcome to Naivasha Girls Secondary', NULL, NULL, NULL),
(2, '2.jpg', 'Naivasha Girls is a Center of Excellence in Girl Child Education', NULL, NULL, NULL),
(3, '3.jpg', 'Our Mission', 'To prepare the girl child for total integration and participation in national life through wholesome and quality education.', NULL, NULL),
(4, '4.jpg', 'Quote', 'When girls are educated, their countries become stronger and more properous.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `humanities`
--

CREATE TABLE `humanities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hod_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_desc` longtext COLLATE utf8mb4_unicode_ci,
  `more_about_dep` longtext COLLATE utf8mb4_unicode_ci,
  `hod_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `humanities`
--

INSERT INTO `humanities` (`id`, `name`, `bg_image`, `hod_name`, `brief_desc`, `more_about_dep`, `hod_pic`, `created_at`, `updated_at`) VALUES
(1, 'humanities', 'Sciences.jpg', 'HOD: Mrs Jacinta Migwi', '<p>The department takes care of three subjects namely; Chemistry, Biology and Physics. For Kenya to realize her vision 2030, the learners must perform very well in the humanitiess. Currently, there are fourteen (14) qualified humanities teachers. <br /><br />Our school is a STEM school and also a SMASE center which is as a result of our very good performance in the humanities subjects. We have four well-equipped humanities laboratories and therefore our girls do a lot of hands-on activities.</p>', '<p>The teachers apply ASEI/PDSI together with IBL/PBL which help the learners develop a positive attitude towards the subjects. Teachers are using ICT in teaching and learning. This has helped in enhancing learners&rsquo; interest.</p>\r\n<p>We have been participating in KSEF and our girls, with proper guidance by the teachers, go up to the National level. The department organizes an annual humanities contest in May which enables the learners and teachers from different schools to meet and exchange ideas.</p>\r\n<p>The girls have been doing very in humanitiess in KCSE and this has resulted to most of them being offered humanities-related courses such as Engineering and Medicine in our Public Universities.</p>\r\n<p>The members of the department work as a team and with God, we shall move to greater heights. We appreciate our principal, Ms Mundia, for supporting the department&rsquo;s academic programs. God bless us, God bless Naivasha Girls.</p>', 'HodScience.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `humanities_slider`
--

CREATE TABLE `humanities_slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `humanities_slider`
--

INSERT INTO `humanities_slider` (`id`, `url`, `created_at`, `updated_at`) VALUES
(2, 'slider5.jpg', NULL, NULL),
(3, 'slider2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kiswahili`
--

CREATE TABLE `kiswahili` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hod_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_desc` longtext COLLATE utf8mb4_unicode_ci,
  `more_about_dep` longtext COLLATE utf8mb4_unicode_ci,
  `hod_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kiswahili`
--

INSERT INTO `kiswahili` (`id`, `name`, `bg_image`, `hod_name`, `brief_desc`, `more_about_dep`, `hod_pic`, `created_at`, `updated_at`) VALUES
(1, 'kiswahili', 'Sciences.jpg', 'HOD: Mrs Jacinta Migwi', '<p>The department takes care of three subjects namely; Chemistry, Biology and Physics. For Kenya to realize her vision 2030, the learners must perform very well in the kiswahilis. Currently, there are fourteen (14) qualified kiswahili teachers. <br /><br />Our school is a STEM school and also a SMASE center which is as a result of our very good performance in the kiswahili subjects. We have four well-equipped kiswahili laboratories and therefore our girls do a lot of hands-on activities.</p>', '<p>The teachers apply ASEI/PDSI together with IBL/PBL which help the learners develop a positive attitude towards the subjects. Teachers are using ICT in teaching and learning. This has helped in enhancing learners&rsquo; interest.</p>\r\n<p>We have been participating in KSEF and our girls, with proper guidance by the teachers, go up to the National level. The department organizes an annual kiswahili contest in May which enables the learners and teachers from different schools to meet and exchange ideas.</p>\r\n<p>The girls have been doing very in kiswahilis in KCSE and this has resulted to most of them being offered kiswahili-related courses such as Engineering and Medicine in our Public Universities.</p>\r\n<p>The members of the department work as a team and with God, we shall move to greater heights. We appreciate our principal, Ms Mundia, for supporting the department&rsquo;s academic programs. God bless us, God bless Naivasha Girls.</p>', 'HodScience.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laguagesslider`
--

CREATE TABLE `laguagesslider` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laguagesslider`
--

INSERT INTO `laguagesslider` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'slider4.jpg', NULL, NULL),
(2, 'slider1.jpg', NULL, NULL),
(3, 'slider2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Languages', '<div class=\"col-md-12\">	\r\n<h3 style=\"text-align: center;\">Language Department</h3>\r\n<p>The Head of Department holds a Bachelor of Education degree from Kenyatta University. She also holds a Masters degree in Kiswahili from the University of Nairobi. The language department senior head is a dedicated Kiswahili teacher, who possesses a wealth of experience in her specialization. She is an ardent Kiswahili teacher and has taught in various Kenyan schools. She has a good record of performance in her teaching career. She has held this position since 2013 to date. Through her leadership, the department has grown from strength to strength over the years.</p>\r\n<h5>Members of the Department</h5>\r\n</section>\r\n<div class=\"col-md-12\">\r\n<table class=\"table\">\r\n <thead class=\"thead-light\">\r\n<tr>\r\n<th scope=\"col\">Name</th>\r\n<th scope=\"col\">Subject(s)</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td scope=\"row\">1. Mrs. Dinah Wanjala</td>\r\n<td scope=\"row\">Kiswahili -Senior Head of Dept</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">2. Mrs. Patricia Weber</td>\r\n<td scope=\"row\">English/Literature</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">3. Mr. Cyrus Wachira</td>\r\n<td scope=\"row\">Kiswahili</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">4. Mrs. Lilian Ng&rsquo;ang&rsquo;a</td>\r\n<td scope=\"row\">English/Literature</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">6. Mr. Peter Karugu</td>\r\n<td scope=\"row\">English/Literature</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">7. Miss. Rahab Taitho</td>\r\n<td scope=\"row\">English/Literature</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">8. Miss. Grace Ng&rsquo;ang&rsquo;a</td>\r\n<td scope=\"row\">English/Literature</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">10. Mr. Newton Ambenge</td>\r\n<td scope=\"row\">Kiswahili</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">11. Mrs. Dorcas Kaniu</td>\r\n<td scope=\"row\">Kiswahili</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">12. Mrs. Damary Kataka</td>\r\n<td scope=\"row\">Kiswahili</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">14. Miss Fancy Cherono</td>\r\n<td scope=\"row\">Kiswahili</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">15. Miss. Gladys Njeri</td>\r\n<td scope=\"row\">Kiswahili</td>\r\n</tr>\r\n<tr>\r\n<td scope=\"row\">16. Mrs. Eunice Njambi</td>\r\n<td scope=\"row\">Kiswahili</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<p>&nbsp;</p>\r\n<h5>Curriculum Delivery Policy</h5>\r\n<p>Our school follows the KNEC (Kenya National Examination Council) and KICD (Kenya Institute of Curriculum Development) approved syllabus under the 8.4.4 system of education. The teachers are key players in facilitating the learning of mathematics. We recognize that mathematics opens career paths and development, since it is a key subject to most careers. We prepare students to be effective in calculation skills, so as to fit in the larger world, which is now a global village. We focus on being role models to our students and supporting them to ensure that we produce great results every year. Our students participate in various mathematics competitions, like maths contests organised by different schools, Kenya maths Olympiad organised by Nairobi University.</p>\r\n<p>This is in recognition that various students learn in different ways, thus we expose them to various learning activities like, drawing graphs daily, construction skills, calculation skills, use of the mathematics tables. Students have group discussions, have a note book where they write down all formulas learnt. We recognize that language teachers are key players in facilitating the learning of language. We recognize that language opens career paths and development, since it is a key communication tool in every career. We also recognize that since language is central to learning the other subjects, all teachers are, in practice, language teachers, with responsibilities in facilitating communication. In this regard, we ensure that we facilitate the access to reading materials as well as other materials that enhance and develop listening, writing, reading and speaking skills in learners e.g ICT, newspapers, class readers.</p>\r\n<p>In liaison with the KICD, the department seeks to promote the usage of Kenya&rsquo;s official languages (English and Kiswahili) to enhance national unity. Furthermore, the school allows the usage of French for students who take it as a subject. We prepare students to be effective communicators, so as to fit in the larger world, which is now a global village. The department is made up of the following members of staff, who play a critical role in curriculum delivery. Our students participate in various essay writing competitions, like the EAC and the Commonwealth competitions. This is in recognition that various students learn in different ways, thus we expose them to various learning activities like drama, note making, creative writing, debates, individual group presentations and peer review groups. Students also recite verses in these languages.</p>\r\n<h5>Lesson Distribution</h5>\r\n<ul class=\"fa-ul\">\r\n<li>The lessons are distributed among all the members, whereby forms 1 and 2 have 6 lessons per week in English, and 5 lessons in Kiswahili.</li>\r\n<li>Forms 3 and 4 have 8 lessons per week in English, while Kiswahili has 6.</li>\r\n<li>Each lesson is forty minutes long.</li>\r\n</ul>\r\n<h5>Scheem of Work</h5>\r\n<ul class=\"fa-ul\">\r\n<li>Schemes of work are an important tool in the teaching/learning process.</li>\r\n<li>Language teachers prepare the schemes of work at the beginning of each year.</li>\r\n<li>Schemes of work are prepared in compliance with the syllabus.</li>\r\n<li>Each teacher is given copies of the scheme that guide them in their lesson preparation and teaching.</li>\r\n</ul>\r\n<h5>Syllabus Coverage</h5>\r\n<p>The department makes sure that there is timely coverage of the syllabus within the stipulated timelines. This helps to make sure that all that the learners are supposed to be taught is covered. After syllabus coverage, teachers embark on revision.</p>\r\n<h5>Lesson Plan</h5>\r\n<p>The department acknowledges that a lesson plan is a key guide for running a particular lesson, and it includes the goal, how and whether the goal was achieved. The department has a policy that each lesson should be taught with the guidance of a lesson plan, for effective delivery.</p>\r\n<h5>Testing Policy</h5>\r\n<ul class=\"fa-ul\">\r\n<li>A test or an examination is an assessment intended to measure a learner&rsquo;s knowledge, skills and aptitudes.</li>\r\n<li>The language department recognizes that assignments and exercises are very essential in the learning of a language. As such, an assignment is given at the end of every lesson.</li>\r\n<li>The department usually offers Random Assessment Test (RATs) to evaluate how much the learners have learnt.</li>\r\n<li>The department identifies and supports gifted and talented learners, as well as those who fail to meet their targets.</li>\r\n<li>The department keeps systematic records of each learner&rsquo;s development and achievement, to provide evidence of progress over time.</li>\r\n<li>There are two Continuous Assessment Tests in a term, and one main termly exam, which further give feedback on the learner&rsquo;s academic progress.</li>\r\n</ul>\r\n<h5>Internal Exam Analysis</h5>\r\n<p>The department does a SWOT (strengths, weaknesses, opportunities and targets) analysis after every test. This allows the departmental members to know whether the set targets were met or not. If the targets were not satisfactorily met, the individual subject teacher is required to come up with a makeup test that majorly evaluates on the areas that are challenging to the learners. There is a programme that is put in place giving extra contact hours to the weak students with an aim of solving the challenges that they may have.</p>\r\n<h5>K.C.S.E Analysis</h5>\r\n<p>Upon the release of the K.C.S.E results, the departmental members meet and do an analysis of the students&rsquo; performance. A comparison is made regarding the general performance nationally. This gives direction on whether the set targets were achieved and gives the direction on the setting of the following year&rsquo;s targets. The K.C.S.E results also give a feedback on what areas need to be improved on as well as the working techniques that can be put in place to achieve the set goals.</p>\r\n<h5>Highlights</h5>\r\n<p>Our students have always done well in the various essay writing competitions.</p>\r\n<ul class=\"fa-ul\">\r\n<li>Fourth best student in the East African essay writing competition (2017).</li>\r\n<li>Top student in the E-Kitabu national essay writing competition(2018).</li>\r\n<li>National drama and music festivals champions in verse recitations(solo and choral verses)</li>\r\n<li>Seasoned champions in the great debaters contest.</li>\r\n</ul>\r\n<h5>Departmental catch phrase</h5>\r\n<p>The department is built on the strong foundation of team spirit and wide consultations</p>\r\n\r\n</div>\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mathemathicsslider`
--

CREATE TABLE `mathemathicsslider` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mathemathicsslider`
--

INSERT INTO `mathemathicsslider` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'slider3.jpg', NULL, NULL),
(2, 'slider1.jpg', NULL, NULL),
(3, 'slider2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mathematics`
--

CREATE TABLE `mathematics` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hod_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_desc` longtext COLLATE utf8mb4_unicode_ci,
  `more_about_dep` longtext COLLATE utf8mb4_unicode_ci,
  `hod_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mathematics`
--

INSERT INTO `mathematics` (`id`, `name`, `bg_image`, `hod_name`, `brief_desc`, `more_about_dep`, `hod_pic`, `created_at`, `updated_at`) VALUES
(1, 'mathematics', 'Sciences.jpg', 'HOD: Mrs Jacinta Migwi', '<p>The department takes care of three subjects namely; Chemistry, Biology and Physics. For Kenya to realize her vision 2030, the learners must perform very well in the mathematicss. Currently, there are fourteen (14) qualified mathematics teachers. <br /><br />Our school is a STEM school and also a SMASE center which is as a result of our very good performance in the mathematics subjects. We have four well-equipped mathematics laboratories and therefore our girls do a lot of hands-on activities.</p>', '<p>The teachers apply ASEI/PDSI together with IBL/PBL which help the learners develop a positive attitude towards the subjects. Teachers are using ICT in teaching and learning. This has helped in enhancing learners&rsquo; interest.</p>\r\n<p>We have been participating in KSEF and our girls, with proper guidance by the teachers, go up to the National level. The department organizes an annual mathematics contest in May which enables the learners and teachers from different schools to meet and exchange ideas.</p>\r\n<p>The girls have been doing very in mathematicss in KCSE and this has resulted to most of them being offered mathematics-related courses such as Engineering and Medicine in our Public Universities.</p>\r\n<p>The members of the department work as a team and with God, we shall move to greater heights. We appreciate our principal, Ms Mundia, for supporting the department&rsquo;s academic programs. God bless us, God bless Naivasha Girls.</p>', 'HodScience.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Hudson Ngeti', 'ngetihudson@gmail.com', '0713164864', 'Hello there!!', NULL, '2019-06-22 07:26:45', '2019-06-22 07:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_22_134937_create_basics_table', 2),
(4, '2019_04_22_144657_create_sliders_table', 3),
(5, '2019_04_30_085739_create_home_table', 4),
(6, '2019_05_01_122807_create_about_us_table', 5),
(7, '2019_05_01_135450_create_mathematics_table', 6),
(8, '2019_05_01_135858_create_languages_table', 7),
(9, '2019_05_01_140555_create_humanities_table', 8),
(10, '2019_05_01_141203_create_science_table', 9),
(11, '2019_05_01_141627_create_technical_table', 10),
(12, '2019_05_01_142113_create_boarding_table', 11),
(13, '2019_05_01_142259_create_games_table', 12),
(14, '2019_05_01_142653_create_guidance_table', 13),
(15, '2019_05_01_143022_create_clubs_table', 14),
(16, '2019_05_01_143622_create_staff_table', 15),
(17, '2019_05_01_144011_create_events_table', 16),
(18, '2019_05_01_144618_create_contact_table', 17),
(19, '2019_05_01_153340_create_staffinformation_table', 18),
(20, '2019_05_05_072146_create_activitylog_table', 19),
(21, '2019_05_05_083821_create_welcome_table', 20),
(22, '2019_05_05_134515_create_slidemanager_table', 21),
(23, '2019_05_05_142930_create_homeslider_table', 22),
(24, '2019_05_05_143204_create_aboutslider_table', 23),
(25, '2019_05_05_143405_create_mathemathicsslider_table', 24),
(26, '2019_05_05_143512_create_laguagesslider_table', 24),
(27, '2019_05_05_143612_create_humanities_slider', 24),
(28, '2019_05_05_143711_create_scienceslider_table', 24),
(29, '2019_05_05_143923_create_technicalslider_table', 24),
(30, '2019_05_05_144044_create_boardingslider_table', 25),
(31, '2019_05_05_144134_create_gamesslider_table', 25),
(32, '2019_05_05_144226_create_guidanceslider_table', 25),
(33, '2019_05_05_144309_create_clubsslider_table', 25),
(34, '2019_05_05_144430_create_staffslider_table', 26),
(35, '2019_05_05_144546_create_eventsslider_table', 26),
(36, '2019_05_06_145010_create_pages_table', 27),
(37, '2019_05_10_063410_create_myevents_table', 28),
(38, '2019_05_10_122803_create_eventsimages_table', 29),
(39, '2019_06_19_105529_create_anthem_table', 30),
(40, '2019_06_19_112915_create_academics_table', 31),
(41, '2019_06_20_085629_create_subclubs_table', 32),
(42, '2019_06_20_120756_create_history_table', 33),
(43, '2019_06_20_133727_create_galary_table', 34),
(44, '2019_06_20_134018_create_garlaryimages_table', 35),
(45, '2019_06_21_080005_create_videos_table', 36),
(46, '2019_06_22_100420_create_messages_table', 37),
(47, '2019_06_22_103026_create_partners_table', 38);

-- --------------------------------------------------------

--
-- Table structure for table `myevents`
--

CREATE TABLE `myevents` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `starttime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endtime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `location` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `key`, `slider`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', 'home', NULL, NULL, '2019-06-23 06:34:44'),
(2, 'Discipline', 'discipline', NULL, NULL, NULL, '2019-05-07 07:52:44'),
(3, 'School Anthem', 'school-anthem', NULL, NULL, NULL, '2019-06-23 12:59:54'),
(4, 'Academics', 'academics', NULL, NULL, NULL, '2019-06-23 13:21:18'),
(5, 'Science', 'science', NULL, NULL, NULL, '2019-06-23 14:59:20'),
(6, 'Mathematics', 'mathematics', NULL, NULL, NULL, '2019-06-23 16:19:50'),
(7, 'Technical and applied', 'technical-and-applied', NULL, NULL, NULL, '2019-06-23 16:20:40'),
(8, 'Humanities', 'humanities', NULL, NULL, NULL, '2019-06-23 16:35:34'),
(9, 'English', 'english', NULL, NULL, NULL, '2019-06-23 16:57:54'),
(10, 'Kiswahili', 'kiswahili', NULL, NULL, NULL, '2019-06-24 08:24:30'),
(11, 'Examinations', 'examinations', NULL, NULL, NULL, '2019-06-23 17:34:30'),
(12, 'Guidance and counselling', 'guidance-and-counselling', NULL, NULL, NULL, '2019-06-24 02:47:23'),
(13, 'History', 'history', NULL, NULL, NULL, '2019-06-24 04:17:37'),
(14, 'Co-curriculum activities', 'cocurriculor', NULL, NULL, NULL, '2019-06-24 04:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descritpion` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `phone`, `image`, `descritpion`, `created_at`, `updated_at`) VALUES
(1, 'LAIKIPIA UNIVERSITY', '0751 302 979', 'Nakuru-Campus.png', 'Nakuru Campus', '2019-06-11 21:00:00', '2019-06-11 21:00:00'),
(2, 'JKUAT UNIVERSITY', '0787 671 677', 'JKUAT.jpg', 'JUJA, MAIN CAMPUS', '2019-06-11 21:00:00', '2019-06-11 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `science`
--

CREATE TABLE `science` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hod_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_desc` longtext COLLATE utf8mb4_unicode_ci,
  `more_about_dep` longtext COLLATE utf8mb4_unicode_ci,
  `hod_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `science`
--

INSERT INTO `science` (`id`, `name`, `bg_image`, `hod_name`, `brief_desc`, `more_about_dep`, `hod_pic`, `created_at`, `updated_at`) VALUES
(1, 'science', 'Sciences.jpg', 'HOD: Mrs Jacinta Migwi', '<p>The department takes care of three subjects namely; Chemistry, Biology and Physics. For Kenya to realize her vision 2030, the learners must perform very well in the sciences. Currently, there are fourteen (14) qualified science teachers. <br /><br />Our school is a STEM school and also a SMASE center which is as a result of our very good performance in the science subjects. We have four well-equipped science laboratories and therefore our girls do a lot of hands-on activities.</p>', '<p>The teachers apply ASEI/PDSI together with IBL/PBL which help the learners develop a positive attitude towards the subjects. Teachers are using ICT in teaching and learning. This has helped in enhancing learners&rsquo; interest.</p>\r\n<p>We have been participating in KSEF and our girls, with proper guidance by the teachers, go up to the National level. The department organizes an annual Science contest in May which enables the learners and teachers from different schools to meet and exchange ideas.</p>\r\n<p>The girls have been doing very in sciences in KCSE and this has resulted to most of them being offered science-related courses such as Engineering and Medicine in our Public Universities.</p>\r\n<p>The members of the department work as a team and with God, we shall move to greater heights. We appreciate our principal, Ms Mundia, for supporting the department&rsquo;s academic programs. God bless us, God bless Naivasha Girls.</p>', 'HodScience.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scienceslider`
--

CREATE TABLE `scienceslider` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scienceslider`
--

INSERT INTO `scienceslider` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'slider6.jpg', NULL, NULL),
(2, 'slider1.jpg', NULL, NULL),
(3, 'slider2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slidemanager`
--

CREATE TABLE `slidemanager` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slidemanager`
--

INSERT INTO `slidemanager` (`id`, `name`, `key`, `created_at`, `updated_at`) VALUES
(1, 'Home Slider', 'general-slider', NULL, '2019-06-24 06:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Staff', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staffinformation`
--

CREATE TABLE `staffinformation` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staffinformation`
--

INSERT INTO `staffinformation` (`id`, `name`, `title`, `image`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Susan', 'PRINCIPAL', 'Principal1.jpg', 'The School has grown over the years. The current population is 1,000 ( 0ne thousand) students. Naivasha Girls has a national outlook because the selection of students who join form one come from all parts of the country. It is one of the best performing schools in Nakuru County. ', NULL, '2019-05-21 08:44:14'),
(2, 'Hellen Kataka', 'DEPUTY PRINCIPAL ADMINISTRATION’S DESK', 'dprincipal.png', '<p>My docket is mainly concerned with discipline and deputizing for the principal on administrative matters. <br /><br />Discipline is critical to good performance in any institution. At Naivasha Girls, we believe in transformative leadership. My key duty in this office is to transform the students under our care to disciplined and responsible future leaders. We mould them by guiding them on what is right. <br /><br />I work with a 5 member discipline committee (Mrs Ogega, Mr Mwaura, Mrs Wainaina And Mr Irae) as the chairperson. The school principal readily and fully addresses discipline matters. Class teachers are always part of discipline concerns and the Guidance and Counseling department when necessary. We always involve parents in discipline matters and most of them have been very co-operative. <br /><br />The teachers are very supportive in enhancing discipline and I work with prefects too under the stewardship of Audrey Akinyi and Pascalia Sharleen. The prefects&rsquo; body always meets every week to check on the progress and I attend their meetings after every fortnight.</p>\r\n<div class=\"media\">\r\n<div class=\"media-body\">\r\n<h4 class=\"media-heading\">To enhance discipline:</h4>\r\n<ol>\r\n<li>We sensitize students on effects and consequences of indiscipline.</li>\r\n<li>We have a clearly outlined school routine which the teacher on duty with prefects, always supervises.</li>\r\n<li>Clearly defined school rules and regulations are displayed on all our classroom notice boards to remind students of the expectations.</li>\r\n<li>Most sponsors like EFAC, German (Harambee Deutschland) and Equity (Wings to Fly) conduct mentorship programmes.</li>\r\n</ol>\r\n</div>\r\n</div>\r\n<p>We apply corrective disciplinary action after thorough investigations and consultations. We even refer some students for professional counseling where necessary. <br /><br />My dream is to have students from Naivasha girls taking up key leadership positions to play a key role in transforming our nation Kenya.</p>', NULL, '2019-06-24 08:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `staffslider`
--

CREATE TABLE `staffslider` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staffslider`
--

INSERT INTO `staffslider` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'slider1.jpg', NULL, NULL),
(2, 'slider2.jpg', NULL, NULL),
(3, 'slider3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subclubs`
--

CREATE TABLE `subclubs` (
  `id` int(10) UNSIGNED NOT NULL,
  `club_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subclubs`
--

INSERT INTO `subclubs` (`id`, `club_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Peer Counselling', NULL, NULL),
(2, 1, 'Science', NULL, NULL),
(3, 1, ' Health, Rangers', NULL, NULL),
(4, 1, ' Red Cross', NULL, NULL),
(5, 1, 'Wildlife', NULL, NULL),
(6, 2, 'Sigma', NULL, NULL),
(7, 2, 'Young Farmers', NULL, NULL),
(8, 2, 'Kiswahili', NULL, NULL),
(9, 2, 'Drama', NULL, NULL),
(10, 2, ' Music/Choir', NULL, NULL),
(11, 3, 'Journalism', NULL, NULL),
(12, 3, ' Straight Talk', NULL, NULL),
(13, 3, 'Art & Design', NULL, NULL),
(14, 3, 'Young Achievers', NULL, NULL),
(15, 3, 'Young Home Makers', NULL, NULL),
(16, 4, 'United Nations', NULL, NULL),
(17, 4, 'Peace /Amani', NULL, NULL),
(18, 4, 'Interact', NULL, NULL),
(19, 4, 'Debate', NULL, NULL),
(20, 4, 'St Johns Ambulance', NULL, NULL),
(21, 5, 'Muslim', NULL, NULL),
(22, 5, 'Christian Union', NULL, NULL),
(23, 5, 'YCS', NULL, NULL),
(24, 5, 'S.D.A', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `title`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Basketball Team ', 'Ball games', 'Basketball-Team-300x225.jpg', NULL, NULL),
(2, 'Football Team ', 'Ball games', 'Football-Team-300x225.jpg', NULL, NULL),
(3, 'Netball Team ', 'Ball games', 'Netball-Team-300x225.jpg', NULL, NULL),
(4, 'Volleyball Team ', 'Ball games', 'Volleyball-Team-300x225.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `technical`
--

CREATE TABLE `technical` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hod_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_desc` longtext COLLATE utf8mb4_unicode_ci,
  `more_about_dep` longtext COLLATE utf8mb4_unicode_ci,
  `hod_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technical`
--

INSERT INTO `technical` (`id`, `name`, `bg_image`, `hod_name`, `brief_desc`, `more_about_dep`, `hod_pic`, `created_at`, `updated_at`) VALUES
(1, 'technical', 'Sciences.jpg', 'HOD: Mrs Jacinta Migwi', '<p>The department takes care of three subjects namely; Chemistry, Biology and Physics. For Kenya to realize her vision 2030, the learners must perform very well in the technicals. Currently, there are fourteen (14) qualified technical teachers. <br /><br />Our school is a STEM school and also a SMASE center which is as a result of our very good performance in the technical subjects. We have four well-equipped technical laboratories and therefore our girls do a lot of hands-on activities.</p>', '<p>The teachers apply ASEI/PDSI together with IBL/PBL which help the learners develop a positive attitude towards the subjects. Teachers are using ICT in teaching and learning. This has helped in enhancing learners&rsquo; interest.</p>\r\n<p>We have been participating in KSEF and our girls, with proper guidance by the teachers, go up to the National level. The department organizes an annual technical contest in May which enables the learners and teachers from different schools to meet and exchange ideas.</p>\r\n<p>The girls have been doing very in technicals in KCSE and this has resulted to most of them being offered technical-related courses such as Engineering and Medicine in our Public Universities.</p>\r\n<p>The members of the department work as a team and with God, we shall move to greater heights. We appreciate our principal, Ms Mundia, for supporting the department&rsquo;s academic programs. God bless us, God bless Naivasha Girls.</p>', 'HodScience.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `technicalslider`
--

CREATE TABLE `technicalslider` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technicalslider`
--

INSERT INTO `technicalslider` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'slider7.jpg', NULL, NULL),
(2, 'slider2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastName`, `phone`, `title`, `email`, `image`, `status`, `log`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hudson', 'ngeti', '0713164864', 'Admin', 'ngetihudson@gmail.com', 'http://localhost/machakos/public/resources/profile/profile4.jpg', '2', '1', NULL, '$2y$10$GCnwb/fVrmj0BXjd9Th.BO4FMB2NDgCqyKhiyLTipKrjV9RsZB4C.', 'pnyV8pgFYeMoJyFrFhVZ5cTexgWe2vOfdhJIz5ycg0oAWlmD4KXF2U7g8qN4', '2019-04-22 10:20:24', '2019-05-05 09:14:07'),
(5, 'Eric', NULL, NULL, 'Admin', 'eric@zalego.com', NULL, '2', NULL, NULL, '$2y$10$.DkSR3SsK1GbXWx4ViczzOgKXidAptb/XA5yYc7x0YCzIG1p9xCpm', 'N9RRdogHl2wlrup1P3Gf5ZKnKEzli5ZjcyETJhRAA5MLTefzHAQprzC8mxUc', '2019-05-07 08:42:39', '2019-05-07 08:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `image`, `title`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'plantingSQR.jpg', 'Principal', 'Principal.mp4', NULL, NULL),
(2, 'Football1.jpg', 'Deputy Principal Academics', 'DeputyPrincipalAcademics.mp4', NULL, NULL),
(3, 'Football1.jpg', 'Deputy Principal Administration', 'DeputyPrincipalAdministration.mp4', NULL, NULL),
(4, 'Football1.jpg', 'Naivasha school', 'naivashasch.mp4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

CREATE TABLE `welcome` (
  `id` int(10) UNSIGNED NOT NULL,
  `form` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome`
--

INSERT INTO `welcome` (`id`, `form`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Welcome', 'Welcome to Naivasha Girls Secondary School\r\n<br/>\r\nDiligence and Discipline for Excellence', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutslider`
--
ALTER TABLE `aboutslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activitylog`
--
ALTER TABLE `activitylog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anthem`
--
ALTER TABLE `anthem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basics`
--
ALTER TABLE `basics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `basics_key_unique` (`key`);

--
-- Indexes for table `boarding`
--
ALTER TABLE `boarding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boardingslider`
--
ALTER TABLE `boardingslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clubsslider`
--
ALTER TABLE `clubsslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cocurriculor`
--
ALTER TABLE `cocurriculor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `english`
--
ALTER TABLE `english`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventsimages`
--
ALTER TABLE `eventsimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eventsimages_event_id_foreign` (`event_id`);

--
-- Indexes for table `eventsslider`
--
ALTER TABLE `eventsslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examinations`
--
ALTER TABLE `examinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galary`
--
ALTER TABLE `galary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gamesslider`
--
ALTER TABLE `gamesslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garlaryimages`
--
ALTER TABLE `garlaryimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guidance`
--
ALTER TABLE `guidance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guidanceslider`
--
ALTER TABLE `guidanceslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeslider`
--
ALTER TABLE `homeslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humanities`
--
ALTER TABLE `humanities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humanities_slider`
--
ALTER TABLE `humanities_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kiswahili`
--
ALTER TABLE `kiswahili`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laguagesslider`
--
ALTER TABLE `laguagesslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mathemathicsslider`
--
ALTER TABLE `mathemathicsslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mathematics`
--
ALTER TABLE `mathematics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myevents`
--
ALTER TABLE `myevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key` (`key`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `science`
--
ALTER TABLE `science`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scienceslider`
--
ALTER TABLE `scienceslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slidemanager`
--
ALTER TABLE `slidemanager`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slidemanager_key_unique` (`key`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffinformation`
--
ALTER TABLE `staffinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffslider`
--
ALTER TABLE `staffslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subclubs`
--
ALTER TABLE `subclubs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subclubs_club_id_foreign` (`club_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical`
--
ALTER TABLE `technical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technicalslider`
--
ALTER TABLE `technicalslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome`
--
ALTER TABLE `welcome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutslider`
--
ALTER TABLE `aboutslider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `academics`
--
ALTER TABLE `academics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `anthem`
--
ALTER TABLE `anthem`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basics`
--
ALTER TABLE `basics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `boarding`
--
ALTER TABLE `boarding`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `boardingslider`
--
ALTER TABLE `boardingslider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clubsslider`
--
ALTER TABLE `clubsslider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cocurriculor`
--
ALTER TABLE `cocurriculor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `english`
--
ALTER TABLE `english`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eventsimages`
--
ALTER TABLE `eventsimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eventsslider`
--
ALTER TABLE `eventsslider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `examinations`
--
ALTER TABLE `examinations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galary`
--
ALTER TABLE `galary`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gamesslider`
--
ALTER TABLE `gamesslider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `garlaryimages`
--
ALTER TABLE `garlaryimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guidance`
--
ALTER TABLE `guidance`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guidanceslider`
--
ALTER TABLE `guidanceslider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homeslider`
--
ALTER TABLE `homeslider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `humanities`
--
ALTER TABLE `humanities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `humanities_slider`
--
ALTER TABLE `humanities_slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kiswahili`
--
ALTER TABLE `kiswahili`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laguagesslider`
--
ALTER TABLE `laguagesslider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mathemathicsslider`
--
ALTER TABLE `mathemathicsslider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mathematics`
--
ALTER TABLE `mathematics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `myevents`
--
ALTER TABLE `myevents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `science`
--
ALTER TABLE `science`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scienceslider`
--
ALTER TABLE `scienceslider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slidemanager`
--
ALTER TABLE `slidemanager`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staffinformation`
--
ALTER TABLE `staffinformation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staffslider`
--
ALTER TABLE `staffslider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subclubs`
--
ALTER TABLE `subclubs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `technical`
--
ALTER TABLE `technical`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `technicalslider`
--
ALTER TABLE `technicalslider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `welcome`
--
ALTER TABLE `welcome`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventsimages`
--
ALTER TABLE `eventsimages`
  ADD CONSTRAINT `eventsimages_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `myevents` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subclubs`
--
ALTER TABLE `subclubs`
  ADD CONSTRAINT `subclubs_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
