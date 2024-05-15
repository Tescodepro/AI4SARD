-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2024 at 12:29 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai4sard`
--

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `position` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bio` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ceated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `bio`, `image`, `ceated_at`, `updated_at`) VALUES
(1, 'Olayinka Jelili Yusuf', 'Associate Professor', 'Olayinka Jelili Yusuf is an Associate Professor of Rural Sociology and Agricultural Extension at the Department of Agricultural Economics and Extension Services, Kwara State University, Malete, Nigeria. His research interests are social change and diffusion studies, agricultural technology uptake and transfer, gender, and development studies. He has over 50 published papers covering diverse development subjects in academic journals, conference proceedings, and chapters in textbooks. Dr. Yusuf is a recipient of several research grants, including the CODESRIA (Council for Development of Social Science Research in Africa) grant for PhD thesis writing and the Tertiary Education Trust Fund (TETFUND) National Research Fund (NRF). He has participated in several multi-disciplinary, pro-poor development research projects with funding at the national and international level. This included the UK DFID-sponsored projects (DelPHE 643 and 758), where he served as the project assistant. He had a short stint with an international NGO, Seefar, as a field consultant in 2021. He has postgraduate supervision experience, having graduated six MSc and two PhD students, and has served as an external examiner for a M.Phil. thesis at the University of Ibadan and a PhD thesis at the University of Ilorin. He has attended over thirty national, regional, and international conferences and workshops. He is a member of the Agricultural Extension Society of Nigeria (AESON) and the Rural Sociological Association of Nigeria (RuSAN), among others, and is currently the Editor-in-Chief of the Annals of Child and Youth Studies, a publication of the International Development Network of Children and Youth in Agriculture (CYIAP) Programme.  Dr. Yusuf is the Research Lead of the Artificial Intelligence for Sustainable Agriculture and Rural Development (AI4SARD) research network, a research group that embodies researchers from diverse disciplines working at the intersection of AI and agriculture. The group recently won the Gender and Responsible Artificial Intelligence Network (GRAIN) grant for the project focused on AI for Women in Agriculture (AI4WIA).\r\n', NULL, '2023-10-22 10:51:14', '2023-10-22 10:51:14'),
(2, 'Latifat Kehinde', 'Senior Lecturer', 'Dr. Latifat Kehinde, a senior lecturer of agricultural extension and rural development at the Department of Agricultural Economics and Extension Services at Kwara State University, is a team member of the Artificial Intelligence for Sustainable Agriculture and Rural Development (AI4SARD) Research Network. She obtained a PhD in Agricultural Extension and Rural Development and specializes in Agricultural Technology Transfer, Women in Agriculture, Youth and Gender, and Rural Development. She had participated in several youth, gender, and agricultural technology transfer projects, including on-farm evaluation and diffusion of orange-fleshed sweet potatoes for amelioration of hunger and vitamin-A deficiency among households in Kwara State, Nigeria, sponsored by the Tertiary Education Trust Fund (TETFUND), and the productivity of women farmer cooperators in Kwara State, Nigeria, published in the Book of Proceedings of the 48th Annual Conference of the Agricultural Society of Nigeria in 2014, among others.\r\n', NULL, '2023-10-22 10:51:14', '2023-10-22 10:51:14'),
(5, 'Fadlullah Olayiwola, Issa', 'Associate Professor', 'Dr. Fadlullah Olayiwola, Issa, is a Principal Extension Specialist (Associate Professor of Extension) in the National Agricultural Extension and Research Liaison Services (NAERLS), Ahmadu Bello University, Zaria, and is currently the Head of Grant and Intervention Project Unit. He obtained his PhD in agricultural extension and rural sociology. Dr. Issa worked with the Lagos State Agricultural Development Authority as an extension worker from 1997 to 2009. He joined NAERLS in 2009 as an Extension Specialist. He also lectures in the Departments of Agricultural Extension, Sociology, and Vocational and Technical Education in the Faculties of Agriculture, Social Sciences, and Education, respectively, at Ahmadu Bello University, Zaria. He has supervised one post-doc research project, two PhDs, 15 MScs, and 25 undergraduate projects. His research and development work delves into the uptake and dissemination of agricultural innovations in smallholder farming systems, including impact assessment, climate change, participatory extension, and sustainable agricultural policy and administration. He is a Forum for Agricultural Research in Africa (FARA)-certified knowledge manager and a national volunteer in the Winrock International F2F Program. He has participated in several international and multidisciplinary development research projects. He is a member of many professional associations, including the Agricultural Extension Society of Nigeria (AESON), the Rural Sociological Association of Nigeria (RuSAN), and the Nigerian Forum for Agricultural Advisory Services (NIFAAS). He is currently the Vice President (North) for NIFAAS. He has over 100 publications in both local and international journals.\r\n', NULL, '2023-10-22 11:09:33', '2023-10-22 11:09:33'),
(6, 'Felicia Motunrayo Olooto', 'Senior Lecturer', 'FELICIA MOTUNRAYO OLOOTO is a senior lecturer in the Department of Agricultural Economics and Extension Services at Kwara State University, Malete, Nigeria. She obtained a B.Sc. in Agricultural Extension Services from the University of Ibadan, Nigeria. She also got her M.Sc. and Ph. D degrees in Agricultural Extension and Rural Development from the University of Ibadan,	 Nigeria. She is a Team Member of the Artificial Intelligence for Sustainable Agriculture and Rural Development (AI4SARD) Research Network with specialization in Rural/community development, agricultural innovation and technology transfer, Gender studies and Women in Development. She is a member of learned professional associations such as Agricultural Extension Society of Nigeria (AESON), Rural Sociological Association of Nigeria (RuSAN) and Nigeria Forum of Agricultural Advisory Services (NIFAAS).', NULL, '2023-10-22 11:09:33', '2023-10-22 11:09:33'),
(7, 'Ibrahim Folorunsho Ayanda', 'Lecturer 1', 'Dr Ibrahim Folorunsho Ayanda, Lecturer 1, Department of Agricultural Economics and Extension Services, Kwara State University, Malete. A team member of Artificial Intelligence for Sustainable Agriculture and Rural Development , AI4SARD,  RESEARCH NETWORK. A holder of Bachelor Degree, Agriculture in Animal Science, University of Ibadan,  Master of Business Administration MBA, University of Lagos, M. Sc. in Agricultural Extension and Rural Development and Ph. D in Rural Development obtained from University of Ilorin, Kwara State, noNigeria. I am involved in training, research and community development which are the tripod activities for which the university was established. l have supervised 5 M. Sc. Projects 13 undergraduate students. In addition, I served as internal examiner to 2 M.sc students and advisor for 200 level students for 9 years ', NULL, '2023-10-22 11:09:33', '2023-10-22 11:09:33'),
(8, 'Ayanda ', 'Doctor', 'Dr. Ayanda has published several research papers in local, national and international journals as well contributing a chapter each in 2 separate books. He is a registered member of Agricultural Extension Society of Nigeria AESON, Rural Sociological Association of Nigeria RUSAN, Animal Science Association of Nigeria ASAN, International Society for Development and Sustainability ISDS, Fellow, Nigerian Institute of Animal Science FNIAS and Postgraduate College of Animal Science FCANS.\r\n', NULL, '2023-10-22 11:09:33', '2023-10-22 11:09:33'),
(9, 'Kayode Ayantoye', 'Associate Professor', 'Dr. Kayode Ayantoye, is an Associate Professor of Sustainable Economic Development and Farm Management at the Department of Agricultural Economics and Extension Services at Kwara State University, Malete. He is a Team Member of the Artificial Intelligence for Sustainable Agriculture and Rural Development (AI4SARD) Research Network. Dr. Ayantoye obtained a PhD in Agricultural Economics in 2009 and specializes in Sustainable Economic Development and Farm Management. He has published widely in reputable journals and featured prominently in international conferences among which is the Annual World Bank Conference on land and poverty in Washington DC. He has supervised many undergraduate and postgraduate students up to Phd level. He is a member of many learned professional organizations among which are, Nigerian Association of Agricultural Economists(NAAE), Farm Management Association of Nigeria (FAMAN), American Association of Applied Economics(AEE), African Association of Agricultural Economists(AAAE), International Association of Agricultural Economists (IAAE) and Agricultural Economics Society (AES).', NULL, '2023-10-22 11:09:33', '2023-10-22 11:09:33'),
(10, 'Shakirat Ronke Yusuff', 'Lecturer', 'Dr. Shakirat Ronke Yusuff holds a Ph. D. in Computer Science and is currently a lecturer at the Department of Computer Science, Kwara State University. She specializes in Software Engineering particularly in the area of Software Change Impact Analysis and Defect Prediction. Her other interests are in Data Science and the Applications of AI. She is a member of notable professional organizations among which are the Computer Professionals of Nigeria (CPN), Data Science Network (DSN), Cybersecurity Experts Association of Nigeria (CSEAN). \r\n', NULL, '2023-10-22 11:09:33', '2023-10-22 11:09:33'),
(11, 'Taofeekat Temitope Sulaimon', 'Lecturer', 'Taofeekat Temitope Sulaimon is a lecturer 11 in the Department of Economics and Development Studies, Kwara State University, Malete, Nigeria. She obtained a B.Sc Economics from Kwara State University and her MSc and Ph.D degree in Economics from the same University where she specialised in Agricultural and Development Economics. She is a team member of the Artificial Intelligence for Sustainable Agriculture and Rural Development (AI4SARD) Research Network with specialization in Agricultural and Development Economics. She is a member of the Institute of Chartered Accountant in Nigeria (ICAN) and also a member of Nigeria Economics Society as well as member of Accounting Technician of West Africa(ATWA).', NULL, '2023-10-22 11:09:33', '2023-10-22 11:09:33'),
(12, 'Olanrewaju Khadijat', 'Lecturer', 'Dr. Olanrewaju Khadijat is a Lecturer in the Department of Agricultural Extension and Rural Development of Osun State University, Oshogbo, Nigeria. She holds a Ph.D. in Agricultural Extension and Rural Sociology from Obafemi Awolowo University, Ile-Ife, Nigeria. I also have a certificate of Achievement in the scientific course “Farm Data Management, Sharing and Services for Agriculture Development” organized by the Food and Agriculture Organization of the United Nations. I am a member of the Agricultural Extension Society of Nigeria (AESON) as well as the Rural Sociological Association of Nigerian (RuSAN). Her research interests are in the area of development communication; rural livelihoods and value chains, gender and rural social welfare. For this, she is involved in functioning research groups for collaborative research on subjects related to sustainable development in agriculture and rural development. Notable of this is my prominent role in the formation of this \"Artificial Intelligence for Sustainable Agricultural and Rural DevelopmenT (AI4SARD)\" network which is poised for collaborative research on responsible AI deployment to rural livelihoods. Dr. Olanrewaju has more than 20 scholastic publications in local and international Journals and has supervised 7 undergraduate students’ dissertations in agricultural extension and rural development and mentors both undergraduate and postgraduate students in the field. She is also passionate about community services for rural development. As a voluntary service, she coordinates the rural development outreach services of the Department of Agricultural extension and Rural Development of Osun State University to the neighboring rural communities. ', NULL, '2023-10-22 11:09:33', '2023-10-22 11:09:33'),
(13, 'Adesina Abudlkabir Wahab', 'Senior Lecturer', 'Adesina Abudlkabir Wahab, a Senior Lecturer in the Department of Crop Production, Kwara State University, Malete, Nigeria. He obtained a B. Agric. from University of Agriculture, Abeokuta, Ogun State and MSc from University of Ibadan, Ibadan and Ph.D degree in view. He specialized in Soil Physics with focus on soil conservation and land reclamations. He is a member of the International Union of Soil Sciences, Soil Science Society of Nigeria (SSSN) and a Registered Soil Scientist (NISS/RSS/2019/0114) with Nigeria Institute of Soil Science. He is also a member of Organic Agriculture Practitioner (OAPTIN) and National Organic Agriculture of Nigeria (NOAN). He is a team member of the Artificial Intelligence for Sustainable Agriculture and Rural Development (AI4SARD) Research Network with specialisation in Soil, Crop and Environmental Improvement. He had engaged in several soil conservation and land reclamations community outreach projects such as Dissemination of Innovation and Technologies for Managing Problematic Soils in North-Central Zone of Nigeria, Validation of 16,000 Hectares of Land for Cassava (Manihot utilissima Pohl) Ethanol Fuel Project at Odo-Alape, Kogi State: For Nigeria National Petroleum Corporation (NNPC), Vermicompost Technology as soil amendment and sustainable yield-enhancing strategies in Cucumber (Cucumis Sativus. L) Production: Institutional Based TETFUND Research grant and including the ongoing “Suitability Assessment of selected maize (zea mays l.) Cultivars to fertilizers regime under farmers\' field conditions in southern guinea savanna, Nigeria”.', NULL, '2023-10-22 11:09:33', '2023-10-22 11:09:33'),
(14, 'Olayinka Abosede Ojo', 'Lecturer', 'Dr. Olayinka Abosede Ojo is a Lecturer in the Department of Animal Production Fisheries and Aquaculture, Kwara State University Malete Nigeria. She obtained her B.Agric in Animal Production and Health Sciences from Ekiti State University, Ado Ekiti, MSc and Ph.D in Animal Reproductive Physiology and Animal Physiology and Bioclimatology respectively from the University of Ibadan, Oyo State Nigeria. Her research focus is on application of bio-ameliorative mechanisms such as phytogenic supplements with the projection of artificial intelligence and Machine learning application in solving heat stress challenges resulting from Climatic change .She is a member of Nigerian Society for Animal Production, Association of Organic Agriculture Practitioners of Nigeria (AOAN) All African Society for Animal Production (AASAP), Organization for Women in Science to the Developing World (OWSD), British Society for Neuroendocrinology, The Physiological Society (BSAS), Nigerian Institute of Animal Science (NIAS), and Animal Science Association of Nigeria ( ASAN). She is also a member of the Artificial Intelligence for Sustainable Agriculture and Rural Development (AI4SARD  Research team. She had been opportune to partake in a number of grants at both local and  national level including TETFUND institution based Research (IBR) titled Farmers Training on the Ameliorative Potential of Lycopene and African Walnut Extract on the Reproductive Performance of West African Dwarf goats reared in the Guinea Savannah of Kwara State .She many publications in both local and international Journals.', NULL, '2023-10-22 11:09:33', '2023-10-22 11:09:33'),
(15, 'Ololade Latifat Abdulrahman', 'Lecturer', 'Dr. Ololade Latifat Abdulrahman, a Lecturer in the Department of Agricultural Economics and Extension Services at Kwara State University. She holds a PhD in Agricultural Extension from University of Ilorin with specialization in technology uptake and transfer for rural livelihood, climate change resilience, gender issues, Rural Development with interest in Artificial intelligence. She belongs to several learned professional bodies related to her field, amongst which are Agricultural Extension Society of Nigeria (AESON) and Nigeria forum for Agricultural Advisory Services (NIFAAS). She is a pioneer beneficiary of President Barrack Obama Scholarship for Young Africa Leadership Initiative (YALI) training. She has won several multidisciplinary Institutional based Tertiary Education Trust Fund (TETFUND) both as principal investigator and co-researcher, with many publications to her credit. She is a team member of Artificial intelligence for sustainable Agriculture and Rural Development (AI4SARD) Research Network and one of the team that won Gender Responsible Artificial Intelligence Network (GRAIN) grant in 2023.', NULL, '2023-10-22 11:09:33', '2023-10-22 11:09:33'),
(16, 'Monsurat Omolara Balogun', 'Lecturer', 'Dr. Monsurat Omolara Balogun is a lecturer in the Department of Electrical and Computer Engineering, Faculty of Engineering and Technology, Kwara State University, Malete, Ilorin, Kwara State, Nigeria. Her area of specialization is artificial intelligence/image processing.  Her current research looks at the potential of using AI-based soil humidity monitoring systems to increase crops yield in Nigeria. She had her PhD in Computer Engineering. Apart from teaching and impacting knowledge, she has published journals in reputable journal outlets and has supervised 50 undergraduate projects and 2 M.Eng. theses. She is a satisfied engineer by the Council for the Regulation of Engineering in Nigeria (COREN), member of The Nigerian Society of Engineers (NSE) and member of The Nigerian Institute of Management (Chartered). She is also a member of the Artificial Intelligence for Sustainable Agriculture and Rural Development (AI4SARD)  research team. Her extracurricular activities include reading and listening to music.', NULL, '2023-10-22 11:09:33', '2023-10-22 11:09:33'),
(17, 'Wasiu Adekunle OLANIYI', 'Associate Professor', 'Dr. Wasiu Adekunle OLANIYI is an Associate Professor in the Department of Animal Science, Adekunle Ajasin University Akungba-Akoko, Ondo State, Nigeria. He obtained his PhD at Obafemi Awolowo University, Ile-Ile, Nigeria; and received fellowship training at Wageningen University, The Netherlands. His areas of expertise are Animal Genetics and Biotechnology, Aquaculture and Climate Science. He is a Registered Animal Scientist (RAS) and a double awardee of STEP-IOT grants.\r\n', NULL, '2023-10-22 11:09:33', '2023-10-22 11:09:33'),
(18, 'Kazeem Adesina Dauda', 'Senior Lecturer', 'Dr. Kazeem Adesina Dauda is a Senior Lecturer in the Department of Mathematics and Statistics at Kwara State University, Malete. Dr. Kazeem received the B.Sc., M.Sc., and Ph.D. degrees in Statistics (Biostatistics) from the University of Ilorin, Ilorin, Nigeria, in 2010, 2013, and 2018 respectively. He previously worked as a research fellow at the Department of Artificial Intelligence, Indian Statistical Institute, Kolkata, India, through C V Raman International Fellowship for Africa Researcher 2017. Dr. Kazeem is currently a postdoctoral fellow in the research group HyperEvol: Combatting Antimicrobial Resistance (AMR) funded by Trond Mohn Stiftelse (TMS) in connection with Centre for Antimicrobial Resistance (CAMRIA) at University of Bergen, Norway. He is working on genetic features of gram-negative bacteria (Infection: Klebsiellas Pneumoniae and Escherichia Colli) that are linked to the propensity of Extended Spectrum BetaLactamase (ESBL) production. Clusters of genes feature will be identified and fed through into hypercubic inference to learn and predict pathways by which AMR evolves in different regions and countries. Dr. Kazeem is also interested in advanced statistical learning, data science, and machine learning (supervised, unsupervised and semi-supervised learning). \r\n', NULL, '2023-10-22 11:09:33', '2023-10-22 11:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int NOT NULL,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `speaker` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `materials` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `speaker`, `materials`) VALUES
(1, 'AI-Enhanced Climate Smart Farming: Towards Empowering African Women Farmers', 'Prof. Olanike Deji_Keynote Speaker', 'Prof. Olanike Deji_Keynote Speaker.pptx'),
(2, 'Climate Smart Farming and Resilience Building for African Women Farmers ', 'Dr. Ifeanyi-obi_Presentation', 'Dr. Ifeanyi-obi_Presentation.pptx'),
(3, 'AI Driven Weed Management and Sustainable Farming', 'Prof. Mikail Olaniyi', 'Prof. Mikail Olaniyi_AI Driven Weed Management and Sustainable Farming.pptx'),
(4, 'CHANGING PARADIGMS IN ADDRESSING CLIMATE SHOCKS AMONG WOMEN', 'Dr. Sidikat Aderinoye', 'Dr. Sidikat Aderinoye_CHANGING PARADIGMS IN ADDRESSING CLIMATE SHOCKS AMONG WOMEN.pptx'),
(5, 'Application of Artificial Intelligence Innovation in Predictive Agriculture\r\n', 'Abdulwaheed Musa, PhD', 'Dr Musa_App. of AI in Agric.pptx'),
(6, 'Smart Climate Solution for Nigerian Crop Farmers Centre for Sustainable Agricultural Empowerment, Nigeria\r\n', 'Dr. Toyin Olowogbon', 'Dr. Toyin Olowogbon Presentation_CSAE SOFADRICLIMATE.pptx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
