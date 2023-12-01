-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2023 lúc 08:08 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cdweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Address` text DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `Favorite` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `email`, `phone_number`, `full_name`, `Date`, `Address`, `gender`, `Favorite`, `status`, `created_at`, `updated_at`) VALUES
(1, 'adad@gmail.com', '0123456789', 'Trần Văn A', '2023-11-25', 'Võ Văn Ngân, Thủ Đức', 1, NULL, 1, NULL, NULL),
(2, 'dien@gmail.com', '0123456559', 'Trần Văn B', '2020-11-25', 'Thủ Dức', 2, NULL, 3, NULL, NULL),
(3, 'hello@gmail.com', '0522622700', 'Trần Văn C', '2012-11-25', 'Võ Văn Ngân, Thủ Đức', 1, NULL, 1, NULL, NULL),
(4, 'hello2@gmail.com', '0522622700', 'Trần Văn C', '2022-11-25', 'Võ Văn Ngân, Thủ Đức', 1, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cv`
--

CREATE TABLE `cv` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `Name_CV` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `apply_position` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `exp_work` varchar(255) DEFAULT NULL,
  `School_name` varchar(255) DEFAULT NULL,
  `Learn_time` varchar(255) DEFAULT NULL,
  `Majors` varchar(255) DEFAULT NULL,
  `infor_order` varchar(255) DEFAULT NULL,
  `Status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cv_management`
--

CREATE TABLE `cv_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CV_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `last_edit` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cv_management`
--

