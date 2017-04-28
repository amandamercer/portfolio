-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2017 at 05:22 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fcCakes`
--

-- --------------------------------------------------------

--
-- Table structure for table `lt_flavoursType`
--

CREATE TABLE `lt_flavoursType` (
  `flavoursType_id` smallint(5) UNSIGNED NOT NULL,
  `type_id` smallint(5) NOT NULL,
  `flavours_id` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lt_flavoursType`
--

INSERT INTO `lt_flavoursType` (`flavoursType_id`, `type_id`, `flavours_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 6),
(4, 1, 7),
(5, 1, 8),
(6, 1, 9),
(7, 1, 10),
(8, 2, 11),
(9, 2, 12),
(10, 2, 13),
(11, 2, 14),
(12, 2, 15),
(13, 2, 16),
(14, 2, 17),
(15, 3, 18),
(16, 3, 19),
(17, 3, 20),
(18, 3, 21),
(19, 3, 22),
(20, 3, 23),
(21, 3, 24),
(22, 4, 6),
(23, 4, 1),
(24, 4, 23);

-- --------------------------------------------------------

--
-- Table structure for table `lt_ordersFlavours`
--

CREATE TABLE `lt_ordersFlavours` (
  `ordersFlavours_id` int(10) UNSIGNED NOT NULL,
  `orders_id` int(10) NOT NULL,
  `flavours_id` int(10) NOT NULL,
  `flavours_quantity` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lt_ordersFlavours`
--

INSERT INTO `lt_ordersFlavours` (`ordersFlavours_id`, `orders_id`, `flavours_id`, `flavours_quantity`) VALUES
(1, 0, 0, 6),
(2, 0, 0, 12),
(3, 0, 0, 18),
(4, 0, 0, 12),
(5, 0, 0, 18),
(6, 0, 0, 12),
(7, 0, 0, 36),
(8, 0, 0, 224),
(9, 0, 1, 388),
(10, 0, 15, 99),
(11, 24, 13, 849),
(12, 25, 7, 322),
(13, 26, 13, 379),
(14, 27, 6, 257),
(15, 28, 2, 180),
(16, 29, 9, 654),
(17, 30, 17, 810),
(18, 31, 24, 103),
(19, 32, 21, 577),
(20, 33, 19, 819),
(21, 34, 7, 731),
(22, 35, 22, 318),
(23, 37, 13, 944),
(24, 37, 6, 463),
(25, 38, 6, 40),
(26, 38, 8, 3463),
(27, 38, 6, 32767),
(28, 39, 20, 492),
(29, 40, 20, 492),
(30, 41, 1, 780),
(31, 41, 10, 24),
(32, 48, 15, 888),
(33, 48, 6, 48),
(34, 48, 1, 84),
(35, 50, 24, 840),
(36, 51, 23, 804),
(37, 51, 7, 24),
(38, 51, 9, 24),
(39, 51, 9, 24),
(40, 52, 13, 120);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` tinyint(2) UNSIGNED NOT NULL,
  `contact_fname` varchar(100) NOT NULL,
  `contact_lname` varchar(100) NOT NULL,
  `contact_conName` varchar(100) DEFAULT NULL,
  `contact_busName` varchar(200) DEFAULT NULL,
  `contact_phone` varchar(50) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_street` varchar(200) NOT NULL,
  `contact_city` varchar(100) NOT NULL,
  `contact_province` varchar(10) NOT NULL,
  `contact_postalCode` varchar(10) NOT NULL,
  `contact_delStreet` varchar(200) DEFAULT NULL,
  `contact_delCity` varchar(100) DEFAULT NULL,
  `contact_delProvince` varchar(10) DEFAULT NULL,
  `contact_delPostal` varchar(10) DEFAULT NULL,
  `orders_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `contact_fname`, `contact_lname`, `contact_conName`, `contact_busName`, `contact_phone`, `contact_email`, `contact_street`, `contact_city`, `contact_province`, `contact_postalCode`, `contact_delStreet`, `contact_delCity`, `contact_delProvince`, `contact_delPostal`, `orders_id`) VALUES
(21, 'Priscilla', 'Kirk', 'Timon Holder', 'Roanna Combs', '+614-93-2670677', 'weban@gmail.com', 'Ex et autem reprehenderit incidunt lorem tenetur eaque similique sit dolore consequatur voluptatem id', 'Cillum sed quam asperiores accusamus aut animi', 'Commodo au', 'Dolor perf', 'Dolores corrupti ipsa iste sed atque temporibus debitis dolores saepe ad quisquam perspiciatis ratione sit', 'Tempore deleniti mollitia placeat natus occaecat commodo voluptas numquam ut a qui nostrud harum in ', 'Consequat ', 'Nostrud ut', 47),
(22, 'Octavia', 'Tyson', 'Caesar Acosta', 'Kane Gilliam', '+188-54-6660687', 'bukup@hotmail.com', 'Quo possimus sed in cupidatat aliquip fuga Voluptas aut incidunt blanditiis ex ex omnis irure eiusmod in atque perspiciatis et', 'Quae totam quis omnis aliqua Sed sint', 'Accusamus ', 'Voluptatem', 'Aliquid qui dolor assumenda deleniti labore lorem deserunt molestiae nesciunt necessitatibus velit expedita in adipisci rerum enim quo nisi maxime', 'Pariatur Laboris nihil in quos consectetur recusandae Sint ipsum officia exercitationem eiusmod cons', 'Temporibus', 'Non minima', 48),
(23, 'Sydney', 'Meyers', 'Damon Montoya', 'Martin Jefferson', '+944-71-9753814', 'bemam@yahoo.com', 'Voluptas eaque sequi irure quis eu labore illo eiusmod earum aut praesentium aut est', 'Dignissimos est nihil sint sint adipisci dolore possimus voluptas eum nulla labore commodi quae quis', 'Perspiciat', 'Facilis ma', 'Deserunt non voluptatum qui nobis et sunt reiciendis id eos aliquid', 'Cupidatat laboriosam harum eaque velit qui', 'Tempore co', 'Qui delect', 49),
(24, 'Portia', 'Lancaster', 'Alexis Todd', 'Bree Monroe', '+161-90-7369076', 'rebekuzi@hotmail.com', 'Debitis aut quia minim voluptatem eveniet perferendis hic velit autem beatae unde voluptas dolore in qui excepturi', 'Architecto maiores deserunt eos est dolorem deserunt qui do quo', 'Corporis a', 'Dolor nihi', 'Facere dolore quia id sunt nostrud', 'Quis aut nobis adipisci ad in ut', 'Ab in cupi', 'Eius qui t', 50),
(25, 'Melodie', 'Vaughan', 'Clio Mcconnell', 'Igor Dean', '+791-29-5149259', 'mimo@gmail.com', 'Fugiat laboriosam explicabo Quia officia nemo deserunt cillum laborum consequuntur corrupti recusandae Qui', 'Consectetur temporibus nisi architecto ipsa voluptatibus dolores aut qui omnis ut aperiam maxime eos', 'Molestiae ', 'Libero lab', 'Beatae temporibus nulla ut dolores dolorem qui dolore quis pariatur Est consequatur Libero porro', 'Anim sit laboriosam eiusmod ipsum quibusdam nostrud odio inventore veritatis debitis omnis cupidatat', 'Reiciendis', 'Exercitati', 51),
(26, 'Kaden', 'Wynn', 'Jorden Donaldson', 'Damon Spears', '+187-61-6579863', 'xyjugid@yahoo.com', 'Elit et veritatis sit sint porro voluptas id nulla eius ut asperiores dicta totam sit', 'Officia ex similique est sit ut corporis libero labore facilis magnam', 'Fuga Aute ', 'Iure sed v', 'Et sit rerum molestias consequatur voluptate magni', 'Velit id irure modi doloribus perferendis consequatur non sequi aut commodo quia doloribus maxime la', 'Illum iure', 'Officia et', 52);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `faq_id` smallint(5) UNSIGNED NOT NULL,
  `faq_question` text NOT NULL,
  `faq_answer` text NOT NULL,
  `faq_img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `faq_question`, `faq_answer`, `faq_img`) VALUES
