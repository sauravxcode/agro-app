-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql207.infinityfree.com
-- Generation Time: May 06, 2024 at 05:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_36391633_agroapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `s_no` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `scheme_id` int(11) DEFAULT NULL,
  `apply_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`s_no`, `user_id`, `scheme_id`, `apply_date`) VALUES
(19, 112, 101, '2024-04-17'),
(20, 112, 103, '2024-04-17'),
(21, 112, 106, '2024-04-17'),
(22, 112, 113, '2024-04-17'),
(25, 126, 101, '2024-04-19'),
(26, 126, 105, '2024-04-19'),
(27, 126, 108, '2024-04-19'),
(28, 112, 112, '2024-04-19'),
(29, 125, 101, '2024-04-21'),
(33, 131, 101, '2024-05-06'),
(34, 131, 102, '2024-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `temperature` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `rainfall` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `soil_type` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `top_yielding_states` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `fact` text COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `supporting_schemes` text COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`id`, `name`, `image_url`, `temperature`, `rainfall`, `soil_type`, `top_yielding_states`, `fact`, `supporting_schemes`) VALUES
(1, 'Rice', 'rice.jpg', '20°C - 35°C', '1500 mm - 3000 mm', 'Clayey soil', 'West Bengal, Uttar Pradesh, Punjab', 'Rice is a staple food for over half of the world\'s population.', 'National Food Security Mission'),
(2, 'Wheat', 'wheat.jpg', '10°C - 25°C', '450 mm - 650 mm', 'Loamy soil', 'Punjab, Uttar Pradesh, Madhya Pradesh', 'Wheat is the second most-produced cereal after rice.', 'National Food Security Mission'),
(3, 'Millets', 'millets.jpg', '20°C - 35°C', '300 mm - 600 mm', 'Sandy loam soil', 'Karnataka, Maharashtra, Andhra Pradesh', 'Millets are known for their high nutritional value and are gluten-free.', 'National Mission for Sustainable Agriculture'),
(4, 'Maize', 'maize.jpg', '15°C - 30°C', '500 mm - 1000 mm', 'Sandy loam soil', 'Karnataka, Andhra Pradesh, Maharashtra', 'Maize is used both for human consumption and as animal feed.', 'National Food Security Mission'),
(5, 'Pulses', 'pulses.jpg', '20°C - 30°C', '500 mm - 800 mm', 'Well-drained loamy soil', 'Madhya Pradesh, Uttar Pradesh, Rajasthan', 'Pulses are rich sources of protein and essential nutrients.', 'National Food Security Mission'),
(6, 'Sugarcane', 'sugarcane.jpg', '20°C - 30°C', '750 mm - 1500 mm', 'Sandy loam soil', 'Uttar Pradesh, Maharashtra, Karnataka', 'Sugarcane is a major source of sugar production globally.', 'Sugarcane Development Program'),
(7, 'Oilseeds', 'oilseeds.jpg', '15°C - 25°C', '600 mm - 1200 mm', 'Well-drained loamy soil', 'Madhya Pradesh, Rajasthan, Gujarat', 'Oilseeds are used for producing edible oil and biodiesel.', 'National Mission on Oilseeds and Oil Palm'),
(8, 'Horticulture crops', 'horticulture.jpg', 'Varies with crop type', 'Varies with crop type', 'Varies with crop type', 'Karnataka, Maharashtra, Andhra Pradesh', 'Horticulture crops include fruits, vegetables, flowers, and medicinal plants.', 'National Horticulture Mission'),
(9, 'Tea', 'tea.jpg', '15°C - 30°C', '1500 mm - 2500 mm', 'Well-drained acidic soil', 'Assam, West Bengal, Tamil Nadu', 'Tea is one of the most consumed beverages globally.', 'National Tea Plan'),
(10, 'Coffee', 'coffee.jpg', '15°C - 28°C', '1500 mm - 3000 mm', 'Sandy loam soil', 'Karnataka, Kerala, Tamil Nadu', 'Coffee is one of the most traded commodities in the world.', 'National Coffee Plan'),
(11, 'Rubber', 'rubber.jpg', '25°C - 35°C', '2000 mm - 3000 mm', 'Lateritic soil', 'Kerala, Tamil Nadu, Karnataka', 'Natural rubber is derived from the latex of rubber trees.', 'Rubber Plantation Development Scheme'),
(12, 'Cotton', 'cotton.jpg', '20°C - 30°C', '500 mm - 1000 mm', 'Black soil', 'Gujarat, Maharashtra, Andhra Pradesh', 'Cotton is a primary raw material for the textile industry.', 'Cotton Technology Mission'),
(13, 'Jute', 'jute.jpg', '25°C - 35°C', '1500 mm - 2500 mm', 'Alluvial soil', 'West Bengal, Bihar, Assam', 'Jute is known as the \"golden fiber\" and is used for making sacks and bags.', 'National Jute Policy');

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `scheme_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `contact_info` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `launch_date` date DEFAULT NULL,
  `last_date` date DEFAULT NULL,
  `ministry_name` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `benefits` text COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `eligibility_criteria` text COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`scheme_id`, `name`, `description`, `contact_info`, `launch_date`, `last_date`, `ministry_name`, `benefits`, `eligibility_criteria`) VALUES
