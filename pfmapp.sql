-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 08, 2021 at 08:35 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pfmapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Technologie', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(2, 'Ingénierie', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(3, 'Gouvernement', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(4, 'Médical', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(5, 'Construction', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(6, 'Software', '2021-06-07 12:28:15', '2021-06-07 12:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `cname`, `slug`, `address`, `phone`, `website`, `logo`, `cover_photo`, `slogan`, `description`, `created_at`, `updated_at`) VALUES
(1, 10, 'Windler-Heathcote', 'windler-heathcote', '3092 Cormier Shores Apt. 051\nFeestton, MS 75981-4424', '267-902-6178', 'ledner.biz', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Fuga doloribus tempora voluptas labore nihil rerum. Ducimus modi esse distinctio et culpa vero sit. Consequatur aut numquam sit dicta numquam. Sed officia odit doloribus. Magni facere corporis sit et consequatur doloribus quam. Deleniti quia ut magnam exp', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(2, 4, 'Gottlieb Ltd', 'gottlieb-ltd', '765 Schamberger Island Apt. 301\nLake Ardella, WY 37571-6207', '+1.563.277.3720', 'lesch.com', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Qui alias ut placeat asperiores dicta eum minima. Laudantium perferendis consectetur quas non sequi. Cum et et a eius dignissimos sequi. Et quas voluptas et. Sed ab voluptatem esse quibusdam fugiat doloremque.', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(3, 6, 'Rempel LLC', 'rempel-llc', '7477 Swift Tunnel Apt. 635\nGladyshaven, CA 51972-0413', '269.845.1111', 'hahn.com', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Illo quibusdam impedit mollitia nihil sed odit. Dolore saepe minus ut quia cumque omnis sunt. Tempora non voluptatem aut corporis eius doloremque aut. Qui fuga libero excepturi nobis sunt quam quia.', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(4, 4, 'Kihn, Hammes and Medhurst', 'kihn-hammes-and-medhurst', '1373 Hector Village Suite 266\nAndersonton, ME 74930', '702.340.9496', 'goodwin.com', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Non rem et voluptatem. Reprehenderit voluptatem et vel ab tempore blanditiis ea. Officia quos sint soluta. Nihil esse adipisci adipisci aliquam. Et sequi cumque aut quas natus. Perferendis ut qui eius dolores autem. Corporis id natus molestiae commodi a e', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(5, 6, 'Abbott Ltd', 'abbott-ltd', '15259 Durgan View\nRitchiebury, MT 10391-4285', '+1 (763) 304-3155', 'jaskolski.com', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Quos libero consequatur tenetur et tenetur non earum. Magni illum id fugiat aut autem. Optio omnis repellendus consequuntur asperiores. Aut non doloremque quod eaque quo facere. Voluptatem facere quisquam est odio. Et consequatur excepturi quisquam nesciu', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(6, 6, 'Hagenes, D\'Amore and Hettinger', 'hagenes-damore-and-hettinger', '8977 Corwin Field\nRociobury, GA 64397', '+13416977915', 'beatty.com', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Sapiente facilis voluptas perferendis nisi laborum ipsum. Autem id rerum omnis aliquid et ex. Cum autem placeat sit veritatis culpa voluptatem.', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(7, 3, 'Gleichner PLC', 'gleichner-plc', '98049 Filomena Tunnel\nNew Monica, VT 88697-8035', '+1-351-493-0002', 'doyle.org', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Ut omnis quis sed molestiae tempora. Et esse nihil est odit voluptatibus. Quasi nesciunt excepturi voluptates pariatur sint qui voluptatum.', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(8, 7, 'Sawayn-Hickle', 'sawayn-hickle', '181 Raynor Highway Suite 285\nNew Destiniview, VA 71679', '(430) 795-9878', 'kihn.biz', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Dolores sunt earum velit in. Quidem in deleniti eius totam. Maiores pariatur sed molestias inventore labore voluptatem est. Culpa magnam corrupti quo odit. Id impedit inventore eius adipisci velit. Expedita expedita quibusdam reprehenderit tempora esse ve', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(9, 5, 'Fay Inc', 'fay-inc', '5991 Ryan Bypass Suite 868\nEast Taureanhaven, MN 60572', '1-458-964-6383', 'cruickshank.biz', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Velit est maxime nostrum enim. Reprehenderit aliquam est beatae fugiat et. Impedit nostrum doloribus ut reiciendis. Quos ut delectus et ut quod dolorum quia expedita. Recusandae nulla vel consequatur ducimus cum nisi. Ut modi doloribus temporibus ut dolor', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(10, 6, 'Lang-Bauch', 'lang-bauch', '892 Emil Drive\nRoweside, ID 74143', '480.382.7281', 'rice.biz', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Quasi eius repellat harum consequatur. Necessitatibus aut distinctio eaque delectus. Dolorem vel iste laboriosam amet aperiam. Provident odio dicta consequuntur laudantium. Quae mollitia qui quo tenetur itaque blanditiis vel. Neque molestias autem nostrum', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(11, 3, 'Bins Inc', 'bins-inc', '47896 Hauck Knolls\nCamronstad, CA 53067', '+14432651594', 'rath.com', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Enim maxime eum itaque. Perspiciatis est aut ipsam dolore. Id perspiciatis ut eaque illum excepturi molestiae facere. Sed fugit eveniet aut autem rem. Sequi mollitia sed eligendi nobis repellat. Et qui rerum esse est nulla sapiente. Et sed culpa dolores i', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(12, 9, 'Carroll Group', 'carroll-group', '7407 Bonita Point\nWaltonchester, MN 16316', '+1-407-478-1187', 'steuber.com', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Incidunt consequatur voluptatibus vel cumque itaque autem incidunt. Quaerat dignissimos quasi aut sint sed et adipisci animi. Consequatur aut eius expedita voluptates. Molestias quaerat ut corporis assumenda. Consequatur dignissimos qui id sint. Excepturi', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(13, 6, 'Ullrich, Walker and Rau', 'ullrich-walker-and-rau', '104 Bednar Valleys Apt. 616\nPort Kaylichester, ND 63902-8513', '1-820-720-8595', 'block.com', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Magni sint magnam fugiat vero. Dignissimos quod velit nemo possimus. Beatae qui sed architecto ut dolorem corporis. Rerum facilis mollitia praesentium non inventore reprehenderit est. Vero hic quis nemo totam odio dolor. Eaque rem dicta a quisquam praesen', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(14, 6, 'Mitchell-Blanda', 'mitchell-blanda', '543 Becker Creek\nLake Esther, ID 39273', '+1-870-900-5825', 'wilderman.biz', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Et qui pariatur necessitatibus quod sint aliquid enim. Aut necessitatibus autem doloremque iure magnam quis. Reprehenderit laborum deleniti quam tenetur cumque non enim aut. Quo et rerum est. At molestiae dolor labore sint minima ducimus laudantium. Porro', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(15, 3, 'Prohaska-Schneider', 'prohaska-schneider', '27241 Jessika Center Suite 289\nLake Olinland, AZ 67783', '+1.838.984.6468', 'reichel.org', 'man.png', 'tumblr-image-sizes-banner.png', 'learn-earn and grow', 'Nihil placeat praesentium quia assumenda fugit delectus qui. Tempore repellat repudiandae aut aut quos aspernatur. Magni eum est ea et pariatur atque eos. Deserunt fugit autem mollitia voluptate nostrum voluptatem.', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(16, 12, 'FORCE AGADIR', 'force-agadir', 'Gueliz, Marrakech', '0528894035', 'fstg-marrakech.ac.ma/FST/', '1623139914.png', '1623139886.jpg', 'Pour un bon avenir', 'Faculté des Sciences Techniques Marrakech', '2021-06-08 07:10:22', '2021-06-08 07:13:25');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `last_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `company_id`, `title`, `slug`, `description`, `roles`, `category_id`, `position`, `address`, `type`, `status`, `last_date`, `created_at`, `updated_at`) VALUES
(1, '6', '6', 'Ut accusamus qui dolores repudiandae ea ullam. Qui rerum ducimus dolor odit sit. Minus ullam suscipit laborum voluptatem ipsam iure.', 'ut-accusamus-qui-dolores-repudiandae-ea-ullam-qui-rerum-ducimus-dolor-odit-sit-minus-ullam-suscipit-laborum-voluptatem-ipsam-iure', 'Qui fugit labore sapiente est omnis sequi non quia. Odit consequatur veniam temporibus ullam. Qui omnis sunt placeat nam quam eius expedita.', 'Nemo aut provident maiores rem laboriosam eum. Ad eos aut ipsum commodi dolorum. Pariatur reiciendis repudiandae vel eum vero quos. Quos eos quia aut odit.', 1, 'Organizational Development Manager', '54491 Michael Underpass Apt. 269\nAnnabellport, DE 55927', 'fulltime', 1, '2014-07-23', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(2, '2', '8', 'Non ea rerum cumque. Vel quis id enim repellat eum non. Tempora non non provident ut hic. Necessitatibus numquam laudantium quae eveniet doloremque et corrupti.', 'non-ea-rerum-cumque-vel-quis-id-enim-repellat-eum-non-tempora-non-non-provident-ut-hic-necessitatibus-numquam-laudantium-quae-eveniet-doloremque-et-corrupti', 'Maxime quod magnam qui enim dolores cum. Saepe a reiciendis impedit nemo corporis neque qui veniam. Omnis quisquam molestias aut consequatur praesentium eligendi.', 'Sed et vitae fuga minus. Consequatur et quas tempore quis sit accusantium dicta. Quis vel voluptatem ullam commodi commodi minima tempore aut.', 2, 'Bindery Machine Operator', '677 Hal Lake\nGloverville, LA 98094', 'fulltime', 1, '1979-10-31', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(3, '3', '13', 'Sed quidem provident odio cum. Adipisci et est velit laboriosam dolores. Velit ea harum quisquam qui pariatur quae et. Eveniet nisi quos nihil officiis praesentium.', 'sed-quidem-provident-odio-cum-adipisci-et-est-velit-laboriosam-dolores-velit-ea-harum-quisquam-qui-pariatur-quae-et-eveniet-nisi-quos-nihil-officiis-praesentium', 'Consequuntur corrupti ducimus ut et voluptatem voluptatum cumque. Est voluptas sed voluptatum odit ab minima voluptatum.', 'Qui a cupiditate laboriosam pariatur itaque quidem quos. Et est aperiam sequi qui tempore. Voluptas vero dolorum provident ad quam atque fugit at.', 4, 'Casting Machine Set-Up Operator', '91390 Mann Expressway\nNorth Lydia, TX 57430', 'fulltime', 0, '2005-01-01', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(4, '3', '15', 'Ea sit debitis exercitationem omnis dignissimos eos iste odit. Harum nulla eaque vitae tempora magni id eum. Sed inventore nemo perferendis.', 'ea-sit-debitis-exercitationem-omnis-dignissimos-eos-iste-odit-harum-nulla-eaque-vitae-tempora-magni-id-eum-sed-inventore-nemo-perferendis', 'Ipsa consequatur doloribus corrupti ut. Consectetur adipisci facilis voluptas ad. Unde eligendi sequi et sunt ut eum. Blanditiis veniam cupiditate consequatur aut. Dolor aut autem dolores sed ab possimus. Ad voluptate earum voluptatem quo sed dolor. Est eligendi harum est omnis maiores placeat eveniet. Repellat repellat soluta similique aut et consectetur. Qui est sequi vitae ea et aperiam. Ab praesentium sit nisi veniam repellendus esse.', 'Deserunt sit odit omnis voluptas in quas. Rem ipsam temporibus illum rerum itaque. Quia eum voluptatem ex commodi eius voluptatibus sit. Deleniti quibusdam sunt quidem numquam.', 1, 'Nursery Worker', '44631 Reynolds Forks\nPort Raphaelle, NJ 57705-4902', 'fulltime', 1, '2009-06-07', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(5, '4', '12', 'Rerum numquam ab expedita ea reprehenderit qui. Error sit omnis aliquam ullam molestiae. Nihil aut consectetur veritatis sint. Atque laudantium eos vitae ut aut quia necessitatibus vitae.', 'rerum-numquam-ab-expedita-ea-reprehenderit-qui-error-sit-omnis-aliquam-ullam-molestiae-nihil-aut-consectetur-veritatis-sint-atque-laudantium-eos-vitae-ut-aut-quia-necessitatibus-vitae', 'Pariatur atque quaerat doloremque ratione asperiores unde veritatis esse. Non molestiae recusandae inventore et voluptates vel. Eum esse fugit placeat repudiandae a. Qui alias voluptates ratione incidunt. Voluptates officia non facilis aliquam. Nulla nisi laborum et et quia culpa exercitationem magni. Voluptatum quis minima eligendi expedita sit voluptatibus dolore sequi. Aut soluta enim fuga optio. Et alias vel aperiam quibusdam.', 'Velit occaecati non quasi natus quo. Fugit nihil quia natus consequuntur sed doloremque provident. Omnis eveniet doloremque consectetur necessitatibus. Sapiente ut et sunt.', 5, 'Welder', '469 Augustus Loop\nLake Eveline, NY 87825', 'fulltime', 0, '2014-08-04', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(6, '5', '14', 'Voluptatem necessitatibus eos minus quaerat quia. Voluptatem dolor odit quia sunt molestiae est. Ab et dolorem tempora sed asperiores eligendi. Consequatur eum commodi laborum quasi.', 'voluptatem-necessitatibus-eos-minus-quaerat-quia-voluptatem-dolor-odit-quia-sunt-molestiae-est-ab-et-dolorem-tempora-sed-asperiores-eligendi-consequatur-eum-commodi-laborum-quasi', 'Velit ipsa incidunt cupiditate omnis adipisci inventore. Tenetur aspernatur excepturi tenetur corrupti tenetur enim. Molestias alias cum nesciunt vel. Ab et facilis expedita enim voluptatem rerum.', 'Suscipit repellendus id ipsam laudantium deleniti. Nam assumenda dolores voluptas ut necessitatibus provident odio.', 2, 'Distribution Manager', '27377 Kuvalis Run\nZionton, FL 33990', 'fulltime', 1, '1995-08-05', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(7, '1', '4', 'Adipisci nulla unde quos ut et quam. Tempore commodi animi aut itaque rem. Dolorem exercitationem sit culpa exercitationem voluptas assumenda. Animi quam culpa itaque id error.', 'adipisci-nulla-unde-quos-ut-et-quam-tempore-commodi-animi-aut-itaque-rem-dolorem-exercitationem-sit-culpa-exercitationem-voluptas-assumenda-animi-quam-culpa-itaque-id-error', 'Dolorem cupiditate voluptates omnis magnam officiis quis eveniet. Doloribus at vel ut esse. Aut iure dolorem accusamus ut est.', 'Voluptates consequatur est quia voluptatum minus quia. Sed quidem molestias incidunt eligendi. Ex dicta doloribus odit aut. Accusantium ullam in et dolor omnis ut.', 5, 'Laundry OR Dry-Cleaning Worker', '108 Ruecker Track Apt. 447\nEsperanzastad, ND 85534-1463', 'fulltime', 1, '2014-03-20', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(8, '7', '8', 'A natus similique quibusdam animi eum dolores assumenda. Animi reiciendis voluptate laborum. Voluptates aperiam omnis natus eaque.', 'a-natus-similique-quibusdam-animi-eum-dolores-assumenda-animi-reiciendis-voluptate-laborum-voluptates-aperiam-omnis-natus-eaque', 'Qui nisi asperiores quasi necessitatibus at. Sint sunt autem est distinctio unde. Ut porro autem in. Culpa rem voluptates aut totam sed natus velit.', 'Similique voluptatibus ea exercitationem ea nesciunt optio nesciunt maiores. Est omnis temporibus qui.', 3, 'Computer Systems Analyst', '26126 Evans Green\nKacietown, MD 01284-6438', 'fulltime', 0, '2009-09-04', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(9, '3', '3', 'Qui cum assumenda fuga quam. Eveniet mollitia est porro beatae. Aut repudiandae inventore aut ut qui.', 'qui-cum-assumenda-fuga-quam-eveniet-mollitia-est-porro-beatae-aut-repudiandae-inventore-aut-ut-qui', 'Culpa quis cumque aut ducimus incidunt. Est aspernatur molestiae ipsa dolorum tenetur laborum repudiandae ex. Perferendis deserunt itaque voluptates fuga eveniet omnis quaerat omnis. Nihil enim aspernatur explicabo. Quos aut temporibus rerum enim quidem praesentium voluptate sapiente. Minus qui ex occaecati reprehenderit illum sed error. Commodi ullam doloribus dolor accusantium sint. Atque sed est voluptas doloribus omnis repudiandae quaerat. Incidunt quasi voluptas impedit adipisci similique.', 'Assumenda harum dicta quos nemo. Cum voluptas odit ut quo voluptatem blanditiis sit. Quia molestias eum dignissimos qui. Non officiis reprehenderit inventore impedit dolores quisquam.', 5, 'Manufacturing Sales Representative', '3955 Hermann Villages\nDonnellytown, NC 55957', 'fulltime', 0, '1985-01-07', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(10, '4', '12', 'Odio voluptate ea vero fugiat mollitia quo aut qui. Corrupti iure non unde nihil placeat et molestias. Modi et omnis facilis aliquid a.', 'odio-voluptate-ea-vero-fugiat-mollitia-quo-aut-qui-corrupti-iure-non-unde-nihil-placeat-et-molestias-modi-et-omnis-facilis-aliquid-a', 'Consequatur fugit id sunt laudantium eveniet qui. Eveniet soluta reiciendis molestiae facilis. Id dolores voluptate nulla corporis. Architecto eveniet possimus aut mollitia ut rem.', 'Delectus error harum et et saepe. Tenetur repellendus repellat aut possimus enim possimus. Enim accusamus rerum veritatis non. Ipsa debitis veritatis alias enim maxime et aut.', 4, 'Fashion Designer', '182 Spencer Prairie\nNew Cedrickland, NH 30727-5557', 'fulltime', 1, '1980-10-12', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(11, '6', '5', 'Et esse eveniet officia debitis iste aperiam. Non quia et officia beatae voluptatem. Est perferendis corrupti reiciendis eos ullam. Libero rerum debitis quod ratione quibusdam labore dolor.', 'et-esse-eveniet-officia-debitis-iste-aperiam-non-quia-et-officia-beatae-voluptatem-est-perferendis-corrupti-reiciendis-eos-ullam-libero-rerum-debitis-quod-ratione-quibusdam-labore-dolor', 'Sunt fugit perferendis eum non explicabo saepe. Sequi molestiae dignissimos est quae aut. Qui soluta ut doloremque.', 'Recusandae temporibus voluptatem illo minus. Repellendus veritatis pariatur necessitatibus architecto aperiam dolores provident.', 5, 'Chemistry Teacher', '92212 Volkman Plains Suite 101\nProhaskafurt, IL 03902-3909', 'fulltime', 0, '2010-02-06', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(12, '3', '12', 'Quia odit optio enim atque praesentium quo voluptatem. Libero sunt numquam eaque modi. Maxime iste ut est quisquam aperiam aut blanditiis. Magnam tempora cum veniam ullam exercitationem.', 'quia-odit-optio-enim-atque-praesentium-quo-voluptatem-libero-sunt-numquam-eaque-modi-maxime-iste-ut-est-quisquam-aperiam-aut-blanditiis-magnam-tempora-cum-veniam-ullam-exercitationem', 'Consectetur aut odit quas exercitationem quia quia voluptatem. In aut commodi vero modi placeat consectetur vitae. Ullam quo dolor mollitia.', 'Itaque iure labore praesentium eum rerum minus. Aut et ducimus sint fugiat aut fugit ipsam. Illo accusamus ullam architecto magnam et veritatis ut.', 1, 'Historian', '872 Mose Land\nLeannonbury, MI 84691-8311', 'fulltime', 0, '1973-03-26', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(13, '2', '6', 'Magni architecto eum quod aut. Ex consequatur animi neque sint animi. Quibusdam et exercitationem aliquid ea qui laboriosam et. Reprehenderit ut aliquid recusandae quas est.', 'magni-architecto-eum-quod-aut-ex-consequatur-animi-neque-sint-animi-quibusdam-et-exercitationem-aliquid-ea-qui-laboriosam-et-reprehenderit-ut-aliquid-recusandae-quas-est', 'Est soluta cupiditate eligendi iste ducimus. Expedita delectus voluptatem deserunt amet. Veritatis molestiae est corporis quo accusantium est voluptatibus accusantium.', 'Laboriosam odio suscipit error sunt fugit non. Nemo odio autem atque in. Quia molestias optio dolorem assumenda porro ex. Id voluptatibus at ex eos molestiae ut est.', 2, 'Real Estate Association Manager', '77301 Kylie Springs\nLake Leonor, MS 67870', 'fulltime', 1, '1985-03-24', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(14, '4', '12', 'Explicabo eum voluptatem sint sint. Neque maxime id ullam iste. Eaque in earum quas ut.', 'explicabo-eum-voluptatem-sint-sint-neque-maxime-id-ullam-iste-eaque-in-earum-quas-ut', 'Optio sint exercitationem ratione molestiae et. Ipsum non unde voluptas velit et consectetur. Culpa ullam non ut nisi. Corporis laudantium consequatur maiores voluptatum quo. Ut esse beatae quo ea. Rerum perferendis impedit est eligendi. Aut magni qui optio voluptas provident blanditiis. Dolores sunt consequatur culpa veniam aut fuga. Aut fugit facilis soluta vero aut voluptas ut. Numquam reprehenderit sit qui aut.', 'Iusto et et nisi cupiditate laudantium suscipit. Laudantium ipsam aut dolores nesciunt est enim magni.', 1, 'Fiberglass Laminator and Fabricator', '2360 Cornelius Alley\nSouth Derick, NJ 19025', 'fulltime', 0, '2001-05-02', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(15, '6', '5', 'Voluptatum voluptatem officia eos quae soluta possimus et corporis. Ea quos culpa eligendi ut veniam voluptas. Quia in ex et.', 'voluptatum-voluptatem-officia-eos-quae-soluta-possimus-et-corporis-ea-quos-culpa-eligendi-ut-veniam-voluptas-quia-in-ex-et', 'Omnis culpa odio dolorem alias iure. Et doloribus nisi soluta eum maxime quae ducimus incidunt. Officia excepturi in occaecati nisi. Mollitia maiores provident quo delectus cumque. Rerum sed cum ad quis. Voluptas quas quia nulla neque pariatur nihil voluptas. Sed adipisci minima ut nulla eligendi. Voluptas quia maiores deleniti sed voluptatem.', 'Minus et odit aut laborum est aut. Perspiciatis et magnam magni. Sed possimus soluta voluptatem autem quasi ut id. Pariatur pariatur recusandae autem distinctio rem voluptas ea.', 1, 'Athletic Trainer', '339 Prohaska Square\nNew Yasmine, DE 63762', 'fulltime', 0, '2006-11-23', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(16, '12', '16', 'Professeur Chercheur', 'professeur-chercheur', 'Avoir une Doctorat en Informatique', 'Professeur Chercheur en Informatique', 2, 'Professeur Chercheur en Informatique', 'Gueliz, Marrakech', 'fulltime', 1, '0000-00-00', '2021-06-08 07:16:50', '2021-06-08 07:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `job_user`
--

CREATE TABLE `job_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_user`
--

INSERT INTO `job_user` (`id`, `job_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 11, '2021-06-08 07:07:45', '2021-06-08 07:07:45'),
(2, 16, 11, '2021-06-08 07:19:04', '2021-06-08 07:19:04');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2021_06_04_200621_create_profiles_table', 1),
(15, '2021_06_04_200656_create_companies_table', 1),
(16, '2021_06_04_200846_create_categories_table', 1),
(17, '2021_06_04_202003_create_jobs_table', 1),
(18, '2021_06_04_202319_create_job_user_table', 1),
(19, '2021_06_04_202355_create_favourites_table', 1),
(20, '2021_06_05_233453_add_phone_number_to_profiles_table', 1);

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_letter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `address`, `phone_number`, `gender`, `dob`, `experience`, `bio`, `cover_letter`, `resume`, `avatar`, `created_at`, `updated_at`) VALUES
(1, '11', 'Gueliz, Marrakech', '0658142766', 'male', '11/14/1999', '6 ans d\'éxpereince en informatique', '6 ans d\'éxpereince en informatique', 'public/files/1779yWDL3bhlZVSJxSTgCCEQw8TiQrEpksTOfD23.pdf', 'public/files/1CgPpzTrGXnY9OvuhZOqja7MG8h8RZP53KXJh88N.pdf', '1623139758.png', '2021-06-08 07:07:30', '2021-06-08 07:09:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maudie Glover', 'seeker', 'susie44@example.com', '2021-06-07 12:28:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uNo28kW0vr', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(2, 'Ms. Arvilla Grimes II', 'seeker', 'rwolff@example.net', '2021-06-07 12:28:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yZeVd4LAj8', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(3, 'Kurtis Howell', 'seeker', 'cweissnat@example.org', '2021-06-07 12:28:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SheebDXuAi', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(4, 'Savannah Witting', 'seeker', 'hansen.daphne@example.org', '2021-06-07 12:28:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yfeoWM07kc', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(5, 'Zakary Walter', 'seeker', 'noah78@example.net', '2021-06-07 12:28:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xoptFRYOTs', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(6, 'Miss Rosella O\'Conner I', 'seeker', 'merritt.murazik@example.com', '2021-06-07 12:28:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lTC5Dz0Cgu', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(7, 'Patience Reichel', 'seeker', 'mariane09@example.net', '2021-06-07 12:28:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'i4RoDMWnk2', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(8, 'Dr. Ned Towne Jr.', 'seeker', 'zkutch@example.net', '2021-06-07 12:28:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZMREhA79EO', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(9, 'Adelle Mueller', 'seeker', 'cgerlach@example.org', '2021-06-07 12:28:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gWsDUqIxzX', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(10, 'Prof. Clinton Stanton II', 'seeker', 'hspencer@example.com', '2021-06-07 12:28:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lUCBPoWEmP', '2021-06-07 12:28:15', '2021-06-07 12:28:15'),
(11, 'Youssef Ettafssaoui', 'seeker', 'yettafssaoui2@gmail.com', NULL, '$2y$10$JLZHEcOvmxKQ9bjNCFFXEuPilm6n1xmTFcTNKsQ3cq2GDYrgC4Yoe', NULL, '2021-06-08 07:07:30', '2021-06-08 07:07:30'),
(12, '', 'employer', 'force@gmail.com', NULL, '$2y$10$YvnjILP2g5txEbb8/K7gjehPis7bqurJAsgrIRoFYnA4p7nA7AHs2', NULL, '2021-06-08 07:10:22', '2021-06-08 07:10:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_user`
--
ALTER TABLE `job_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `job_user`
--
ALTER TABLE `job_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