INSERT INTO `cv_management` (`id`, `CV_id`, `name`, `Status`, `last_edit`, `created_at`, `updated_at`) VALUES
(1, 1, 'Thanh Dien', 'đã duyệt', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employer`
--

CREATE TABLE `employer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_id` int(11) NOT NULL,
  `Website` text DEFAULT NULL,
  `Infor` text DEFAULT NULL,
  `Responsibility` text DEFAULT NULL,
  `Welfare` text DEFAULT NULL,
  `name_company` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `featured` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `employer`
--

INSERT INTO `employer` (`id`, `User_id`, `Website`, `Infor`, `Responsibility`, `Welfare`, `name_company`, `address`, `image`, `email`, `phone_number`, `featured`, `created_at`, `updated_at`) VALUES
(1, 3, 'https://samcenter.vn', 'Samsung Electronics HCMC CE Complex (SEHC) project with a total investment of US $ 2 billion is located in Saigon Hi-tech Park with a total area of up to 122ha, which began operation in early 2016. This is one of the key factories of Samsung Groups high-end consumer electronics manufacturing. Beside that, in early 2017 the largest Executive Briefing Center (EBC) in Southeast Asia and R&D Center (SHRC) established at the SEHC complex', NULL, 'Yearly Performance Bonus 2 times/year (up to 3-month salary) + 13th Salary.\n                Udemy License & Linkedin E-Learning are provided.\n                100% salary and mandatory social insurances in 2-month probation.\n                Daily shuttle bus from city center to company.\n                GWP quarterly\n                Free luncheon\n                Training Opportunities in Korea. (Many times)\n                Take part in variuos significant activities such as SEHC Events, Town Hall Meeting, Liên Quân Mobile Champion, SEHC Marathon, SEHC Hackathon, SEHC Home Town,....\n                Mon - Fri', 'Samsung Electronics HCMC CE Complex (SEHC)', 'Lô I-11, Đường D2, Khu Công nghệ cao, Phường Tăng Nhơn Phú B, Thành phố Thủ Đức, Thành phố Hồ Chí Minh', 'TopDev-Screenshot2022-07-25152515-1658737564.png', NULL, '1800 588 889', 1, '2023-11-30 04:34:18', '2023-11-30 04:34:18'),
(2, 4, NULL, 'Công ty TNHH Phần mềm DTS Việt Nam (tên gọi tắt là DTS Việt Nam) được thành lập với mục đích giúp DTS Corporation tại Nhật Bản đáp ứng nhu cầu phát triển sản phẩm, dịch vụ và cung cấp cho khách hàng đơn giá hợp lý, có tính cạnh tranh', NULL, 'Lương thỏa thuận theo năng lực thực tế của ứng viên.\n                Trợ cấp đi lại, trợ cấp ăn trưa, trợ cấp năng lực tiếng Nhật, trợ cấp học tiếng Nhật trợ cấp onsite khi tham gia dự án bên khách hàng....\n                Thưởng lễ tết, thưởng tháng lương thứ 13, thưởng nhân viên xuất sắc quý, năm, nhân viên tiêu biểu đi du lịch Nhật Bản.\n                Nghỉ theo lịch công ty, nghỉ theo lịch khách hàng Nhật, ngoài các ngày nghỉ theo quy định, 1 năm có thêm 2 đợt nghỉ dài.\n                Nghỉ tham gia Ngày hội khai giảng cùng con cho các phụ huynh\n                Chế độ chăm sóc phụ nữ: Nghỉ sinh lý phụ nữ: 8h/ tháng; Nghỉ sau sinh cho nhân viên nữ có con dưới 1 tuổi: 1h/ngày.\n                Bảo hiểm y tế, bảo hiểm xã hội, bảo hiểm thất nghiệp theo quy định của Luật lao động.\n                Bảo hiểm sức khỏe cao cấp cho toàn bộ nhân viên.\n                Khám sức khỏe định kỳ hàng năm tại các bệnh viện uy tín (Bệnh viện Thu Cúc, bệnh viện Medlatec…).\n                Miễn phí trà, coffee tại khu vực ăn uống của công ty.\n                Máy pha coffee, máy bán hàng tự động tiện ích ngay tại văn phòng.\n                Hoạt động team building kết nối đội nhóm hàng quý.\n                Các CLB thể thao: bóng đá, bi lắc, bóng bàn, cờ, leo núi...\n                Hoạt động du lịch thường niên và các sự kiện lớn trong công ty.\n                Thời gian làm việc: Thứ 2 đến thứ 6, từ 08:00 đến 17:00', 'DTS Software Viet Nam', 'Số 266 Đường Đội Cấn, Phường Liễu Giai, Quận Ba Đình, Thành phố Hà Nội', '1559822688581-Untitled.jpg', NULL, '028 3933 6666', 1, '2023-11-30 04:34:18', '2023-11-30 04:34:18'),
(3, 5, NULL, 'iTechwx dedicates the One-Stop Digital Transformation Service to our customers.\n                We partner with enterprises from multi-dimensions, empowering our customers with technical talent solutions.', NULL, 'Performance Bonus\n                Social and Health insurance follow Vietnamese Law\n                Young & Dynamic Working Environment\n                International Culture\n                24/7 Insurance for Night-shift\n                Annual Health Check-up', 'iTechwx', '12th Floor, Opal Tower, 92 Nguyen Huu Canh street, Phường 22, Quận Bình Thạnh, Thành phố Hồ Chí Minh', 'TopDev-[removal.ai]_tmp-643d0d4737a99-1681722803.png', NULL, '02871096185', 1, '2023-11-30 04:34:18', '2023-11-30 04:34:18'),
(4, 6, NULL, 'Tập đoàn Công nghiệp – Viễn thông Quân đội, thường dược biết đến dưới tên giao dịch Viettel hay Tập đoàn Viettel, là một tập đoàn viễn thông và công nghệ Việt Nam được thành lập vào ngày 1 tháng 6 năm 1989. Các ngành nghề chính của tập đoàn bao gồm: ngành dịch vụ viễn thông & công nghệ thông tin;', NULL, 'Dẫn đầu thị trường:\n                Cơ hội được trải nghiệm, tiếp cận và làm việc tại Tập đoàn tiên phong mở đường, kiến tạo tương lai thông minh, gắn kết của Việt Nam.\n                Cơ hội được thử sức trong những lĩnh vực công nghệ tiên tiến, hiện đại nhất.\n                Cơ hội được trở thành nhân viên chính thức ngay sau khi tốt nghiệp mà không cần trải qua thử việc.\n                Môi trường năng động sáng tạo:\n                Môi trường làm việc cởi mở và năng động, khuyến khích trao đổi ý tưởng ở mọi cấp, cho phép bạn làm việc, sáng tạo theo cách riêng.\n                Được khơi gợi cảm hứng làm việc với văn phòng xanh, không gian mở, hiện đại tiêu chuẩn quốc tế.\n                Cơ hội thử thách và phát triển:\n                Áp dụng kiến thức, kĩ năng, kinh nghiệm chuyên môn giải quyết các bài toán hấp dẫn, thử thách tại Viettel.\n                Cơ hội thử sức ở nhiều lĩnh vực, sản phẩm và quốc gia khác nhau góp phần thay đổi xã hội.\n                Viettel cam kết cho bạn nền tảng vững chắc để học hỏi và phát triển.\n                Sẵn sàng trao quyền, cơ hội đột phá cho những người trẻ tuổi.\n                Cơ hội học hỏi từ các chuyên gia hàng đầu, lãnh đạo và đồng nghiệp ưu tú.\n                Cơ hội được đào tạo, trao dồi kĩ năng định kì và nhu cầu thực tế.\n                Chế ngộ đãi ngộ hấp dẫn:\n                Được hưởng lương phản ánh đúng năng lực và cạnh tranh trên thị trường (From $700, Up to $10,000).\n                Được thư giãn, khơi nguồn sáng tạo với Happy Time mỗi ngày.\n                Cơ hội tham gia gắn kết với tập thể, tổ chức với các hoạt động team building thú vị.\n                Thời gian làm việc: Từ thứ 2 đến thứ 6 (Sáng 8h00-12h00, Chiều 13h30-17h30).', 'Viettel Group', 'Tòa nhà Thái Bình, Ngõ 19 Duy Tân, Phường Dịch Vọng Hậu, Quận Cầu Giấy, Thành phố Hà Nội', 'TopDev-Viettel-Logo-Original-1675389520.png', NULL, '1800 8098', 1, '2023-11-30 04:34:18', '2023-11-30 04:34:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `followers`
--

CREATE TABLE `followers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `employer_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2023-11-30 04:45:29', '2023-11-30 04:45:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_posting`
--

CREATE TABLE `job_posting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employer_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `skills` text NOT NULL,
  `required` text DEFAULT NULL,
  `salary` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `formality` varchar(255) DEFAULT NULL,
  `Contract_type` varchar(255) DEFAULT NULL,
  `technology_used` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_posting`
--

INSERT INTO `job_posting` (`id`, `employer_id`, `title`, `experience`, `type`, `skills`, `required`, `salary`, `status`, `formality`, `Contract_type`, `technology_used`, `created_at`, `updated_at`) VALUES
(1, 1, 'Software Developer (PHP, Lavarel)', '1 năm', 'Junior, Middle, Senior', 'Có kinh nghiệm tối thiểu 2 năm lập trình ngôn ngữ PHP.\n                Sử dụng thành thạo cơ sở dữ liệu MySQL, PostgrepSQL.', 'Khả năng trình bày, giao tiếp: Rõ ràng, logic và khá lưu loát.', '1000$', '1', 'In Office', 'Fulltime', 'Python', NULL, NULL),
(2, 2, 'Java Developer (Junior - Middle)', '1 năm, 3 năm', 'Junior, Middle', 'Bachelor or Master degree in Computer Science, IT or related field.\n                1 - 3+ years of experience in Java development or related field.', 'Develop and maintain high-quality Java applications using modern technologies and best practices.\n                Integrate applications with third-party services and APIs.\n                Design and implement database schemas and queries.', '1500$', '1', 'In Office', 'Fulltime', 'Python', NULL, NULL),
(3, 3, 'Lập Trình Viên Android', '06 tháng', 'Junior', 'Kiến thức cơ bản và tư duy về Java/Kotlin, lập trình Android, OOP\n                Đã làm việc hoặc có kinh nghiệm với: Multi Module, MVVM, JetPack, Xml layouts, Compose hoặc các kiến trúc, thiết kế mới', 'Chủ động, trách nhiệm cao với công việc, khả năng cống hiến và gắn bó lâu dài với Công ty.\n                Đọc hiểu tài liệu Tiếng Anh', '2000$', '1', 'In Office', 'Fulltime', 'Python', NULL, NULL),
(5, 1, 'Python Developer', '1 năm, 3 năm', 'Middle, Senior', '1-3 years of experience in programming Python.\n                Experienced in programming with RDBMS such as MySQL / PostgreSQL databases.', 'Implement back-end features & business logic, design database & write efficient queries.\n                Build and maintain backend systems for cloud platform projects with Python.', '3000$', '1', 'In Office', 'Fulltime', 'Python', NULL, NULL),
(6, 2, 'Senior Frontend Developer (ReactJS/NextJS)', '3 năm', ' Middle, Senior', 'Strong knowledge in Reactjs/Nextjs/Threejs (module, page, client/server side render)\n                Expertise in compiler: Webpack, browserify, npm, yarn', 'Bachelor’s degree in computer science, Software development, Information technology, or experiences in other related fields, etc.\n                From 3+ years of frontend software development experience in software/digital product company', '1000$', '1', 'In Office', 'Fulltime', 'Python\n                Data Engineer\n                Spark\n                Kafka', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_tracking`
--

CREATE TABLE `job_tracking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_08_141238_create_customer_table', 1),
(6, '2023_11_08_142404_create_posts_table', 1),
(7, '2023_11_08_142425_create_comment_table', 1),
(8, '2023_11_08_142436_create_cv_table', 1),
(9, '2023_11_08_142516_create_employer_table', 1),
(10, '2023_11_08_142559_create_job_posting_table', 1),
(11, '2023_11_08_142618_create_wishlist_table', 1),
(12, '2023_11_08_142700_create_recruitment_table', 1),
(13, '2023_11_08_142715_create_report_table', 1),
(14, '2023_11_16_062915_create_cv_management_table', 1),
(15, '2023_11_22_210115_create_job_tracking_table', 1),
(16, '2023_11_29_141331_create_followers_table', 1),
(17, '2023_11_30_013754_create_report', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Views` int(11) DEFAULT NULL,
  `Report_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `customer_id`, `comment_id`, `title`, `content`, `Image`, `Views`, `Report_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '15+ IT Blogger Việt bạn không nên bỏ qua năm 2023', '30% Developer đọc blog để tìm câu trả lời khi ăn “bí” – Đó là kết quả mà ITviec đã khảo sát được.\n            Do đó, ITviec đã tổng hợp và cập nhật 15+ IT blogger Việt Nam “chất” nhất để giúp bạn: \n            Tìm hiểu các thông tin công nghệ mới nhất\n            Dễ dàng tiếp cận kiến thức bằng tiếng Việt\n            Thảo luận các vấn đề phát sinh trước và sau lập trình', 'it-blogger-viet-thumnail.jpg', NULL, NULL, 1, NULL, NULL),
(2, 2, 2, 'Định hướng nghề nghiệp cho Developer năm 2023', 'Định hướng nghề nghiệp là hướng đi mà một cá nhân chọn, về mặt nghề nghiệp, trong suốt cuộc đời của họ. Nếu một người luôn chọn hoặc theo đuổi một loại công việc nhất định, hoặc một công việc trong một lĩnh vực cụ thể, thì đây có thể được xem là định hướng nghề nghiệp của họ.\n                Định hướng nghề nghiệp có thể xuất phát từ sở thích hoặc khả năng nổi trội. Đối với những người đã đi làm, định hướng nghề nghiệp là vạch ra các bước đi đúng đắn để có thể phát triển sự nghiệp theo hướng đó trong tương lai xa. Bạn cần phải biết đích đến của mình ở đâu? Những chặng đường nào mình cần phải đi qua để có thể tới được đích? ', 'dinh-huong-nghe-nghiep.png', NULL, NULL, 1, NULL, NULL),
(3, 3, 3, '2022 Review – Thấy gì từ 18 bài viết nổi bật nhất trên ITviec Blog?', 'Người dùng muốn tìm hiểu gì về sự nghiệp IT, kiến thức IT nào được tìm đọc nhiều, hay kĩ năng ứng tuyển nào khiến các chuyên gia IT quan tâm? Cập nhật các chủ đề IT nổi bật nhất 2022 trên ITviec Blog để không bỏ lỡ kiến thức quan trọng và mở rộng ý tưởng để xây dựng kế hoạch cho năm mới.\n                Cảm ơn các độc giả đã đồng hành cùng ITviec Blog trong năm 2022! Một cột mốc mới lại hoàn thành trên hành trình ITviec Blog thực hiện sứ mệnh là cầu nối kiến thức, kinh nghiệm chuyên môn và ý tưởng phát triển sự nghiệp IT đến với những chuyên gia IT Việt Nam. ', 'Thumbnail_11.jpg', NULL, NULL, 1, NULL, NULL),
(4, 4, 4, 'Freelancer là gì? Tìm việc làm freelancer ở đâu thu nhập tốt?', '\n                Freelancer là gì?\n                Freelancer là gì? Freelancer, hay gọi là người làm việc tự do, là một cá nhân tự tạo ra thu nhập trên cơ sở từng công việc hoặc từng dự án ngắn hạn với tư cách là một nhà thầu độc lập.\n                Một freelancer không phải là nhân viên của một công ty và do đó có thể tự do hoàn thành các công việc khác nhau từ nhiều cá nhân hoặc công ty khác nhau đồng thời, trừ khi cam kết làm việc độc quyền theo hợp đồng cho đến khi hoàn thành một dự án cụ thể.', 'h-2.jpg', NULL, NULL, 1, NULL, NULL),
(5, 5, 5, 'API là gì? 4 đặc điểm nổi bật của API', 'Sử dụng API giúp developer đẩy nhanh quá trình phát triển phần mềm, tạo ra sự nhanh chóng, thuận tiện để hướng đến mục tiêu cuối là nâng cao hiệu suất công việc.\n                Đọc bài viết của ITviec để tìm hiểu xem:     \n                API là gì? Web API là gì? 4 đặc điểm nổi bật của API là gì?\n                Ưu, nhược điểm của API và các ứng dụng của API\n                Làm thế nào để đảm bảo tính bảo mật cho API\n                Những API miễn phí cho developer thực hành', 'api-la-gi-thumnail.png', NULL, NULL, 1, NULL, NULL),
(6, 6, 6, 'OOP là gì? 4 đặc tính cơ bản của OOP', 'Đối tượng trong OOP bao gồm 2 thành phần chính:\n                Thuộc tính (Attribute): là những thông tin, đặc điểm của đối tượng\n                Phương thức (Method): là những hành vi mà đối tượng có thể thực hiện\n                Để dễ hình dung, ta có một ví dụ thực tế về đối tượng là smartphone. Đối tượng này sẽ có: \n                Thuộc tính: màu sắc, bộ nhớ, hệ điều hành…\n                Phương thức: gọi điện, chụp ảnh, nhắn tin, ghi âm…', 'oop-la-gi-fi.jpg', NULL, NULL, 1, NULL, NULL),
(7, 7, 7, 'Ngoài ra, có gì mới trên ITviec Blog trong năm 2022?', 'Báo cáo lương IT 2022- 2023 cung cấp thông tin chi tiết về Mức lương ngành công nghệ thông tin & Mong đợi của chuyên gia IT với công việc, lãnh đạo và công ty, được tổng hợp từ khảo sát với 1,257 chuyên gia IT đang làm việc tại Việt Nam với đa dạng vị trí, ngôn ngữ lập trình và số năm kinh nghiệm.', 'Thumbnail_1.jpg', NULL, NULL, 1, NULL, NULL),
(8, 8, 8, '10 Java Framework cho Java Developer chất', 'JavaServer Faces được Oracle hỗ trợ và do đó, nó đi kèm với các tài liệu rất chuyên sâu. Bạn có thể sử dụng Java Framework này cho bất kì sản phẩm nào viết bằng ngôn ngữ Java.\n                Thật không may, đây không phải là Java Framework dễ sử dụng nhất, và cũng không phải là nhanh nhất. Tuy nhiên, lợi ích lớn của JavaServer Faces là kho tài liệu tuyệt vời mà Oracle đã cung cấp.               \n                Điều này đóng góp một phần quan trọng trong Java EE – Phiên bản doanh nghiệp của Java – và nếu bạn sử dụng IDE thì sẽ rất tiện lợi vì nó được tích hợp vào các môi trường đó.', '10-best-frameworks-java-324x235.png', NULL, NULL, 1, NULL, NULL),
(9, 9, 9, 'Ruby on Rails là gì? 17 tài liệu học Ruby on Rails mới nhất', 'Trước khi tìm hiểu về Ruby on Rails, chúng ta sẽ nói về ngôn ngữ Ruby. Ruby là ngôn ngữ lập trình hướng đối tượng được sáng tạo năm 1993 bởi Yukihiro Matz Matsumoto. Với niềm tin rằng mục đích của cuộc sống là hạnh phúc, Ruby ra đời nhằm giúp công việc lập trình trở nên dễ dàng và vui hơn.\n                Tuy nhiên, ngôn ngữ Ruby không được thiết kế để sử dụng trên web. Hay nói cách khác, để làm các trang web/ứng dụng web với Ruby, bạn cần đến các framework hỗ trợ khác.', 'ruby-on-rails-la-gi-thumnail.jpg', NULL, NULL, 1, NULL, NULL),
(10, 10, 10, 'IDE là gì? Những kiến thức bạn cần nắm rõ về Môi trường phát triển tích hợp', 'IDE là gì? IDE, hay còn gọi là Môi trường phát triển tích hợp (Integrated Development Environment) là một ứng dụng phần mềm cung cấp một bộ công cụ toàn diện để phát triển phần mềm. IDE được thiết kế để làm cho quá trình phát triển phần mềm hiệu quả hơn, bằng cách cung cấp một giao diện duy nhất để quản lý tất cả các khía cạnh (aspects).\n                IDE cung cấp nhiều công cụ và tính năng giúp các lập trình viên có thể viết, test và debug dễ dàng hơn. IDE cũng cải thiện chất lượng code với các công cụ highlight cú pháp, hoàn thành code (code completion) và tái cấu trúc (refactoring). Ngoài ra, IDE cũng thường bao gồm hỗ trợ tích hợp cho các hệ thống kiểm soát nguồn, giúp các lập trình viên dễ dàng cộng tác và quản lý các thay đổi trong dự án.', 'Blog-Thumbnail-template-01.png', NULL, NULL, 1, NULL, NULL),
(11, 11, 11, 'IDE là gì? Phân loại IDE', 'IDE là gì? IDE, hay còn gọi là Môi trường phát triển tích hợp (Integrated Development Environment) là một ứng dụng phần mềm cung cấp một bộ công cụ toàn diện để phát triển phần mềm. IDE được thiết kế để làm cho quá trình phát triển phần mềm hiệu quả hơn, bằng cách cung cấp một giao diện duy nhất để quản lý tất cả các khía cạnh (aspects).\n                IDE cung cấp nhiều công cụ và tính năng giúp các lập trình viên có thể viết, test và debug dễ dàng hơn. IDE cũng cải thiện chất lượng code với các công cụ highlight cú pháp, hoàn thành code (code completion) và tái cấu trúc (refactoring). Ngoài ra, IDE cũng thường bao gồm hỗ trợ tích hợp cho các hệ thống kiểm soát nguồn, giúp các lập trình viên dễ dàng cộng tác và quản lý các thay đổi trong dự án.', 'blog1-324x235.jpg', NULL, NULL, 1, NULL, NULL),
(12, 12, 12, 'Ubuntu là gì: Định nghĩa, Ưu điểm và Hướng dẫn cài đặt', 'Ubuntu là một hệ điều hành mã nguồn mở và miễn phí phổ biến dựa trên Linux mà bạn có thể sử dụng trên máy tính hoặc máy chủ ảo riêng. Hay để giải thích ngắn gọn Ubuntu là gì, Ubuntu thật ra là một Linux distro.\n                Ubuntu được giới thiệu vào năm 2004 bởi công ty Canonical ở Anh. Trong thời gian đó, hệ điều hành này được “quảng cáo” như một giải pháp thay thế thân thiện với người dùng hơn, so với Debian – một distro phổ biến hồi đó.                \n                Ubuntu được phát hành chính thức với ba phiên bản: Desktop, Server, và Core dành cho các thiết bị IoT và robot. Ngoài ra, có rất nhiều phiên bản Linux distro dựa trên Ubuntu mà bạn có thể chọn sử dụng, ITviec sẽ tổng hợp ở mục Top 5 Linux distro dựa trên Ubuntu phổ biến nhất trong bài viết này.', 'ubuntu-la-gi.01-800x450.jpg', NULL, NULL, 1, NULL, NULL),
(13, 13, 13, 'MySQL là gì? Tổng hợp kiến thức MySQL đầy đủ và dễ hiểu', 'Được phát triển vào năm 1994, MySQL là một hệ thống quản lý cơ sở dữ liệu quan hệ (RDBMS) mã nguồn mở được hỗ trợ bởi Oracle dựa trên Ngôn ngữ truy vấn có cấu trúc (SQL), theo máy khách – máy chủ (mô hình client-server).\n                MySQL được xây dựng để quản lý các cơ sở dữ liệu lớn một cách nhanh chóng và đã được “chứng minh” sử dụng hiệu quả trong các môi trường sản xuất đòi hỏi khắt khe trong suốt nhiều năm. Hiện tại, MySQL tương thích với đa dạng nền tảng phổ biến như Linux, macOS, Microsoft Windows và Ubuntu.', 'mysql-la-gi-768x576.jpg', NULL, NULL, 1, NULL, NULL),
(14, 14, 14, 'Chuẩn bị gì trước buổi phỏng vấn vị trí lập trình viên Frontend', 'Trước hết để có được sự tự tin khi tham gia phỏng vấn, bạn cần chuẩn bị đầy đủ từ trang phục, tác phong, chú ý giờ giấc,… để có thể tạo ấn tượng tốt với nhà tuyển dụng. Nắm chắc được quy trình phỏng vấn thông qua nội dung mà phía HR đã thông báo. Nhiều công ty, doanh nghiệp có những quy trình phỏng vấn nhiều vòng, có thể có thêm những bài test chuyên môn,… vì thế bạn cần biết sẽ phải trải qua những vòng nào một cách cụ thể để chuẩn bị. Hãy đọc kỹ mô tả công việc vị trí ứng tuyển, đây là việc vô cùng quan trọng giúp bạn hiểu rõ yêu cầu và trách nhiệm của công việc đó; từ đó bạn sẽ có thể lên kế hoạch cho buổi phỏng vấn của mình.', 'kinh-nghiem-phong-van-frontend-324x235.png', NULL, NULL, 1, NULL, NULL),
(15, 15, 15, '5 kiến thức quan trọng để trở thành Full-stack developer', ' Một full stack developer dễ dàng tạo ra một thiết kế nguyên mẫu cho một sản phẩm dựa trên những hiểu biết rộng lớn. Do họ có kiến thức tổng quan của cả hệ thống, nên họ có tư duy và góc nhìn về hệ thống rộng hơn so với những người chỉ biết làm front-end hoặc chỉ back-end.\n                Ngoài ra, do full stack developer có kiến thức tổng quan về cả hệ thống nên họ có thể dễ dàng ghép nối các bộ phận khác nhau trong dự án. Họ sẽ trở thành cầu nối giữa bộ phận làm back-end, với bộ phận làm front-end và cả bộ phận phần cứng server…               \n                Do đó, các full stack developer sau này có xu hướng trở thành giám đốc kỹ thuật hoặc CEO.', 'kien-thuc-full-stack-developer-can-hoc-324x235.png', NULL, NULL, 1, NULL, NULL),
(16, 16, 16, 'Hướng dẫn cách Debug TypeScript trên Visual Studio Code', 'Debug là một kỹ năng mà bất kỳ developer nào cũng nên biết, thậm chí là phải giỏi. Dù bạn phát triển ứng dụng nhỏ xíu tới ứng dụng to đùng, bạn khó tránh gặp lỗi trong quá trình viết code. Đó là lúc kỹ năng debug vào việc.\n                Nếu bạn sử dụng Android Studio, Xcode hay Visual Studio… để phát triển ứng dụng thì việc đặt breakpoint khi debug rất đơn giản.                \n                Nhưng với các ứng dụng kiểu như Node.JS, ReactJS, Vue… sử dụng Visual Code để viết, đặc biệt là ứng dụng đó sử dụng TypeScript làm ngôn ngữ lập trình, bạn sẽ gặp đôi chút khó khăn.                \n                Bài viết này, mình sẽ chỉ cho bạn cách thiết lập môi trường phát triển với VS Code để debug dễ dàng.', 'debug-typescript-tren-visual-studio-code-324x235.png', NULL, NULL, 1, NULL, NULL),
(17, 17, 17, 'Nên học Front-end hay Back-end trước?', 'Đối với một Website, Front-end là phần giao diện mà người dùng nhìn thấy và tương tác với các phần tử trên trang mỗi khi truy cập vào một Website. Để có được những dữ liệu hiển thị lên Website, đồng thời ghi nhận sự tác động của người dùng lên dữ liệu và lưu trữ lại, chúng ta sẽ cần tới Back-end; nơi sẽ xử lý các yêu cầu gửi nhận, cập nhật, thêm mới, xóa các bản ghi dữ liệu. Back-end cũng là phần mà người dùng không nhìn thấy được như Front-end, hay như chúng ta vẫn hay ví von đấy là phần chìm của tảng băng trôi. Có sự khác biệt rõ ràng giữa ứng dụng tạo ra ở 2 phía:\n                Ứng dụng Front-end chạy trên trình duyệt (browsers), thực hiện việc hiển thị nội dung dữ liệu và xử lý các tương tác của người dùng.\n                Ứng dụng Back-end là ứng dụng chạy ở phía máy chủ (server-side) phục vụ cho mọi yêu cầu được gửi đến từ phía máy khách (client-side). \n                Do có sự khác nhau đó và việc tạo ra ứng dụng dành cho Front-end và Back-end là khác nhau, đòi hỏi những ngôn ngữ lập trình và kỹ năng khác nhau.', 'fron-end-hay-back-end-1.jpg', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruitment`
--

CREATE TABLE `recruitment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `job_posting_id` int(11) NOT NULL,
  `CV_id` int(11) DEFAULT NULL,
  `Status` int(11) NOT NULL,
  `Introduce` varchar(255) DEFAULT NULL,
  `File` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `recruitment`
--

INSERT INTO `recruitment` (`id`, `customer_id`, `job_posting_id`, `CV_id`, `Status`, `Introduce`, `File`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, NULL, NULL, '2023-11-30 04:34:18', '2023-11-30 04:34:18'),
(2, 4, 1, NULL, 2, 'đasadad', NULL, '2023-11-30 06:00:51', '2023-11-30 06:01:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `report`
--

CREATE TABLE `report` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `report`
--

INSERT INTO `report` (`id`, `user_id`, `job_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, '2023-11-30 05:59:46', '2023-11-30 05:59:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date`, `phone`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$VeZ5Nkn4kUsMBaaPPx8tJOjGaGNwZB.As9lmmalh9UxOiImNdUKRS', NULL, NULL, 1, 1, '2023-11-30 04:34:18', '2023-11-30 04:34:18'),
(2, 'customer1', 'customer@gmail.com', '$2y$10$zjEDwGQ6nJBY81ulDCNxBeiygVJNZyDP928VXidw.iD3bfGyiqIZ.', NULL, NULL, 2, 1, '2023-11-30 04:34:18', '2023-11-30 04:34:18'),
(3, 'employer1', 'employer@gmail.com', '$2y$10$ZzxWInm2D./KMJ3A/DxlA.9mTL6Y3xowKtUnWoX0WJh/Gd.uXf8KG', NULL, NULL, 3, 1, '2023-11-30 04:34:18', '2023-11-30 04:34:18'),
(4, 'Thái Minh Hiếu', 'thaihieu243@gmail.com', NULL, NULL, NULL, 1, 1, '2023-11-30 04:35:12', '2023-11-30 04:35:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Job_posting_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `comment_post_id_unique` (`post_id`),
  ADD UNIQUE KEY `comment_customer_id_unique` (`customer_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_email_unique` (`email`);

--
-- Chỉ mục cho bảng `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cv_management`
--
ALTER TABLE `cv_management`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `job_posting`
--
ALTER TABLE `job_posting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `job_tracking`
--
ALTER TABLE `job_tracking`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `cv`
--
ALTER TABLE `cv`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cv_management`
--
ALTER TABLE `cv_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `employer`
--
ALTER TABLE `employer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `followers`
--
ALTER TABLE `followers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `job_posting`
--
ALTER TABLE `job_posting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `job_tracking`
--
ALTER TABLE `job_tracking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `report`
--
ALTER TABLE `report`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
