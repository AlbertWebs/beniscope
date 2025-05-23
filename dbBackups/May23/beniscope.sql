-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2025 at 12:51 PM
-- Server version: 8.0.42-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beniscope`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `philosopy` text COLLATE utf8mb4_unicode_ci,
  `professionalism` text COLLATE utf8mb4_unicode_ci,
  `handpicked` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `purpose` text COLLATE utf8mb4_unicode_ci,
  `team` text COLLATE utf8mb4_unicode_ci,
  `vision` text COLLATE utf8mb4_unicode_ci,
  `mission` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `main` tinyint NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` int DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `main`, `title`, `author`, `slung`, `category`, `video`, `link`, `meta`, `content`, `image_one`, `created_at`, `updated_at`) VALUES
(1, 1, 'construction and design disciplines and expertise, Beniscope delivers excellent design perspective Through', NULL, 'construction-and-design-disciplines-and-expertise-beniscope-delivers-excellent-design-perspective-through', NULL, NULL, NULL, 'In the world of construction consultancy and project management, Beniscope stands out by delivering exceptional design perspectives that are not only aesthetically pleasing but also strategically aligned with business objectives.', '<div>\n\n<strong>Construction and Design Disciplines and Expertise: Liquid Delivers Excellent Design Perspective</strong><br>\n\nIn the realm of construction and design, achieving a seamless integration of functionality and aesthetics is paramount. Liquid stands out as a leader in delivering exceptional design perspectives through a blend of expertise and innovation across various disciplines. From architectural planning and structural engineering to interior design and project management, Liquid harnesses the power of multidisciplinary collaboration to create impactful, sustainable, and visually striking spaces.<br><br>\n\n<br><strong>Comprehensive Approach to Construction and Design</strong>\n\nAt Liquid, every project begins with a comprehensive approach that considers the unique requirements and goals of the client. This involves meticulous planning and consultation, ensuring that every element aligns with the overall vision. The team leverages extensive experience in architectural design, construction management, and engineering to execute projects with precision and finesse.<br><br>\n\n<br><strong>Expertise Across Disciplines</strong><br>\n\nLiquid’s expertise spans multiple disciplines, making it a one-stop solution for complex projects. The company’s architects are adept at translating concepts into functional spaces, while its engineers focus on creating structures that are both robust and aesthetically pleasing. Additionally, the interior design team works to infuse creativity and style, turning functional spaces into captivating environments.<br><br>\n\n<br><strong>Innovation-Driven Design</strong><br>\n\nWhat sets Liquid apart is its commitment to innovation. The firm continuously adopts cutting-edge design tools and sustainable practices to deliver solutions that are not only visually compelling but also environmentally responsible. By integrating the latest trends in construction technology, Liquid ensures that every project meets industry standards while pushing the boundaries of design.<br><br>\n\n<br><strong>Client-Centric Approach</strong><br>\n\nLiquid’s design perspective is deeply rooted in a client-centric approach. The team prioritizes open communication, actively involving clients in every phase of the project. This collaborative model fosters transparency and ensures that the final outcome reflects the client’s vision while exceeding their expectations.<br>\n\n<br><strong>Conclusion</strong><br>\n\nFrom concept to completion, Liquid’s commitment to delivering exceptional design perspectives across construction and design disciplines remains unwavering. By integrating expertise, innovation, and a client-first approach, the firm continues to set new benchmarks in the industry, creating spaces that are both impactful and inspiring.\n\n</div>\n', '15.webp', '2025-05-09 13:46:03', NULL),
(2, 0, 'Beniscope delivers excellent design perspective Through a unique combinations', NULL, 'beniscope-delivers-excellent-design-perspective-through-a-unique-combination', NULL, NULL, NULL, 'In a world often saturated with the predictable, Beniscope emerges as a beacon of fresh design thinking. We believe that truly exceptional design isn\'t born from a singular approach, but rather from the dynamic interplay of diverse elements. ', '<p>In a world often saturated with the predictable, Beniscope emerges as a beacon of fresh design thinking. We believe that truly exceptional design isn\'t born from a singular approach, but rather from the dynamic interplay of diverse elements. At Beniscope, we\'ve cultivated a unique combinations to deliver design perspectives that are not only aesthetically stunning but also profoundly effective.</p>\r\n\r\n<p>For too long, the design landscape has often been segmented. You might find studios excelling in sleek digital interfaces but lacking a nuanced understanding of physical space, or perhaps agencies brimming with creative flair but missing the strategic rigor to drive tangible results. Beniscope breaks down these silos.</p>\r\n\r\n<p>Our approach begins with a deep dive into understanding the core needs and aspirations of our clients and their audiences. We don\'t just scratch the surface; we immerse ourselves in the context, seeking to uncover the underlying motivations and challenges that shape every project. This <strong>human-centered empathy</strong> forms the bedrock of our design philosophy.</p>\r\n\r\n<p>Building upon this foundation, we harness the power of <strong>cutting-edge technology</strong>. From advanced prototyping tools to sophisticated data analysis, we leverage the latest innovations to inform our design decisions and bring our visions to life with precision and efficiency. Technology isn\'t just a tool for us; it\'s an integral part of the creative process, enabling us to explore new possibilities and push the boundaries of what\'s achievable.</p>\r\n\r\n<p>Finally, woven throughout our process is a <strong>rigorous artistic sensibility</strong>. We believe that design, at its heart, is an art form. Our team of designers brings a keen eye for detail, a passion for aesthetics, and a commitment to crafting experiences that are not only functional but also deeply resonant and visually captivating.</p>\r\n\r\n<p>This unique combination – the empathetic understanding of human needs, the strategic application of technology, and the unwavering pursuit of artistic excellence – allows Beniscope to deliver design perspectives that are truly exceptional. We don\'t just create solutions; we craft experiences that connect, inspire, and drive meaningful impact.</p>\r\n\r\n<p>Whether you\'re looking to redefine your brand identity, create intuitive digital products, or transform physical spaces into engaging environments, Beniscope offers a fresh and powerful perspective. We invite you to explore our portfolio and discover how our unique combination can elevate your vision.</p>\r\n\r\n<p><strong>Stay tuned for future posts where we\'ll delve deeper into our process and showcase some of the exciting projects we\'re working on!</strong></p>\r\n\r\n<p>Possible areas to customize and expand:</p>\r\n\r\n<ul>\r\n    <li>Replace the bracketed placeholders: Be specific about the 2-3 key elements that define Beniscope\'s unique combination.</li>\r\n    <li>Add visuals: Include images or examples of Beniscope\'s work to make the blog more engaging.</li>\r\n    <li>Call to action: Consider adding a clear call to action, such as \"Contact us for a consultation\" or \"Learn more about our services.\"</li>\r\n    <li>Author bio: Include a brief bio of the blog author or Beniscope.</li>\r\n    <li>Social sharing buttons: Make it easy for readers to share the blog post.</li>\r\n    <li>Keywords for SEO: Ensure the blog post incorporates relevant keywords for search engine optimization.</li>\r\n</ul>', '06.webp', '2025-05-09 13:46:10', NULL),
(3, 0, 'How to Use Lighting to Create Mood, Style, and Function in Any Room', NULL, 'how-to-use-lighting-to-create-mood-style-and-function-in-any-room', NULL, NULL, NULL, 'Lighting is a powerful design element that can transform any room by setting the mood, enhancing the style, and improving functionality. Whether you\'re looking to create a cozy ambiance, highlight specific features, or provide ample light for everyday tasks, the right lighting strategy can make all the difference.', '<div class=\"blog\">\r\n  <h1>How to Use Lighting to Create Mood, Style, and Function in Any Room</h1>\r\n  <p>Lighting is a powerful design element that can transform any room by setting the mood, enhancing the style, and improving functionality. Whether you\'re looking to create a cozy ambiance, highlight specific features, or provide ample light for everyday tasks, the right lighting strategy can make all the difference.</p>\r\n\r\n  <h2>1. Understand the Types of Lighting</h2>\r\n  <p>There are three main types of lighting: ambient, task, and accent. Ambient lighting provides overall illumination, task lighting focuses on specific areas for activities, and accent lighting highlights focal points or decorative elements. Combining these types effectively can create a balanced and functional lighting design.</p>\r\n\r\n  <h2>2. Set the Mood with Ambient Lighting</h2>\r\n  <p>Ambient lighting sets the overall tone of a room. Use ceiling fixtures, chandeliers, or recessed lights to create a warm and inviting atmosphere. Dimmers are great for adjusting the intensity, allowing you to switch from bright, functional lighting to a softer, more relaxing glow.</p>\r\n\r\n  <h2>3. Enhance Style with Accent Lighting</h2>\r\n  <p>Accent lighting is perfect for adding character and highlighting key features such as artwork, architectural details, or statement furniture. Wall sconces, track lighting, and spotlights can draw attention to these elements while adding visual interest to the room.</p>\r\n\r\n  <h2>4. Increase Functionality with Task Lighting</h2>\r\n  <p>Task lighting provides focused illumination for specific activities like reading, cooking, or working. Desk lamps, under-cabinet lights, and pendant lights are excellent for creating targeted light that enhances visibility without straining the eyes.</p>\r\n\r\n  <h2>5. Layer Your Lighting for Depth and Dimension</h2>\r\n  <p>A well-designed room incorporates multiple layers of lighting to create depth and versatility. Start with ambient lighting for general illumination, add task lighting for functionality, and use accent lighting to complete the look and highlight focal points.</p>\r\n\r\n  <h2>6. Choose the Right Bulbs</h2>\r\n  <p>The type of bulb you choose also affects the mood and style. Warm white bulbs create a cozy atmosphere, while cool white bulbs are great for workspaces. Consider LED bulbs for energy efficiency and smart bulbs for customizable color and brightness.</p>\r\n\r\n  <h2>7. Conclusion</h2>\r\n  <p>Lighting is more than just a functional necessity—it’s a powerful design tool that can dramatically change the look and feel of any room. By combining ambient, accent, and task lighting strategically, you can create a space that is not only stylish but also perfectly suited to your needs. Experiment with different fixtures, placements, and bulb types to achieve the perfect lighting balance.</p>\r\n</div>\r\n', '18.webp', '2025-05-09 13:46:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int UNSIGNED NOT NULL,
  `cat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `col` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat`, `image`, `description`, `col`, `created_at`, `updated_at`) VALUES
