-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 17, 2021 at 11:01 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shreehari`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('banner','logo') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `URL` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `status`, `URL`, `created_at`, `updated_at`) VALUES
(1, 'upload/Banners_LOGOS/161359261860.jpg', 'banner', NULL, '2021-02-17 14:40:18', '2021-02-17 14:40:18'),
(2, 'upload/Banners_LOGOS/161359263040.jpg', 'banner', NULL, '2021-02-17 14:40:30', '2021-02-17 14:40:30'),
(3, 'upload/Banners_LOGOS/161359264675.jpg', 'banner', NULL, '2021-02-17 14:40:46', '2021-02-17 14:40:46'),
(4, 'upload/Banners_LOGOS/1613592657100.png', 'banner', NULL, '2021-02-17 14:40:57', '2021-02-17 14:40:57'),
(5, 'upload/Banners_LOGOS/161359266626.png', 'banner', NULL, '2021-02-17 14:41:06', '2021-02-17 14:41:06'),
(6, 'upload/Banners_LOGOS/161359272945.png', 'logo', NULL, '2021-02-17 14:42:09', '2021-02-17 14:42:09'),
(7, 'upload/Banners_LOGOS/161359273993.png', 'logo', NULL, '2021-02-17 14:42:19', '2021-02-17 14:42:19'),
(8, 'upload/Banners_LOGOS/161359274845.png', 'logo', NULL, '2021-02-17 14:42:28', '2021-02-17 14:42:28'),
(9, 'upload/Banners_LOGOS/16135927585.png', 'logo', NULL, '2021-02-17 14:42:38', '2021-02-17 14:42:38'),
(10, 'upload/Banners_LOGOS/161359276711.png', 'logo', NULL, '2021-02-17 14:42:47', '2021-02-17 14:42:47'),
(11, 'upload/Banners_LOGOS/161359277538.png', 'logo', NULL, '2021-02-17 14:42:55', '2021-02-17 14:42:55'),
(12, 'upload/Banners_LOGOS/161359278499.png', 'logo', NULL, '2021-02-17 14:43:04', '2021-02-17 14:43:04'),
(13, 'upload/Banners_LOGOS/161359280453.png', 'logo', NULL, '2021-02-17 14:43:24', '2021-02-17 14:43:24'),
(14, 'upload/Banners_LOGOS/161359281869.png', 'logo', NULL, '2021-02-17 14:43:38', '2021-02-17 14:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Men', NULL, '2021-01-14 01:31:37', '2021-01-14 01:31:37'),
(2, 'Women', NULL, '2021-01-14 01:31:56', '2021-01-14 01:31:56'),
(3, 'Baby & Kids', NULL, '2021-01-24 00:00:44', '2021-01-24 00:00:44'),
(4, 'Electronics', NULL, '2021-01-24 00:01:20', '2021-01-24 00:01:20'),
(5, 'Home & Furniture', NULL, '2021-01-24 00:01:50', '2021-01-24 00:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `massage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('padding','success') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'padding',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `massage`, `email`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test demo', 'jayrbasit12345@gmail.com', 'testing', 'padding', '2021-03-16 05:31:51', '2021-03-16 05:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `iso` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nicename` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numcode` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonecode` int(11) NOT NULL,
  `nationality` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Enable','Disable') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Enable',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`, `nationality`, `status`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', '4', 93, 'Afghan', 'Enable'),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', '8', 355, 'Albanian', 'Enable'),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', '12', 213, 'Algerian', 'Enable'),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', '16', 1684, 'American Samoan', 'Enable'),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', '20', 376, 'Andorran', 'Enable'),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', '24', 244, 'Angolan', 'Enable'),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', '660', 1264, 'Anguillan', 'Enable'),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', '', '', 0, 'Antarctic', 'Enable'),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', '28', 1268, 'Antiguan or Barbudan', 'Enable'),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', '32', 54, 'Argentine', 'Enable'),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', '51', 374, 'Armenian', 'Enable'),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', '533', 297, 'Aruban', 'Enable'),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', '36', 61, 'Australian', 'Enable'),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', '40', 43, 'Austrian', 'Enable'),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', '31', 994, 'Azerbaijani, Azeri', 'Enable'),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', '44', 1242, 'Bahamian', 'Enable'),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', '48', 973, 'Bahraini', 'Enable'),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', '50', 880, 'Bangladeshi', 'Enable'),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', '52', 1246, 'Barbadian', 'Enable'),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', '112', 375, 'Belarusian', 'Enable'),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', '56', 32, 'Belgian', 'Enable'),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', '84', 501, 'Belizean', 'Enable'),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', '204', 229, 'Beninese, Beninois', 'Enable'),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', '60', 1441, 'Bermudian, Bermudan', 'Enable'),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', '64', 975, 'Bhutanese', 'Enable'),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', '68', 591, 'Zimbabwean', 'Enable'),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', '70', 387, 'Bosnian or Herzegovinian', 'Enable'),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', '72', 267, 'Motswana, Botswanan', 'Enable'),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', '', '', 0, 'Bouvet Island', 'Enable'),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', '76', 55, 'Brazilian', 'Enable'),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', '', '', 246, 'BIOT', 'Enable'),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', '96', 673, 'Bruneian', 'Enable'),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', '100', 359, 'Bulgarian', 'Enable'),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', '854', 226, 'Burkinabé', 'Enable'),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', '108', 257, 'Burundian', 'Enable'),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', '116', 855, 'Cambodian', 'Enable'),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', '120', 237, 'Cameroonian', 'Enable'),
(38, 'CA', 'CANADA', 'Canada', 'CAN', '124', 1, 'Canadian', 'Enable'),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', '132', 238, 'Zimbabwean', 'Enable'),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', '136', 1345, 'Caymanian', 'Enable'),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', '140', 236, 'Central African', 'Enable'),
(42, 'TD', 'CHAD', 'Chad', 'TCD', '148', 235, 'Chadian', 'Enable'),
(43, 'CL', 'CHILE', 'Chile', 'CHL', '152', 56, 'Chilean', 'Enable'),
(44, 'CN', 'CHINA', 'China', 'CHN', '156', 86, 'Chinese', 'Enable'),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', '', '', 61, 'Christmas Island', 'Enable'),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', '', '', 672, 'Cocos Island', 'Enable'),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', '170', 57, 'Colombian', 'Enable'),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', '174', 269, 'Comoran, Comorian', 'Enable'),
(49, 'CG', 'CONGO', 'Congo', 'COG', '178', 242, 'Zimbabwean', 'Enable'),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', '180', 242, 'Zimbabwean', 'Enable'),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', '184', 682, 'Cook Island', 'Enable'),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', '188', 506, 'Costa Rican', 'Enable'),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', '384', 225, 'Zimbabwean', 'Enable'),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', '191', 385, 'Croatian', 'Enable'),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', '192', 53, 'Cuban', 'Enable'),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', '196', 357, 'Cypriot', 'Enable'),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', '203', 420, 'Czech', 'Enable'),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', '208', 45, 'Danish', 'Enable'),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', '262', 253, 'Djiboutian', 'Enable'),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', '212', 1767, 'Dominican', 'Enable'),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', '214', 1809, 'Dominican', 'Enable'),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', '218', 593, 'Ecuadorian', 'Enable'),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', '818', 20, 'Egyptian', 'Enable'),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', '222', 503, 'Salvadoran', 'Enable'),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', '226', 240, 'Equatorial Guinean, Equatoguinean', 'Enable'),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', '232', 291, 'Eritrean', 'Enable'),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', '233', 372, 'Estonian', 'Enable'),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', '231', 251, 'Ethiopian', 'Enable'),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', '238', 500, 'Falkland Island', 'Enable'),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', '234', 298, 'Faroese', 'Enable'),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', '242', 679, 'Fijian', 'Enable'),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', '246', 358, 'Finnish', 'Enable'),
(73, 'FR', 'FRANCE', 'France', 'FRA', '250', 33, 'French', 'Enable'),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', '254', 594, 'French Guianese', 'Enable'),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', '258', 689, 'French Polynesian', 'Enable'),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', '', '', 0, 'French Southern Territories', 'Enable'),
(77, 'GA', 'GABON', 'Gabon', 'GAB', '266', 241, 'Gabonese', 'Enable'),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', '270', 220, 'Gambian', 'Enable'),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', '268', 995, 'Georgian', 'Enable'),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', '276', 49, 'German', 'Enable'),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', '288', 233, 'Ghanaian', 'Enable'),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', '292', 350, 'Gibraltar', 'Enable'),
(83, 'GR', 'GREECE', 'Greece', 'GRC', '300', 30, 'Greek, Hellenic', 'Enable'),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', '304', 299, 'Greenlandic', 'Enable'),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', '308', 1473, 'Grenadian', 'Enable'),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', '312', 590, 'Guadeloupe', 'Enable'),
(87, 'GU', 'GUAM', 'Guam', 'GUM', '316', 1671, 'Guamanian, Guambat', 'Enable'),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', '320', 502, 'Guatemalan', 'Enable'),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', '324', 224, 'Guinean', 'Enable'),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', '624', 245, 'Bissau-Guinean', 'Enable'),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', '328', 592, 'Guyanese', 'Enable'),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', '332', 509, 'Haitian', 'Enable'),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', '', '', 0, 'Heard Island or McDonald Islands', 'Enable'),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', '336', 39, 'Zimbabwean', 'Enable'),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', '340', 504, 'Honduran', 'Enable'),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', '344', 852, 'Hong Kong, Hong Kongese', 'Enable'),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', '348', 36, 'Hungarian, Magyar', 'Enable'),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', '352', 354, 'Icelandic', 'Enable'),
(99, 'IN', 'INDIA', 'India', 'IND', '356', 91, 'Indian', 'Enable'),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', '360', 62, 'Indonesian', 'Enable'),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', '364', 98, 'Zimbabwean', 'Enable'),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', '368', 964, 'Iraqi', 'Enable'),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', '372', 353, 'Irish', 'Enable'),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', '376', 972, 'Israeli', 'Enable'),
(105, 'IT', 'ITALY', 'Italy', 'ITA', '380', 39, 'Italian', 'Enable'),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', '388', 1876, 'Jamaican', 'Enable'),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', '392', 81, 'Japanese', 'Enable'),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', '400', 962, 'Jordanian', 'Enable'),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', '398', 7, 'Kazakhstani, Kazakh', 'Enable'),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', '404', 254, 'Kenyan', 'Enable'),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', '296', 686, 'I-Kiribati', 'Enable'),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', '408', 850, 'Zimbabwean', 'Enable'),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', '410', 82, 'Zimbabwean', 'Enable'),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', '414', 965, 'Kuwaiti', 'Enable'),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', '417', 996, 'Kyrgyzstani, Kyrgyz, Kirgiz, Kirghiz', 'Enable'),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', '418', 856, 'Zimbabwean', 'Enable'),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', '428', 371, 'Latvian', 'Enable'),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', '422', 961, 'Lebanese', 'Enable'),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', '426', 266, 'Basotho', 'Enable'),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', '430', 231, 'Liberian', 'Enable'),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', '434', 218, 'Zimbabwean', 'Enable'),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', '438', 423, 'Liechtenstein', 'Enable'),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', '440', 370, 'Lithuanian', 'Enable'),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', '442', 352, 'Luxembourg, Luxembourgish', 'Enable'),
(125, 'MO', 'MACAO', 'Macao', 'MAC', '446', 853, 'Macanese, Chinese', 'Enable'),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', '807', 389, 'Zimbabwean', 'Enable'),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', '450', 261, 'Malagasy', 'Enable'),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', '454', 265, 'Malawian', 'Enable'),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', '458', 60, 'Malaysian', 'Enable'),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', '462', 960, 'Maldivian', 'Enable'),
(131, 'ML', 'MALI', 'Mali', 'MLI', '466', 223, 'Malian, Malinese', 'Enable'),
(132, 'MT', 'MALTA', 'Malta', 'MLT', '470', 356, 'Maltese', 'Enable'),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', '584', 692, 'Marshallese', 'Enable'),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', '474', 596, 'Martiniquais, Martinican', 'Enable'),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', '478', 222, 'Mauritanian', 'Enable'),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', '480', 230, 'Mauritian', 'Enable'),
(137, 'YT', 'MAYOTTE', 'Mayotte', '', '', 269, 'Mahoran', 'Enable'),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', '484', 52, 'Mexican', 'Enable'),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', '583', 691, 'Zimbabwean', 'Enable'),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', '498', 373, 'Zimbabwean', 'Enable'),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', '492', 377, 'Monégasque, Monacan', 'Enable'),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', '496', 976, 'Mongolian', 'Enable'),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', '500', 1664, 'Montserratian', 'Enable'),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', '504', 212, 'Moroccan', 'Enable'),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', '508', 258, 'Mozambican', 'Enable'),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', '104', 95, 'Burmese', 'Enable'),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', '516', 264, 'Namibian', 'Enable'),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', '520', 674, 'Nauruan', 'Enable'),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', '524', 977, 'Nepali, Nepalese', 'Enable'),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', '528', 31, 'Dutch, Netherlandic', 'Enable'),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', '530', 599, 'Zimbabwean', 'Enable'),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', '540', 687, 'New Caledonian', 'Enable'),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', '554', 64, 'New Zealand, NZ', 'Enable'),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', '558', 505, 'Nicaraguan', 'Enable'),
(155, 'NE', 'NIGER', 'Niger', 'NER', '562', 227, 'Nigerien', 'Enable'),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', '566', 234, 'Nigerian', 'Enable'),
(157, 'NU', 'NIUE', 'Niue', 'NIU', '570', 683, 'Niuean', 'Enable'),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', '574', 672, 'Norfolk Island', 'Enable'),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', '580', 1670, 'Northern Marianan', 'Enable'),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', '578', 47, 'Norwegian', 'Enable'),
(161, 'OM', 'OMAN', 'Oman', 'OMN', '512', 968, 'Omani', 'Enable'),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', '586', 92, 'Pakistani', 'Enable'),
(163, 'PW', 'PALAU', 'Palau', 'PLW', '585', 680, 'Palauan', 'Enable'),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', '', '', 970, 'Zimbabwean', 'Enable'),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', '591', 507, 'Panamanian', 'Enable'),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', '598', 675, 'Papua New Guinean, Papuan', 'Enable'),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', '600', 595, 'Paraguayan', 'Enable'),
(168, 'PE', 'PERU', 'Peru', 'PER', '604', 51, 'Peruvian', 'Enable'),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', '608', 63, 'Philippine, Filipino', 'Enable'),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', '612', 0, 'Pitcairn Island', 'Enable'),
(171, 'PL', 'POLAND', 'Poland', 'POL', '616', 48, 'Polish', 'Enable'),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', '620', 351, 'Portuguese', 'Enable'),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', '630', 1787, 'Puerto Rican', 'Enable'),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', '634', 974, 'Qatari', 'Enable'),
(175, 'RE', 'REUNION', 'Reunion', 'REU', '638', 262, 'Réunionese, Réunionnais', 'Enable'),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', '642', 40, 'Romanian', 'Enable'),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', '643', 70, 'Russian', 'Enable'),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', '646', 250, 'Rwandan', 'Enable'),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', '654', 290, 'Zimbabwean', 'Enable'),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', '659', 1869, 'Kittitian or Nevisian', 'Enable'),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', '662', 1758, 'Saint Lucian', 'Enable'),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', '666', 508, 'Saint-Pierrais or Miquelonnais', 'Enable'),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', '670', 1784, 'Saint Vincentian, Vincentian', 'Enable'),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', '882', 684, 'Samoan', 'Enable'),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', '674', 378, 'Sammarinese', 'Enable'),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', '678', 239, 'São Toméan', 'Enable'),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', '682', 966, 'Saudi, Saudi Arabian', 'Enable'),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', '686', 221, 'Senegalese', 'Enable'),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', '', '', 381, 'Zimbabwean', 'Enable'),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', '690', 248, 'Seychellois', 'Enable'),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', '694', 232, 'Sierra Leonean', 'Enable'),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', '702', 65, 'Singaporean', 'Enable'),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', '703', 421, 'Slovak', 'Enable'),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', '705', 386, 'Slovenian, Slovene', 'Enable'),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', '90', 677, 'Solomon Island', 'Enable'),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', '706', 252, 'Somali, Somalian', 'Enable'),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', '710', 27, 'South African', 'Enable'),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', '', '', 0, 'South Georgia or South Sandwich Islands', 'Enable'),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', '724', 34, 'Spanish', 'Enable'),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', '144', 94, 'Sri Lankan', 'Enable'),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', '736', 249, 'Sudanese', 'Enable'),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', '740', 597, 'Surinamese', 'Enable'),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', '744', 47, 'Svalbard', 'Enable'),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', '748', 268, 'Swazi', 'Enable'),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', '752', 46, 'Swedish', 'Enable'),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', '756', 41, 'Swiss', 'Enable'),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', '760', 963, 'Syrian', 'Enable'),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', '158', 886, 'Chinese, Taiwanese', 'Enable'),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', '762', 992, 'Tajikistani', 'Enable'),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', '834', 255, 'Tanzanian', 'Enable'),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', '764', 66, 'Thai', 'Enable'),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', '', '', 670, 'Timorese', 'Enable'),
(213, 'TG', 'TOGO', 'Togo', 'TGO', '768', 228, 'Togolese', 'Enable'),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', '772', 690, 'Tokelauan', 'Enable'),
(215, 'TO', 'TONGA', 'Tonga', 'TON', '776', 676, 'Tongan', 'Enable'),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', '780', 1868, 'Trinidadian or Tobagonian', 'Enable'),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', '788', 216, 'Tunisian', 'Enable'),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', '792', 90, 'Turkish', 'Enable'),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', '795', 7370, 'Turkmen', 'Enable'),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', '796', 1649, 'Turks and Caicos Island', 'Enable'),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', '798', 688, 'Tuvaluan', 'Enable'),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', '800', 256, 'Ugandan', 'Enable'),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', '804', 380, 'Ukrainian', 'Enable'),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', '784', 971, 'Emirati, Emirian, Emiri', 'Enable'),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', '826', 44, 'Zimbabwean', 'Enable'),
(226, 'US', 'UNITED STATES', 'United States', 'USA', '840', 1, 'Zimbabwean', 'Enable'),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', '', '', 1, 'American', 'Enable'),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', '858', 598, 'Uruguayan', 'Enable'),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', '860', 998, 'Uzbekistani, Uzbek', 'Enable'),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', '548', 678, 'Ni-Vanuatu, Vanuatuan', 'Enable'),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', '862', 58, 'Zimbabwean', 'Enable'),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', '704', 84, 'Zimbabwean', 'Enable'),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', '92', 1284, 'Zimbabwean', 'Enable'),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', '850', 1340, 'Zimbabwean', 'Enable'),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', '876', 681, 'Wallis and Futuna, Wallisian or Futunan', 'Enable'),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', '732', 212, 'Sahrawi, Sahrawian, Sahraouian', 'Enable'),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', '887', 967, 'Yemeni', 'Enable'),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', '894', 260, 'Zambian', 'Enable'),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', '716', 263, 'Zimbabwean', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_06_055723_create_categories_table', 1),
(15, '2020_12_06_055736_create_subcategories_table', 4),
(12, '2020_12_06_070735_create_products_table', 2),
(7, '2020_12_06_073316_create_products_images_table', 1),
(8, '2020_12_14_165131_create_vendors_table', 1),
(9, '2021_01_03_165028_create_web_configs_table', 1),
(10, '2021_01_10_124644_create_product_reviews_table', 1),
(11, '2021_01_10_125815_create_product_review_images_table', 1),
(14, '2021_02_17_175030_create_banners_table', 3),
(26, '2021_03_06_193216_create_orders_table', 13),
(22, '2021_03_06_194300_create_user_addresses_table', 9),
(24, '2021_03_06_203731_create_payments_table', 11),
(20, '2021_03_10_081807_create_countries_table', 7),
(29, '2021_03_13_061715_create_orders_products_table', 16),
(28, '2021_03_16_104906_create_contacts_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `invoice_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_addresses_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `comments_about_your_order` text COLLATE utf8mb4_unicode_ci,
  `status` enum('padding','success') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'padding',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_user_addresses_id_foreign` (`user_addresses_id`),
  KEY `orders_payment_id_foreign` (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `invoice_number`, `user_addresses_id`, `payment_id`, `comments_about_your_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'SH-8inepqshbo', 2, 1, NULL, 'padding', '2021-03-15 23:02:55', '2021-03-15 23:02:55'),
(2, 3, 'SH-ctrp8bixzv', 2, 2, NULL, 'padding', '2021-03-15 23:03:38', '2021-03-15 23:03:38');

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