(101, 'Pradhan Mantri Kisan Samman Nidhi (PM-KISAN)', 'PM-KISAN is a central sector scheme launched on 24th February 2019 to supplement financial needs of land holding farmers, subject to exclusions. Under the scheme, financial benefit of Rs. 6000/- per year is transferred in three equal four-monthly installments into the bank accounts of farmer\'s families across the country, through Direct Benefit Transfer (DBT) mode.', 'pmo@gmail.com', '2019-02-24', '2024-12-31', 'Ministry of Agriculture', 'Financial assistance, Direct Benefit Transfer', 'Land holding farmers'),
(102, 'Pradhan Mantri Kisan MaanDhan Yojana (PM-KMY)', 'Pradhan Mantri Kisan Maandhan Yojna (PMKMY) is a central sector scheme launched on 12th September 2019 to provide security to the most vulnerable farmer families. PM-KMY is contributory scheme, small and marginal farmers (SMFs), subject to exclusion criteria, can opt to become member of the scheme by paying monthly subscription to the Pension Fund. Similar, amount will be contributed by the Central Government.', 'pmkyo@gmail.com', '2019-09-12', '2024-12-31', 'Ministry of Agriculture', 'Pension security, Contribution from Central Government', 'Small and marginal farmers'),
(103, 'Pradhan Mantri Fasal Bima Yojana (PMFBY)', 'MFBY was launched in 2016 in order to provide a simple and affordable crop insurance product to ensure comprehensive risk cover for crops to farmers against all non-preventable natural risks from pre-sowing to post-harvest and to provide adequate claim amount.', 'pmfbyo@gmail.com', '2016-01-01', '2025-12-31', 'Ministry of Agriculture', 'Crop insurance, Risk cover', 'Farmers with cultivable land'),
(104, 'Modified Interest Subvention Scheme (MISS)', 'The Interest Subvention Scheme (ISS) provides concessional short term agri-loans to the farmers practicing crop husbandry and other allied activities like animal husbandry, dairying and fisheries. ISS is available to farmers availing short term crop loans up to Rs.3.00 lakh at an interest rate of 7% per annum for one year.', 'pmfbyo@gmail.com', '2017-01-01', '2024-12-31', 'Ministry of Agriculture', 'Concessional loans, Interest rate subvention', 'Farmers with short term crop loans'),
(105, 'Agriculture Infrastructure Fund (AIF)', 'In order to address the existing infrastructure gaps and mobilize investment in agriculture infrastructure, Agri Infra Fund was launched under Aatmanirbhar Bharat Package. AIF was introduced with a vision to transform the agriculture infrastructure landscape of the country.', 'aifo@gmail.com', '2020-01-01', '2025-12-31', 'Ministry of Agriculture', 'Infrastructure development, Investment mobilization', 'Farmers and stakeholders in agriculture sector'),
(106, 'Formation & Promotion of new 10,000 FPOs', 'The Government of India launched the Central Sector Scheme (CSS) for \"Formation and Promotion of 10,000 Farmer Producer Organizations (FPOs)\" in the year 2020.', 'fpo@gmail.com', '2020-06-01', '2024-12-31', 'Ministry of Agriculture', 'Promotion of FPOs, Capacity building', 'Farmers interested in forming FPOs'),
(107, 'National beekeeping and Honey Mission (NBHM)', 'Honeybees/ beekeeping have been approved as 5th Input for Agriculture. 4 World Class State of the Art Honey Testing Labs and 35 Mini Honey Testing Labs have been sanctioned under National Beekeeping & Honey Mission (NBHM) for testing of honey.', 'nhbmo@gmail.com', '2018-01-01', '2025-12-31', 'Ministry of Agriculture', 'Promotion of beekeeping, Honey testing labs', 'Farmers interested in beekeeping and honey production'),
(108, 'Market Intervention Scheme and Price support Scheme (MIS-PSS)', 'Ministry of Agriculture & Farmers Welfare implements the Price Support Scheme (PSS) for procurement of pulses, oilseeds and copra. Market Intervention Scheme (MIS) for procurement of agricultural and horticultural commodities which are perishable in nature and are not covered under the Price Support Scheme (PSS).', 'pssmo@gmail.com', '2017-01-01', '2025-12-31', 'Ministry of Agriculture', 'Price support, Procurement of agricultural commodities', 'Farmers producing perishable agricultural commodities'),
(109, 'Namo Drone Didi', 'The Government has recently approved a Central Sector Scheme for providing drones to the Women Self Help Group (SHGs) for the period from 2024-25 to 2025-26 with an outlay of Rs. 1261 Crores.', 'nmdo@gmail.com', '2024-01-01', '2025-12-31', 'Ministry of Agriculture', 'Drone distribution, Women empowerment', 'Women Self Help Groups'),
(110, 'Rastriya Krishi Vikas Yojana-Detailed Project Report based schemes (RKVY- DPR)', 'The scheme focuses on creation of pre & post-harvest infrastructure in agriculture and allied sectors that help in supply of quality inputs, market facilities, etc to farmers. It provides flexibility and autonomy to states to implement projects as per the local farmer\'s needs and priorities from a bouquet of activities in agriculture and allied sectors.', 'rkvyo@gmail.com', '2020-01-01', '2025-12-31', 'Ministry of Agriculture', 'Infrastructure development, Flexibility to states', 'Farmers interested in infrastructure development'),
(111, 'Soil Health Card (SHC)', 'Soil health card provides information to farmers on nutrient status of their soil along with recommendation on appropriate dosage of nutrients to be applied for improving soil health and its fertility. The indicators are typically based on farmer\'s practical experience and knowledge of local natural resources.', 'shco@gmail.com', '2015-01-01', '2025-12-31', 'Ministry of Agriculture', 'Soil health assessment, Nutrient recommendation', 'Farmers interested in soil health management'),
(112, 'Rainfed Area Development (RAD)', 'RAD is being implemented since 2014-15. RAD adopts an area based approach in cluster mode for promoting Integrated Farming System (IFS) which focuses on multi-cropping, rotational cropping, inter-cropping, mixed cropping practices with allied activities like horticulture, livestock, fishery, apiculture etc', 'rado@gmail.com', '2014-01-01', '2025-12-31', 'Ministry of Agriculture', 'Integrated farming promotion, Crop diversification', 'Farmers in rainfed areas'),
(113, 'Per Drop More Crop (PDMC)', 'In order to increase water use efficiency at the farm level through Micro Irrigation technologies i.e. drip and sprinkler irrigation systems, Per Drop More Crop (PDMC) scheme was launched during 2015-16.', 'pdmco@gmail.com', '2016-01-01', '2025-12-31', 'Ministry of Agriculture', 'Water conservation, Micro Irrigation', 'Farmers interested in water-saving irrigation methods'),
(114, 'Micro Irrigation Fund (MIF)', 'A Micro Irrigation Fund (MIF) of initial corpus Rs 5000 crore has been created with NABARD with major objective to facilitate the States in mobilizing the resources for expanding coverage of Micro Irrigation. Under the funding arrangement, NABARD lends to the States/UTs at 3% lower interest rate than the corresponding cost of fund mobilized by NABARD from the market.', 'imfo@gmail.com', '2018-01-01', '2025-12-31', 'Ministry of Agriculture', 'Fund for Micro Irrigation expansion, Lower interest rates', 'Farmers interested in micro irrigation expansion'),
(115, 'Paramparagat Krishi Vikas Yojana (PKVY)', 'Paramparagat Krishi Vikas Yojana (PKVY) aims to increase soil fertility and thereby helps in production of healthy food through organic practices without the use of agro-chemicals.', 'pvkyo@gmail.com', '2017-01-01', '2025-12-31', 'Ministry of Agriculture', 'Organic farming promotion, Soil fertility improvement', 'Farmers interested in organic farming'),
(116, 'Sub-Mission on Agriculture Mechanization (SMAM)', 'Sub Mission on Agricultural Mechanization (SMAM) is being implemented w.e.f April, 2014 which aims at catalyzing an accelerated but inclusive growth of agricultural mechanization in India with the objectives of Increasing the reach of farm mechanization to small and marginal farmers and to the regions where availability of farm power is low, promoting \'Custom Hiring Centres\'', 'smamo@gmail.com', '2014-04-01', '2025-12-31', 'Ministry of Agriculture', 'Agricultural mechanization promotion, Custom Hiring Centres', 'Small and marginal farmers in regions with low farm power availability'),
(117, 'Crop Residue Management', 'Crop Residue Management was implemented from 2018-19 in Punjab, Haryana, Uttar Pradesh and NCT of Delhi. Its objectives include protecting environment from air pollution and preventing loss of nutrients and soil micro-organisms caused by burning of crop residue through promoting in-situ management of crop residue. In this regard, it proposes to set up Farm Machinery Banks for custom hiring of in-situ crop residue management machinery.', 'rdmo@gmail.com', '2018-01-01', '2025-12-31', 'Ministry of Agriculture', 'Residue management, Environmental protection', 'Farmers in states implementing residue management schemes'),
(118, 'Agro-forestry', 'Agro-forestry was conceived on the recommendation of the National Agro-forestry Policy 2014 to promote plantation on farmlands', 'agfmo@gmail.com', '2015-01-01', '2025-12-31', 'Ministry of Agriculture', 'Agro-forestry promotion, Plantation on farmlands', 'Farmers interested in agro-forestry practices'),
(119, 'National Food Security Mission (NFSM)', 'the Mission aims at increasing production of rice, wheat, pulses, coarse cereals (Maize and Barley) and Nutri-Cereals through area expansion and productivity enhancement in a sustainable manner in the identified districts of 28 States and 2 UTs (i.e., J&K and Ladakh).', 'nfsmo@gmail.com', '2014-01-01', '2025-12-31', 'Ministry of Agriculture', 'Food security promotion, Production enhancement', 'Farmers in identified districts interested in food crop production'),
(120, 'Sub-Mission on Seed and Planting Material (SMSP)', 'SMSP covers the entire gamut of seed production chain, from production of nucleus seed to supply of certified seeds to the farmers, to provide support for creation of infrastructure conducive for development of the seed sector, support to the public seed producing organisations for improving their capacity and quality of seed production, create dedicated seed bank to meet unforeseen circumstances of natural calamities, etc.', 'smspo@gmail.com', '2015-01-01', '2025-12-31', 'Ministry of Agriculture', 'Seed production support, Infrastructure creation', 'Seed producers and farmers requiring quality seeds'),
(121, 'Pradhan Mantri Gram Sadak Yojana (PMGSY)', 'PMGSY is a centrally sponsored scheme launched to provide all-weather road connectivity to unconnected rural areas. It aims to improve access to markets, schools, and healthcare facilities.', 'pmgsyo@gmail.com', '2000-12-25', '2025-12-31', 'Ministry of Rural Development', 'Rural road connectivity, Infrastructure development', 'Rural communities'),
(122, 'Mahatma Gandhi National Rural Employment Guarantee Scheme (MGNREGS)', 'MGNREGS guarantees 100 days of wage employment in a financial year to every rural household whose adult members volunteer to do unskilled manual work.', 'mgnregso@gmail.com', '2006-02-02', '2025-12-31', 'Ministry of Rural Development', 'Employment generation, Rural livelihoods', 'Rural households'),
(123, 'Swachh Bharat Mission (SBM)', 'SBM aims to achieve universal sanitation coverage by providing access to toilets to all households in rural areas. It also focuses on solid waste management and behavioral change.', 'sbmo@gmail.com', '2014-10-02', '2025-12-31', 'Ministry of Jal Shakti', 'Sanitation coverage, Waste management', 'Rural households and communities'),
(124, 'Deen Dayal Upadhyaya Grameen Kaushalya Yojana (DDU-GKY)', 'DDU-GKY aims to train rural youth for wage employment in sectors having demand for skilled manpower. It focuses on placement-linked skill training.', 'ddugkyo@gmail.com', '2014-09-25', '2025-12-31', 'Ministry of Rural Development', 'Skill development, Wage employment', 'Rural youth'),
(125, 'Pradhan Mantri Awas Yojana - Gramin (PMAY-G)', 'PMAY-G aims to provide affordable and pucca houses with basic amenities to rural households living in kutcha houses. It focuses on beneficiary-led construction.', 'pmaygo@gmail.com', '2016-04-01', '2025-12-31', 'Ministry of Rural Development', 'Housing for rural poor, Infrastructure development', 'Rural households living in kutcha houses');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('Male','Female','Other') COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `date_of_birth`, `gender`, `state`, `username`, `password`) VALUES
(111, 'admin', 'admin@gmail.com', '2024-04-01', 'Other', 'DELHI', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(112, 'testing moat', 'testingmoat@gmail.com', '2024-04-03', 'Male', 'DELHI', 'testingms', '6eea9b7ef19179a06954edd0f6c05ceb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`s_no`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `scheme_id` (`scheme_id`);

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`scheme_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`scheme_id`) REFERENCES `schemes` (`scheme_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