(1, 'How many servings are in a 6" or 8" cake?', 'The 6" round serves 6-8 people and the 8" round serves 8-10 people.', ''),
(2, 'Do you sell mini cupcakes?', 'No, only standard medium sized cupcakes are available.', ''),
(3, 'How do I store my products and how long will they last?', 'We do not use any preservatives, so our cupcakes and cakes are always meant to be enjoyed fresh and at room temperature. Always keep your cupcakes at room temperature, never in the refrigerator as this will dry them out. If you aren’t able to consume our products right away or have ordered ahead of time, place in an airtight container and freeze. Allow cupcakes to defrost and come to room temperature before enjoying.', ''),
(4, 'Do you sell vegan, wheat/gluten and dairy free cupcakes?', 'Yes, we offer both vegan and gluten free products, however we are not certified gluten free, but use best efforts to prevent cross contamination.', ''),
(5, 'Do your products contain nuts?', 'Some of our recipes are baked with nuts. We recommend that customers with sensitivity to nuts refrain from consuming our products.', ''),
(6, 'Can I purchase additional packaging for cupcakes?', 'Yes, additional packaging is available for your order if required. Cost is $1.00/each for individual cupcake containers, or each additional six cell container.', ''),
(7, 'What is your cancellation policy?', 'Cancellations of a pre-paid order within 72 hours of your order\'s pick-up time will be given a full refund. Less than 72 hours will be given 50% refund.', ''),
(8, 'Do you make wedding cakes?', 'No. However we will make large orders of our cupcakes or jar cakes for your special event with proper advanced notice. If you are looking to get a very large order please call and discuss your needs with as much time as possible.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flavours`
--

CREATE TABLE `tbl_flavours` (
  `id` smallint(4) UNSIGNED NOT NULL,
  `flavours_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_flavours`
--

INSERT INTO `tbl_flavours` (`id`, `flavours_name`) VALUES
(1, 'Chocolate'),
(2, 'Vanilla'),
(6, 'Caramel'),
(7, 'Cookies and Cream'),
(8, 'Lemon'),
(9, 'Irish Cream'),
(10, 'Funfetti'),
(11, 'Chocolate Sundae'),
(12, 'Peanut Butter and Jam'),
(13, 'Tequila Sunrise'),
(14, 'Pink Lemonade'),
(15, 'Coconut Lime'),
(16, 'Whiskey and Cola'),
(17, 'Black Forest'),
(18, 'Chai Latte'),
(19, 'Chocolate Beetroot'),
(20, 'Pumpkin Spice'),
(21, 'Gingerbread'),
(22, 'Chocolate Orange'),
(23, 'Sticky Toffee'),
(24, 'Maple');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `orders_id` smallint(5) UNSIGNED NOT NULL,
  `orders_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `orders_delFreq` varchar(100) DEFAULT NULL,
  `orders_type` varchar(100) DEFAULT NULL,
  `orders_dateReq` varchar(100) NOT NULL,
  `orders_timeReq` varchar(50) NOT NULL,
  `orders_extra` text,
  `orders_package` varchar(200) DEFAULT NULL,
  `orders_payOpt` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`orders_id`, `orders_date`, `orders_delFreq`, `orders_type`, `orders_dateReq`, `orders_timeReq`, `orders_extra`, `orders_package`, `orders_payOpt`) VALUES
(35, '2017-04-05 10:56:16', 'Weekly', 'Delivery', 'A Test Date', 'A Test Time', 'Explicabo. Dolores deserunt tempora excepturi ipsam sint quod est inventore voluptas.', 'Six Cupcake Holder', 'Cash'),
(36, '2017-04-07 08:32:38', 'Weekly', NULL, '08-Jun-1986', 'Quis earum atque in est nihil error sit in consect', 'Ipsum numquam enim ea officiis aliqua. Magni quia alias consectetur, reprehenderit, aliquam aut molestias voluptates quod non iure aspernatur tempora.', 'Six Cupcake Holder', 'E-Transfer'),
(37, '2017-04-07 08:33:50', 'One Time', NULL, '25-Sep-1992', 'Quo beatae nihil ullamco magnam adipisicing vero a', 'Qui numquam a in ad asperiores dolores dolor do ut dolorem harum amet, fugiat quo.', 'No Thanks!', 'Cash'),
(38, '2017-04-07 08:34:42', 'One Time', 'Delivery', '01-Oct-1973', 'Soluta dolore corrupti eligendi amet molestias qui', 'Laboriosam, veniam, velit, explicabo. Nisi dolor facilis quis deserunt adipisci quae aut do in voluptas irure tempora fugit, est in.', 'Six Cupcake Holder', 'E-Transfer'),
(39, '2017-04-07 08:36:16', 'One Time', 'Pick Up', '09-Oct-1981', 'Odio quo vel et quia quod fugit omnis vero volupta', 'Do sequi aut aute anim qui veniam, in deserunt ab dolorem enim dolores temporibus necessitatibus qui sunt voluptas quod.', 'No Thanks!', 'E-Transfer'),
(40, '2017-04-07 08:37:27', 'One Time', 'Pick Up', '09-Oct-1981', 'Odio quo vel et quia quod fugit omnis vero volupta', 'Do sequi aut aute anim qui veniam, in deserunt ab dolorem enim dolores temporibus necessitatibus qui sunt voluptas quod.', 'No Thanks!', 'E-Transfer'),
(41, '2017-04-07 08:37:44', 'One Time', 'Delivery', '10-Mar-1975', 'Officia aut at qui nisi autem id', 'Aliquam aperiam maxime enim porro labore accusantium exercitationem non quod amet, veritatis cupidatat quasi.', 'Single Cupcake Holder', 'E-Transfer'),
(42, '2017-04-07 08:59:47', 'Weekly', 'Pick Up', '18-Jan-2013', 'Eum inventore dolor et sed nostrud sint non', 'Itaque cupidatat voluptate sunt praesentium ex exercitation in velit quis in sunt accusantium cillum recusandae. Expedita.', 'Six Cupcake Holder', 'E-Transfer'),
(43, '2017-04-07 09:23:12', 'Weekly', 'Delivery', '07-Jul-2005', 'Nisi dolores rerum consectetur et reprehenderit', 'Dolorum fuga. Sequi in deserunt amet, quae amet, ipsum, veniam, incidunt, in voluptatem.', 'No Thanks!', 'E-Transfer'),
(44, '2017-04-07 09:27:04', 'Monthly', 'Pick Up', '08-Oct-1981', 'In exercitation eos quasi adipisci consequatur cup', 'Voluptatibus veniam, a et velit, cupiditate qui sit, ipsum incididunt sunt, eveniet, adipisicing aut hic rerum deserunt officia.', 'Six Cupcake Holder', 'Cash'),
(45, '2017-04-07 09:27:57', 'One Time', 'Pick Up', '19-Apr-2014', 'Tenetur asperiores molestiae quo officiis est culp', 'Reprehenderit nostrum nostrud eaque eveniet, in excepteur voluptatem, est sunt expedita duis illum, deserunt nesciunt, impedit, nemo officiis.', 'Single Cupcake Holder', 'Cash'),
(46, '2017-04-07 09:29:25', 'Monthly', 'Pick Up', '24-Mar-2004', 'In corrupti at optio cumque non duis amet earum sa', 'Vitae duis at eligendi est hic veniam, dolor praesentium id, nemo voluptas eiusmod commodi quaerat perferendis.', 'Six Cupcake Holder', 'Cash'),
(47, '2017-04-07 09:30:15', 'Monthly', 'Delivery', '26-Nov-2005', 'Culpa omnis dicta eu est placeat sit quisquam porr', 'Laborum. Qui quas et dolorem omnis ex itaque modi aut adipisci quis ex nostrud officiis non.', 'Single Cupcake Holder', 'Cash'),
(48, '2017-04-07 09:32:33', 'One Time', 'Pick Up', '06-Dec-2007', 'Ipsum ipsum at voluptas commodo ipsa enim quaerat ', 'Adipisci nisi molestiae laboriosam, maxime et aut porro quo Nam sit, rerum quia maiores eum natus ipsum ex.', 'Single Cupcake Holder', 'E-Transfer'),
(49, '2017-04-07 09:33:04', 'One Time', 'Pick Up', '03-Feb-1976', 'Neque dolore modi delectus rem', 'Et deserunt laudantium, dolores anim recusandae. Eiusmod mollitia sint exercitation numquam non nostrum magnam sint, ea.', 'Six Cupcake Holder', 'E-Transfer'),
(50, '2017-04-07 09:51:36', 'One Time', 'Pick Up', '22-Jun-2004', 'Laborum autem quo sit accusamus eum dolores velit ', 'Consequat. Commodo proident, asperiores dolor ut in assumenda nesciunt, impedit, animi, voluptas soluta dolore corrupti.', 'Single Cupcake Holder', 'Cash'),
(51, '2017-04-07 09:52:07', 'One Time', 'Delivery', '14-Nov-1979', 'Vel voluptas reprehenderit adipisicing aut velit s', 'Sequi omnis facilis rerum in magni distinctio. Qui dicta officia accusantium amet, facere fugiat, labore ab possimus.', 'Single Cupcake Holder', 'E-Transfer'),
(52, '2017-04-07 10:01:07', 'One Time', 'Delivery', '19-Sep-1996', 'Rerum dolor excepteur velit quidem et iste exercit', 'Eveniet, incidunt, explicabo. Sunt, sint, sed odit ab aut unde eaque unde voluptatem.', 'Single Cupcake Holder', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `flavour_id` smallint(4) NOT NULL,
  `products_desc` text NOT NULL,
  `type_id` smallint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `flavour_id`, `products_desc`, `type_id`) VALUES
(1, 1, 'Chocolate cake, chocolate frosting.', 1),
(2, 2, 'Vanilla cake, vanilla frosting.', 1),
(3, 6, 'Vanilla cake, caramel frosting, caramel drizzle.', 1),
(4, 7, 'Oreo cookie baked into chocolate cake, with cookie crumble frosting.', 1),
(5, 8, 'Lemon vanilla cake, lemon frosting.', 1),
(6, 9, 'Chocolate stout cake, bailey\'s frosting.', 1),
(7, 10, 'Vanilla funfetti cake, vanilla frosting.', 1),
(8, 11, 'Chocolate cake, vanilla frosting, chocolate ganache.', 2),
(9, 12, 'Vanilla cake, strawberry jam center, peanut butter frosting.', 2),
(10, 13, 'Vanilla tequila cake, orange grenadine tequila frosting.', 2),
(11, 14, 'Vanilla cake, pink lemonade frosting.', 2),
(12, 15, 'Coconut lime cake, coconut lime frosting.', 2),
(13, 16, 'Chocolate cola cake, whiskey frosting, chocolate whiskey ganache.', 2),
(14, 17, 'Chocolate cake, cherry compote center, whipped cream frosting.', 2),
(15, 18, 'Chai spice cake, chai spice frosting.', 3),
(16, 19, 'Chocolate beetroot cake, cinnamon cream cheese frosting.', 3),
(17, 20, 'Pumpkin spice cake, cream cheese frosting.', 3),
(18, 21, 'Gingerbread cake, cream cheese frosting.', 3),
(19, 22, 'Chocolate orange cake, chocolate cream cheese frosting.', 3),
(20, 23, 'Date cake, vanilla frosting.', 3),
(21, 24, 'Vanilla cake, maple frosting.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_retailers`
--

CREATE TABLE `tbl_retailers` (
  `retailers_id` int(10) UNSIGNED NOT NULL,
  `retailers_name` varchar(100) NOT NULL,
  `retailers_address` varchar(300) NOT NULL,
  `retailers_url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE `tbl_testimonials` (
  `testimonials_id` tinyint(4) UNSIGNED NOT NULL,
  `testimonials_name` varchar(100) NOT NULL,
  `testimonials_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `id` smallint(4) UNSIGNED NOT NULL,
  `type_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`id`, `type_name`) VALUES
(1, 'Classic'),
(2, 'Spring/Summer'),
(3, 'Fall/Winter');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'forestcitycakes@gmail.com', '$2y$10$uwOpcae4IoyK1h3kkXQ/xuur8208QBoZtz9NNXyW6nSp1I8WdA/4i', 'W1HfdwgNjdjleLwoiAu8pcIfde7cUAoDzDU4chopZVu64xMae4Iyqv1bFaCs', '2017-04-03 21:33:40', '2017-04-07 19:18:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lt_flavoursType`
--
ALTER TABLE `lt_flavoursType`
  ADD PRIMARY KEY (`flavoursType_id`);

--
-- Indexes for table `lt_ordersFlavours`
--
ALTER TABLE `lt_ordersFlavours`
  ADD PRIMARY KEY (`ordersFlavours_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_flavours`
--
ALTER TABLE `tbl_flavours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_retailers`
--
ALTER TABLE `tbl_retailers`
  ADD PRIMARY KEY (`retailers_id`);

--
-- Indexes for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  ADD PRIMARY KEY (`testimonials_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
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
-- AUTO_INCREMENT for table `lt_flavoursType`
--
ALTER TABLE `lt_flavoursType`
  MODIFY `flavoursType_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `lt_ordersFlavours`
--
ALTER TABLE `lt_ordersFlavours`
  MODIFY `ordersFlavours_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_flavours`
--
ALTER TABLE `tbl_flavours`
  MODIFY `id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `orders_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_retailers`
--
ALTER TABLE `tbl_retailers`
  MODIFY `retailers_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  MODIFY `testimonials_id` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