DROP TABLE IF EXISTS `orders_products`;
CREATE TABLE IF NOT EXISTS `orders_products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `vendor_notification` enum('padding','success') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'padding',
  `packing` enum('padding','success') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'padding',
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_products_vendor_id_foreign` (`vendor_id`),
  KEY `orders_products_products_id_foreign` (`products_id`),
  KEY `orders_products_orders_id_foreign` (`orders_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`id`, `orders_id`, `products_id`, `vendor_id`, `vendor_notification`, `packing`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 22, 2, 'success', 'success', '1', '2021-03-15 17:32:55', '2021-03-17 02:56:49'),
(2, 2, 128, 2, 'success', 'padding', '1', '2021-03-15 17:33:38', '2021-03-17 02:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user@shreehari.net', '$2y$10$PXLM59e7baMBVDZeCjNvsuzKILFYgUq9GNYal/mfGpqisIK811JK2', '2021-03-10 02:03:45'),
('admin@shreehari.net', '$2y$10$0e1bbkkDXjf9DI52ybqR4O80BJFl4oFuS40uxvF0OjSYqar2DuJJC', '2021-03-10 02:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `amount` double(8,2) NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `system` enum('debit','credit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` enum('debit','credit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('padding','success') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payments_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `amount`, `payment_id`, `system`, `user`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 649.00, 'pay_GnC6yR0CTcKJEp', 'credit', 'debit', 'success', 3, '2021-03-15 23:02:55', '2021-03-15 23:02:55'),
(2, 1649.00, NULL, 'credit', 'debit', 'padding', 3, '2021-03-15 23:03:38', '2021-03-15 23:03:38');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `model_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` int(11) NOT NULL,
  `subcategories_id` int(11) NOT NULL,
  `shot_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('enable','disable') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enable',
  `vedor_id` int(11) NOT NULL,
  `verify` enum('Yes','No') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `attributes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_model_number_unique` (`model_number`),
  KEY `products_vedor_id_foreign` (`vedor_id`),
  KEY `products_categories_id_foreign` (`categories_id`),
  KEY `products_subcategories_id_foreign` (`subcategories_id`)
) ENGINE=MyISAM AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `model_number`, `name`, `categories_id`, `subcategories_id`, `shot_description`, `description`, `image`, `price`, `discount`, `status`, `vedor_id`, `verify`, `attributes`, `created_at`, `updated_at`) VALUES
(3, 'KHMV78AD', 'Sneakers For Men  (Black)', 1, 2, 'This product doesn\'t require installation', 'Shipping charges are calculated based on the number of units, distance and delivery date.\r\nFor Plus customers, shipping charges are free.\r\nFor non-Plus customers, if the total value of FAssured items is more than Rs.500, shipping charges are free. If the total value of FAssured items is less than Rs.500, shipping charges = Rs.40 per unit\r\n* For faster delivery, shipping charges will be applicable.', 'upload/product/161146788395.jpg', '499', '599', 'enable', 2, 'No', NULL, '2021-01-24 00:28:03', '2021-01-24 00:28:03'),
(4, '8CMR3B0T', 'SM-656 Casuals For Men  (Navy, Grey)', 1, 2, 'Shipping charges are calculated based on the number of units, distance and delivery date.', 'For Plus as well as Non-Plus customers, Seller will decide shipping charges for all non-FAssured items.', 'upload/product/161146803820.jpg', '775', '899', 'enable', 2, 'No', NULL, '2021-01-24 00:30:38', '2021-01-24 00:30:38'),
(5, '25RF1GZ8', 'Running Shoes For Men  (Green)', 1, 2, 'Wipe gently with a dry cloth to remove any dried-on dirt and dust', 'Shipping charges are calculated based on the number of units, distance and delivery date.\r\nFor Plus as well as Non-Plus customers, Seller will decide shipping charges for all non-FAssured items.', 'upload/product/161146827153.jpg', '474', '999', 'enable', 2, 'No', NULL, '2021-01-24 00:34:31', '2021-01-24 00:34:31'),
(6, '32GCW4ZT', '445 Sports Shoes (Walking & Gym Shoes) Running Shoes For Men  (White, Blue)', 1, 2, '445 Sports Shoes (Walking & Gym Shoes) Running Shoes For Men  (White, Blue)', 'Crafted with imported Mesh, Synthetic, this pack of shoe is durable and lightweight that will make you go through the daily jostle in an easy way. The design of this shoes is fashionable and can be worn for every use. Chevit presents a new age casual loafers, Running shoes, Sneakers Shoes best suited for casual and outdoor lifestyle wear for Mens. Comfortable: Lightweight shoe provides actual experience of barefoot and natural walk. Optimum cushioning performance that creates a cooler, drier and healthier shoe environment. The cushioned foot-bed and padded sock-liner will keep your feet breathing and at ease. Soft foot bed offers impact cushioning and faster drainage in wet condition.', 'upload/product/16114684493.jpg', '369', '599', 'enable', 2, 'No', NULL, '2021-01-24 00:37:29', '2021-01-24 00:37:29'),
(7, 'AEX4LYU0', 'Training & Gym Shoes For Men  (Navy)', 1, 2, 'Training & Gym Shoes For Men  (Navy)', 'SQR\'s Stylish and classic Sports shoes gives comfort. Our lightweight material for a form-to-foot fit and a snug fit and forward or wear as a clog. Features : Bold mid-sole stripe for a sporty look. Odor-resistant, easy to clean, and quick to dry. Ventilation ports for enhanced breathability. Lightweight, non-marking soles. Water-friendly and buoyant; weighs only ounces. Fully molded Shoes material for lightweight cushioning and comfort. snug fit. It gives your style a good statement.', 'upload/product/161146857128.jpg', '284', '999', 'enable', 2, 'No', NULL, '2021-01-24 00:39:31', '2021-01-24 00:39:31'),
(8, '1TZVD0EI', 'Sneakers For Men  (Blue)', 1, 2, 'Sneakers For Men  (Blue)', 'SQR\'s Stylish and classic Sports shoes gives comfort. Our lightweight material for a form-to-foot fit and a snug fit and forward or wear as a clog. Features : Bold mid-sole stripe for a sporty look. Odor-resistant, easy to clean, and quick to dry. Ventilation ports for enhanced breathability. Lightweight, non-marking soles. Water-friendly and buoyant; weighs only ounces. Fully molded Shoes material for lightweight cushioning and comfort. snug fit. It gives your style a good statement.', 'upload/product/161146869440.jpg', '299', '999', 'enable', 2, 'No', NULL, '2021-01-24 00:41:34', '2021-01-24 00:41:34'),
(9, 'APX2C5VT', 'Chevit Trendy Fashion Sports Combo Pack of 3 Pairs Outdoor Running Shoes for Men Sneakers For Men Running Shoes For Men  (Black, Red, Yellow)', 1, 2, 'Allow your pair of shoes to air and de-odorize at a regular basis, this also helps them retain their natural shape; use shoe bags to prevent any stains or mildew; dust any dry dirt from the surface using a clean cloth, do not use polish or shiner', 'Crafted with imported Mesh & Canvas this Pair of 3 shoes are durable and lightweight that will make you go through the daily jostle in an easy way. The design of this shoes is fashionable and can be worn for every use.', 'upload/product/161146886945.jpg', '597', '1798', 'enable', 2, 'No', NULL, '2021-01-24 00:44:29', '2021-01-24 00:44:29'),
(10, '10WQCBKU', 'Combo Pack of 4 Casual Sneakers With Sneakers For Men  (Multicolor)', 1, 2, 'Combo Pack of 4 Casual Sneakers With Sneakers For Men  (Multicolor)', 'Chevit, the most stylish range of footwear are exclusively designed to match the latest trends of the new generation. Known for its sturdy and stylish designs, Chevit is an iconic youth brand for those who dare to explore the India.', 'upload/product/161146913236.jpg', '499', '1996', 'enable', 2, 'No', NULL, '2021-01-24 00:48:52', '2021-01-24 00:48:52'),
(11, '485EVZMB', 'SOCKS Running Shoes For Men  (Grey)', 1, 2, 'The all weather and all terrain density running shoe offers a breathable, lightweight design with an incredibly grippy outsole that will keep you moving with confidence during the approach and descent. The mesh lining ensures ventilation, whereas the eva sole offers great grip on the surface.', 'Shipping charges are calculated based on the number of units, distance and delivery date.\r\nFor Plus customers, shipping charges are free.\r\nFor non-Plus customers, if the total value of FAssured items is more than Rs.500, shipping charges are free. If the total value of FAssured items is less than Rs.500, shipping charges = Rs.40 per unit\r\n* For faster delivery, shipping charges will be applicable.', 'upload/product/161146987412.jpg', '399', '999', 'enable', 2, 'No', NULL, '2021-01-24 01:01:14', '2021-01-24 01:01:14'),
(12, '6QMV7E05', 'Walking Shoes For Men  (Blue)', 1, 2, 'Wipe gently with a dry cloth to remove any dried-on dirt and dust AADI SHOES BEST BRAND IN BEST PRICE', 'Wipe gently with a dry cloth to remove any dried-on dirt and dust\r\nAADI SHOES BEST BRAND IN BEST PRICE', 'upload/product/161147004613.jpg', '199', '999', 'enable', 2, 'No', NULL, '2021-01-24 01:04:06', '2021-01-24 01:04:06'),
(13, 'QRPLU3B1', 'Running Shoes For Men  (Black, Maroon)', 1, 2, 'Running Shoes For Men', 'Shipping charges are calculated based on the number of units, distance and delivery date.\r\nFor Plus customers, shipping charges are free.\r\nFor non-Plus customers, if the total value of FAssured items is more than Rs.500, shipping charges are free. If the total value of FAssured items is less than Rs.500, shipping charges = Rs.40 per unit\r\n* For faster delivery, shipping charges will be applicable.', 'upload/product/161147021942.jpg', '449', '999', 'enable', 2, 'No', NULL, '2021-01-24 01:06:59', '2021-01-24 01:06:59'),
(14, '79INQLG8', 'Running Shoes For Men  (Red)', 1, 2, 'Wipe with a clean, dry cloth when needed. These footwear are very easy to clean and wash.', 'Rising Wolf always gives you classy and stylish look and always keeps you to feel comfortable. Featuring a best design and good quality material with excellent finish, these shoes is for men/boys with outstanding durability. These adorable shoes are classy as well as comfortable and makes assurance of your workweek! Lend a perfect finishing touch to your look by wearing this pair of superior quality shoes from \"Rising Wolf\". this shoes designed for running: Running shoes are designed to handle the shock of 2.5 times your body weight that is created by the impact each time your foot strikes the ground. When you\'re running, you want to have excellent cushioning in both the heel and forefoot to handle this impact.', 'upload/product/161147044362.jpg', '581', '1599', 'enable', 2, 'No', NULL, '2021-01-24 01:10:43', '2021-01-24 01:10:43'),
(15, '86QJL0PA', 'ROYCE-2 Running Shoes For Men  (Blue)', 1, 2, 'ROYCE-2 Running Shoes For Men', 'This pair of Campus running shoes which is ideal for all your running sessions. The exceptional quality mesh upper will keep your feet relaxed for long hours. The Phylon sole is slip-resistant and ensures a firm grip providing your foot solace from a tiring workout session. To enhance your comfort, this pair comes with an insole which keeps your foot relaxed and odor free. You can team it up with your regular sportswear and a T-Shirt for a sporty look.', 'upload/product/161147055748.jpg', '891', '1049', 'enable', 2, 'No', NULL, '2021-01-24 01:12:37', '2021-01-24 01:12:37'),
(16, 'RW05QXLK', 'Men Solid Casual Dark Blue Shirt', 1, 1, 'Shipping charges are calculated based on the number of units, distance and delivery date.', 'For Plus customers, shipping charges are free.\r\nFor non-Plus customers, if the total value of FAssured items is more than Rs.500, shipping charges are free. If the total value of FAssured items is less than Rs.500, shipping charges = Rs.40 per unit\r\n* For faster delivery, shipping charges will be applicable.', 'upload/product/161147157964.jpg', '499', '999', 'enable', 2, 'No', NULL, '2021-01-24 01:29:39', '2021-01-24 01:29:39'),
(17, 'M3Q2SAY5', 'Striped Men Round Neck White, Blue T-Shirt', 1, 1, 'Type Round Neck Sleeve Full Sleeve Fit Regular Fabric Pure Cotton Pack of 1 Style Code FC4070 Neck Type Round Neck Ideal For Men Size M Pattern Striped Suitable For Western Wear Brand Fit Regular Fabric Care Regular Machine Wash Model Name tshirt for men casual tees full sleeve tshirts boys mens Brand Color White Blue', 'Latest men t shirts full sleeve from FastColors, This Round Neck TShirts men offers a Fashion and Trendy look for true business men working from home and a perfect all day cotton t shirt suitable for summer season. Wear it with trendy FastColors Bottomwear to have fashion look. Wear it with face mask to safeguard yourself from COVID-19 caused by corona virus. Whatever the occasion this tshirt full hand will be your choice. The style you want and the summer feel you need all rolled into this T-Shirt. Wear it for monsoon too. Trusted brand online and no compromise on quality', 'upload/product/161148794746.jpg', '320', '1999', 'enable', 2, 'No', NULL, '2021-01-24 06:02:27', '2021-01-24 06:02:27'),
(18, '8B924IHV', 'Striped Men Hooded Neck Red, Black T-Shirt', 1, 1, 'Type Hooded Neck Sleeve Full Sleeve Fit Regular Fabric Cotton Blend Sales Package Pack of 1 Pack of 1 Style Code HM-1001-Black Red Neck Type Hooded Neck Ideal For Men Size S Pattern Striped Suitable For Western Wear Brand Fit Regular Fit Sleeve Type Narrow Reversible No Fabric Care Hand wash Model Name HM-1001-Black Red Brand Color Black', 'Black\r\nPlease go through the size chart before placing the orders. Mark your solid impressions with ours ultra-soft, super cool hooded t-shirt. Wear this ultra-comfy full sleeve hooded t-shirt. Place in many ways with dark jeans, cuffed chinos. Its 100% soft cotton, solid color. Machine wash t-shirt, the material moves in every direction. Looks cool in every type of jacket so you look cool in winters as well. Its super dry and ultra-fashionable hooded must have t-shirt in your wardrobe.', 'upload/product/161148808441.jpg', '799', '1199', 'enable', 2, 'No', NULL, '2021-01-24 06:04:44', '2021-01-24 06:04:44'),
(19, '579Y3MPR', 'Typography Men Hooded Neck Orange, White, Black T-Shirt', 1, 1, 'Type Hooded Neck Sleeve Full Sleeve Fit Regular Fabric Cotton Blend Pack of 1 Style Code SHP395402 Neck Type Hooded Neck Ideal For Men Size L Pattern Typography Suitable For Western Wear Fabric Care Regular Machine Wash Brand Color Orange, White, Black Generic Name T Shirts Country of Origin India', 'Type Hooded Neck Sleeve Full Sleeve Fit Regular Fabric Cotton Blend Pack of 1 Style Code SHP395402 Neck Type Hooded Neck Ideal For Men Size L Pattern Typography Suitable For Western Wear Fabric Care Regular Machine Wash Brand Color Orange, White, Black Generic Name T Shirts Country of Origin India', 'upload/product/161148820330.jpg', '499', '1299', 'enable', 2, 'No', NULL, '2021-01-24 06:06:43', '2021-01-24 06:06:43'),
(20, '8QEOATGV', 'Color Block, Striped Men Round Neck Blue, Yellow T-Shirt', 1, 1, 'Type Round Neck Sleeve Full Sleeve Fit Slim Fabric Cotton Blend Pack of 1 Style Code YST Neck Type Round Neck Ideal For Men Size S Pattern Color Block, Striped Suitable For Western Wear Brand Fit S Reversible No Fabric Care Gentle Machine Wash Brand Color Blue::Yellow', 'Type Round Neck Sleeve Full Sleeve Fit Slim Fabric Cotton Blend Pack of 1 Style Code YST Neck Type Round Neck Ideal For Men Size S Pattern Color Block, Striped Suitable For Western Wear Brand Fit S Reversible No Fabric Care Gentle Machine Wash Brand Color Blue::Yellow', 'upload/product/161148927586.jpg', '399', '899', 'enable', 2, 'No', NULL, '2021-01-24 06:24:35', '2021-01-24 06:24:35'),
(21, 'ANLR0B4J', 'Solid Men Mandarin Collar White, Black T-Shirt', 1, 1, 'Type Mandarin Collar Sleeve Full Sleeve Fit Regular Fabric Pure Cotton Pack of 1 Style Code FC4058 Neck Type Mandarin Collar Ideal For Men Size M Pattern Solid Suitable For Western Wear Brand Fit Regular Fabric Care Machine wash as per tag Model Name t shirt tshirt for men casual tees full sleeve tshirts boys mens Brand Color White, Black', 'Latest men t shirts full sleeve from FastColors, This Mandarin Collar TShirts men offers a Fashion and Trendy look for true business men working from home and a perfect all day cotton t shirt suitable for summer season. Wear it with trendy FastColors Bottomwear to have fashion look. Wear it with face mask to safeguard yourself from COVID-19 caused by corona virus. Whatever the occasion this tshirt full hand will be your choice. The style you want and the summer feel you need all rolled into this T-Shirt. Wear it for monsoon too. Trusted brand online and no compromise on quality', 'upload/product/161148936290.jpg', '360', '1999', 'enable', 2, 'No', NULL, '2021-01-24 06:26:02', '2021-01-24 06:26:02'),
(22, '25WC1TF8', 'Printed Men Round Neck White, Black T-Shirt  (Pack of 3)', 1, 1, 'Type Round Neck Sleeve Short Sleeve Fit Slim Fabric Cotton Blend Sales Package Pack of 3 Smartees Tshirt Pack of 3 Style Code Cmb_Packof3_3 Neck Type Round Neck Ideal For Men Size XL Pattern Printed Suitable For Western Wear Brand Fit Slim Fit Sleeve Type Narrow Reversible No Fabric Care First wash dry clean thereafter handwash Other Details Product color may slight vary due to photographic light source. Brand Color Black & White', 'Type Round Neck Sleeve Short Sleeve Fit Slim Fabric Cotton Blend Sales Package Pack of 3 Smartees Tshirt Pack of 3 Style Code Cmb_Packof3_3 Neck Type Round Neck Ideal For Men Size XL Pattern Printed Suitable For Western Wear Brand Fit Slim Fit Sleeve Type Narrow Reversible No Fabric Care First wash dry clean thereafter handwash Other Details Product color may slight vary due to photographic light source. Brand Color Black & White', 'upload/product/161148945883.jpg', '599', '1299', 'enable', 2, 'No', NULL, '2021-01-24 06:27:38', '2021-01-24 06:27:38'),
(23, '3Q8JTCZO', 'Striped Men Polo Neck White, Dark Blue, Dark Green T-Shirt', 1, 1, 'Type Polo Neck Sleeve Half Sleeve Fit Regular Fabric Cotton Blend Sales Package Pack Of 1 Men\'s T-shirt Pack of 1 Style Code T285HS-AS7WHDNMT Neck Type Polo Neck Ideal For Men Size XL Pattern Striped Suitable For Western Wear Sleeve Type Narrow Reversible No Fabric Care Cold water wash only Brand Color White-Darknavy-Mustard', 'Type Polo Neck Sleeve Half Sleeve Fit Regular Fabric Cotton Blend Sales Package Pack Of 1 Men\'s T-shirt Pack of 1 Style Code T285HS-AS7WHDNMT Neck Type Polo Neck Ideal For Men Size XL Pattern Striped Suitable For Western Wear Sleeve Type Narrow Reversible No Fabric Care Cold water wash only Brand Color White-Darknavy-Mustard', 'upload/product/161148953970.jpg', '499', '799', 'enable', 2, 'No', NULL, '2021-01-24 06:28:59', '2021-01-24 06:28:59'),
(24, 'QTRZI4HC', 'Printed Men Round Neck Yellow T-Shirt', 1, 1, 'Type Round Neck Sleeve Half Sleeve Fit Slim Fabric Cotton Blend Sales Package 1 unit Pack of 1 Style Code Newyork_Yellow Neck Type Round Neck Ideal For Men Size M Pattern Printed Suitable For Western Wear Brand Fit Slim Fit Sleeve Type Narrow Reversible No Fabric Care First wash dry clean thereafter handwash Brand Color Yellow', 'Type Round Neck Sleeve Half Sleeve Fit Slim Fabric Cotton Blend Sales Package 1 unit Pack of 1 Style Code Newyork_Yellow Neck Type Round Neck Ideal For Men Size M Pattern Printed Suitable For Western Wear Brand Fit Slim Fit Sleeve Type Narrow Reversible No Fabric Care First wash dry clean thereafter handwash Brand Color Yellow', 'upload/product/16114907535.jpg', '799', '1200', 'enable', 2, 'No', NULL, '2021-01-24 06:49:13', '2021-01-24 06:49:13'),
(25, 'P9QSRBKI', 'Typography Men Hooded Neck Multicolor T-Shirt', 1, 1, 'Type Hooded Neck Sleeve Full Sleeve Fit Regular Fabric Cotton Blend Pack of 1 Style Code TRDBLHDFUL-ORGL Neck Type Hooded Neck Ideal For Men Size S Pattern Typography Suitable For Western Wear Brand Fit Regular Fabric Care Regular Machine Wash Brand Color brand_multicolor4', 'High quality premium Self Design Hooded Tshirt direct from the manufacturers. Gives you perfect fit, comfort feel ,stylish and handsome look. Trusted brand online and no compromise on quality.', 'upload/product/161149089721.jpg', '320', '899', 'enable', 2, 'No', NULL, '2021-01-24 06:51:37', '2021-01-24 06:51:37'),
(26, '7KB0JHUN', 'Printed Men Round Neck Black T-Shirt', 1, 1, 'Type Round Neck Sleeve Half Sleeve Fit Slim Fabric Cotton Blend Sales Package Feathers_Black_XL Pack of 1 Style Code Feathers_Black Neck Type Round Neck Ideal For Men Size XL Pattern Printed Suitable For Western Wear Brand Fit Slim Fit Sleeve Type Narrow Reversible No Fabric Care First wash dry clean thereafter handwash Other Details Placement Printed Brand Color Black', 'Type Round Neck Sleeve Half Sleeve Fit Slim Fabric Cotton Blend Sales Package Feathers_Black_XL Pack of 1 Style Code Feathers_Black Neck Type Round Neck Ideal For Men Size XL Pattern Printed Suitable For Western Wear Brand Fit Slim Fit Sleeve Type Narrow Reversible No Fabric Care First wash dry clean thereafter handwash Other Details Placement Printed Brand Color Black', 'upload/product/161149099987.jpg', '320', '599', 'enable', 2, 'No', NULL, '2021-01-24 06:53:19', '2021-01-24 06:53:19'),
(27, 'G51LMB6I', 'Men Slim Fit Printed Spread Collar Casual Shirt', 1, 1, 'Pack of 1 Style Code blue dotted Fit Slim Fabric Cotton Blend Sleeve Full Sleeve Pattern Printed Reversible No Collar Spread Color Blue, Beige Fabric Care Regular Machine Wash Suitable For Western Wear Generic Name Shirt Country of Origin India', 'Pack of 1 Style Code blue dotted Fit Slim Fabric Cotton Blend Sleeve Full Sleeve Pattern Printed Reversible No Collar Spread Color Blue, Beige Fabric Care Regular Machine Wash Suitable For Western Wear Generic Name Shirt Country of Origin India', 'upload/product/161149126056.jpg', '347', '999', 'enable', 2, 'Yes', NULL, '2021-01-24 06:57:40', '2021-02-17 15:21:36'),
(28, 'O31S76NU', 'Solid Men Turtle Neck Black T-Shirt', 1, 1, 'Type Turtle Neck Sleeve Half Sleeve Fit Regular Fabric Cotton Blend Sales Package 1 T Shirt Pack of 1 Style Code BCSA0002_NavyBlue Neck Type Turtle Neck Ideal For Men Size S Pattern Solid Suitable For Western Wear Brand Fit Regular Sleeve Type Narrow Reversible No Fabric Care Machine wash as per tag, Gentle Machine Wash Brand Color Dark Blue', 'Type Turtle Neck Sleeve Half Sleeve Fit Regular Fabric Cotton Blend Sales Package 1 T Shirt Pack of 1 Style Code BCSA0002_NavyBlue Neck Type Turtle Neck Ideal For Men Size S Pattern Solid Suitable For Western Wear Brand Fit Regular Sleeve Type Narrow Reversible No Fabric Care Machine wash as per tag, Gentle Machine Wash Brand Color Dark Blue', 'upload/product/161149138816.jpg', '999', '3600', 'enable', 2, 'No', NULL, '2021-01-24 06:59:48', '2021-01-24 06:59:48'),
(29, 'MUIKXAHF', 'Printed Men Round Neck Grey, Black T-Shirt  (Pack of 2)', 1, 1, 'Type Round Neck Sleeve Full Sleeve Fit Regular Fabric Cotton Blend Pack of 2 Style Code TGYBL-BLGYHDFUL-BELIEVER Neck Type Round Neck Ideal For Men Size L Pattern Printed Suitable For Western Wear Reversible No Fabric Care Regular Machine Wash Brand Color Grey-Black1', 'Type Round Neck Sleeve Full Sleeve Fit Regular Fabric Cotton Blend Pack of 2 Style Code TGYBL-BLGYHDFUL-BELIEVER Neck Type Round Neck Ideal For Men Size L Pattern Printed Suitable For Western Wear Reversible No Fabric Care Regular Machine Wash Brand Color Grey-Black1', 'upload/product/161149146863.jpg', '899', '126', 'enable', 2, 'No', NULL, '2021-01-24 07:01:08', '2021-01-24 07:01:08'),
(37, 'FCQDBPW6', 'i pone xs', 4, 21, 'i pone xs', 'Xs 64gb__ 1 year Up warranty \r\n 💯 Cond 💯 Battry Health \r\n Box pack_Gray color_best Rat', 'upload/product/161260382595.jpg', '49999', '59999', 'enable', 6, 'No', NULL, '2021-02-06 09:30:25', '2021-02-06 09:30:25'),
(35, '82JVHDB7', 'Apple iPhone X (Silver, 64 GB)', 4, 21, 'Apple iPhone X (Silver, 64 GB)', 'Meet the iPhone X - the device that\'s so smart that it responds to a tap, your voice, and even a glance. Elegantly designed with a large 14.73 cm (5.8) Super Retina screen and a durable front-and-back glass, this smartphone is designed to impress. What\'s more, you can charge this iPhone wirelessly.\r\n\r\n14.73 cm Super Retina Screen\r\nMovies or games - with its Super Retina screen, you can enjoy an immersive-viewing experience that dazzles the eyes.\r\n\r\n\r\nInnovative Display Technology\r\nThe display, with new techniques and technology, follows the curves and its elegantly rounded corners.\r\n\r\n\r\nOLED Screen\r\nEverything on the screen looks vibrant and beautiful, with true blacks, stunning colors, high brightness, and a 1,000,000 to 1 contrast ratio.\r\n\r\n\r\nIP67 Rating\r\nCrafted using durable glass on both the sides, this phone, with surgical-grade stainless steel, is water- and dust-resistant.\r\n\r\n\r\nIntuitive Gestures\r\nNavigating your phone using familiar gestures will be intuitive and natural. All it takes is a simple swipe to take you to your home screen from anywhere.\r\n\r\n\r\nYour Face is Your Password\r\nExperience secure authentication with its Face ID; it projects and analyses more than 30,000 invisible dots on your face to create a depth map. What\'s more, enabled by the TrueDepth camera and equipped with an adaptive recognition, the Face ID adapts to your face\'s physical changes over time.\r\n\r\n\r\nPortrait Mode Selfies and Portrait Lighting\r\nClick beautiful selfies with sharp foregrounds, blurred backgrounds and impressive studio-quality lighting effects.\r\n\r\n\r\nExpress Yourself with 12 Animoji\r\nThanks to the TrueDepth camera, this phone analyses more than 50 muscle movements to mirror your expressions.\r\n\r\n\r\nDual 12 MP Cameras\r\nIts dual cameras feature a large and fast 12 MP sensor, an optical zoom, a color filter and a telephoto camera with OIS, so your pictures and videos come out bright and precise even in low-light conditions.\r\n\r\n\r\nStudio-quality Lighting\r\nThanks to its Portrait Lighting, depth-sensing cameras and precise facial mapping, you can click professional-quality photos.\r\n\r\n\r\nSuperhuman Intelligence\r\nEquipped with the A11 Bionic chip designed by Apple that boasts four efficiency cores and a neural engine, you can experience fast performance and smooth multitasking.\r\n\r\n\r\nLong-lasting Battery\r\nIts second-generation performance controller along with its custom battery design makes this phone\'s battery last long between charges.\r\n\r\n\r\nGame Like Never Before\r\nThanks to its Apple-designed three-core GPU and powerful A11 Bionic chip, you can enjoy unbelievable augmented reality experiences in apps and games.\r\n\r\n\r\nWireless Charging\r\nNo more cables and wires - charge it wirelessly using charging stations and mats.\r\niOS 11\r\nSend Animoji in Messages, discover new music with friends on Apple Music and let Siri be your personal DJ.\r\nindian  mobile\r\ngood price', 'upload/product/161260339171.png', '39999', '59999', 'enable', 6, 'No', NULL, '2021-02-06 09:23:11', '2021-02-06 15:56:32'),
(36, 'LKJ4P165', 'i phone xr', 4, 21, 'i pohne xr', '🔥 Pure Genuine Stock 🔥 \r\nAa Stock Kyay Nai Made Guarantee\r\n\r\n Xr 256GB 2YEAR APPLE WARRANTY \r\n💯 Brand New 💯 Battry Health\r\n👉 Box Pack Genuine Stock \r\n👉 Original Accessories', 'upload/product/161260372377.jpg', '59999', '69999', 'enable', 6, 'No', NULL, '2021-02-06 09:28:43', '2021-02-06 09:28:43'),
(32, 'WIXD9A6T', 'painted half sleev shirt', 1, 1, 'painted half sleev shirt', 'Style : *painted half sleev shirt*\r\nFabric : *important*\r\nQuality Status : *7A HIGH* *primum qulity*\r\nDesign : *printed*\r\nMoq : *singul pcs*\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\nPrice := *499rs*\r\n(only for resaler )+shiping charg extra\r\nGujrat ship 1 to 4 pcs =40 rs\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161218029767.jpg', '599', '1000', 'enable', 4, 'No', NULL, '2021-02-01 11:51:37', '2021-02-02 16:27:21'),
(33, 'I81BQ6CM', 'painted half sleev shirt', 1, 1, 'painted half sleev shirt', 'Style : *painted half sleev shirt*\r\n\r\nFabric : *important*\r\n\r\nQuality Status : *7A HIGH* *primum qulity*\r\n\r\nDesign : *printed*\r\n\r\nMoq : *singul pcs*\r\n\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\n\r\nPrice := *499rs*\r\n(only for resaler )+shiping charg extra\r\n\r\nGujrat ship 1 to 4 pcs =40 rs\r\n\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161218049738.jpg', '599', '1000', 'enable', 4, 'No', NULL, '2021-02-01 11:54:57', '2021-02-02 16:27:38'),
(38, 'VDJ5U43C', 'i pone xs maxx', 4, 21, 'i phone xs maxx', 'Xs maxx 256gb_ 💯 Cond New 💯 Battry\r\n 10 to 18month mixx Warranty Pack🛡️\r\n🔥 Kadak Maal lowest Rate 🔥', 'upload/product/161260394775.jpg', '89999', '99999', 'enable', 6, 'No', NULL, '2021-02-06 09:32:27', '2021-02-06 09:32:27'),
(39, 'BYUDK6N5', 'i phone 11 pro maxx', 4, 21, 'i phone 11 pro max', '11 pro MAXX 256gb_ 9month warranty \r\n 💯 Brand New 💯 Battry Health', 'upload/product/161261121514.jpg', '95999', '99999', 'enable', 6, 'No', NULL, '2021-02-06 11:33:35', '2021-02-06 11:33:35'),
(43, '8ZJPW5I0', 'Boat Stone Graned', 4, 25, 'Boat Stone', 'Boat Stone Graned Original Speaker only 1099/- 1 year warranty', 'upload/product/161261146658.jpg', '1599', '2599', 'enable', 6, 'No', NULL, '2021-02-06 11:37:46', '2021-02-06 11:37:46'),
(44, 'HNKO8YSD', 'Flix 31watt', 4, 25, 'Flix 31', 'Flix 31watt Speaker  1 year warranty. Super Sound more than  jbl speaker', 'upload/product/161261169989.jpg', '2999', '4999', 'enable', 6, 'No', NULL, '2021-02-06 11:41:39', '2021-02-06 11:41:39'),
(42, '7MR93OUT', 'Boat Stone 193', 4, 25, 'Boat Stone', 'Boat Stone 193 Speaker - 1 year warranty', 'upload/product/161261137619.jpg', '1999', '2999', 'enable', 6, 'No', NULL, '2021-02-06 11:36:16', '2021-02-06 11:36:16'),
(45, 'KBHDURPY', 'Primex S1', 4, 25, 'Primex S1', 'Primex S1 Speaker 6 month warranty', 'upload/product/161261197554.jpg', '999', '1999', 'enable', 6, 'No', NULL, '2021-02-06 11:46:15', '2021-02-06 11:46:15'),
(46, 'MV8JQ9XZ', 'Rd W-S72', 4, 25, 'Rd W-S72 speaker only 350/-. 3 months warranty', 'Rd W-S72 speaker -. 3 months warranty', 'upload/product/161261214972.jpg', '599', '999', 'enable', 6, 'No', NULL, '2021-02-06 11:49:09', '2021-02-06 11:49:09'),
(47, 'FK7Y5IP2', 'canon 1300D', 4, 26, 'canon 1300D', 'Buy Canon EOS 1300D 18MP Digital SLR Camera (Black) with 18-55 and 55-250mm is II Lens, 16GB Card and Carry Case Online at Low Price in India | Canon Camera Reviews &\r\nImages may be subject', 'upload/product/161261231987.jpg', '29999', '49999', 'enable', 6, 'No', NULL, '2021-02-06 11:51:59', '2021-02-06 11:51:59'),
(48, 'DV94S3TH', 'nikon 5d', 4, 26, 'nikon 5d mark', 'DPReview\r\nNikon D5300 Review: Digital Photography Review', 'upload/product/161261246679.jpg', '49999', '59999', 'enable', 6, 'No', NULL, '2021-02-06 11:54:26', '2021-02-06 11:54:26'),
(49, 'L45J2GIX', 'CAMERA', 4, 26, 'ALL MODEL AVELIBAL', 'Pocket-lint\r\nBest DSLR cameras 2020: The top interchangeable lens cameras\r\nImages may be subject to copyright. Learn More', 'upload/product/161261261541.jpg', '59999 TO 99999', '99999 TO 199999', 'enable', 6, 'No', NULL, '2021-02-06 11:56:55', '2021-02-06 11:56:55'),
(50, 'CYKMEUO5', 'Canon EOS 200D II (EF-S 18-55mm f4-5.6 IS STM) DSLR', 4, 26, 'Canon EOS 200D II (EF-S 18-55mm f4-5.6 IS STM) DSLR', 'Tata Cliq\r\nCa 200Dnon EOS II (EF-S 18-55mm f4-5.6 IS STM) DSLR\r\nTata Cliq\r\nCanon EOS 200D II (EF-S 18-55mm f4-5.6 IS STM) DSLR', 'upload/product/161261270050.jpg', '45999', '49999', 'enable', 6, 'No', NULL, '2021-02-06 11:58:20', '2021-02-06 11:58:20'),
(51, 'ACBOP9KJ', 'CANON T7i DSLR Camera', 4, 26, 'T7i DSLR Camera', 'T7i DSLR Camera + 18-55mm is STM Lens + Canon 55-250mm Lens & 500mm F/8.0 Lens + 0.4\r\n3.7\r\n(6)\r\n·\r\nCanon Eos RebelBrand: Canon\r\nBrand Name:Canon,Series:EOS,Model Number:Canon Eos Rebel T7i DSLR Camera + 18-55mm is STM Lens + Canon 55-250mm Lens & 500mm F/8.0 Lens + 0.4,Product ...', 'upload/product/161261293897.jpg', '49999', '69999', 'enable', 6, 'No', NULL, '2021-02-06 12:02:18', '2021-02-06 12:02:18'),
(52, 'DHMB58FN', 'Lenovo Ldeapad', 4, 22, 'ILenovodeapad', 'ILenovodeapad Slim 3i 10th Gen Intel Core i3 15.6 inch FHD Thin and Light Laptop (8GB/1TB/Windows 10/MS Office/Grey/1.85Kg), 81WE007TIN', 'upload/product/161261313893.jpg', '50000', '60000', 'enable', 6, 'No', NULL, '2021-02-06 12:05:38', '2021-02-06 12:05:38'),
(53, '5RPJYX3S', 'Mi Notebook 14', 4, 22, 'Mi.com Mi Notebook 14', 'Mi.com\r\nMi Notebook 14 (Laptop) - 10th Generation Intel® Core™ i5\r\n5\r\n· In stock·Brand: Xiaomi', 'upload/product/161261324575.png', '48999', '59999', 'enable', 6, 'No', NULL, '2021-02-06 12:07:25', '2021-02-06 12:07:25'),
(54, 'V9G3SRIT', 'HP 455 (E1Q80PA) Laptop', 4, 22, 'HP 455 (E1Q80PA) Laptop', '91Mobiles\r\nHP 455 (E1Q80PA) Laptop (AMD Dual Core/2 GB/500 GB/DOS)\r\n3.6\r\n(14)\r\n·Brand: HP\r\nKnow everything about HP 455 (E1Q80PA) Laptop (AMD Dual Core/2 GB/500 GB/DOS) in India. Read HP 455 (E1Q80PA) Laptop (AMD Dual Core/2 GB/500 GB/DOS) ...', 'upload/product/161261335464.jpg', '99999', '100000', 'enable', 6, 'No', NULL, '2021-02-06 12:09:14', '2021-02-06 12:09:14'),
(55, 'GPDZX945', 'DELL', 4, 22, 'DELL', 'The Economic Times\r\nDell Latitude 7400 2-in-1 review: A great business laptop with 24 hour battery life - The Economic Times\r\nImages may be subject to copyright. Learn More', 'upload/product/161261344590.jpg', '78999', '89999', 'enable', 6, 'No', NULL, '2021-02-06 12:10:45', '2021-02-06 12:10:45'),
(56, 'FKO41PSW', 'A｜SUS M509Laptops', 4, 22, 'A｜SUS M509Laptops', 'ASUS\r\nA｜SUS M509Laptops For Home｜ASUS Global0 EUR*· In stock·Brand: ASUS', 'upload/product/161261353225.jpg', '49999', '69999', 'enable', 6, 'No', NULL, '2021-02-06 12:12:12', '2021-02-06 12:12:12'),
(57, 'L2XD0MHK', 'A｜SUS M509Laptops', 4, 22, 'A｜SUS M509Laptops', 'ASUS\r\nA｜SUS M509Laptops For Home｜ASUS Global0 EUR*· In stock·Brand: ASUS', 'upload/product/161261353215.jpg', '49999', '69999', 'enable', 6, 'No', NULL, '2021-02-06 12:12:12', '2021-02-06 12:12:12'),
(58, '08SQPI9G', 'Mi LED TV 4A PRO 108 cm (43', 4, 23, 'Mi LEDTV 4A PRO 108 cm (43', 'Xiaomi India | Mobile | TV | Fitness | Smart Home | Lifestyle - Mi India\r\n Mi LEDTV 4A PRO 108 cm (43)\r\n₹24,999.00 INR*· In stock·Brand: Xiaomi\r\n... - Check out the features: Ultra-bright LED display, Powerful 20W stereo speakers, 700,000+ hours of content on PatchWall and many more\r\n* Check website for latest pricing and availability. Images may be subject to copyright. Learn More\r\nRelated images', 'upload/product/161261367590.png', '12999', '20000', 'enable', 6, 'No', NULL, '2021-02-06 12:14:35', '2021-02-06 12:14:35'),
(59, '8I5DKRQO', 'Realme Smart TV (43-Inch)', 4, 23, 'Realme Smart TV (43-Inch)', 'NDTV Gadgets 360\r\n\r\nNDTV Gadgets 360\r\nRealme Smart TV (43-Inch)\r\n4.2\r\n(4,777)\r\n· ₹23,999.00 INR*·Brand: Realme\r\n... best price is Rs. 23,999 as on 5th February 2021. See full specifications, expert reviews, user ratings, and more. Compare Realme Smart TV ...\r\n* Check website for latest pricing and availability. Images may be subject to copyright. Learn More\r\n4.2\r\n(4,777)\r\n\r\n... best price is Rs. 23,999 as on 5th February 2021. See full specifications, expert reviews, user ratings, and more. Compare Realme Smart TV ...\r\n* Check website for latest pricing and availability. Images may be subject to copyright. Learn More', 'upload/product/161261385195.jpg', '25000', '35000', 'enable', 6, 'No', NULL, '2021-02-06 12:17:31', '2021-02-06 12:17:31'),
(60, 'HMWOB4YF', 'HT Tech', 4, 23, 'HT Tech', 'HT Tech\r\nSmart tv : Smart tv Latest News, photos and videos\r\nImages may be subject to copyright. Learn More', 'upload/product/1612613945100.jpg', '9999', '15999', 'enable', 6, 'No', NULL, '2021-02-06 12:19:05', '2021-02-06 12:19:05'),
(61, '5TRJAINP', 'LG HD 720p LED TV -', 4, 23, 'LG HD 720p LED TV -', 'LG\r\nHD 720p LED TV - 24\'\' Class (23.6\'\' Diag)\r\n4.5\r\n(88)\r\n· $139.99*· In stock·Brand: LG\r\nGet information on the LG 24LJ4540. Find pictures, reviews, technical specifications, and features for this 22-inch HD LED TV\r\n* Check website for latest pricing and availability. Images may be subject to copyright. \r\nLG\r\nHD 720p LED TV - 24\'\' Class (23.6\'\' Diag)\r\n4.5\r\n(88)\r\n· $139.99*· In stock·Brand: LG\r\nGet information on the LG 24LJ4540. Find pictures, reviews, technical specifications, and features for this 22-inch HD LED TV\r\n* Check website for latest pricing and availability. Images may be subject to copyright. \' Class (23\r\n.6\'\' Diag)4.5\r\n(88)\r\n· $139.99*· In stock·Brand: LG\r\nGet information on the LG 24LJ4540. Find pictures, reviews, technical specifications, and features for this 22-inch HD LED TV\r\n* Check website for latest pricing and availability. Images may be subject to copyright.', 'upload/product/161261402941.jpg', '14999', '20999', 'enable', 6, 'No', NULL, '2021-02-06 12:20:29', '2021-02-06 12:20:29'),
(62, 'N9P5RT6V', 'Samsung - 65\" Class 6 Series LED 4K UHD Smart Tizen TV', 4, 23, 'Samsung - 65\" Class 6 Series LED 4K UHD Smart Tizen TV', 'Best Buy\r\nSamsung - 65\" Class 6 Series LED 4K UHD Smart Tizen TV\r\n4.6\r\n(4,730)\r\n2160p (4K) resolution with HDR Smart TV Motion Rate 120\r\n* Check website for latest pricing and availability. Images may be subject to copyright. Lear', 'upload/product/161261412431.jpg', '25999', '49999', 'enable', 6, 'No', NULL, '2021-02-06 12:22:04', '2021-02-06 12:22:04'),
(63, '1S3PIQMZ', 'painted half sleev shirt', 1, 1, 'painted half sleev shirt', 'Style : *painted half sleev shirt*\r\nFabric : *important*\r\nQuality Status : *7A HIGH* *primum qulity*\r\nDesign : *printed*\r\nMoq : *singul pcs*\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\nPrice := *499rs*\r\n(only for resaler )+shiping charg extra\r\nGujrat ship 1 to 4 pcs =40 rs\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267263659.jpg', '499', '699', 'enable', 4, 'No', NULL, '2021-02-07 04:37:16', '2021-02-07 04:37:16'),
(64, 'MLFV74DJ', 'painted half sleev shirt', 1, 1, 'painted half sleev shirt', 'Style : *painted half sleev shirt*\r\nFabric : *important*\r\nQuality Status : *7A HIGH* *primum qulity*\r\nDesign : *printed*\r\nMoq : *singul pcs*\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\nPrice := *499rs*\r\n(only for resaler )+shiping charg extra\r\nGujrat ship 1 to 4 pcs =40 rs\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267270510.jpg', '499', '699', 'enable', 4, 'No', NULL, '2021-02-07 04:38:25', '2021-02-07 04:38:25'),
(81, 'UK8517LT', 'Puma Men\'s Shorts', 1, 3, 'puma half cotton shorts', 'puma half cotton shorts\r\nFabric Composition: 63% Cotton, 37% Polyester\r\nPattern: Striped\r\nWash Care Instructions: Close All Fastenings; Do Not Iron Accessories/Trims; Do Not Iron Print; Use Detergent For Colours; Wash And Iron Inside Out; Wash With Similar Colours\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\nPrice := *599rs*\r\n(only for resaler )+shiping charg extra\r\nGujrat ship 1 to 4 pcs =40 rs\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267967579.jpg', '599', '799', 'enable', 4, 'No', NULL, '2021-02-07 06:34:35', '2021-02-07 06:34:35'),
(67, '3VGXPYDW', 'painted half sleev shirt', 1, 1, 'painted half sleev shirt', 'Style : *painted half sleev shirt*\r\nFabric : *important*\r\nQuality Status : *7A HIGH* *primum qulity*\r\nDesign : *printed*\r\nMoq : *singul pcs*\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\nPrice := *499rs*\r\n(only for resaler )+shiping charg extra\r\nGujrat ship 1 to 4 pcs =40 rs\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267308051.jpg', '499', '699', 'enable', 4, 'No', NULL, '2021-02-07 04:44:40', '2021-02-07 04:44:40'),
(68, 'NX6C7E2A', 'painted half sleev shirt', 1, 1, 'painted half sleev shirt', 'Style : *painted half sleev shirt*\r\nFabric : *important*\r\nQuality Status : *7A HIGH* *primum qulity*\r\nDesign : *printed*\r\nMoq : *singul pcs*\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\nPrice := *499rs*\r\n(only for resaler )+shiping charg extra\r\nGujrat ship 1 to 4 pcs =40 rs\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267326843.jpg', '499', '699', 'enable', 4, 'No', NULL, '2021-02-07 04:47:48', '2021-02-07 04:47:48'),
(69, '7WHE4PLD', 'painted half sleev shirt', 1, 1, 'painted half sleev shirt', 'Style : *painted half sleev shirt*\r\nFabric : *important*\r\nQuality Status : *7A HIGH* *primum qulity*\r\nDesign : *printed*\r\nMoq : *singul pcs*\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\nPrice := *499rs*\r\n(only for resaler )+shiping charg extra\r\nGujrat ship 1 to 4 pcs =40 rs\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267338753.jpg', '499', '699', 'enable', 4, 'No', NULL, '2021-02-07 04:49:47', '2021-02-07 04:49:47'),
(70, 'YWS1OFTZ', 'painted half sleev shirt', 1, 1, 'painted half sleev shirt', 'Style : *painted half sleev shirt*\r\nFabric : *important*\r\nQuality Status : *7A HIGH* *primum qulity*\r\nDesign : *printed*\r\nMoq : *singul pcs*\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\nPrice := *499rs*\r\n(only for resaler )+shiping charg extra\r\nGujrat ship 1 to 4 pcs =40 rs\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267349458.jpg', '499', '699', 'enable', 4, 'No', NULL, '2021-02-07 04:51:34', '2021-02-07 04:51:34'),
(71, 'N46WVHOD', 'painted half sleev shirt', 1, 1, 'painted half sleev shirt', 'Style : *painted half sleev shirt*\r\nFabric : *important*\r\nQuality Status : *7A HIGH* *primum qulity*\r\nDesign : *printed*\r\nMoq : *singul pcs*\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\nPrice := *499rs*\r\n(only for resaler )+shiping charg extra\r\nGujrat ship 1 to 4 pcs =40 rs\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267356289.jpg', '499', '699', 'enable', 4, 'No', NULL, '2021-02-07 04:52:42', '2021-02-07 04:52:42'),
(79, 'T06CEXFW', 'Puma Men\'s Shorts', 1, 3, 'puma half cotton shorts', 'puma half cotton shorts\r\nFabric Composition: 63% Cotton, 37% Polyester\r\nPattern: Striped\r\nWash Care Instructions: Close All Fastenings; Do Not Iron Accessories/Trims; Do Not Iron Print; Use Detergent For Colours; Wash And Iron Inside Out; Wash With Similar Colours\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\nPrice := *599rs*\r\n(only for resaler )+shiping charg extra\r\nGujrat ship 1 to 4 pcs =40 rs\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267938241.jpg', '599', '799', 'enable', 4, 'No', NULL, '2021-02-07 06:29:42', '2021-02-07 06:29:42'),
(74, 'N3UK2IW6', 'painted half sleev shirt', 1, 1, 'painted half sleev shirt', 'Style : *painted half sleev shirt*\r\nFabric : *important*\r\nQuality Status : *7A HIGH* *primum qulity*\r\nDesign : *printed*\r\nMoq : *singul pcs*\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\nPrice := *499rs*\r\n(only for resaler )+shiping charg extra\r\nGujrat ship 1 to 4 pcs =40 rs\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267525819.jpg', '499', '699', 'enable', 4, 'No', NULL, '2021-02-07 05:20:58', '2021-02-07 05:20:58'),
(75, 'BP4JU8CL', 'PUMA Men\'s Shorts', 1, 3, 'Colour: Peacoat And Design: Peacoat', 'Care Instructions: Machine Wash\r\nStyle Name: Active Woven Short 5\"\r\nFabric Composition: 100% Polyester\r\nPattern: Solid\r\nWash Care Instructions: Close All Fastenings; Use Detergent For Colours; Wash And Iron Inside Out; Wash With Similar Colours\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\n\r\nPrice := *499rs*\r\n(only for resaler )+shiping charg extra\r\n\r\nGujrat ship 1 to 4 pcs =40 rs\r\n\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267768254.jpg', '1399', '1599', 'enable', 4, 'No', NULL, '2021-02-07 06:01:22', '2021-02-07 06:01:22'),
(76, 'R4DBFCIG', 'Puma Men\'s Cotton  Trousers', 1, 3, 'Puma Men\'s Cotton Active Base Layer Trousers', 'Style Name: Evostripe Pants\r\nFabric Composition: 63% Cotton, 37% Polyester\r\nPattern: Striped\r\nWash Care Instructions: Close All Fastenings; Do Not Iron Accessories/Trims; Do Not Iron Print; Use Detergent For Colours; Wash And Iron Inside Out; Wash With Similar Colours\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\n\r\nPrice := *499rs*\r\n(only for resaler )+shiping charg extra\r\n\r\nGujrat ship 1 to 4 pcs =40 rs\r\n\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267785865.jpg', '1399', '1599', 'enable', 4, 'No', NULL, '2021-02-07 06:04:18', '2021-02-07 06:04:18'),
(77, 'XY0MZWEV', 'Puma Men\'s Cotton Trousers', 1, 3, 'Puma Men\'s Cotton Active Base Layer Trousers', 'Style Name: Evostripe Pants\r\nFabric Composition: 63% Cotton, 37% Polyester\r\nPattern: Striped\r\nWash Care Instructions: Close All Fastenings; Do Not Iron Accessories/Trims; Do Not Iron Print; Use Detergent For Colours; Wash And Iron Inside Out; Wash With Similar Colours\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\n\r\nPrice := *499rs*\r\n(only for resaler )+shiping charg extra\r\n\r\nGujrat ship 1 to 4 pcs =40 rs\r\n\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267809895.jpg', '1399', '1599', 'enable', 4, 'No', NULL, '2021-02-07 06:08:18', '2021-02-07 06:08:18'),
(78, '5I3EYHP8', 'PUMA Men\'s Cotton Shorts', 1, 3, 'puma half cotton shorts', 'puma half cotton shorts\r\nFabric Composition: 63% Cotton, 37% Polyester\r\nPattern: Striped\r\nWash Care Instructions: Close All Fastenings; Do Not Iron Accessories/Trims; Do Not Iron Print; Use Detergent For Colours; Wash And Iron Inside Out; Wash With Similar Colours\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\nPrice := *599rs*\r\n(only for resaler )+shiping charg extra\r\nGujrat ship 1 to 4 pcs =40 rs\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267918266.jpg', '599', '799', 'enable', 4, 'No', NULL, '2021-02-07 06:26:22', '2021-02-07 06:26:22'),
(82, 'TNH4Z57B', 'Puma Men\'s Shorts', 1, 3, 'puma half cotton shorts', 'puma half cotton shorts\r\nFabric Composition: 63% Cotton, 37% Polyester\r\nPattern: Striped\r\nWash Care Instructions: Close All Fastenings; Do Not Iron Accessories/Trims; Do Not Iron Print; Use Detergent For Colours; Wash And Iron Inside Out; Wash With Similar Colours\r\nSize : *s,m, l , xl, x*(reguler fiting)\r\nPrice := *599rs*\r\n(only for resaler )+shiping charg extra\r\nGujrat ship 1 to 4 pcs =40 rs\r\nOther secter ship\r\n1 to 2 pcs =70 rs.\r\n3 to 4 pcs =120 rs.', 'upload/product/161267990796.jpg', '599', '799', 'enable', 4, 'No', NULL, '2021-02-07 06:38:27', '2021-02-07 06:38:27'),
(83, '4QDSOUBH', 'PUMA Men\'s Cotton Shorts', 1, 3, 'puma half cotton shorts', 'puma half cotton shorts Fabric Composition: 63% Cotton, 37% Polyester Pattern: Striped Wash Care Instructions: Close All Fastenings; Do Not Iron Accessories/Trims; Do Not Iron Print; Use Detergent For Colours; Wash And Iron Inside Out; Wash With Similar Colours Size : *s,m, l , xl, x*(reguler fiting) Price := *599rs* (only for resaler )+shiping charg extra Gujrat ship 1 to 4 pcs =40 rs Other secter ship 1 to 2 pcs =70 rs. 3 to 4 pcs =120 rs.', 'upload/product/161268805871.jpg', '599', '799', 'enable', 4, 'No', NULL, '2021-02-07 08:54:18', '2021-02-07 08:54:18'),
(84, '3QFLTY6U', 'Puma Men\'s Shorts', 1, 3, 'puma half cotton shorts', 'puma half cotton shorts Fabric Composition: 63% Cotton, 37% Polyester Pattern: Striped Wash Care Instructions: Close All Fastenings; Do Not Iron Accessories/Trims; Do Not Iron Print; Use Detergent For Colours; Wash And Iron Inside Out; Wash With Similar Colours Size : *s,m, l , xl, x*(reguler fiting) Price := *599rs* (only for resaler )+shiping charg extra Gujrat ship 1 to 4 pcs =40 rs Other secter ship 1 to 2 pcs =70 rs. 3 to 4 pcs =120 rs.', 'upload/product/161268855287.jpg', '599', '799', 'enable', 4, 'No', NULL, '2021-02-07 09:02:32', '2021-02-07 09:02:32'),
(85, 'K9M6CEF5', 'Puma Men\'s Shorts', 1, 3, 'puma fullcotton shorts', 'puma half cotton shorts Fabric Composition: 63% Cotton, 37% Polyester Pattern: Striped Wash Care Instructions: Close All Fastenings; Do Not Iron Accessories/Trims; Do Not Iron Print; Use Detergent For Colours; Wash And Iron Inside Out; Wash With Similar Colours Size : *s,m, l , xl, x*(reguler fiting) Price := *599rs* (only for resaler )+shiping charg extra Gujrat ship 1 to 4 pcs =40 rs Other secter ship 1 to 2 pcs =70 rs. 3 to 4 pcs =120 rs.', 'upload/product/161268867318.jpg', '699', '899', 'enable', 4, 'No', NULL, '2021-02-07 09:04:33', '2021-02-07 09:04:33'),
(86, 'D8KMVH6U', 'Puma Men\'s Cotton track', 1, 3, 'puma full cotton shorts', 'puma half cotton shorts Fabric Composition: 63% Cotton, 37% Polyester Pattern: Striped Wash Care Instructions: Close All Fastenings; Do Not Iron Accessories/Trims; Do Not Iron Print; Use Detergent For Colours; Wash And Iron Inside Out; Wash With Similar Colours Size : *s,m, l , xl, x*(reguler fiting) Price := *699rs* (only for resaler )+shiping charg extra Gujrat ship 1 to 4 pcs =40 rs Other secter ship 1 to 2 pcs =70 rs. 3 to 4 pcs =120 rs.', 'upload/product/161268974651.jpg', '699', '899', 'enable', 4, 'No', NULL, '2021-02-07 09:22:26', '2021-02-07 09:22:26'),
(87, '42QY0A9M', 'Puma Men\'s track', 1, 3, 'puma full cotton shorts', 'puma half cotton shorts Fabric Composition: 63% Cotton, 37% Polyester Pattern: Striped Wash Care Instructions: Close All Fastenings; Do Not Iron Accessories/Trims; Do Not Iron Print; Use Detergent For Colours; Wash And Iron Inside Out; Wash With Similar Colours Size : *s,m, l , xl, x*(reguler fiting) Price := *699rs* (only for resaler )+shiping charg extra Gujrat ship 1 to 4 pcs =40 rs Other secter ship 1 to 2 pcs =70 rs. 3 to 4 pcs =120 rs.', 'upload/product/16126898763.jpg', '699', '899', 'enable', 4, 'No', NULL, '2021-02-07 09:24:36', '2021-02-07 09:24:36'),
(88, '5UZN1V76', 'Puma Men\'s Cotton track', 1, 3, 'puma full cotton track', 'puma half cotton shorts Fabric Composition: 63% Cotton, 37% Polyester Pattern: Striped Wash Care Instructions: Close All Fastenings; Do Not Iron Accessories/Trims; Do Not Iron Print; Use Detergent For Colours; Wash And Iron Inside Out; Wash With Similar Colours Size : *s,m, l , xl, x*(reguler fiting) Price := *699rs* (only for resaler )+shiping charg extra Gujrat ship 1 to 4 pcs =40 rs Other secter ship 1 to 2 pcs =70 rs. 3 to 4 pcs =120 rs.', 'upload/product/16126899484.jpg', '699', '899', 'enable', 4, 'No', NULL, '2021-02-07 09:25:48', '2021-02-07 09:25:48'),
(89, 'AI9M81K6', 'Puma Men\'s Cotton track', 1, 3, 'puma full cotton track', 'puma half cotton shorts Fabric Composition: 63% Cotton, 37% Polyester Pattern: Striped Wash Care Instructions: Close All Fastenings; Do Not Iron Accessories/Trims; Do Not Iron Print; Use Detergent For Colours; Wash And Iron Inside Out; Wash With Similar Colours Size : *s,m, l , xl, x*(reguler fiting) Price := *699rs* (only for resaler )+shiping charg extra Gujrat ship 1 to 4 pcs =40 rs Other secter ship 1 to 2 pcs =70 rs. 3 to 4 pcs =120 rs.', 'upload/product/161269013713.jpg', '699', '899', 'enable', 4, 'No', NULL, '2021-02-07 09:28:57', '2021-02-07 09:28:57'),
(90, 'A78O9VIP', 'Blazers', 1, 4, 'Men Slim Fit Formal And Party Blazer', 'Men Slim Fit Formal And Party Blazer\r\nCare Instructions: Dry Clean Only\r\nFit Type: Slim\r\nBlazer, Blazer for men , Blazer for men for party,Blazer for men\r\nCare Instructions: Dry Clean Only\r\nFit Type: Slim\r\nFit Type: Regular\r\nLight in Weight and easy to Maintain , Wash , Steam Press and Wear . Its an easy to wear Tuxedo.\r\nStyle : Tuxedo Blazer Shawl Collar - 2 Buttons front Open with 2 Front Pocket and 1 Chest Pocket for Pocket Square | Double Back Vents for Comfort Fit around Waist | 2 Slip Inside Pocket\r\nCare Instructions: We at Blacksmith Recommend to Dry clean the Garment only\r\nIn the Box : 1 Tuxedo Blazer + 1 Blacksmith Tuxedo Blazer Cover + 1 Hanger\r\nFit Type: Regular Fit , This Tuxedo Blazer can be used for Most Body Types and is suited for Party , Cocktail, Wedding, Functions, Sangeet, Lounge wear , PLEASE REFER SIZE CHART\r\nSize : *s,m, l , xl, x*(reguler fiting) Price := *599rs* (only for resaler )+shiping charg extra Gujrat ship 1 to 4 pcs =80 rs Other secter ship 1 to 2 pcs =90 rs. 3 to 4 pcs =150 rs.', 'upload/product/161269228064.jpg', '2999', '3999', 'enable', 4, 'No', NULL, '2021-02-07 10:04:40', '2021-02-07 10:04:40');
INSERT INTO `products` (`id`, `model_number`, `name`, `categories_id`, `subcategories_id`, `shot_description`, `description`, `image`, `price`, `discount`, `status`, `vedor_id`, `verify`, `attributes`, `created_at`, `updated_at`) VALUES
(91, 'CD9GQOAT', 'Blazers', 1, 4, 'Men Slim Fit Formal And Party Blazer', 'Men Slim Fit Formal And Party Blazer\r\nCare Instructions: Dry Clean Only\r\nFit Type: Slim\r\nBlazer, Blazer for men , Blazer for men for party,Blazer for men\r\nCare Instructions: Dry Clean Only\r\nFit Type: Slim\r\nFit Type: Regular\r\nLight in Weight and easy to Maintain , Wash , Steam Press and Wear . Its an easy to wear Tuxedo.\r\nStyle : Tuxedo Blazer Shawl Collar - 2 Buttons front Open with 2 Front Pocket and 1 Chest Pocket for Pocket Square | Double Back Vents for Comfort Fit around Waist | 2 Slip Inside Pocket\r\nCare Instructions: We at Blacksmith Recommend to Dry clean the Garment only\r\nIn the Box : 1 Tuxedo Blazer + 1 Blacksmith Tuxedo Blazer Cover + 1 Hanger\r\nFit Type: Regular Fit , This Tuxedo Blazer can be used for Most Body Types and is suited for Party , Cocktail, Wedding, Functions, Sangeet, Lounge wear , PLEASE REFER SIZE CHART\r\nSize : *s,m, l , xl, x*(reguler fiting) Price := *599rs* (only for resaler )+shiping charg extra Gujrat ship 1 to 4 pcs =80 rs Other secter ship 1 to 2 pcs =90 rs. 3 to 4 pcs =150 rs.', 'upload/product/161269235474.jpg', '2899', '3599', 'enable', 4, 'No', NULL, '2021-02-07 10:05:54', '2021-02-07 10:05:54'),
(92, 'XBPR4AN1', 'Blazers', 1, 4, 'Men Slim Fit Formal And Party Blazer', 'Men Slim Fit Formal And Party Blazer\r\nCare Instructions: Dry Clean Only\r\nFit Type: Slim\r\nBlazer, Blazer for men , Blazer for men for party,Blazer for men\r\nCare Instructions: Dry Clean Only\r\nFit Type: Slim\r\nFit Type: Regular\r\nLight in Weight and easy to Maintain , Wash , Steam Press and Wear . Its an easy to wear Tuxedo.\r\nStyle : Tuxedo Blazer Shawl Collar - 2 Buttons front Open with 2 Front Pocket and 1 Chest Pocket for Pocket Square | Double Back Vents for Comfort Fit around Waist | 2 Slip Inside Pocket\r\nCare Instructions: We at Blacksmith Recommend to Dry clean the Garment only\r\nIn the Box : 1 Tuxedo Blazer + 1 Blacksmith Tuxedo Blazer Cover + 1 Hanger\r\nFit Type: Regular Fit , This Tuxedo Blazer can be used for Most Body Types and is suited for Party , Cocktail, Wedding, Functions, Sangeet, Lounge wear , PLEASE REFER SIZE CHART\r\nSize : *s,m, l , xl, x*(reguler fiting) Price := *599rs* (only for resaler )+shiping charg extra Gujrat ship 1 to 4 pcs =80 rs Other secter ship 1 to 2 pcs =90 rs. 3 to 4 pcs =150 rs.', 'upload/product/161269242247.jpg', '3599', '5599', 'enable', 4, 'No', NULL, '2021-02-07 10:07:02', '2021-02-07 10:07:02'),
(93, 'ZRKV2PSC', 'Blazers', 1, 4, 'Men Slim Fit Formal And Party Blazer', 'Men Slim Fit Formal And Party Blazer\r\nCare Instructions: Dry Clean Only\r\nFit Type: Slim\r\nBlazer, Blazer for men , Blazer for men for party,Blazer for men\r\nCare Instructions: Dry Clean Only\r\nFit Type: Slim\r\nFit Type: Regular\r\nLight in Weight and easy to Maintain , Wash , Steam Press and Wear . Its an easy to wear Tuxedo.\r\nStyle : Tuxedo Blazer Shawl Collar - 2 Buttons front Open with 2 Front Pocket and 1 Chest Pocket for Pocket Square | Double Back Vents for Comfort Fit around Waist | 2 Slip Inside Pocket\r\nCare Instructions: We at Blacksmith Recommend to Dry clean the Garment only\r\nIn the Box : 1 Tuxedo Blazer + 1 Blacksmith Tuxedo Blazer Cover + 1 Hanger\r\nFit Type: Regular Fit , This Tuxedo Blazer can be used for Most Body Types and is suited for Party , Cocktail, Wedding, Functions, Sangeet, Lounge wear , PLEASE REFER SIZE CHART\r\nSize : *s,m, l , xl, x*(reguler fiting) Price := *599rs* (only for resaler )+shiping charg extra Gujrat ship 1 to 4 pcs =80 rs Other secter ship 1 to 2 pcs =90 rs. 3 to 4 pcs =150 rs.', 'upload/product/161269247558.jpg', '2999', '3999', 'enable', 4, 'No', NULL, '2021-02-07 10:07:55', '2021-02-07 10:07:55'),
(94, 'E0BGLYD4', 'Men\'s Waistcoat', 1, 4, 'Waistcoat for Men Slim Fit Party Blazer', 'Waistcoat for Men Slim Fit Party Blazer\r\nCare Instructions: Hand Wash Only\r\n100% Polyester\r\nCare Instruction: Machine wash\r\nPattern: Solid\r\nSize : *s,m, l , xl, x*(reguler fiting) (only for resaler )+shiping charg extra Gujrat ship 1 to 4 pcs =80 rs Other secter ship 1 to 2 pcs =90 rs. 3 to 4 pcs =150 rs.', 'upload/product/161269310742.jpg', '1599', '1899', 'enable', 4, 'No', NULL, '2021-02-07 10:18:27', '2021-02-07 10:18:27'),
(95, '7PR4YHGL', 'Men\'s Waistcoat', 1, 4, 'Waistcoat for Men Slim Fit Party Blazer', 'Waistcoat for Men Slim Fit Party Blazer\r\nCare Instructions: Hand Wash Only\r\n100% Polyester\r\nCare Instruction: Machine wash\r\nPattern: Solid\r\nSize : *s,m, l , xl, x*(reguler fiting) (only for resaler )+shiping charg extra Gujrat ship 1 to 4 pcs =80 rs Other secter ship 1 to 2 pcs =90 rs. 3 to 4 pcs =150 rs.', 'upload/product/161269323616.jpg', '1499', '1799', 'enable', 4, 'No', NULL, '2021-02-07 10:20:36', '2021-02-07 10:20:36'),
(96, 'DF54HISM', 'Men\'s Waistcoat', 1, 4, 'Waistcoat for Men Slim Fit Party Blazer', 'Waistcoat for Men Slim Fit Party Blazer Care Instructions: Hand Wash Only 100% Polyester Care Instruction: Machine wash Pattern: Solid Size : *s,m, l , xl, x*(reguler fiting) (only for resaler )+shiping charg extra Gujrat ship 1 to 4 pcs =80 rs Other secter ship 1 to 2 pcs =90 rs. 3 to 4 pcs =150 rs.', 'upload/product/161269332483.jpg', '1899', '2200', 'enable', 4, 'No', NULL, '2021-02-07 10:22:04', '2021-02-07 10:22:04'),
(97, 'ID9TOM4Q', 'Blazers, Waistcoats And Suits', 1, 4, 'D by Dhingra Men\'s Slim Fit Tuxedo Suit.', 'D by Dhingra Men\'s Slim Fit Tuxedo Suit.\r\nExclusive Collection of 2 Piece Suit ( Blazer & Trouser ) Fabric\r\nLength :- 3.00 Meters Fabric Sufficient to stitch up to XXL Size Blazer & Trouser ( 2 Piece Suit )\r\nColour :- Dark Grey Colour 2 Piece Suit Fabric Fabric :- Poly-Viscose Blended Fabric\r\nOccasion : Party Wear, Formal Wear, & Casual, Fine and Elegant pre-matched shirt and trouser Fabric.\r\nDisclaimer :- Poduct color may vary due to photographic lighting sources or your display settings', 'upload/product/161269384517.jpg', '1999', '2299', 'enable', 4, 'No', NULL, '2021-02-07 10:30:45', '2021-02-07 10:30:45'),
(98, 'QGX1OK3C', 'Blazers, Waistcoats And Suits', 1, 4, 'D by Dhingra Men\'s Slim Fit Tuxedo Suit.', 'D by Dhingra Men\'s Slim Fit Tuxedo Suit.\r\nExclusive Collection of 2 Piece Suit ( Blazer & Trouser ) Fabric\r\nLength :- 3.00 Meters Fabric Sufficient to stitch up to XXL Size Blazer & Trouser ( 2 Piece Suit )\r\nColour :- Dark Grey Colour 2 Piece Suit Fabric Fabric :- Poly-Viscose Blended Fabric\r\nOccasion : Party Wear, Formal Wear, & Casual, Fine and Elegant pre-matched shirt and trouser Fabric.\r\nDisclaimer :- Poduct color may vary due to photographic lighting sources or your display settings', 'upload/product/161269395533.jpg', '2900', '3900', 'enable', 4, 'No', NULL, '2021-02-07 10:32:35', '2021-02-07 10:32:35'),
(99, 'CRVP58K0', 'Blazers, Waistcoats And Suits', 1, 4, 'D by Dhingra Men\'s Slim Fit Tuxedo Suit.', 'D by Dhingra Men\'s Slim Fit Tuxedo Suit.\r\nExclusive Collection of 2 Piece Suit ( Blazer & Trouser ) Fabric\r\nLength :- 3.00 Meters Fabric Sufficient to stitch up to XXL Size Blazer & Trouser ( 2 Piece Suit )\r\nColour :- Dark Grey Colour 2 Piece Suit Fabric Fabric :- Poly-Viscose Blended Fabric\r\nOccasion : Party Wear, Formal Wear, & Casual, Fine and Elegant pre-matched shirt and trouser Fabric.\r\nDisclaimer :- Poduct color may vary due to photographic lighting sources or your display settings', 'upload/product/161269405073.jpg', '999', '1299', 'enable', 4, 'No', NULL, '2021-02-07 10:34:10', '2021-02-07 10:34:10'),
(100, 'PDURBWJQ', 'Blazers, Waistcoats And Suits', 1, 4, 'D by Dhingra Men\'s Slim Fit Tuxedo Suit.', 'D by Dhingra Men\'s Slim Fit Tuxedo Suit.\r\nExclusive Collection of 2 Piece Suit ( Blazer & Trouser ) Fabric\r\nLength :- 3.00 Meters Fabric Sufficient to stitch up to XXL Size Blazer & Trouser ( 2 Piece Suit )\r\nColour :- Dark Grey Colour 2 Piece Suit Fabric Fabric :- Poly-Viscose Blended Fabric\r\nOccasion : Party Wear, Formal Wear, & Casual, Fine and Elegant pre-matched shirt and trouser Fabric.\r\nDisclaimer :- Poduct color may vary due to photographic lighting sources or your display settings', 'upload/product/161269414081.jpg', '1100', '1500', 'enable', 4, 'No', NULL, '2021-02-07 10:35:40', '2021-02-07 10:35:40'),
(101, '6XCEQJAT', 'Cotton Winter Wear', 1, 6, 'Winter Thermal Set', 'Care Instructions: As per wash care\r\n1 package contains 1 thermal vest and 1 lower\r\nModel is wearing size L. Model height : 6\"1 Model waist : 30\" Model chest : 39.5\"\r\nSuper combed cotton with poly-infill\r\nAs per DRDO (Min of Def.) technology & spec.\r\nSuper soft and light weight/ Skin friendly material\r\nCare Instructions: Machine Wash\r\nMaterial:- 100% Acrylic Wool, Size :- One Size Fits All, Occasion Type:- Casual Wear,Formal Wear, Winter Wear, Other Features:- 100% BRAND NEW & High Quality Stylish Winter Wear Muffler With Modern Pattern Style Design That Keeps Your Neck And Chest Warm.\r\nSoft & Breathable:- This Muffler Is Made Of Acrylic Woolen Fabric. It Is Soft, Skin Friendly Breathable And comfortable To Touch\r\nThis Muffler Is Perfect For Cold Weather And Will Be A Great Companion For Autumn And Winter Wardrobe.\r\nCrafted From A Fine Material, It Further Promises To Offer Maximum Comfort That Never Goes Out Of Fashion. Embrace The Emperor With You With This Luxurious Light Weight Muffler.', 'upload/product/161269535148.jpg', '599', '899', 'enable', 4, 'No', NULL, '2021-02-07 10:55:51', '2021-02-07 10:55:51'),
(102, '61RZLFOS', 'Cotton Winter Wear', 1, 6, 'Cotton Winter Thermal Set', 'Care Instructions: As per wash care 1 package contains 1 thermal vest and 1 lower Model is wearing size L. Model height : 6\"1 Model waist : 30\" Model chest : 39.5\" Super combed cotton with poly-infill As per DRDO (Min of Def.) technology & spec. Super soft and light weight/ Skin friendly material Care Instructions: Machine Wash Material:- 100% Acrylic Wool, Size :- One Size Fits All, Occasion Type:- Casual Wear,Formal Wear, Winter Wear, Other Features:- 100% BRAND NEW & High Quality Stylish Winter Wear Muffler With Modern Pattern Style Design That Keeps Your Neck And Chest Warm. Soft & Breathable:- This Muffler Is Made Of Acrylic Woolen Fabric. It Is Soft, Skin Friendly Breathable And comfortable To Touch This Muffler Is Perfect For Cold Weather And Will Be A Great Companion For Autumn And Winter Wardrobe. Crafted From A Fine Material, It Further Promises To Offer Maximum Comfort That Never Goes Out Of Fashion. Embrace The Emperor With You With This Luxurious Light Weight Muffler.', 'upload/product/161269552925.jpg', '899', '1100', 'enable', 4, 'No', NULL, '2021-02-07 10:58:49', '2021-02-07 10:58:49'),
(103, 'DMOSWBF1', 'Cotton Winter Wear', 1, 6, 'Cotton Winter Thermal Set', 'Care Instructions: As per wash care 1 package contains 1 thermal vest and 1 lower Model is wearing size L. Model height : 6\"1 Model waist : 30\" Model chest : 39.5\" Super combed cotton with poly-infill As per DRDO (Min of Def.) technology & spec. Super soft and light weight/ Skin friendly material Care Instructions: Machine Wash Material:- 100% Acrylic Wool, Size :- One Size Fits All, Occasion Type:- Casual Wear,Formal Wear, Winter Wear, Other Features:- 100% BRAND NEW & High Quality Stylish Winter Wear Muffler With Modern Pattern Style Design That Keeps Your Neck And Chest Warm. Soft & Breathable:- This Muffler Is Made Of Acrylic Woolen Fabric. It Is Soft, Skin Friendly Breathable And comfortable To Touch This Muffler Is Perfect For Cold Weather And Will Be A Great Companion For Autumn And Winter Wardrobe. Crafted From A Fine Material, It Further Promises To Offer Maximum Comfort That Never Goes Out Of Fashion. Embrace The Emperor With You With This Luxurious Light Weight Muffler.', 'upload/product/161269559961.jpg', '699', '899', 'enable', 4, 'No', NULL, '2021-02-07 10:59:59', '2021-02-07 10:59:59'),
(104, '8U2E4OPJ', 'Cotton Winter Wear', 1, 6, 'Cotton Winter Thermal', 'Care Instructions: As per wash care 1 package contains 1 thermal vest and 1 lower Model is wearing size L. Model height : 6\"1 Model waist : 30\" Model chest : 39.5\" Super combed cotton with poly-infill As per DRDO (Min of Def.) technology & spec. Super soft and light weight/ Skin friendly material Care Instructions: Machine Wash Material:- 100% Acrylic Wool, Size :- One Size Fits All, Occasion Type:- Casual Wear,Formal Wear, Winter Wear, Other Features:- 100% BRAND NEW & High Quality Stylish Winter Wear Muffler With Modern Pattern Style Design That Keeps Your Neck And Chest Warm. Soft & Breathable:- This Muffler Is Made Of Acrylic Woolen Fabric. It Is Soft, Skin Friendly Breathable And comfortable To Touch This Muffler Is Perfect For Cold Weather And Will Be A Great Companion For Autumn And Winter Wardrobe. Crafted From A Fine Material, It Further Promises To Offer Maximum Comfort That Never Goes Out Of Fashion. Embrace The Emperor With You With This Luxurious Light Weight Muffler.', 'upload/product/1612695646100.jpg', '599', '899', 'enable', 4, 'No', NULL, '2021-02-07 11:00:46', '2021-02-07 11:00:46'),
(105, 'E2CJI8U0', 'Cotton Winter Wear', 1, 6, 'Cotton Winter Thermal', 'Care Instructions: As per wash care 1 package contains 1 thermal vest and 1 lower Model is wearing size L. Model height : 6\"1 Model waist : 30\" Model chest : 39.5\" Super combed cotton with poly-infill As per DRDO (Min of Def.) technology & spec. Super soft and light weight/ Skin friendly material Care Instructions: Machine Wash Material:- 100% Acrylic Wool, Size :- One Size Fits All, Occasion Type:- Casual Wear,Formal Wear, Winter Wear, Other Features:- 100% BRAND NEW & High Quality Stylish Winter Wear Muffler With Modern Pattern Style Design That Keeps Your Neck And Chest Warm. Soft & Breathable:- This Muffler Is Made Of Acrylic Woolen Fabric. It Is Soft, Skin Friendly Breathable And comfortable To Touch This Muffler Is Perfect For Cold Weather And Will Be A Great Companion For Autumn And Winter Wardrobe. Crafted From A Fine Material, It Further Promises To Offer Maximum Comfort That Never Goes Out Of Fashion. Embrace The Emperor With You With This Luxurious Light Weight Muffler.', 'upload/product/161269573948.jpg', '800', '1000', 'enable', 4, 'No', NULL, '2021-02-07 11:02:19', '2021-02-07 11:02:19'),
(106, 'IWSPD0HC', 'Jacket', 1, 6, 'Men\'s Bomber Jacket', 'Care Instructions: Easy hand wash\r\n100% Nylon , Long Sleeve\r\nKindly refer to the size chart before choosing the size , for fitting measurements and accurate size selection\r\nEasy hand wash\r\nBomber jacket\r\nMade in India\r\nDo Not Wring\r\nFit Type: Regular Fit\r\nFull jacket\r\nJacket for winter\r\nJacket for bike', 'upload/product/161269705859.jpg', '599', '700', 'enable', 4, 'No', NULL, '2021-02-07 11:24:18', '2021-02-07 11:24:18'),
(107, 'JM7RY5UC', 'Jacket', 1, 6, 'Men\'s Bomber Jacket', 'Care Instructions: Easy hand wash 100% Nylon , Long Sleeve Kindly refer to the size chart before choosing the size , for fitting measurements and accurate size selection Easy hand wash Bomber jacket Made in India Do Not Wring Fit Type: Regular Fit Full jacket Jacket for winter Jacket for bike', 'upload/product/16126976914.jpg', '550', '700', 'enable', 4, 'No', NULL, '2021-02-07 11:34:51', '2021-02-07 11:34:51'),
(108, '2L4ZOHA9', 'Jacket', 1, 6, 'Men\'s Bomber Jacket', 'Care Instructions: Easy hand wash 100% Nylon , Long Sleeve Kindly refer to the size chart before choosing the size , for fitting measurements and accurate size selection Easy hand wash Bomber jacket Made in India Do Not Wring Fit Type: Regular Fit Full jacket Jacket for winter Jacket for bike', 'upload/product/161269775129.jpg', '599', '899', 'enable', 4, 'No', NULL, '2021-02-07 11:35:51', '2021-02-07 11:35:51'),
(109, '6SLX9K5V', 'Jacket', 1, 6, 'Men\'s Bomber Jacket', 'Care Instructions: Easy hand wash 100% Nylon , Long Sleeve Kindly refer to the size chart before choosing the size , for fitting measurements and accurate size selection Easy hand wash Bomber jacket Made in India Do Not Wring Fit Type: Regular Fit Full jacket Jacket for winter Jacket for bike', 'upload/product/16126978268.jpg', '599', '799', 'enable', 4, 'No', NULL, '2021-02-07 11:37:06', '2021-02-07 11:37:06'),
(110, 'EYUQSMFX', 'kurta', 1, 7, 'Men\'s Full Sleeve Knee-Long Blended Kurta', 'Made from Fine Quality Fabric\r\nFashioned with a Banded Collar\r\nComfortable to Wear and Easy to Maintain\r\nFestive/Celebration Wear\r\nDry Clean Only\r\nSales Package \r\nStyle -salwar and kurta || collar type - classic || sleeve - long sleeve with cuff buttons || kurta length - mid thigh || fabric -linen || fit - regular || bottom type - salwar with drawstring closure\r\nPremium quality: this ethnic pathani suit is hand loomed in rich yarns of cotton and linen that gives you a unique look\r\nPathani dress : team up with a pair of kolhapuri chappals and wear it at parties, ceremonies, engagements, festivals and functions\r\nElegant pathani suit: A ForeAN presents a must have ethnic pathani suit for men in crisp and trendy design\r\nSoft and durable : exhibiting a smooth texture and finesse, this traditional men\'s wear is made to withstand years of use\r\nThe maximum order quantity for this product is', 'upload/product/161269855886.jpg', '899', '1299', 'enable', 4, 'No', NULL, '2021-02-07 11:49:18', '2021-02-07 11:49:18'),
(111, '6M1QFTP7', 'Kurta', 1, 7, 'Men\'s Full Sleeve Knee-Long Blended Kurta', 'Style -salwar and kurta || collar type - classic || sleeve - long sleeve with cuff buttons || kurta length - mid thigh || fabric -linen || fit - regular || bottom type - salwar with drawstring closure\r\nPremium quality: this ethnic pathani suit is hand loomed in rich yarns of cotton and linen that gives you a unique look\r\nPathani dress : team up with a pair of kolhapuri chappals and wear it at parties, ceremonies, engagements, festivals and functions\r\nElegant pathani suit: A ForeAN presents a must have ethnic pathani suit for men in crisp and trendy design\r\nSoft and durable : exhibiting a smooth texture and finesse, this traditional men\'s wear is made to withstand years of use\r\nThe maximum order quantity for this product is', 'upload/product/161269863137.jpg', '799', '999', 'enable', 4, 'No', NULL, '2021-02-07 11:50:31', '2021-02-07 11:50:31'),
(112, '5NU8XTP4', 'Kurta', 1, 7, 'Men\'s Full Sleeve Knee-Long Blended Kurta', 'Style -salwar and kurta || collar type - classic || sleeve - long sleeve with cuff buttons || kurta length - mid thigh || fabric -linen || fit - regular || bottom type - salwar with drawstring closure\r\nPremium quality: this ethnic pathani suit is hand loomed in rich yarns of cotton and linen that gives you a unique look\r\nPathani dress : team up with a pair of kolhapuri chappals and wear it at parties, ceremonies, engagements, festivals and functions\r\nElegant pathani suit: A ForeAN presents a must have ethnic pathani suit for men in crisp and trendy design\r\nSoft and durable : exhibiting a smooth texture and finesse, this traditional men\'s wear is made to withstand years of use\r\nThe maximum order quantity for this product is', 'upload/product/161269870972.jpg', '800', '1000', 'enable', 4, 'No', NULL, '2021-02-07 11:51:49', '2021-02-07 11:51:49'),
(113, 'MI5HZ2U7', 'Kurta', 1, 7, 'Men\'s Full Sleeve Knee-Long Blended Kurta', 'Style -salwar and kurta || collar type - classic || sleeve - long sleeve with cuff buttons || kurta length - mid thigh || fabric -linen || fit - regular || bottom type - salwar with drawstring closure\r\nPremium quality: this ethnic pathani suit is hand loomed in rich yarns of cotton and linen that gives you a unique look\r\nPathani dress : team up with a pair of kolhapuri chappals and wear it at parties, ceremonies, engagements, festivals and functions\r\nElegant pathani suit: A ForeAN presents a must have ethnic pathani suit for men in crisp and trendy design\r\nSoft and durable : exhibiting a smooth texture and finesse, this traditional men\'s wear is made to withstand years of use\r\nThe maximum order quantity for this product is', 'upload/product/161269876163.jpg', '699', '899', 'enable', 4, 'No', NULL, '2021-02-07 11:52:41', '2021-02-07 11:52:41'),
(114, 'SH1CXODM', 'Sherwani', 1, 7, 'Western Sherwani Set For Boys', 'Care Instructions: Hand Wash\r\nFabric : Silk Blend\r\nFit Type: Regular fit\r\nComfortable for Kids\r\nIdeal for Parties, Functions, Birthday party, Festival, Wedding any other occasion\r\nSize: The product size and measurements might be different from other clothes children normally wear. For best fitting, please take measurements for your child and refer to size chart in the Image before purchase. Feel free to contact us by email if you have any questions about size.', 'upload/product/161269985461.jpg', '1650', '1950', 'enable', 4, 'No', NULL, '2021-02-07 12:10:54', '2021-02-07 12:10:54'),
(115, 'ITLCZPX5', 'Sherwani', 1, 7, 'Western Sherwani Set For Boys', 'Care Instructions: Hand Wash Fabric : Silk Blend Fit Type: Regular fit Comfortable for Kids Ideal for Parties, Functions, Birthday party, Festival, Wedding any other occasion Size: The product size and measurements might be different from other clothes children normally wear. For best fitting, please take measurements for your child and refer to size chart in the Image before purchase. Feel free to contact us by email if you have any questions about size.', 'upload/product/161270009454.jpg', '1699', '2000', 'enable', 4, 'No', NULL, '2021-02-07 12:14:54', '2021-02-07 12:14:54'),
(116, 'EFH6QZ51', 'Sherwani', 1, 7, 'Western Sherwani Set For Boys', 'Care Instructions: Hand Wash Fabric : Silk Blend Fit Type: Regular fit Comfortable for Kids Ideal for Parties, Functions, Birthday party, Festival, Wedding any other occasion Size: The product size and measurements might be different from other clothes children normally wear. For best fitting, please take measurements for your child and refer to size chart in the Image before purchase. Feel free to contact us by email if you have any questions about size.', 'upload/product/161270015773.jpg', '1500', '1800', 'enable', 4, 'No', NULL, '2021-02-07 12:15:57', '2021-02-07 12:15:57'),
(117, '5VRE0YLC', 'Sherwani', 1, 7, 'Western Sherwani Set For Boys', 'Care Instructions: Hand Wash Fabric : Silk Blend Fit Type: Regular fit Comfortable for Kids Ideal for Parties, Functions, Birthday party, Festival, Wedding any other occasion Size: The product size and measurements might be different from other clothes children normally wear. For best fitting, please take measurements for your child and refer to size chart in the Image before purchase. Feel free to contact us by email if you have any questions about size.', 'upload/product/161270024684.jpg', '1699', '1999', 'enable', 4, 'No', NULL, '2021-02-07 12:17:26', '2021-02-07 12:17:26'),
(118, 'KNFZS7WA', 'Rado', 1, 8, 'Men\'s Rado Watch', 'Strap Material:Stainless Steel, Display:Chronograph, Strap Color:Black\r\nCase Material: Stainless Steel, Lock Mechanism: Diver\'s Clasp, Water Resistance Depth: 50 meters, Deployment Clasp. KurtiFashion is the only Authorized seller of \"Kurti Fashion\" Branded Products. Buyer are advised not to buy from any other Unauthorized fraud sellers who have tagged their offers on our product page and are supplying fake, substandard and poor quality Products\r\nCase Thickness (mm): 8.60 mm, Case Length(6H-12H) (mm): 45 mm, Watch Movement Type: Quartz, Watch Case Size (mm):45, Dial Color:Black, Dial Shape: Round, Dial Glass Material: Mineral\r\nClosure type: Push button clasp, Remove plastic at crown to start the watch, Premium low Price Wrist Shape Design Luxury Colour Professional Chain Hand Wedding Watch and Company Military Waterproof Watch\r\nMens PERFECT GIFT: Kurti Fashion Wrist Watches for Men Is the Perfect Gift for Festival Family And Meetings. Stainless Steel Watches Are the Luxurious Fashion Gift for Graduation Birthday Wedding and Valentine’s Day. Chronograph Analog Watches Are the Ideal Gifts for Father Boyfriend or Other Male Classmates and Colleagues. It Is Sure to Win the Heart of Your Friends and Family Members', 'upload/product/161270097028.jpg', '1200', '1500', 'enable', 4, 'No', NULL, '2021-02-07 12:29:30', '2021-02-07 12:29:30'),
(119, 'WSVTM8OF', 'Rado', 1, 8, 'Men\'s Rado Watch', 'Strap Material:Stainless Steel, Display:Chronograph, Strap Color:Black\r\nCase Material: Stainless Steel, Lock Mechanism: Diver\'s Clasp, Water Resistance Depth: 50 meters, Deployment Clasp. KurtiFashion is the only Authorized seller of \"Kurti Fashion\" Branded Products. Buyer are advised not to buy from any other Unauthorized fraud sellers who have tagged their offers on our product page and are supplying fake, substandard and poor quality Products\r\nCase Thickness (mm): 8.60 mm, Case Length(6H-12H) (mm): 45 mm, Watch Movement Type: Quartz, Watch Case Size (mm):45, Dial Color:Black, Dial Shape: Round, Dial Glass Material: Mineral\r\nClosure type: Push button clasp, Remove plastic at crown to start the watch, Premium low Price Wrist Shape Design Luxury Colour Professional Chain Hand Wedding Watch and Company Military Waterproof Watch\r\nMens PERFECT GIFT: Kurti Fashion Wrist Watches for Men Is the Perfect Gift for Festival Family And Meetings. Stainless Steel Watches Are the Luxurious Fashion Gift for Graduation Birthday Wedding and Valentine’s Day. Chronograph Analog Watches Are the Ideal Gifts for Father Boyfriend or Other Male Classmates and Colleagues. It Is Sure to Win the Heart of Your Friends and Family Members', 'upload/product/161270109016.jpg', '899', '1000', 'enable', 4, 'No', NULL, '2021-02-07 12:31:30', '2021-02-07 12:31:30'),
(120, 'P123HZ9K', 'Rado', 1, 8, 'Men\'s Rado Watch', 'Strap Material:Stainless Steel, Display:Chronograph, Strap Color:Black\r\nCase Material: Stainless Steel, Lock Mechanism: Diver\'s Clasp, Water Resistance Depth: 50 meters, Deployment Clasp. KurtiFashion is the only Authorized seller of \"Kurti Fashion\" Branded Products. Buyer are advised not to buy from any other Unauthorized fraud sellers who have tagged their offers on our product page and are supplying fake, substandard and poor quality Products\r\nCase Thickness (mm): 8.60 mm, Case Length(6H-12H) (mm): 45 mm, Watch Movement Type: Quartz, Watch Case Size (mm):45, Dial Color:Black, Dial Shape: Round, Dial Glass Material: Mineral\r\nClosure type: Push button clasp, Remove plastic at crown to start the watch, Premium low Price Wrist Shape Design Luxury Colour Professional Chain Hand Wedding Watch and Company Military Waterproof Watch\r\nMens PERFECT GIFT: Kurti Fashion Wrist Watches for Men Is the Perfect Gift for Festival Family And Meetings. Stainless Steel Watches Are the Luxurious Fashion Gift for Graduation Birthday Wedding and Valentine’s Day. Chronograph Analog Watches Are the Ideal Gifts for Father Boyfriend or Other Male Classmates and Colleagues. It Is Sure to Win the Heart of Your Friends and Family Members', 'upload/product/161270117158.jpg', '1100', '1500', 'enable', 4, 'No', NULL, '2021-02-07 12:32:51', '2021-02-07 12:32:51'),
(121, 'RY2ATBU6', 'smart watch', 1, 8, 'T55 smart watch', 'KMJSA- SMART WATCH * This smartwatch has all the next-level features one could look for with long battery life and most importantly t55 comes with dual straps. [ Specification ] Display: 1.54 “IPS HD display (full touch screen) Resolution: 44mm 1.54 inch 240 x 240 Operation Mode: Touch-Screen Positioning: support GPS Beidou positioning Battery: Built-in Lithium Battery Bluetooth Version: 4.0', 'upload/product/161270149537.jpg', '1450', '1600', 'enable', 4, 'No', NULL, '2021-02-07 12:38:15', '2021-02-07 12:38:15'),
(122, '8LOF5MC0', 'smart watch', 1, 8, 'T55+ smart watch', 'KMJSA- SMART WATCH * This smartwatch has all the next-level features one could look for with long battery life and most importantly t55 comes with dual straps. [ Specification ] Display: 1.54 “IPS HD display (full touch screen) Resolution: 44mm 1.54 inch 240 x 240 Operation Mode: Touch-Screen Positioning: support GPS Beidou positioning Battery: Built-in Lithium Battery Bluetooth Version: 4.0', 'upload/product/161270158638.jpg', '1450', '1650', 'enable', 4, 'No', NULL, '2021-02-07 12:39:46', '2021-02-07 12:39:46'),
(123, 'RXYO1T2A', 'Mobality Fast Charging', 5, 33, 'Mobality Fast Charging vivo Y91i, Y91, Y93, V9 Youth, Y81, Y66 Charging Cable Data Transfer Fast Cable 1.2 m Micro USB Cable  (Compatible with ALL MOBILE DEVICES, White, One Cable)', 'The durable cable comes with corrosion-resistant connectors, which allow it to be connected and disconnected over and over again without signal loss. Enjoy a consistently superior signal every time. Best to Use with the brand Which you are looking for Currently.Cables are uniquely designed and are positioned to provide the best comfort and performance while using. The Extra Long Micro-USB Cable is a cable solution for charging and sync of your smart phones and tablets. The outer cable material is made from soft rubber with silicon coating to make it last long and tangle free. The flat design of this cable gives it a long durability and strong built. It can be used for both, charging and transferring data at high speed. It has been designed keeping in mind your every need, to connect Micro-USB devices including smart phones and tablets to a USB charger or port. The length of the Pebble Extra Long Micro-USB Cable gives you an edge over others by not letting you stand next to charging point while charging your S', 'upload/product/161450370559.jpg', '160', '599', 'enable', 2, 'No', NULL, '2021-02-28 03:45:05', '2021-02-28 03:45:05'),
(124, 'MOHEPD5C', 'Portronics POR-122 MODESK Universal Mobile Holder (Black) Mobile Holder', 5, 33, 'Portronics POR-122 MODESK Universal Mobile Holder (Black) Mobile Holder', 'MoDesk is an Stainless Steel body desk mobile holder which is rust and corrosion proof. This product is a Premium Quality Mobile Holder for your Office Desks. The antiskid silicon pads on the body prevent accidental slips and protection from scratches. It’s sturdy yet light weight design gives the required fety to your devices. With just 122 grams it’s very lightweight and its dimensions are suitable for your office desks 7cm x8cm x9.5cm in size which is just right for your desks. It has angular design which gives perfect viewing angle of your smartphone on the desk so you can easily and privately see incoming calls, respond to messages without the risk of prying eyes. It is easy to install and mounting and dismounting of your smartphone is easy and fast.', 'upload/product/161450381896.jpg', '250', '699', 'enable', 2, 'No', NULL, '2021-02-28 03:46:58', '2021-02-28 03:46:58'),
(125, 'F2YDI9VH', 'ELV DIRECT Universal Mobile Phone Stand Holder With Cable Organiser Inbuilt Mobile Holder', 5, 33, 'ELV DIRECT Universal Mobile Phone Stand Holder With Cable Organiser Inbuilt Mobile Holder', 'iSmart Technology, 77A/1 Upper Ground Floor, Dilshad Garden, Delhi-110095 Mail-itechkartindia@gmail.com Phone-9910092789', 'upload/product/161450402381.jpg', '400', '2000', 'enable', 2, 'No', NULL, '2021-02-28 03:50:23', '2021-02-28 03:50:23'),
(126, 'KYCQWRLZ', 'Portronics POR-1069 MAGNO a Magnetic Car Mobile Holder Mobile Holder', 5, 33, 'Portronics POR-1069 MAGNO a Magnetic Car Mobile Holder Mobile Holder', 'Magno- Use any size mobile phone in any type of AC vent and enjoy hands free and safe driving experience. No challans too. The device can be rotated up to 360° in a portrait as well as landscape mode to suit your convenience. Easy viewing means safer journeys. Device will attach & detach easily using magnet and adhesive and will not fall even on roughest roads or on sudden braking. It will not damage the device\'s internal electronics too. Through built-in cable slot, your car charger and cable can easily be plugged into your phone.', 'upload/product/161450411868.jpg', '199', '299', 'enable', 2, 'No', NULL, '2021-02-28 03:51:58', '2021-02-28 03:51:58'),
(127, '9VNFE1SW', 'Portronics CLAMP X POR-926 Car-Vent Mobile Holder (Black) Mobile Holder', 5, 33, 'Portronics CLAMP X POR-926 Car-Vent Mobile Holder (Black) Mobile Holder', 'Clamp X – a patented Universal mobile Holder with cradle to hold any smartphone up to 6 inches in the car AC Air Vent.Now you can drive safely while viewing directions on the Google Map or can talk on speaker phone. You Do Not have to hold the phone in your hands anymore. Now you can drive safely while viewing directions on the Google Map or can talk on speaker phone. You Do Not have to hold the phone in your hands anymore. With Clamp X, you can safely use your smartphone to view maps or take phone calls when we use mobile phones behind the wheels. the patented one-click release button technology and adjustable side grips to accommodate your device, it’s extremely easy to mount and UN-mount the phone from the cradle. All this can be done single-handedly to add to the convenience. Simply press the button on the back to open the sides of the mount to fit your size phone. Close the sides to secure your phone in the mount. Any size of phone up to 6 inches in size like iPhone 5/6/6S/7/7 Plus, Samsung Galaxy S6, HTC,LG, Nexus, Google Pixel, HTC, MI, Nokia, GPS Device can fit easily. Enjoy the convenience of 360 Degree Rotation of your device to suit the view you want.', 'upload/product/161450420986.jpg', '375', '899', 'enable', 2, 'No', NULL, '2021-02-28 03:53:29', '2021-02-28 03:53:29'),
(128, 'PNFO5Y4K', 'Mi 3i 20000 mAh Power Bank (Fast Charging, 18W)  (Black, Lithium Polymer)', 5, 33, 'Mi 3i 20000 mAh Power Bank (Fast Charging, 18W)  (Black, Lithium Polymer)', 'Don’t let your devices run out of battery while you’re away with this Mi power bank. Thanks to its 18 W fast charge support, this power bank helps you charge your devices quickly and efficiently. It also helps you charge almost all types of devices, such as smartphones, fitness bands and Mi wireless earphones and tablets.', 'upload/product/161450433999.jpg', '1599', '2199', 'enable', 2, 'No', NULL, '2021-02-28 03:55:39', '2021-02-28 03:56:43'),
(129, 'DZPU5LE7', 'Primiu 6 ft long Nylon Braided Tough 2.8 A 1.8 m Lightning Cable  (Compatible with iPhone, iPad, Silver, One Cable)', 5, 33, 'Primiu 6 ft long Nylon Braided Tough 2.8 A 1.8 m Lightning Cable  (Compatible with iPhone, iPad, Silver, One Cable)', '2.4 Amp lightning fast charging so that you can be on a run all day long. Rest assured, data transmits at a high speed- efficiently and reliably. Say goodbye to fragile and chipped cables, with Aircraft Aluminum alloy connector CNC technology, Primiu USB Cables are ultra durable- no scratch, no crack. 1.8 meter long so that you no longer have to stick to one side of the bed. Compatible with iPhone, iPad, iPod', 'upload/product/161450456096.jpg', '392', '599', 'enable', 2, 'No', NULL, '2021-02-28 03:59:20', '2021-02-28 03:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

DROP TABLE IF EXISTS `products_images`;
CREATE TABLE IF NOT EXISTS `products_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_images_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=401 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 3, 'upload/product/161146788326.jpg', '2021-01-24 00:28:03', '2021-01-24 00:28:03'),
(2, 3, 'upload/product/161146788358.jpg', '2021-01-24 00:28:03', '2021-01-24 00:28:03'),
(3, 3, 'upload/product/161146788311.jpg', '2021-01-24 00:28:03', '2021-01-24 00:28:03'),
(4, 3, 'upload/product/161146788493.jpg', '2021-01-24 00:28:04', '2021-01-24 00:28:04'),
(5, 4, 'upload/product/161146803815.jpg', '2021-01-24 00:30:38', '2021-01-24 00:30:38'),
(6, 4, 'upload/product/161146803842.jpg', '2021-01-24 00:30:38', '2021-01-24 00:30:38'),
(7, 4, 'upload/product/161146803837.jpg', '2021-01-24 00:30:38', '2021-01-24 00:30:38'),
(8, 4, 'upload/product/161146803857.jpg', '2021-01-24 00:30:38', '2021-01-24 00:30:38'),
(9, 4, 'upload/product/161146803831.jpg', '2021-01-24 00:30:38', '2021-01-24 00:30:38'),
(10, 5, 'upload/product/161146827189.jpg', '2021-01-24 00:34:31', '2021-01-24 00:34:31'),
(11, 5, 'upload/product/161146827128.jpg', '2021-01-24 00:34:31', '2021-01-24 00:34:31'),
(12, 5, 'upload/product/161146827127.jpg', '2021-01-24 00:34:31', '2021-01-24 00:34:31'),
(13, 5, 'upload/product/161146827111.jpg', '2021-01-24 00:34:31', '2021-01-24 00:34:31'),
(14, 5, 'upload/product/161146827197.jpg', '2021-01-24 00:34:31', '2021-01-24 00:34:31'),
(15, 5, 'upload/product/161146827139.jpg', '2021-01-24 00:34:31', '2021-01-24 00:34:31'),
(16, 6, 'upload/product/161146844963.jpg', '2021-01-24 00:37:29', '2021-01-24 00:37:29'),
(17, 6, 'upload/product/161146844914.jpg', '2021-01-24 00:37:29', '2021-01-24 00:37:29'),
(18, 6, 'upload/product/161146844939.jpg', '2021-01-24 00:37:29', '2021-01-24 00:37:29'),
(19, 6, 'upload/product/161146844974.jpg', '2021-01-24 00:37:29', '2021-01-24 00:37:29'),
(20, 7, 'upload/product/161146857181.jpg', '2021-01-24 00:39:31', '2021-01-24 00:39:31'),
(21, 7, 'upload/product/161146857133.jpg', '2021-01-24 00:39:31', '2021-01-24 00:39:31'),
(22, 7, 'upload/product/16114685713.jpg', '2021-01-24 00:39:31', '2021-01-24 00:39:31'),
(23, 7, 'upload/product/161146857114.jpg', '2021-01-24 00:39:31', '2021-01-24 00:39:31'),
(24, 8, 'upload/product/16114686943.jpg', '2021-01-24 00:41:34', '2021-01-24 00:41:34'),
(25, 8, 'upload/product/161146869440.jpg', '2021-01-24 00:41:34', '2021-01-24 00:41:34'),
(26, 8, 'upload/product/161146869455.jpg', '2021-01-24 00:41:34', '2021-01-24 00:41:34'),
(27, 8, 'upload/product/161146869430.jpg', '2021-01-24 00:41:34', '2021-01-24 00:41:34'),
(28, 9, 'upload/product/161146886918.jpg', '2021-01-24 00:44:29', '2021-01-24 00:44:29'),
(29, 9, 'upload/product/161146886972.jpg', '2021-01-24 00:44:29', '2021-01-24 00:44:29'),
(30, 9, 'upload/product/161146886981.jpg', '2021-01-24 00:44:29', '2021-01-24 00:44:29'),
(31, 9, 'upload/product/1611468869100.jpg', '2021-01-24 00:44:29', '2021-01-24 00:44:29'),
(32, 9, 'upload/product/161146886950.jpg', '2021-01-24 00:44:29', '2021-01-24 00:44:29'),
(33, 9, 'upload/product/161146886985.jpg', '2021-01-24 00:44:29', '2021-01-24 00:44:29'),
(34, 9, 'upload/product/161146886958.jpg', '2021-01-24 00:44:29', '2021-01-24 00:44:29'),
(35, 9, 'upload/product/161146886943.jpg', '2021-01-24 00:44:29', '2021-01-24 00:44:29'),
(36, 9, 'upload/product/161146886948.jpg', '2021-01-24 00:44:29', '2021-01-24 00:44:29'),
(37, 10, 'upload/product/161146913259.jpg', '2021-01-24 00:48:52', '2021-01-24 00:48:52'),
(38, 10, 'upload/product/16114691324.jpg', '2021-01-24 00:48:52', '2021-01-24 00:48:52'),
(39, 10, 'upload/product/161146913224.jpg', '2021-01-24 00:48:52', '2021-01-24 00:48:52'),
(40, 10, 'upload/product/161146913247.jpg', '2021-01-24 00:48:52', '2021-01-24 00:48:52'),
(41, 10, 'upload/product/161146913252.jpg', '2021-01-24 00:48:52', '2021-01-24 00:48:52'),
(42, 10, 'upload/product/161146913263.jpg', '2021-01-24 00:48:52', '2021-01-24 00:48:52'),
(43, 10, 'upload/product/161146913247.jpg', '2021-01-24 00:48:52', '2021-01-24 00:48:52'),
(44, 11, 'upload/product/161146987436.jpg', '2021-01-24 01:01:14', '2021-01-24 01:01:14'),
(45, 11, 'upload/product/161146987442.jpg', '2021-01-24 01:01:14', '2021-01-24 01:01:14'),
(46, 11, 'upload/product/161146987449.jpg', '2021-01-24 01:01:14', '2021-01-24 01:01:14'),
(47, 11, 'upload/product/161146987463.jpg', '2021-01-24 01:01:14', '2021-01-24 01:01:14'),
(48, 12, 'upload/product/161147004616.jpg', '2021-01-24 01:04:06', '2021-01-24 01:04:06'),
(49, 12, 'upload/product/161147004677.jpg', '2021-01-24 01:04:06', '2021-01-24 01:04:06'),
(50, 12, 'upload/product/16114700463.jpg', '2021-01-24 01:04:06', '2021-01-24 01:04:06'),
(51, 12, 'upload/product/16114700466.jpg', '2021-01-24 01:04:06', '2021-01-24 01:04:06'),
(52, 12, 'upload/product/161147004629.jpg', '2021-01-24 01:04:06', '2021-01-24 01:04:06'),
(53, 12, 'upload/product/161147004699.jpg', '2021-01-24 01:04:06', '2021-01-24 01:04:06'),
(54, 13, 'upload/product/161147021953.jpg', '2021-01-24 01:06:59', '2021-01-24 01:06:59'),
(55, 13, 'upload/product/161147021927.jpg', '2021-01-24 01:06:59', '2021-01-24 01:06:59'),
(56, 13, 'upload/product/161147021956.jpg', '2021-01-24 01:06:59', '2021-01-24 01:06:59'),
(57, 13, 'upload/product/161147021990.jpg', '2021-01-24 01:06:59', '2021-01-24 01:06:59'),
(58, 13, 'upload/product/161147021922.jpg', '2021-01-24 01:06:59', '2021-01-24 01:06:59'),
(59, 14, 'upload/product/161147044346.jpg', '2021-01-24 01:10:43', '2021-01-24 01:10:43'),
(60, 14, 'upload/product/161147044372.jpg', '2021-01-24 01:10:43', '2021-01-24 01:10:43'),
(61, 14, 'upload/product/161147044389.jpg', '2021-01-24 01:10:43', '2021-01-24 01:10:43'),
(62, 14, 'upload/product/161147044335.jpg', '2021-01-24 01:10:43', '2021-01-24 01:10:43'),
(63, 14, 'upload/product/161147044390.jpg', '2021-01-24 01:10:43', '2021-01-24 01:10:43'),
(64, 15, 'upload/product/161147055779.jpg', '2021-01-24 01:12:37', '2021-01-24 01:12:37'),
(65, 15, 'upload/product/161147055730.jpg', '2021-01-24 01:12:37', '2021-01-24 01:12:37'),
(66, 15, 'upload/product/161147055772.jpg', '2021-01-24 01:12:37', '2021-01-24 01:12:37'),
(67, 15, 'upload/product/161147055765.jpg', '2021-01-24 01:12:37', '2021-01-24 01:12:37'),
(68, 15, 'upload/product/161147055716.jpg', '2021-01-24 01:12:37', '2021-01-24 01:12:37'),
(69, 15, 'upload/product/161147055756.jpg', '2021-01-24 01:12:37', '2021-01-24 01:12:37'),
(70, 16, 'upload/product/161147157992.jpg', '2021-01-24 01:29:39', '2021-01-24 01:29:39'),
(71, 16, 'upload/product/161147157910.jpg', '2021-01-24 01:29:39', '2021-01-24 01:29:39'),
(72, 16, 'upload/product/161147157976.jpg', '2021-01-24 01:29:39', '2021-01-24 01:29:39'),
(73, 16, 'upload/product/161147157943.jpg', '2021-01-24 01:29:39', '2021-01-24 01:29:39'),
(74, 17, 'upload/product/161148794724.jpg', '2021-01-24 06:02:27', '2021-01-24 06:02:27'),
(75, 17, 'upload/product/161148794710.jpg', '2021-01-24 06:02:27', '2021-01-24 06:02:27'),
(76, 17, 'upload/product/161148794760.jpg', '2021-01-24 06:02:27', '2021-01-24 06:02:27'),
(77, 17, 'upload/product/161148794760.jpg', '2021-01-24 06:02:27', '2021-01-24 06:02:27'),
(78, 18, 'upload/product/161148808454.jpg', '2021-01-24 06:04:44', '2021-01-24 06:04:44'),
(79, 18, 'upload/product/161148808456.jpg', '2021-01-24 06:04:44', '2021-01-24 06:04:44'),
(80, 18, 'upload/product/161148808493.jpg', '2021-01-24 06:04:44', '2021-01-24 06:04:44'),
(81, 18, 'upload/product/161148808442.jpg', '2021-01-24 06:04:44', '2021-01-24 06:04:44'),
(82, 19, 'upload/product/161148820382.jpg', '2021-01-24 06:06:43', '2021-01-24 06:06:43'),
(83, 19, 'upload/product/161148820335.jpg', '2021-01-24 06:06:43', '2021-01-24 06:06:43'),
(84, 19, 'upload/product/161148820399.jpg', '2021-01-24 06:06:43', '2021-01-24 06:06:43'),
(85, 19, 'upload/product/161148820380.jpg', '2021-01-24 06:06:43', '2021-01-24 06:06:43'),
(86, 20, 'upload/product/161148927590.jpg', '2021-01-24 06:24:35', '2021-01-24 06:24:35'),
(87, 21, 'upload/product/161148936211.jpg', '2021-01-24 06:26:02', '2021-01-24 06:26:02'),
(88, 22, 'upload/product/161148945897.jpg', '2021-01-24 06:27:38', '2021-01-24 06:27:38'),
(89, 22, 'upload/product/161148945846.jpg', '2021-01-24 06:27:38', '2021-01-24 06:27:38'),
(90, 22, 'upload/product/161148945868.jpg', '2021-01-24 06:27:38', '2021-01-24 06:27:38'),
(91, 22, 'upload/product/161148945837.jpg', '2021-01-24 06:27:38', '2021-01-24 06:27:38'),
(92, 22, 'upload/product/161148945883.jpg', '2021-01-24 06:27:38', '2021-01-24 06:27:38'),
(93, 23, 'upload/product/161148953979.jpg', '2021-01-24 06:28:59', '2021-01-24 06:28:59'),
(94, 23, 'upload/product/161148953994.jpg', '2021-01-24 06:28:59', '2021-01-24 06:28:59'),
(95, 23, 'upload/product/1611489539100.jpg', '2021-01-24 06:28:59', '2021-01-24 06:28:59'),
(96, 24, 'upload/product/161149075360.jpg', '2021-01-24 06:49:13', '2021-01-24 06:49:13'),
(97, 24, 'upload/product/161149075383.jpg', '2021-01-24 06:49:13', '2021-01-24 06:49:13'),
(98, 25, 'upload/product/161149089769.jpg', '2021-01-24 06:51:37', '2021-01-24 06:51:37'),
(99, 25, 'upload/product/161149089739.jpg', '2021-01-24 06:51:37', '2021-01-24 06:51:37'),
(100, 26, 'upload/product/161149099999.jpg', '2021-01-24 06:53:19', '2021-01-24 06:53:19'),
(101, 26, 'upload/product/161149099985.jpg', '2021-01-24 06:53:19', '2021-01-24 06:53:19'),
(102, 26, 'upload/product/161149099948.jpg', '2021-01-24 06:53:19', '2021-01-24 06:53:19'),
(103, 26, 'upload/product/161149099986.jpg', '2021-01-24 06:53:19', '2021-01-24 06:53:19'),
(104, 27, 'upload/product/161149126081.jpg', '2021-01-24 06:57:40', '2021-01-24 06:57:40'),
(105, 28, 'upload/product/161149138884.jpg', '2021-01-24 06:59:48', '2021-01-24 06:59:48'),
(106, 28, 'upload/product/161149138854.jpg', '2021-01-24 06:59:48', '2021-01-24 06:59:48'),
(107, 28, 'upload/product/161149138847.jpg', '2021-01-24 06:59:48', '2021-01-24 06:59:48'),
(108, 29, 'upload/product/161149146881.jpg', '2021-01-24 07:01:08', '2021-01-24 07:01:08'),
(109, 29, 'upload/product/161149146877.jpg', '2021-01-24 07:01:08', '2021-01-24 07:01:08'),
(123, 35, 'upload/product/161262695343.jpg', '2021-02-06 15:55:53', '2021-02-06 15:55:53'),
(122, 39, 'upload/product/161261121567.jpg', '2021-02-06 11:33:35', '2021-02-06 11:33:35'),
(121, 38, 'upload/product/161260394785.jpg', '2021-02-06 09:32:27', '2021-02-06 09:32:27'),
(113, 32, 'upload/product/161218029728.jpg', '2021-02-01 11:51:37', '2021-02-01 11:51:37'),
(114, 32, 'upload/product/161218029783.jpg', '2021-02-01 11:51:37', '2021-02-01 11:51:37'),
(115, 32, 'upload/product/161218029757.jpg', '2021-02-01 11:51:37', '2021-02-01 11:51:37'),
(116, 33, 'upload/product/161218049779.jpg', '2021-02-01 11:54:57', '2021-02-01 11:54:57'),
(117, 33, 'upload/product/161218049764.jpg', '2021-02-01 11:54:57', '2021-02-01 11:54:57'),
(118, 33, 'upload/product/161218049732.jpg', '2021-02-01 11:54:57', '2021-02-01 11:54:57'),
(119, 33, 'upload/product/16121804973.jpg', '2021-02-01 11:54:57', '2021-02-01 11:54:57'),
(120, 33, 'upload/product/161218049764.jpg', '2021-02-01 11:54:57', '2021-02-01 11:54:57'),
(124, 63, 'upload/product/161267263699.jpg', '2021-02-07 04:37:16', '2021-02-07 04:37:16'),
(125, 63, 'upload/product/16126726364.jpg', '2021-02-07 04:37:16', '2021-02-07 04:37:16'),
(126, 63, 'upload/product/161267263656.jpg', '2021-02-07 04:37:16', '2021-02-07 04:37:16'),
(127, 64, 'upload/product/161267270587.jpg', '2021-02-07 04:38:25', '2021-02-07 04:38:25'),
(128, 64, 'upload/product/161267270576.jpg', '2021-02-07 04:38:25', '2021-02-07 04:38:25'),
(129, 64, 'upload/product/161267270556.jpg', '2021-02-07 04:38:25', '2021-02-07 04:38:25'),
(130, 64, 'upload/product/161267270529.jpg', '2021-02-07 04:38:25', '2021-02-07 04:38:25'),
(186, 81, 'upload/product/161267967527.jpg', '2021-02-07 06:34:35', '2021-02-07 06:34:35'),
(185, 81, 'upload/product/16126796758.jpg', '2021-02-07 06:34:35', '2021-02-07 06:34:35'),
(184, 81, 'upload/product/161267967584.jpg', '2021-02-07 06:34:35', '2021-02-07 06:34:35'),
(137, 67, 'upload/product/161267308068.jpg', '2021-02-07 04:44:40', '2021-02-07 04:44:40'),
(138, 67, 'upload/product/161267308060.jpg', '2021-02-07 04:44:40', '2021-02-07 04:44:40'),
(139, 67, 'upload/product/161267308076.jpg', '2021-02-07 04:44:40', '2021-02-07 04:44:40'),
(140, 68, 'upload/product/161267326862.jpg', '2021-02-07 04:47:48', '2021-02-07 04:47:48'),
(141, 68, 'upload/product/161267326842.jpg', '2021-02-07 04:47:48', '2021-02-07 04:47:48'),
(142, 68, 'upload/product/161267326823.jpg', '2021-02-07 04:47:48', '2021-02-07 04:47:48'),
(143, 68, 'upload/product/161267326859.jpg', '2021-02-07 04:47:48', '2021-02-07 04:47:48'),
(144, 69, 'upload/product/161267338772.jpg', '2021-02-07 04:49:47', '2021-02-07 04:49:47'),
(145, 69, 'upload/product/161267338786.jpg', '2021-02-07 04:49:47', '2021-02-07 04:49:47'),
(146, 69, 'upload/product/161267338716.jpg', '2021-02-07 04:49:47', '2021-02-07 04:49:47'),
(147, 70, 'upload/product/16126734941.jpg', '2021-02-07 04:51:34', '2021-02-07 04:51:34'),
(148, 70, 'upload/product/16126734942.jpg', '2021-02-07 04:51:34', '2021-02-07 04:51:34'),
(149, 70, 'upload/product/161267349432.jpg', '2021-02-07 04:51:34', '2021-02-07 04:51:34'),
(150, 70, 'upload/product/161267349410.jpg', '2021-02-07 04:51:34', '2021-02-07 04:51:34'),
(151, 71, 'upload/product/16126735628.jpg', '2021-02-07 04:52:42', '2021-02-07 04:52:42'),
(152, 71, 'upload/product/16126735623.jpg', '2021-02-07 04:52:42', '2021-02-07 04:52:42'),
(191, 82, 'upload/product/161267990753.jpg', '2021-02-07 06:38:27', '2021-02-07 06:38:27'),
(178, 79, 'upload/product/161267938281.jpg', '2021-02-07 06:29:42', '2021-02-07 06:29:42'),
(177, 79, 'upload/product/161267938288.jpg', '2021-02-07 06:29:42', '2021-02-07 06:29:42'),
(176, 79, 'upload/product/161267938263.jpg', '2021-02-07 06:29:42', '2021-02-07 06:29:42'),
(175, 79, 'upload/product/161267938260.jpg', '2021-02-07 06:29:42', '2021-02-07 06:29:42'),
(158, 74, 'upload/product/161267525881.jpg', '2021-02-07 05:20:58', '2021-02-07 05:20:58'),
(159, 74, 'upload/product/161267525823.jpg', '2021-02-07 05:20:58', '2021-02-07 05:20:58'),
(160, 75, 'upload/product/161267768257.jpg', '2021-02-07 06:01:22', '2021-02-07 06:01:22'),
(161, 75, 'upload/product/161267768264.jpg', '2021-02-07 06:01:22', '2021-02-07 06:01:22'),
(162, 75, 'upload/product/161267768219.jpg', '2021-02-07 06:01:22', '2021-02-07 06:01:22'),
(163, 75, 'upload/product/16126776829.jpg', '2021-02-07 06:01:22', '2021-02-07 06:01:22'),
(164, 75, 'upload/product/161267768291.jpg', '2021-02-07 06:01:22', '2021-02-07 06:01:22'),
(165, 76, 'upload/product/161267785863.jpg', '2021-02-07 06:04:18', '2021-02-07 06:04:18'),
(166, 76, 'upload/product/161267785824.jpg', '2021-02-07 06:04:18', '2021-02-07 06:04:18'),
(167, 77, 'upload/product/161267809851.jpg', '2021-02-07 06:08:18', '2021-02-07 06:08:18'),
(168, 77, 'upload/product/161267809842.jpg', '2021-02-07 06:08:18', '2021-02-07 06:08:18'),
(169, 77, 'upload/product/16126780983.jpg', '2021-02-07 06:08:18', '2021-02-07 06:08:18'),
(170, 78, 'upload/product/161267918279.jpg', '2021-02-07 06:26:22', '2021-02-07 06:26:22'),
(171, 78, 'upload/product/161267918298.jpg', '2021-02-07 06:26:22', '2021-02-07 06:26:22'),
(172, 78, 'upload/product/161267918276.jpg', '2021-02-07 06:26:22', '2021-02-07 06:26:22'),
(173, 78, 'upload/product/161267918262.jpg', '2021-02-07 06:26:22', '2021-02-07 06:26:22'),
(174, 78, 'upload/product/161267918248.jpg', '2021-02-07 06:26:22', '2021-02-07 06:26:22'),
(190, 82, 'upload/product/161267990720.jpg', '2021-02-07 06:38:27', '2021-02-07 06:38:27'),
(189, 82, 'upload/product/161267990798.jpg', '2021-02-07 06:38:27', '2021-02-07 06:38:27'),
(188, 81, 'upload/product/161267967547.jpg', '2021-02-07 06:34:35', '2021-02-07 06:34:35'),
(187, 81, 'upload/product/16126796753.jpg', '2021-02-07 06:34:35', '2021-02-07 06:34:35'),
(192, 83, 'upload/product/161268805825.jpg', '2021-02-07 08:54:18', '2021-02-07 08:54:18'),
(193, 83, 'upload/product/161268805828.jpg', '2021-02-07 08:54:18', '2021-02-07 08:54:18'),
(194, 83, 'upload/product/161268805899.jpg', '2021-02-07 08:54:18', '2021-02-07 08:54:18'),
(195, 83, 'upload/product/161268805845.jpg', '2021-02-07 08:54:18', '2021-02-07 08:54:18'),
(196, 83, 'upload/product/161268805862.jpg', '2021-02-07 08:54:18', '2021-02-07 08:54:18'),
(197, 85, 'upload/product/161268867364.jpg', '2021-02-07 09:04:33', '2021-02-07 09:04:33'),
(198, 85, 'upload/product/161268867333.jpg', '2021-02-07 09:04:33', '2021-02-07 09:04:33'),
(199, 85, 'upload/product/161268867313.jpg', '2021-02-07 09:04:33', '2021-02-07 09:04:33'),
(200, 86, 'upload/product/161268974669.jpg', '2021-02-07 09:22:26', '2021-02-07 09:22:26'),
(201, 86, 'upload/product/161268974673.jpg', '2021-02-07 09:22:26', '2021-02-07 09:22:26'),
(202, 86, 'upload/product/161268974627.jpg', '2021-02-07 09:22:26', '2021-02-07 09:22:26'),
(203, 86, 'upload/product/16126897463.jpg', '2021-02-07 09:22:26', '2021-02-07 09:22:26'),
(204, 86, 'upload/product/161268974628.jpg', '2021-02-07 09:22:26', '2021-02-07 09:22:26'),
(205, 87, 'upload/product/161268987687.jpg', '2021-02-07 09:24:36', '2021-02-07 09:24:36'),
(206, 87, 'upload/product/16126898766.jpg', '2021-02-07 09:24:36', '2021-02-07 09:24:36'),
(207, 87, 'upload/product/161268987672.jpg', '2021-02-07 09:24:36', '2021-02-07 09:24:36'),
(208, 87, 'upload/product/161268987683.jpg', '2021-02-07 09:24:36', '2021-02-07 09:24:36'),
(209, 87, 'upload/product/161268987699.jpg', '2021-02-07 09:24:36', '2021-02-07 09:24:36'),
(210, 88, 'upload/product/16126899484.jpg', '2021-02-07 09:25:48', '2021-02-07 09:25:48'),
(211, 88, 'upload/product/16126899482.jpg', '2021-02-07 09:25:48', '2021-02-07 09:25:48'),
(212, 88, 'upload/product/161268994835.jpg', '2021-02-07 09:25:48', '2021-02-07 09:25:48'),
(213, 88, 'upload/product/161268994839.jpg', '2021-02-07 09:25:48', '2021-02-07 09:25:48'),
(214, 88, 'upload/product/161268994827.jpg', '2021-02-07 09:25:48', '2021-02-07 09:25:48'),
(215, 88, 'upload/product/161268994895.jpg', '2021-02-07 09:25:48', '2021-02-07 09:25:48'),
(216, 89, 'upload/product/161269013781.jpg', '2021-02-07 09:28:57', '2021-02-07 09:28:57'),
(217, 89, 'upload/product/161269013735.jpg', '2021-02-07 09:28:57', '2021-02-07 09:28:57'),
(218, 89, 'upload/product/161269013781.jpg', '2021-02-07 09:28:57', '2021-02-07 09:28:57'),
(219, 89, 'upload/product/161269013774.jpg', '2021-02-07 09:28:57', '2021-02-07 09:28:57'),
(220, 90, 'upload/product/161269228051.jpg', '2021-02-07 10:04:40', '2021-02-07 10:04:40'),
(221, 90, 'upload/product/16126922805.jpg', '2021-02-07 10:04:40', '2021-02-07 10:04:40'),
(222, 90, 'upload/product/16126922804.jpg', '2021-02-07 10:04:40', '2021-02-07 10:04:40'),
(223, 90, 'upload/product/161269228057.jpg', '2021-02-07 10:04:40', '2021-02-07 10:04:40'),
(224, 91, 'upload/product/161269235488.jpg', '2021-02-07 10:05:54', '2021-02-07 10:05:54'),
(225, 91, 'upload/product/161269235425.jpg', '2021-02-07 10:05:54', '2021-02-07 10:05:54'),
(226, 91, 'upload/product/161269235420.jpg', '2021-02-07 10:05:54', '2021-02-07 10:05:54'),
(227, 91, 'upload/product/161269235445.jpg', '2021-02-07 10:05:54', '2021-02-07 10:05:54'),
(228, 91, 'upload/product/161269235451.jpg', '2021-02-07 10:05:54', '2021-02-07 10:05:54'),
(229, 91, 'upload/product/161269235490.jpg', '2021-02-07 10:05:54', '2021-02-07 10:05:54'),
(230, 92, 'upload/product/161269242259.jpg', '2021-02-07 10:07:02', '2021-02-07 10:07:02'),
(231, 92, 'upload/product/161269242290.jpg', '2021-02-07 10:07:02', '2021-02-07 10:07:02'),
(232, 92, 'upload/product/161269242264.jpg', '2021-02-07 10:07:02', '2021-02-07 10:07:02'),
(233, 92, 'upload/product/161269242257.jpg', '2021-02-07 10:07:02', '2021-02-07 10:07:02'),
(234, 93, 'upload/product/161269247516.jpg', '2021-02-07 10:07:55', '2021-02-07 10:07:55'),
(235, 93, 'upload/product/161269247566.jpg', '2021-02-07 10:07:55', '2021-02-07 10:07:55'),
(236, 93, 'upload/product/161269247566.jpg', '2021-02-07 10:07:55', '2021-02-07 10:07:55'),
(237, 93, 'upload/product/161269247597.jpg', '2021-02-07 10:07:55', '2021-02-07 10:07:55'),
(238, 93, 'upload/product/161269247547.jpg', '2021-02-07 10:07:55', '2021-02-07 10:07:55'),
(239, 93, 'upload/product/161269247530.jpg', '2021-02-07 10:07:55', '2021-02-07 10:07:55'),
(240, 94, 'upload/product/161269310716.jpg', '2021-02-07 10:18:27', '2021-02-07 10:18:27'),
(241, 94, 'upload/product/161269310792.jpg', '2021-02-07 10:18:27', '2021-02-07 10:18:27'),
(242, 94, 'upload/product/16126931074.jpg', '2021-02-07 10:18:27', '2021-02-07 10:18:27'),
(243, 94, 'upload/product/161269310735.jpg', '2021-02-07 10:18:27', '2021-02-07 10:18:27'),
(244, 95, 'upload/product/161269323649.jpg', '2021-02-07 10:20:36', '2021-02-07 10:20:36'),
(245, 95, 'upload/product/161269323674.jpg', '2021-02-07 10:20:36', '2021-02-07 10:20:36'),
(246, 95, 'upload/product/161269323676.jpg', '2021-02-07 10:20:36', '2021-02-07 10:20:36'),
(247, 95, 'upload/product/16126932368.jpg', '2021-02-07 10:20:36', '2021-02-07 10:20:36'),
(248, 95, 'upload/product/161269323656.jpg', '2021-02-07 10:20:36', '2021-02-07 10:20:36'),
(249, 96, 'upload/product/16126933242.jpg', '2021-02-07 10:22:04', '2021-02-07 10:22:04'),
(250, 96, 'upload/product/161269332441.jpg', '2021-02-07 10:22:04', '2021-02-07 10:22:04'),
(251, 96, 'upload/product/161269332460.jpg', '2021-02-07 10:22:04', '2021-02-07 10:22:04'),
(252, 96, 'upload/product/161269332477.jpg', '2021-02-07 10:22:04', '2021-02-07 10:22:04'),
(253, 96, 'upload/product/161269332472.jpg', '2021-02-07 10:22:04', '2021-02-07 10:22:04'),
(254, 97, 'upload/product/161269384564.jpg', '2021-02-07 10:30:45', '2021-02-07 10:30:45'),
(255, 97, 'upload/product/161269384514.jpg', '2021-02-07 10:30:45', '2021-02-07 10:30:45'),
(256, 97, 'upload/product/161269384540.jpg', '2021-02-07 10:30:45', '2021-02-07 10:30:45'),
(257, 97, 'upload/product/16126938452.jpg', '2021-02-07 10:30:45', '2021-02-07 10:30:45'),
(258, 98, 'upload/product/161269395512.jpg', '2021-02-07 10:32:35', '2021-02-07 10:32:35'),
(259, 98, 'upload/product/161269395538.jpg', '2021-02-07 10:32:35', '2021-02-07 10:32:35'),
(260, 98, 'upload/product/16126939553.jpg', '2021-02-07 10:32:35', '2021-02-07 10:32:35'),
(261, 98, 'upload/product/161269395519.jpg', '2021-02-07 10:32:35', '2021-02-07 10:32:35'),
(262, 98, 'upload/product/161269395564.jpg', '2021-02-07 10:32:35', '2021-02-07 10:32:35'),
(263, 99, 'upload/product/161269405059.jpg', '2021-02-07 10:34:10', '2021-02-07 10:34:10'),
(264, 99, 'upload/product/161269405053.jpg', '2021-02-07 10:34:10', '2021-02-07 10:34:10'),
(265, 99, 'upload/product/161269405077.jpg', '2021-02-07 10:34:10', '2021-02-07 10:34:10'),
(266, 99, 'upload/product/161269405048.jpg', '2021-02-07 10:34:10', '2021-02-07 10:34:10'),
(267, 99, 'upload/product/161269405034.jpg', '2021-02-07 10:34:10', '2021-02-07 10:34:10'),
(268, 99, 'upload/product/161269405084.jpg', '2021-02-07 10:34:10', '2021-02-07 10:34:10'),
(269, 99, 'upload/product/161269405066.jpg', '2021-02-07 10:34:10', '2021-02-07 10:34:10'),
(270, 99, 'upload/product/161269405027.jpg', '2021-02-07 10:34:10', '2021-02-07 10:34:10'),
(271, 100, 'upload/product/16126941403.jpg', '2021-02-07 10:35:40', '2021-02-07 10:35:40'),
(272, 100, 'upload/product/161269414049.jpg', '2021-02-07 10:35:40', '2021-02-07 10:35:40'),
(273, 100, 'upload/product/161269414076.jpg', '2021-02-07 10:35:40', '2021-02-07 10:35:40'),
(274, 101, 'upload/product/161269535189.jpg', '2021-02-07 10:55:51', '2021-02-07 10:55:51'),
(275, 101, 'upload/product/161269535131.jpg', '2021-02-07 10:55:51', '2021-02-07 10:55:51'),
(276, 101, 'upload/product/161269535128.jpg', '2021-02-07 10:55:51', '2021-02-07 10:55:51'),
(277, 101, 'upload/product/161269535146.jpg', '2021-02-07 10:55:51', '2021-02-07 10:55:51'),
(278, 101, 'upload/product/161269535140.jpg', '2021-02-07 10:55:51', '2021-02-07 10:55:51'),
(279, 101, 'upload/product/161269535117.jpg', '2021-02-07 10:55:51', '2021-02-07 10:55:51'),
(280, 101, 'upload/product/161269535155.jpg', '2021-02-07 10:55:51', '2021-02-07 10:55:51'),
(281, 102, 'upload/product/161269552981.jpg', '2021-02-07 10:58:49', '2021-02-07 10:58:49'),
(282, 102, 'upload/product/161269552910.jpg', '2021-02-07 10:58:49', '2021-02-07 10:58:49'),
(283, 102, 'upload/product/16126955298.jpg', '2021-02-07 10:58:49', '2021-02-07 10:58:49'),
(284, 102, 'upload/product/161269552925.jpg', '2021-02-07 10:58:49', '2021-02-07 10:58:49'),
(285, 102, 'upload/product/161269552930.jpg', '2021-02-07 10:58:49', '2021-02-07 10:58:49'),
(286, 103, 'upload/product/1612695599100.jpg', '2021-02-07 10:59:59', '2021-02-07 10:59:59'),
(287, 103, 'upload/product/161269559972.jpg', '2021-02-07 10:59:59', '2021-02-07 10:59:59'),
(288, 103, 'upload/product/161269559999.jpg', '2021-02-07 10:59:59', '2021-02-07 10:59:59'),
(289, 103, 'upload/product/161269559936.jpg', '2021-02-07 10:59:59', '2021-02-07 10:59:59'),
(290, 103, 'upload/product/16126955997.jpg', '2021-02-07 10:59:59', '2021-02-07 10:59:59'),
(291, 103, 'upload/product/161269559944.jpg', '2021-02-07 10:59:59', '2021-02-07 10:59:59'),
(292, 103, 'upload/product/161269559995.jpg', '2021-02-07 10:59:59', '2021-02-07 10:59:59'),
(293, 104, 'upload/product/161269564635.jpg', '2021-02-07 11:00:46', '2021-02-07 11:00:46'),
(294, 104, 'upload/product/161269564698.jpg', '2021-02-07 11:00:46', '2021-02-07 11:00:46'),
(295, 104, 'upload/product/161269564698.jpg', '2021-02-07 11:00:46', '2021-02-07 11:00:46'),
(296, 104, 'upload/product/161269564652.jpg', '2021-02-07 11:00:46', '2021-02-07 11:00:46'),
(297, 104, 'upload/product/161269564634.jpg', '2021-02-07 11:00:46', '2021-02-07 11:00:46'),
(298, 105, 'upload/product/16126957398.jpg', '2021-02-07 11:02:19', '2021-02-07 11:02:19'),
(299, 105, 'upload/product/161269573941.jpg', '2021-02-07 11:02:19', '2021-02-07 11:02:19'),
(300, 105, 'upload/product/161269573974.jpg', '2021-02-07 11:02:19', '2021-02-07 11:02:19'),
(301, 105, 'upload/product/161269573974.jpg', '2021-02-07 11:02:19', '2021-02-07 11:02:19'),
(302, 106, 'upload/product/161269705856.jpg', '2021-02-07 11:24:18', '2021-02-07 11:24:18'),
(303, 106, 'upload/product/161269705894.jpg', '2021-02-07 11:24:18', '2021-02-07 11:24:18'),
(304, 106, 'upload/product/161269705866.jpg', '2021-02-07 11:24:18', '2021-02-07 11:24:18'),
(305, 106, 'upload/product/16126970582.jpg', '2021-02-07 11:24:18', '2021-02-07 11:24:18'),
(306, 106, 'upload/product/161269705830.jpg', '2021-02-07 11:24:18', '2021-02-07 11:24:18'),
(307, 106, 'upload/product/16126970585.jpg', '2021-02-07 11:24:18', '2021-02-07 11:24:18'),
(308, 107, 'upload/product/161269769178.jpg', '2021-02-07 11:34:51', '2021-02-07 11:34:51'),
(309, 107, 'upload/product/161269769142.jpg', '2021-02-07 11:34:51', '2021-02-07 11:34:51'),
(310, 107, 'upload/product/16126976916.jpg', '2021-02-07 11:34:51', '2021-02-07 11:34:51'),
(311, 107, 'upload/product/16126976912.jpg', '2021-02-07 11:34:51', '2021-02-07 11:34:51'),
(312, 107, 'upload/product/161269769112.jpg', '2021-02-07 11:34:51', '2021-02-07 11:34:51'),
(313, 108, 'upload/product/161269775193.jpg', '2021-02-07 11:35:51', '2021-02-07 11:35:51'),
(314, 108, 'upload/product/161269775194.jpg', '2021-02-07 11:35:51', '2021-02-07 11:35:51'),
(315, 108, 'upload/product/161269775189.jpg', '2021-02-07 11:35:51', '2021-02-07 11:35:51'),
(316, 108, 'upload/product/161269775145.jpg', '2021-02-07 11:35:51', '2021-02-07 11:35:51'),
(317, 109, 'upload/product/161269782628.jpg', '2021-02-07 11:37:06', '2021-02-07 11:37:06'),
(318, 109, 'upload/product/161269782647.jpg', '2021-02-07 11:37:06', '2021-02-07 11:37:06'),
(319, 109, 'upload/product/161269782685.jpg', '2021-02-07 11:37:06', '2021-02-07 11:37:06'),
(320, 109, 'upload/product/161269782696.jpg', '2021-02-07 11:37:06', '2021-02-07 11:37:06'),
(321, 110, 'upload/product/161269855860.jpg', '2021-02-07 11:49:18', '2021-02-07 11:49:18'),
(322, 110, 'upload/product/161269855881.jpg', '2021-02-07 11:49:18', '2021-02-07 11:49:18'),
(323, 110, 'upload/product/161269855888.jpg', '2021-02-07 11:49:18', '2021-02-07 11:49:18'),
(324, 110, 'upload/product/161269855841.jpg', '2021-02-07 11:49:18', '2021-02-07 11:49:18'),
(325, 111, 'upload/product/161269863132.jpg', '2021-02-07 11:50:31', '2021-02-07 11:50:31'),
(326, 111, 'upload/product/161269863158.jpg', '2021-02-07 11:50:31', '2021-02-07 11:50:31'),
(327, 111, 'upload/product/161269863184.jpg', '2021-02-07 11:50:31', '2021-02-07 11:50:31'),
(328, 111, 'upload/product/16126986313.jpg', '2021-02-07 11:50:31', '2021-02-07 11:50:31'),
(329, 111, 'upload/product/1612698631100.jpg', '2021-02-07 11:50:31', '2021-02-07 11:50:31'),
(330, 112, 'upload/product/161269870910.jpg', '2021-02-07 11:51:49', '2021-02-07 11:51:49'),
(331, 112, 'upload/product/16126987093.jpg', '2021-02-07 11:51:49', '2021-02-07 11:51:49'),
(332, 112, 'upload/product/161269870971.jpg', '2021-02-07 11:51:49', '2021-02-07 11:51:49'),
(333, 112, 'upload/product/161269870932.jpg', '2021-02-07 11:51:49', '2021-02-07 11:51:49'),
(334, 112, 'upload/product/161269870989.jpg', '2021-02-07 11:51:49', '2021-02-07 11:51:49'),
(335, 113, 'upload/product/161269876132.jpg', '2021-02-07 11:52:41', '2021-02-07 11:52:41'),
(336, 113, 'upload/product/161269876152.jpg', '2021-02-07 11:52:41', '2021-02-07 11:52:41'),
(337, 113, 'upload/product/161269876127.jpg', '2021-02-07 11:52:41', '2021-02-07 11:52:41'),
(338, 113, 'upload/product/161269876124.jpg', '2021-02-07 11:52:41', '2021-02-07 11:52:41'),
(339, 114, 'upload/product/161269985441.jpg', '2021-02-07 12:10:54', '2021-02-07 12:10:54'),
(340, 114, 'upload/product/161269985420.jpg', '2021-02-07 12:10:54', '2021-02-07 12:10:54'),
(341, 114, 'upload/product/161269985431.jpg', '2021-02-07 12:10:54', '2021-02-07 12:10:54'),
(342, 114, 'upload/product/161269985413.jpg', '2021-02-07 12:10:54', '2021-02-07 12:10:54'),
(343, 115, 'upload/product/161270009426.jpg', '2021-02-07 12:14:54', '2021-02-07 12:14:54'),
(344, 115, 'upload/product/161270009425.jpg', '2021-02-07 12:14:54', '2021-02-07 12:14:54'),
(345, 115, 'upload/product/161270009471.jpg', '2021-02-07 12:14:54', '2021-02-07 12:14:54'),
(346, 115, 'upload/product/161270009499.jpg', '2021-02-07 12:14:54', '2021-02-07 12:14:54'),
(347, 115, 'upload/product/16127000946.jpg', '2021-02-07 12:14:54', '2021-02-07 12:14:54'),
(348, 116, 'upload/product/161270015787.jpg', '2021-02-07 12:15:57', '2021-02-07 12:15:57'),
(349, 116, 'upload/product/161270015746.jpg', '2021-02-07 12:15:57', '2021-02-07 12:15:57'),
(350, 116, 'upload/product/161270015762.jpg', '2021-02-07 12:15:57', '2021-02-07 12:15:57'),
(351, 116, 'upload/product/161270015798.jpg', '2021-02-07 12:15:57', '2021-02-07 12:15:57'),
(352, 116, 'upload/product/161270015794.jpg', '2021-02-07 12:15:57', '2021-02-07 12:15:57'),
(353, 117, 'upload/product/1612700246100.jpg', '2021-02-07 12:17:26', '2021-02-07 12:17:26'),
(354, 117, 'upload/product/161270024685.jpg', '2021-02-07 12:17:26', '2021-02-07 12:17:26'),
(355, 118, 'upload/product/161270097036.jpg', '2021-02-07 12:29:30', '2021-02-07 12:29:30'),
(356, 118, 'upload/product/161270097051.jpg', '2021-02-07 12:29:30', '2021-02-07 12:29:30'),
(357, 118, 'upload/product/161270097019.jpg', '2021-02-07 12:29:30', '2021-02-07 12:29:30'),
(358, 118, 'upload/product/16127009706.jpg', '2021-02-07 12:29:30', '2021-02-07 12:29:30'),
(359, 118, 'upload/product/16127009704.jpg', '2021-02-07 12:29:30', '2021-02-07 12:29:30'),
(360, 118, 'upload/product/161270097013.jpg', '2021-02-07 12:29:30', '2021-02-07 12:29:30'),
(361, 119, 'upload/product/161270109083.jpg', '2021-02-07 12:31:30', '2021-02-07 12:31:30'),
(362, 119, 'upload/product/161270109063.jpg', '2021-02-07 12:31:30', '2021-02-07 12:31:30'),
(363, 119, 'upload/product/161270109058.jpg', '2021-02-07 12:31:30', '2021-02-07 12:31:30'),
(364, 119, 'upload/product/161270109073.jpg', '2021-02-07 12:31:30', '2021-02-07 12:31:30'),
(365, 120, 'upload/product/161270117157.jpg', '2021-02-07 12:32:51', '2021-02-07 12:32:51'),
(366, 120, 'upload/product/161270117188.jpg', '2021-02-07 12:32:51', '2021-02-07 12:32:51'),
(367, 121, 'upload/product/161270149517.jpg', '2021-02-07 12:38:15', '2021-02-07 12:38:15'),
(368, 121, 'upload/product/161270149585.jpg', '2021-02-07 12:38:15', '2021-02-07 12:38:15'),
(369, 121, 'upload/product/161270149567.jpg', '2021-02-07 12:38:15', '2021-02-07 12:38:15'),
(370, 121, 'upload/product/161270149587.jpg', '2021-02-07 12:38:15', '2021-02-07 12:38:15'),
(371, 121, 'upload/product/161270149547.jpg', '2021-02-07 12:38:15', '2021-02-07 12:38:15'),
(372, 122, 'upload/product/161270158622.jpg', '2021-02-07 12:39:46', '2021-02-07 12:39:46'),
(373, 122, 'upload/product/161270158613.jpg', '2021-02-07 12:39:46', '2021-02-07 12:39:46'),
(374, 122, 'upload/product/161270158695.jpg', '2021-02-07 12:39:46', '2021-02-07 12:39:46'),
(375, 122, 'upload/product/161270158617.jpg', '2021-02-07 12:39:46', '2021-02-07 12:39:46'),
(376, 122, 'upload/product/16127015867.jpg', '2021-02-07 12:39:46', '2021-02-07 12:39:46'),
(377, 122, 'upload/product/161270158628.jpg', '2021-02-07 12:39:46', '2021-02-07 12:39:46'),
(378, 122, 'upload/product/161270158643.jpg', '2021-02-07 12:39:46', '2021-02-07 12:39:46'),
(379, 124, 'upload/product/161450381847.jpg', '2021-02-28 03:46:58', '2021-02-28 03:46:58'),
(380, 124, 'upload/product/161450381818.jpg', '2021-02-28 03:46:58', '2021-02-28 03:46:58'),
(381, 124, 'upload/product/161450381879.jpg', '2021-02-28 03:46:58', '2021-02-28 03:46:58'),
(382, 124, 'upload/product/161450381861.jpg', '2021-02-28 03:46:58', '2021-02-28 03:46:58'),
(383, 125, 'upload/product/16145040231.jpg', '2021-02-28 03:50:23', '2021-02-28 03:50:23'),
(384, 125, 'upload/product/161450402390.jpg', '2021-02-28 03:50:23', '2021-02-28 03:50:23'),
(385, 125, 'upload/product/161450402346.jpg', '2021-02-28 03:50:23', '2021-02-28 03:50:23'),
(386, 125, 'upload/product/161450402316.jpg', '2021-02-28 03:50:23', '2021-02-28 03:50:23'),
(387, 126, 'upload/product/161450411821.jpg', '2021-02-28 03:51:58', '2021-02-28 03:51:58'),
(388, 126, 'upload/product/161450411864.jpg', '2021-02-28 03:51:58', '2021-02-28 03:51:58'),
(389, 127, 'upload/product/161450420948.jpg', '2021-02-28 03:53:29', '2021-02-28 03:53:29'),
(390, 127, 'upload/product/161450420986.jpg', '2021-02-28 03:53:29', '2021-02-28 03:53:29'),
(391, 127, 'upload/product/161450420981.jpg', '2021-02-28 03:53:29', '2021-02-28 03:53:29'),
(392, 127, 'upload/product/161450420947.jpg', '2021-02-28 03:53:29', '2021-02-28 03:53:29'),
(393, 128, 'upload/product/161450433986.jpg', '2021-02-28 03:55:39', '2021-02-28 03:55:39'),
(394, 128, 'upload/product/161450433950.jpg', '2021-02-28 03:55:39', '2021-02-28 03:55:39'),
(395, 128, 'upload/product/161450433937.jpg', '2021-02-28 03:55:39', '2021-02-28 03:55:39'),
(396, 128, 'upload/product/16145043391.jpg', '2021-02-28 03:55:39', '2021-02-28 03:55:39'),
(398, 129, 'upload/product/161450456037.jpg', '2021-02-28 03:59:20', '2021-02-28 03:59:20'),
(399, 129, 'upload/product/161450456097.jpg', '2021-02-28 03:59:20', '2021-02-28 03:59:20'),
(400, 129, 'upload/product/16145045604.jpg', '2021-02-28 03:59:20', '2021-02-28 03:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

DROP TABLE IF EXISTS `product_reviews`;
CREATE TABLE IF NOT EXISTS `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `msg` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('success','pending') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_review_images`
--

DROP TABLE IF EXISTS `product_review_images`;
CREATE TABLE IF NOT EXISTS `product_review_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `review_id` int(11) NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `categories_id` int(11) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `Show_home` enum('yes','no') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subcategories_categories_id_foreign` (`categories_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `categories_id`, `name`, `image`, `Show_home`, `created_at`, `updated_at`) VALUES
(1, 1, 'Topwear', NULL, 'yes', '2021-01-23 18:38:52', '2021-01-23 18:38:52'),
(2, 1, 'Footwear', NULL, 'yes', '2021-01-23 18:39:58', '2021-01-23 18:39:58'),
(3, 1, 'Bottomwear', NULL, 'no', '2021-01-23 18:40:11', '2021-01-23 18:40:11'),
(4, 1, 'Blazers, Waistcoats and Suits', NULL, 'yes', '2021-01-23 18:41:11', '2021-01-23 18:41:11'),
(6, 1, 'Winter Wear', NULL, 'no', '2021-01-23 18:42:43', '2021-01-23 18:42:43'),
(7, 1, 'Kurtas, Ethnic Sets and Bottoms', NULL, 'yes', '2021-01-23 18:42:59', '2021-01-23 18:42:59'),
(8, 1, 'Watches', NULL, 'yes', '2021-01-23 18:43:26', '2021-01-23 18:43:26'),
(15, 2, 'Winter Wear', NULL, 'no', '2021-01-31 11:35:50', '2021-01-31 11:35:50'),
(11, 2, 'Topwear', NULL, 'no', '2021-01-31 11:31:39', '2021-01-31 11:31:39'),
(12, 2, 'Footwear', NULL, 'no', '2021-01-31 11:31:49', '2021-01-31 11:31:49'),
(13, 2, 'Bottomwear', NULL, 'no', '2021-01-31 11:32:03', '2021-01-31 11:32:03'),
(14, 2, 'Watches', NULL, 'no', '2021-01-31 11:32:21', '2021-01-31 11:32:21'),
(16, 2, 'kurti', NULL, 'no', '2021-01-31 11:36:51', '2021-01-31 11:36:51'),
(17, 2, 'Jewellery', NULL, 'no', '2021-01-31 11:37:25', '2021-01-31 11:37:25'),
(18, 2, 'Cosmetics', NULL, 'no', '2021-01-31 11:39:43', '2021-01-31 11:39:43'),
(19, 2, 'Party Wear', NULL, 'no', '2021-01-31 11:42:23', '2021-01-31 11:42:23'),
(20, 2, 'Marriage Wear', NULL, 'no', '2021-01-31 11:43:09', '2021-01-31 11:43:22'),
(21, 4, 'Mobiles', NULL, 'no', '2021-01-31 11:45:47', '2021-01-31 11:45:47'),
(22, 4, 'Laptops', NULL, 'yes', '2021-01-31 11:46:52', '2021-01-31 11:47:07'),
(23, 4, 'TV', NULL, 'no', '2021-01-31 11:47:48', '2021-01-31 11:47:48'),
(24, 4, 'Desktop Pc', NULL, 'no', '2021-01-31 11:48:58', '2021-01-31 11:48:58'),
(25, 4, 'speakers', NULL, 'no', '2021-01-31 11:49:35', '2021-01-31 11:49:35'),
(26, 4, 'camera', NULL, 'no', '2021-01-31 11:50:36', '2021-01-31 11:50:36'),
(27, 3, 'Clothing And Accessories', NULL, 'no', '2021-02-05 11:45:22', '2021-02-05 11:45:22'),
(28, 3, 'Clothing And Accessories', NULL, 'no', '2021-02-05 11:45:42', '2021-02-05 11:45:42'),
(29, 3, 'Clothing And Accessories', NULL, 'no', '2021-02-05 11:45:58', '2021-02-05 11:45:58'),
(30, 3, 'Kids\' & Infant Footwear', NULL, 'no', '2021-02-05 11:46:20', '2021-02-05 11:46:20'),
(31, 3, 'Winter Wear', NULL, 'no', '2021-02-05 11:46:53', '2021-02-05 11:46:53'),
(33, 5, 'Mobile accessories', NULL, 'no', '2021-02-05 11:50:10', '2021-02-05 11:50:10'),
(34, 5, 'Laptops accessories', NULL, 'no', '2021-02-05 11:50:29', '2021-02-05 11:50:29'),
(35, 5, 'TV accessories', NULL, 'no', '2021-02-05 11:50:53', '2021-02-05 11:50:53'),
(37, 5, 'speakers accessories', NULL, 'no', '2021-02-05 11:51:29', '2021-02-05 11:51:29'),
(38, 5, 'camera accessories', NULL, 'no', '2021-02-05 11:51:57', '2021-02-05 11:51:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('1','2','3') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@shreehari.net', NULL, NULL, '1', '$2y$10$C1Ta/z380jIdZnR30E7a8ecPhk99vD8AtB3hMNsk9SBl1YOnN2p2C', NULL, NULL, NULL),
(2, 'vendor_test', 'vendor@shreehari.net', '1234567890', NULL, '2', '$2y$10$0N4TDmNhfeXoSN4hQB2DYun6zu6by816aNqcWFQtOOn1IBNiefCrS', NULL, NULL, '2021-03-17 05:26:03'),
(3, 'User', 'user@shreehari.net', NULL, NULL, '3', '$2y$10$qFLSCJdJ4hD7xOd6rN6jl.RK4KNyaWvHXgDNRD2IaAALH6CO2Drq6', NULL, NULL, '2021-03-15 23:59:21'),
(4, 'kapadiya Nikunj', 'kapadiyanikunj127@gmail.com', NULL, NULL, '2', '$2y$10$rTE4ymuecrLQKfcpOK3mI.TApEs0lyb3etkVPFbUbku.MXxgqBTjC', NULL, '2021-01-31 16:54:48', '2021-01-31 16:54:48'),
(5, 'Abhishek Dudhat', 'dudhatabhishek8@gmail.com', NULL, NULL, '2', '$2y$10$eYJT6ZTnUyhQvss6RRjg0.A82GMGDRN0hb/L9kxwF4/YM5MSsGC5e', NULL, '2021-01-31 16:57:58', '2021-01-31 16:57:58'),
(6, 'mukund rathore', 'mukundrathore12345@gmail.com', NULL, NULL, '2', '$2y$10$BSDsSP1ILGaNh7d5E4tmO.UgZUb9tmZVwF3vtXZowcOJoj1xWYezm', NULL, '2021-02-04 17:41:26', '2021-02-04 17:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

DROP TABLE IF EXISTS `user_addresses`;
CREATE TABLE IF NOT EXISTS `user_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_addresses_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `fname`, `lname`, `company`, `address`, `address_2`, `city`, `post_code`, `country`, `state`, `created_at`, `updated_at`) VALUES
(1, 3, 'hjk', 'hjkhj', NULL, 'ghjhg', 'gjgh', 'ghj', 'ghj', '8', 'ghjhgj', '2021-03-10 03:32:37', '2021-03-10 03:32:37'),
(2, 3, 'test', 'demo', NULL, 'sdfdsf', NULL, 'sdfsdf', '23232', '3', 'gfhgfhgfh', '2021-03-13 01:09:14', '2021-03-13 01:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
CREATE TABLE IF NOT EXISTS `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `bg_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('enable','disable') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `logo`, `bg_image`, `name`, `about`, `email`, `phone`, `address`, `status`, `created_at`, `updated_at`) VALUES
(2, 'upload/product//161597856148.jpg', NULL, 'vendor_test', 'test', 'vendor@shreehari.net', '1234567890', 'test demo', 'enable', '2020-12-15 10:46:59', '2021-03-17 05:26:03'),
(3, NULL, NULL, 'kapadiya Nikunj', NULL, 'kapadiyanikunj127@gmail.com', NULL, NULL, 'enable', '2021-01-31 16:54:48', '2021-01-31 16:54:48'),
(4, NULL, NULL, 'Abhishek Dudhat', NULL, 'dudhatabhishek8@gmail.com', NULL, NULL, 'enable', '2021-01-31 16:57:58', '2021-01-31 16:57:58'),
(5, NULL, NULL, 'mukund rathore', NULL, 'mukundrathore12345@gmail.com', NULL, NULL, 'enable', '2021-02-04 17:41:26', '2021-02-04 17:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `web_configs`
--

DROP TABLE IF EXISTS `web_configs`;
CREATE TABLE IF NOT EXISTS `web_configs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `option` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_configs`
--

INSERT INTO `web_configs` (`id`, `option`, `value`) VALUES
(1, 'site_name', 'sheehari'),
(2, 'from_email_address', 'info@shreehari.net'),
(3, 'copyright_text', 'Copyright © sheehari services.'),
(4, 'logo', 'upload/shopping.png'),
(5, 'phone', '(+91) 000-1233'),
(6, 'facebook', 'https://www.facebook.com/jayrnasit/'),
(7, 'linkedin', 'https://www.linkedin.com/in/nasit-jay-3857b31b0/'),
(8, 'twitter', 'https://twitter.com/jayrnasit'),
(9, 'youtube', 'https://www.youtube.com/channel/UCQJMPzBDp5Ru42EXGODwjVg'),
(10, 'instagram', 'https://www.instagram.com/jay_nasit_/'),
(11, 'delivery_charges', '50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