(1, 'Steel', NULL, NULL, '0', NULL, NULL),
(2, 'Cement', NULL, NULL, '0', NULL, NULL),
(3, 'Concrete', NULL, NULL, '0', NULL, NULL),
(4, 'Binding Wire', NULL, NULL, '0', NULL, NULL),
(5, 'Wood', NULL, NULL, '0', NULL, NULL),
(6, 'Stone', NULL, NULL, '0', NULL, NULL),
(7, 'Bricks', NULL, NULL, '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

CREATE TABLE `copyright` (
  `id` int UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2025_05_21_064958_create_projects_table', 1),
(2, '2025_05_21_072955_create_project__categories_table', 2),
(3, '2025_05_21_090609_create_sub_categories_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_raw` int DEFAULT NULL,
  `price_wholesale` int DEFAULT '0',
  `offer` tinyint NOT NULL DEFAULT '0',
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'In Stock',
  `meta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `combo` int DEFAULT NULL,
  `wholesale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` int NOT NULL DEFAULT '500',
  `cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_cat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint NOT NULL DEFAULT '0',
  `trending` tinyint NOT NULL DEFAULT '0',
  `deal` smallint NOT NULL DEFAULT '0',
  `banner` tinyint NOT NULL DEFAULT '0',
  `slider` tinyint NOT NULL DEFAULT '0',
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `content` text COLLATE utf8mb4_unicode_ci,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `category`, `slung`, `meta`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Kiema\'s Resident', 3, 'kiema-resident', ' This 3-bedroom villa features all ensuite bedrooms, a spacious living room, dining area, modern kitchen, laundry room, and a garage. The property also includes a beautiful landscape, with a balcony and terrace offering stunning views.\r\n', ' <ul class=\"feature\">\r\n                                                    <li>\r\n                                                        <p>Client:</p> Private Ownser\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Location:</p> Gikambura, Kikuyu, Kiambu County\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Project Duration:</p> Estimated 18 months (Sep 2023 – Jan\r\n                                                        2025)\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Project Cost(aprx):</p> 18 Million\r\n                                                    </li>\r\n\r\n                                                </ul>', 'Kiemas.jpg', NULL, NULL),
(2, 'Estate Villa', 3, 'estate-villa', 'This 2-bedroom residence includes all ensuite bedrooms, a spacious living area, modern kitchen, and a dedicated office space. The property also features a laundry room, ample parking, and a well-designed outdoor area.\r\n', ' <ul class=\"feature\">\r\n                                                    <li>\r\n                                                        <p>Client:</p> Private Owner\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Location:</p> Ruiru, Kiambu County\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Project Duration:</p> Estimated 22 months (Completed: October 2023)\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Project Cost(aprx)</p> 20.5 Million\r\n                                                    </li>\r\n\r\n                                                </ul>', 'labans.jpg', NULL, NULL),
(3, 'Backyard Private Swimming Pool', 5, 'backyard-private-swimming-pool', 'The backyard features a spacious swimming pool designed for both relaxation and fun, complemented by a separate, solar-heated kids’ pool. The setup ensures year-round comfort while promoting energy efficiency, making it perfect for family-friendly outdoor living.', '  <ul class=\"feature\">\r\n                                                    <li>\r\n                                                        <p>Client:</p> Private Owner\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Location:</p> Malindi, Kenyan Coast\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Project Duration:</p> Estimated 10 months (Completed: May 2022)\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Project Cost(aprx)</p> 15.5 Million\r\n                                                    </li>\r\n\r\n                                                </ul>', 'swimingpool.jpg', NULL, NULL),
(4, 'Gachuris Residence, Karen Hardy – Private Swimming Pool', 5, 'gachuri-residence-karen-hardy', 'A luxurious private swimming pool designed and fitted at the Gachuris Residence in Karen Hardy. This elegant outdoor feature blends seamlessly with the surrounding landscape, offering a serene retreat with premium finishes, perfect for relaxation and entertainment.', '  <ul class=\"feature\">\r\n                                                    <li>\r\n                                                        <p>Client:</p> Private Owner\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Location:</p> Karen, Nairobi, Kenya\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Project Duration:</p> Estimated 14 months (Completed: OCT 2024)\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Project Cost(aprx)</p> 17 Million\r\n                                                    </li>\r\n\r\n                                                </ul>', 'Wagachuri.png', NULL, NULL),
(5, 'Residential Mansion Architectural Design ', 3, 'residential-mansion-architectural-design', 'A bespoke architectural design for a modern residential mansion, combining elegance, functionality, and timeless aesthetics. This project showcases meticulous space planning, grand facades, and seamless indoor-outdoor flow, tailored to reflect the client’s lifestyle and vision of luxury living.', ' <ul class=\"feature\">\r\n                                                    <li>\r\n                                                        <p>Client:</p> Private Owner\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Location:</p> Kikuyu, Gikambura, Kiambu County\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Project Duration:</p> Subject to approval\r\n                                                    </li>\r\n                                                    <li>\r\n                                                        <p>Project Cost(aprx)</p> 35 Million\r\n                                                    </li>\r\n\r\n                                                </ul>', 'Flux_Dev_A_recently_built_luxurious_mansion_with_a_grand_moder_2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project__categories`
--

CREATE TABLE `project__categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project__categories`
--

INSERT INTO `project__categories` (`id`, `title`, `slung`, `meta`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Residential', 'residential', NULL, '', NULL, NULL, NULL),
(4, 'Commercial', 'commercial', NULL, '', NULL, NULL, NULL),
(5, 'Structural', 'structural', NULL, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE `references` (
  `id` int UNSIGNED NOT NULL,
  `registration_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `references_1_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `references_1_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `references_1_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `references_1_relationship` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `references_2_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `references_2_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `references_2_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `references_2_relationship` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `references_3_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `references_3_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `references_3_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `references_3_relationship` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int UNSIGNED NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `convict` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_skill` text COLLATE utf8mb4_unicode_ci,
  `convict_yes` text COLLATE utf8mb4_unicode_ci,
  `emergency_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_1_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_2_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shifts` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stop_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desires` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seosettings`
--

CREATE TABLE `seosettings` (
  `id` int UNSIGNED NOT NULL,
  `sitename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `welcome` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seosettings`
--

INSERT INTO `seosettings` (`id`, `sitename`, `intro`, `email`, `email_one`, `tagline`, `url`, `location`, `address`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `google`, `welcome`, `created_at`, `updated_at`) VALUES
(1, 'Carepro Staffing', NULL, NULL, NULL, NULL, 'http://careprostaffing.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `footer`, `slung`, `meta`, `label`, `content`, `thumb`, `image_one`, `image_two`, `image_three`, `created_at`, `updated_at`) VALUES
(1, 'Residential Construction', '0', 'residential-construction', 'We set the standard in residential construction with innovation, quality craftsmanship, and a commitment to delivering exceptional living spaces.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Renovation & Remodeling\r\n', '0', 'renovation-and-remodeling', 'We excel in renovation and remodeling, revitalizing spaces with quality craftsmanship and a fresh, modern approach.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Building Design Services', '0', 'building-design-services', 'We lead the way in building design services, transforming concepts into striking, functional spaces through innovative solutions and expert craftsmanship.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Post Construction Services', '0', 'post-construction-services', 'We specialize in post-construction services, offering complete solutions that refine and enhance every project to the highest standards.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` int UNSIGNED NOT NULL,
  `sitename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `mpesa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logoo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blend` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_verticle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'info@amanivehiclesounds.co.ke',
  `shipping` int NOT NULL DEFAULT '500',
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `till` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `till_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `welcome` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitesettings`
--

INSERT INTO `sitesettings` (`id`, `sitename`, `title`, `mpesa`, `logoo`, `meta`, `color`, `blend`, `logo`, `logo_verticle`, `favicon`, `email`, `email_one`, `paypal`, `shipping`, `mobile`, `mobile_one`, `mobile_two`, `tagline`, `till`, `till_image`, `url`, `location`, `address`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `google`, `welcome`, `created_at`, `updated_at`) VALUES
(1, 'Grace Community Bible Church', 'Carepro Staffing', NULL, 'GCBC LOGO Final Vertical-01.png', 'At CarePro, we believe that every individual should have the opportunity to fulfill their American Dream. By investing in the personal and professional success of every one of our educated healthcare professionals, we work to ensure that our nationwide network of clients can provide optimal patient', '#7f0107', '#939496', 'GCBC LOGO D-01.png', 'rsz_logo-1-removebg.png', 'favicon.png', 'info@gracecommunitybiblechurch.org', 'info@gracecommunitybiblechurch.org', 'info@careprostaffing.com', 500, '+254740349389', '+254729172664', '+19132938446', 'Client Focused; Results Driven', NULL, 'Mpesaa.jpg', 'http://gracecommunitybiblechurch.org', 'Mountain Mall, Rooftop, Thika Road', 'P.O Box 103690-00100', 'https://www.facebook.com/gcbcke', 'https://twitter.com/gcbc_nairobi', 'https://www.linkedin.com/in/', 'https://www.instagram.com/gracecommunity_biblechurch/', 'https://www.youtube.com/channel/UClmKzZCXJTbeUQA0NOHJJkw', NULL, 'Grace Community Bible Church (GCBC) is a Southern Baptist church in affiliation and in doctrine. This ministry operates in partnership with the Baptist Convention of Kenya, yet we are ready to work with other like-minded churches in the area.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `title`, `category_id`, `slung`, `meta`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Constructional Binding Wire (Straightened Cut Wire)', '4', 'constructional-binding-wire', NULL, NULL, NULL, NULL),
(4, 'Black Annealed Binding Wire', '4', 'black-annealed-binding-wire', NULL, NULL, NULL, NULL),
(5, 'Galvanized Iron Binding Wire', '4', 'galvanized-iron-binding-wire', NULL, NULL, NULL, NULL),
(6, 'Small Coil Rebar Wire', '4', 'Small-Coil-Rebar-Wire', NULL, NULL, NULL, NULL),
(7, 'Tie Loop Tie Wire', '4', 'Tie-Loop-Tie-Wire', NULL, NULL, NULL, NULL),
(8, 'Binding Wire for Packing', '4', 'binding-wire-for-packing', NULL, NULL, NULL, NULL),
(9, 'U Type Binding Wire', '4', 'U-Type-Binding-Wire', NULL, NULL, NULL, NULL),
(10, 'Galvanized Wire', '4', 'galvanized-wire', NULL, NULL, NULL, NULL),
(11, 'Stainless Steel Wire', '4', 'stainless-steel-wire', NULL, NULL, NULL, NULL),
(12, 'Brass Wire', '4', 'brass-wire', NULL, NULL, NULL, NULL),
(13, 'Aluminum Wire', '4', 'aluminum-wire', NULL, NULL, NULL, NULL),
(14, 'PVC Coated Binding Wire', '4', 'PVC-Coated-Binding-Wire', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `content` text COLLATE utf8mb4_unicode_ci,
  `instructions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `registration_id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `registration_id`, `name`, `image`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Albert Muhatia Mmboyi', '2021-01-0912:20:55.$name.50810124_2356867777689953_34526602142416896_n.jpg', 'albertmuhatia@gmail.com', '$2y$10$TT2jzrafvVe9KVBKpvCLROU7BZkSerd9hjFvuBawe8vzd/SgONg96', 'CvfOvWsZFIdoVEoLt1LFDhacRJ2MeIDqyCSZ5RrFtiKjLd4OT5taFJ3Jxh6j', '2021-01-09 08:27:35', '2021-01-09 08:27:35'),
(2, 4, 'aasa asas dsds', NULL, 'asas@ds.com', '$2y$10$MIlKfEWNUwwt5XkKSm.qr.TEqtYv/XIOPBVam6G6vpeEcpOM4lM6a', 'jRioMHEkNI3lMuSiWircISeaAIcv7KC5vkiAyMmBvr3wtYHRjwyQV4IXeRrK', '2021-01-21 11:53:36', '2021-01-21 11:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE `values` (
  `id` int NOT NULL,
  `title` varchar(222) DEFAULT NULL,
  `content` text,
  `icon` varchar(222) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyright`
--
ALTER TABLE `copyright`
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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_slung_unique` (`slung`);

--
-- Indexes for table `project__categories`
--
ALTER TABLE `project__categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project__categories_slung_unique` (`slung`);

--
-- Indexes for table `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seosettings`
--
ALTER TABLE `seosettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_categories_slung_unique` (`slung`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `copyright`
--
ALTER TABLE `copyright`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project__categories`
--
ALTER TABLE `project__categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seosettings`
--
ALTER TABLE `seosettings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `values`
--
ALTER TABLE `values`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
