-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2015 at 12:04 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myblog`
--
CREATE DATABASE IF NOT EXISTS `myblog` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `myblog`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `status`) VALUES
(2, 'Công Nghệ', 1),
(3, 'Bóng Đá', 1),
(4, 'Tản Mạn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`),
  KEY `FK_post_idx` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '1',
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `images` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `FK_user_idx` (`user_id`),
  KEY `FK_category_idx` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `content`, `datetime`, `status`, `user_id`, `category_id`, `images`) VALUES
(26, 'HLV Miura loại 5 tuyển thủ trước trận đấu Thái Lan', 'Các cầu thủ Phi Sơn, Xuân Thành, Văn Thắng, Ngọc Thắng và thủ môn Hoài Anh là những người bị gạch tên trước khi tuyển Việt Nam chốt danh sách đấu Thái Lan.', '<p>C&aacute;c cầu thủ Phi Sơn, Xu&acirc;n Th&agrave;nh, Văn Thắng, Ngọc Thắng v&agrave; thủ m&ocirc;n Ho&agrave;i Anh l&agrave; những người bị gạch t&ecirc;n trước khi tuyển Việt Nam chốt danh s&aacute;ch đấu Th&aacute;i Lan.</p>\r\n\r\n<p>S&aacute;ng 12/10, sau buổi họp b&aacute;o trước trận, HLV Miura đ&atilde; c&ocirc;ng bố danh s&aacute;ch 23 cầu thủ đăng k&yacute; ch&iacute;nh thức thi đấu trận ĐT Việt Nam - Th&aacute;i Lan. Cuộc so t&agrave;i sẽ diễn ra l&uacute;c 19h ng&agrave;y 13/10, tr&ecirc;n s&acirc;n vận động Mỹ Đ&igrave;nh.&nbsp;</p>\r\n\r\n<p>Theo đ&oacute;, c&aacute;c cầu thủ bị loại gồm những c&aacute; nh&acirc;n bị chấn thương (Phi Sơn, Văn Thắng, Ngọc Thắng) v&agrave; hậu vệ Xu&acirc;n Th&agrave;nh - người phải nghỉ thi đấu do nhận đủ thẻ phạt. B&ecirc;n cạnh đ&oacute;, thủ m&ocirc;n Ho&agrave;i Anh cũng kh&ocirc;ng được điền t&ecirc;n trong danh s&aacute;ch thi đấu. Anh l&agrave; người được gọi bổ sung l&ecirc;n tuyển nhằm học hỏi kinh nghiệm chuẩn bị cho V&ograve;ng loại U23 ch&acirc;u &Aacute; ở Qatar, chứ kh&ocirc;ng phải cạnh tranh suất bắt ch&iacute;nh.&nbsp;</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="HLV Miura loại 5 tuyển thủ trước trận đấu Thái Lan" src="http://img.v3.news.zdn.vn/w660/Uploaded/zatmrs/2015_05_07/Cong_Phuong_Phi_Son_zing.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Phi Sơn - cầu thủ được tung v&agrave;o s&acirc;n ở trận đấu với Iraq bị gạch t&ecirc;n khỏi danh s&aacute;ch đấu Th&aacute;i Lan.&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>So với danh s&aacute;ch 5 cầu thủ bị loại trước trận Iraq, HLV Miura đ&oacute;n sự trở lại của tiền vệ Th&agrave;nh Lương v&agrave; trung vệ B&ugrave;i Tiến Dũng (Viettel).</p>\r\n\r\n			<p>&quot;Th&aacute;i Lan v&agrave; Iraq đều l&agrave; đối thủ mạnh, nhưng họ c&oacute; những điểm mạnh rất kh&aacute;c nhau. Tuy nhi&ecirc;n, t&ocirc;i đ&atilde; d&agrave;nh hơn 1 năm qua để nghi&ecirc;n cứu cũng như t&igrave;m ra lối chơi ph&ugrave; hợp gi&uacute;p tuyển Việt Nam c&oacute; thế trận tốt trước Th&aacute;i Lan. Cụ thể như thế n&agrave;o th&igrave; c&aacute;c bạn h&atilde;y chờ trận đấu ng&agrave;y mai&quot;, HLV Miura chia sẻ.&nbsp;</p>\r\n\r\n			<p>17h30 chiều nay (12/10), thầy tr&ograve; HLV Miura sẽ c&oacute; buổi tập l&agrave;m quen s&acirc;n Mỹ Đ&igrave;nh.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2015-10-12 21:25:59', 1, 1, 3, NULL),
(27, 'Xavi tiếc vì không có cơ hội đầu quân cho MU', 'Trong cuộc phỏng vấn trên kênh truyền hình Eurosport, tiền vệ lão tướng người Tây Ban Nha thừa nhận rất tiếc vì không có cơ hội thi đấu tại Ngoại hạng Anh. ', '<p>Trong cuộc phỏng vấn tr&ecirc;n k&ecirc;nh truyền h&igrave;nh Eurosport, tiền vệ l&atilde;o tướng người T&acirc;y Ban Nha thừa nhận rất tiếc v&igrave; kh&ocirc;ng c&oacute; cơ hội thi đấu tại Ngoại hạng Anh.</p>\r\n\r\n<p>&ldquo;Premier League l&agrave; giải đấu hấp dẫn mọi cầu thủ. Ở đ&oacute; c&oacute; nhiều điều rất tuyệt vời như s&acirc;n vận động, mặt cỏ, đường pitch, người h&acirc;m mộ v&agrave; cuộc sống ăn ngủ c&ugrave;ng b&oacute;ng đ&aacute;. Nh&igrave;n chung, mọi điều tuyệt vời đều hội tụ ở đ&oacute;&rdquo;, Xavi ca ngợi giải đấu danh gi&aacute; nhất xứ sở sương m&ugrave;.</p>\r\n\r\n<p>&ldquo;C&oacute; rất nhiều đội b&oacute;ng lớn tại Premier League như Chelsea, Manchester United, Manchester City, Arsenal v&agrave; Liverpool. Nếu được ph&eacute;p chọn một trong số đ&oacute;, t&ocirc;i sẽ chọn c&acirc;u lạc bộ gi&agrave;u truyền thống như Manchester United hoặc Liverpool&rdquo;, cựu danh thủ Barca cho biết th&ecirc;m.</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Xavi tiếc vì không có cơ hội đầu quân cho MU" src="http://img.v3.news.zdn.vn/w660/Uploaded/SotnTJ/2015_10_12/Xavi.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xavi hiện l&agrave; th&agrave;nh vi&ecirc;n của CLB Al Sadd, Qatar. <em>Ảnh: Footyfresh.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Theo cựu tuyển thủ T&acirc;y Ban Nha, c&oacute; một số đội b&oacute;ng tạo dựng được t&ecirc;n tuổi tại Premier League những năm gần đ&acirc;y, điển h&igrave;nh l&agrave; Man City. Tuy nhi&ecirc;n, Manchester United vẫn l&agrave; đội b&oacute;ng y&ecirc;u th&iacute;ch nhất của anh.</p>\r\n\r\n<p>Xavi gia nhập La Masia, l&ograve; đ&agrave;o tạo danh tiếng của Barcelona, khi mới 11 tuổi. Anh được đ&ocirc;n l&ecirc;n đội 1 Barca năm 1998 v&agrave; cống hiến cho đội chủ s&acirc;n Nou Camp 17 năm. H&egrave; vừa qua, l&atilde;o tướng 35 tuổi quyết định chia tay Barca để chuyển sang ch&acirc;u &Aacute;, đầu qu&acirc;n cho Al Sadd của Qatar.</p>\r\n\r\n<p>Trong gần hai thập kỷ kho&aacute;c &aacute;o Barca, Xavi ra s&acirc;n 767 trận, ghi 85 b&agrave;n thắng v&agrave; gi&uacute;p g&atilde; khổng lồ xứ Catalunya gi&agrave;nh tổng cộng 23 danh hiệu lớn gồm 8 chức v&ocirc; địch La Liga, 3 C&uacute;p nh&agrave; vua, 6 Si&ecirc;u c&uacute;p T&acirc;y Ban Nha, 4 Champions League, 2 Si&ecirc;u c&uacute;p ch&acirc;u &Acirc;u v&agrave; 2 FIFA Club World Cup.</p>\r\n', '2015-10-12 22:10:20', 1, 1, 3, NULL),
(28, 'Galaxy Note 4 xách tay ở VN về mức 7,5 triệu đồng', 'Từng là model cao cấp nhất của Samsung trong năm 2014, Galaxy Note 4 đã về với mức giá từ 7,5 - 8,5 triệu đồng trên thị trường xách tay, tương đương với nhiều model tầm trung.', '<p>Trong khi c&aacute;c đại l&yacute; đ&atilde; giảm gi&aacute; lần cuối Galaxy Note 4 ch&iacute;nh h&atilde;ng về mức 12 triệu đồng v&agrave; ngưng kinh doanh từ nhiều th&aacute;ng nay, nhưng model n&agrave;y vẫn được b&aacute;n kh&aacute; nhiều tại Việt Nam dưới dạng h&agrave;ng x&aacute;ch tay với nhiều mức gi&aacute;, chất lượng kh&aacute;c nhau.</p>\r\n\r\n<p>Tại c&aacute;c cửa h&agrave;ng nhỏ tại TP HCM, Galaxy Note 4 đang được b&aacute;n với hai phi&ecirc;n bản từ Mỹ (nh&agrave; mạng AT&amp;T) v&agrave; từ Nhật (Docomo, Au). M&aacute;y cũ đ&atilde; qua sử dụng nhưng c&ograve;n mới c&oacute; gi&aacute; từ 7,5 triệu đồng tuỳ t&igrave;nh trạng. Bản mới chưa k&iacute;ch hoạt c&oacute; gi&aacute; 9,5-10 triệu đồng.</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Galaxy Note 4 xách tay đang trên đà giảm giá mạnh. " src="http://img.v3.news.zdn.vn/w660/Uploaded/ynssi/2015_10_12/samsunggalaxynote49024.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Galaxy Note 4 x&aacute;ch tay đang tr&ecirc;n đ&agrave; giảm gi&aacute; mạnh.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Theo anh L&ecirc; Xu&acirc;n T&igrave;nh, chủ một cửa h&agrave;ng di động tr&ecirc;n đường L&ecirc; Hồng Phong, quận 10, TP HCM, d&ugrave; xuống mức gi&aacute; kh&aacute; tốt, nhưng Galaxy Note 4 x&aacute;ch tay vẫn chưa c&oacute; nhiều sức h&uacute;t. &quot;Kh&aacute;ch mua m&aacute;y x&aacute;ch tay thường t&igrave;m đến những m&aacute;y gi&aacute; dưới 7 triệu đồng, hoặc bỏ ra 13 triệu đồng để l&ecirc;n hẳn Galaxy Note 5 H&agrave;n Quốc&quot;, anh T&igrave;nh cho biết.&nbsp;</p>\r\n\r\n<p>V&igrave; l&yacute; do n&agrave;y, chỉ khi Galaxy Note 4 tiếp tục hạ gi&aacute;, model n&agrave;y mới thực sự g&acirc;y sốt tr&ecirc;n thị trường m&aacute;y x&aacute;ch tay. Galaxy Note 5 hiện vẫn b&aacute;n chạy hơn nhờ c&oacute; mức gi&aacute; tốt so với ch&iacute;nh h&atilde;ng.&nbsp;</p>\r\n\r\n<p>Chỉ c&aacute;ch đ&acirc;y v&agrave;i th&aacute;ng, trước khi Galaxy Note 5 l&ecirc;n kệ, Galaxy Note 4 vẫn l&agrave; mẫu smartphone m&agrave;n h&igrave;nh lớn cao cấp nhất của Samsung. Với m&agrave;n h&igrave;nh 5,7 inch Super AMOLED 1.440 x 2.560 pixel, chip Exynos 5433 8 nh&acirc;n, RAM 3 GB, camera ch&iacute;nh 16 MP, c&oacute; hỗ trợ sạc nhanh,... Galaxy Note 4 vẫn thuộc nh&oacute;m smartphone c&oacute; hiệu năng cao nhất hiện nay, d&ugrave; mức gi&aacute; x&aacute;ch tay chỉ ngang c&aacute;c mẫu m&aacute;y tầm trung.&nbsp;</p>\r\n\r\n<p>Kh&ocirc;ng ri&ecirc;ng Galaxy Note 4, Galaxy Note Edge v&agrave; LG G4 cũng hạ gi&aacute; kh&ocirc;ng phanh xuống mức gi&aacute; dưới 10 triệu đồng. Những mẫu di động cao cấp của Samsung lẫn LG được c&aacute;c chủ cửa h&agrave;ng kỳ vọng sẽ g&acirc;y sốt trong thời điểm cuối năm, khi mức gi&aacute; chỉ tr&ecirc;n dưới 7 triệu đồng, điều m&agrave; mẫu Galaxy Note 3 Docomo v&agrave; Galaxy J từng l&agrave;m được trong năm ngo&aacute;i. &nbsp;</p>\r\n\r\n<p>Việc cảm điện thoại cao cấp hạ gi&aacute; mạnh trở n&ecirc;n phổ biến tại Việt Nam trong v&agrave;i năm gần đ&acirc;y. Đặc biệt, tr&ecirc;n nh&oacute;m x&aacute;ch tay, c&aacute;c model từ H&agrave;n Quốc, Nhật c&oacute; sức cạnh tranh lớn bởi gi&aacute; tốt. Theo c&aacute;c nh&agrave; b&aacute;n lẻ, h&agrave;ng x&aacute;ch tay gi&aacute; tốt đang cạnh tranh mạnh với m&aacute;y ch&iacute;nh h&atilde;ng. Đ&oacute; cũng l&agrave; l&yacute; do c&aacute;c model cả hai thị trường thi nhau hạ.</p>\r\n', '2015-10-12 22:46:26', 1, 1, 2, NULL),
(29, 'Website của bạn bị hack, lỗi do WordPress hay do host ?', 'Trong một câu trả lời cho câu hỏi liệu WordPress có bảo mật, Jam đã viết bài bảo mật là do người lập trình, không phải nguyên nhân do WordPress, nhưng còn một vấn đề khác nữa, do hosting !', '<p>Như c&aacute;c bạn quản trị web bấy l&acirc;u nay đều biết, đấy l&agrave; t&igrave;nh trạng hack một website th&ocirc;ng qua một host tr&ecirc;n c&ugrave;ng địa chỉ IP của website người bị hại, c&aacute;ch n&agrave;y thường sử dụng Symlink để đứng từ host b&ecirc;n n&agrave;y c&acirc;u sang b&ecirc;n kia, bằng c&aacute;ch khai th&aacute;c c&aacute;c lỗ hổng của PHP hoặc của Apache, c&aacute;ch n&agrave;y cũng kh&aacute; phổ th&ocirc;ng v&agrave; kh&ocirc;ng phải kh&oacute;, bởi trước kia Jam đ&atilde; từng th&iacute; nghiệm sử dụng h&agrave;m symlink một lần rồi, cực k&igrave; linh nghiệm !</p>\r\n\r\n<p>Một số website trong hệ thống của &ocirc;ng bạn t&ocirc;i đ&atilde; bị hack, bị thường xuy&ecirc;n tới nỗi phải đ&oacute;ng host về Chmod 111 cho n&oacute; kh&ocirc;ng chạy được nữa, m&agrave; vẫn d&iacute;nh !</p>\r\n\r\n<p>Như vậy, lỗi c&oacute; thể do c&aacute;c bạn sử dụng WordPress chưa đ&uacute;ng, v&iacute; dụ như đặt account l&agrave; admin, th&igrave; khỏi b&agrave;n, n&oacute; chỉ việc đi t&igrave;m mật khẩu, trong khi mật khẩu đặt to&agrave;n số, th&igrave; khỏi b&agrave;n, v&igrave; số n&oacute; sẽ qu&eacute;t đầu ti&ecirc;n, gọi l&agrave; Brute Force attack.</p>\r\n\r\n<p>Gần đ&acirc;y lại chứng kiến cảnh <a href="http://www.jamviet.com/2015/06/backdoor-filesman-tan-cong-website-ong-ban-toi.html">backdoor Filesman tấn c&ocirc;ng h&agrave;ng loạt</a> v&agrave;o c&aacute;c website sử dụng m&atilde; nguồn WordPress, thực tế kh&ocirc;ng phải do m&atilde; nguồn WordPress, c&oacute; thể lỗ hổng từ plugin như vụ đ&igrave;nh đ&aacute;m vừa rồi nhất l&agrave; plugin&nbsp;Revolution Slider.</p>\r\n\r\n<p>Ngo&agrave;i ra c&ograve;n c&oacute; c&aacute;c malware kh&aacute;c nằm trong host rồi <a href="http://www.jamviet.com/2015/08/virus-tu-dong-gui-email-tran-lan-tren-cac-host-viet-nam.html">gửi email h&agrave;ng loạt</a>, đấy l&agrave; vấn đề bởi <a href="http://www.jamviet.com/tag/email">email</a> từ trang của bạn sẽ bị ph&aacute;t hiện spam v&agrave; cho v&agrave;o danh <a href="http://www.jamviet.com/tag/sach">s&aacute;ch</a> đen, kh&ocirc;ng c&oacute; lợi ch&uacute;t n&agrave;o !</p>\r\n\r\n<h3>C&aacute;ch gỡ</h3>\r\n\r\n<p>Một khi ph&aacute;t hiện ra c&oacute; vấn đề, c&aacute;c bạn l&agrave;m như sau:</p>\r\n\r\n<ol>\r\n	<li>Download <a href="http://www.jamviet.com/tag/giao-dien">giao diện</a> về</li>\r\n	<li>Download danh s&aacute;ch c&agrave;i đặt plugin về, ta kh&ocirc;ng cần lưu plugin v&igrave; c&oacute; thể download mới tr&ecirc;n WOrdpress.org cho n&oacute; an to&agrave;n, ph&ograve;ng malware nằm trong đ&oacute;</li>\r\n	<li>Download thư mục UPLOADS về</li>\r\n	<li>Download SQL về</li>\r\n	<li>Scan to&agrave;n bộ ch&uacute;ng bằng <a href="http://www.jamviet.com/cong-nghe/phan-mem-cong-nghe">phần mềm</a> diệt <a href="http://www.jamviet.com/tag/virus">virus</a> v&agrave; nhờ người thạo code xem lại xem n&oacute; c&oacute; ẩn ở đ&acirc;u đ&oacute; kh&ocirc;ng</li>\r\n	<li>Reset hosting, nhờ nh&agrave; host reset to&agrave;n bộ t&agrave;i khoản hosting, bạn sẽ c&oacute; host mới c&oacute;ng kh&ocirc;ng lo mấy con malware hay backdoor nằm trong đ&oacute;</li>\r\n	<li>Upload mới ho&agrave;n to&agrave;n, sau đ&oacute; quăng thư mục Uploads l&ecirc;n, k&egrave;m theo Giao diện, c&agrave;i tiếp SQL l&ecirc;n, sau đ&oacute; kh&ocirc;i phục c&aacute;c plugin theo danh s&aacute;ch bằng c&aacute;ch download mới trong Admin &gt; PLugin &gt; C&agrave;i đặt mới</li>\r\n</ol>\r\n\r\n<p>Như vậy ta tạm thời an t&acirc;m l&agrave; malware đ&atilde; sạch b&oacute;ng !</p>\r\n\r\n<p>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng !</p>\r\n', '2015-10-14 13:11:01', 1, 1, 2, NULL),
(30, 'Hé lộ cầu thủ đầu tiên chia tay MU trong tháng 1', 'Tuyển Bỉ lên vị trí số 1 thế giới; HLV tuyển Hà Lan quyết không từ chức; Tuyển Anh có thể nhận án phạt vì cổ động viên nhà là những tin thể thao đáng chú ý trong ngày 14/10', '<p><strong>H&eacute; lộ cầu thủ đầu ti&ecirc;n chia tay MU trong th&aacute;ng 1</strong></p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Điểm tin: Hé lộ cầu thủ đầu tiên chia tay MU trong tháng 1" src="http://img.v3.news.zdn.vn/w660/Uploaded/xbhunua/2015_10_14/1_2.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>James Wilson c&oacute; thể sẽ l&agrave; cầu thủ đầu ti&ecirc;n rời Old Trafford ở kỳ chuyển nhượng m&ugrave;a đ&ocirc;ng. <em>Ảnh: AP.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Tiền đạo trẻ James Wilson đ&atilde; đạt được thỏa thuận gia nhập Celtic trong kỳ chuyển nhượng m&ugrave;a đ&ocirc;ng tới theo diện cho mượn từ đội chủ s&acirc;n Old Trafford. Quyết định ra đi được Wilson đưa ra nhanh ch&oacute;ng do anh kh&ocirc;ng muốn tiếp tục phải l&agrave;m bạn với băng ghế dự bị. Nếu gia nhập đội đương kim v&ocirc; địch Scotland, ch&acirc;n s&uacute;t 19 tuổi sẽ c&oacute; cơ hội t&aacute;i ngộ đồng đội Tyler Blackett, người cũng đang được Manchester Utd cho đội chủ s&acirc;n Celtic Park mượn đến hết m&ugrave;a. Hợp đồng giữa Wilson v&agrave; &ldquo;Quỷ đỏ&rdquo; được gia hạn tới h&egrave; 2019 c&aacute;ch đ&acirc;y kh&ocirc;ng l&acirc;u nhưng tương lai của anh tại Old Trafford lại đang kh&aacute; mờ mịt.</p>\r\n\r\n<p><strong>Tuyển Anh c&oacute; thể nhận &aacute;n phạt v&igrave; cổ động vi&ecirc;n nh&agrave;</strong></p>\r\n\r\n<p>Li&ecirc;n đo&agrave;n b&oacute;ng đ&aacute; ch&acirc;u &Acirc;u (UEFA) vừa quyết định mở cuộc điều tra về h&agrave;nh vi g&acirc;y rối của c&aacute;c cổ động vi&ecirc;n tuyển Anh ở chiến thắng 3-0 trước Lithuania tại v&ograve;ng loại EURO 2016. &nbsp;Cụ thể, một số fan đến từ xứ sở sương m&ugrave; đ&atilde; tranh gi&agrave;nh ghế ngồi với người h&acirc;m mộ chủ nh&agrave; dẫn đến x&ocirc; x&aacute;t tr&ecirc;n kh&aacute;n đ&agrave;i. Cảnh s&aacute;t chống bạo động sau đ&oacute; đ&atilde; phải d&ugrave;ng biện ph&aacute;p mạnh để trấn &aacute;p c&aacute;c phần tử qu&aacute; kh&iacute;ch. Ng&agrave;y 22/10, Ủy ban kỷ luật v&agrave; đạo đức của UEFA dự kiến đưa ra ph&aacute;n quyết.</p>\r\n\r\n<p><strong>Tuyển Bỉ l&ecirc;n vị tr&iacute; số 1 thế giới</strong></p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Điểm tin: Hé lộ cầu thủ đầu tiên chia tay MU trong tháng 1" src="http://img.v3.news.zdn.vn/w660/Uploaded/xbhunua/2015_10_14/1_3.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cầu thủ Bỉ ăn mừng sau khi gi&agrave;nh v&eacute; dự EURO 2016 với vị tr&iacute; nhất bảng B. <em>Ảnh: EPA.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Chiến thắng 3-1 trước Israel ở loạt trận cuối, v&ograve;ng loại EURO 2016 gi&uacute;p tuyển Bỉ đạt đủ điểm để từ vị tr&iacute; thứ 3 leo l&ecirc;n ng&ocirc;i đầu bảng xếp hạng FIFA, qua mặt những &ocirc;ng lớn như Argentina v&agrave; Đức. Đ&acirc;y l&agrave; lần đầu ti&ecirc;n trong lịch sử, quốc gia nhỏ b&eacute; tại T&acirc;y &Acirc;y vươn l&ecirc;n giữ vị tr&iacute; số 1 thế giới. Kể từ 2009 tới nay, Bỉ đ&atilde; tăng tới 66 bậc tr&ecirc;n bảng xếp hạng FIFA.</p>\r\n\r\n<p><strong>HLV tuyển H&agrave; Lan quyết kh&ocirc;ng từ chức</strong></p>\r\n\r\n<p>Trả lời phỏng vấn sau thất bại 2-3 của tuyển H&agrave; Lan trước S&eacute;c, qua đ&oacute; đ&aacute;nh mất cơ hội cuối c&ugrave;ng dự EURO 2016, huấn luyện vi&ecirc;n Danny Blind vẫn khẳng định, &ocirc;ng sẽ tiếp tục tại vị bất chấp sức &eacute;p rất lớn từ dư luận. &ldquo;Ch&uacute;ng t&ocirc;i cần nhanh ch&oacute;ng đưa ra ph&acirc;n t&iacute;ch về nguy&ecirc;n nh&acirc;n thất bại để sửa sai ở những giải đấu tới. T&ocirc;i thực sự mong muốn tiếp tục c&ocirc;ng việc của m&igrave;nh&rdquo;. Đ&acirc;y l&agrave; lần đầu ti&ecirc;n kể từ năm 1984, &ldquo;Cơn lốc m&agrave;u da cam&rdquo; mới lại vắng mặt ở một v&ograve;ng chung kết EURO.</p>\r\n', '2015-10-14 23:32:49', 1, 1, 3, NULL),
(31, 'Oppo N1 có máy ảnh xoay đầu tiên trên thế giới ra mắt', 'Oppo đã chính thức cho giới thiệu chiếc smartphone N1 chạy hệ điều hành Android với máy ảnh được thiết lập ở một vị trí khá độc đáo: trên đỉnh mặt sau và có thể xoay nhờ bản lề có sẵn.', '<p><br />\r\n<br />\r\n<a href="http://vtcdn.com/sites/default/files/images/2013/9/23/img-1379951911-1.png"><img src="http://vtcdn.com/sites/default/files/imagecache/med/images/2013/9/23/img-1379951911-1.png" /></a><br />\r\n<br />\r\n<br />\r\n<br />\r\nOppo N1 trang bị m&agrave;n h&igrave;nh IPS LCD k&iacute;ch thước 5,9 inch c&oacute; độ ph&acirc;n giải 1080p, VXL 4 nh&acirc;n Snapdragon 600 của Qualcomm, RAM 2 GB, bộ nhớ trong 16 GB hoặc 32 GB, cảm biến &aacute;nh s&aacute;ng, cảm biến gia tốc, con quay hồi chuyển 4D v&agrave; cảm biến khoảng c&aacute;ch.<br />\r\n<br />\r\nMặt sau của N1 trang bị m&agrave;n h&igrave;nh cảm ứng c&oacute; k&iacute;ch thước 12 cm vu&ocirc;ng, cho ph&eacute;p người d&ugrave;ng kiểm so&aacute;t thiết bị m&agrave; kh&ocirc;ng cần chạm v&agrave;o m&agrave;n h&igrave;nh cảm ứng ch&iacute;nh của n&oacute;, tương tự như m&agrave;n h&igrave;nh cảm ứng ph&iacute;a sau của PS Vita.<br />\r\n<br />\r\n<br />\r\n<a href="http://vtcdn.com/sites/default/files/images/2013/9/23/img-1379951911-2.png"><img src="http://vtcdn.com/sites/default/files/imagecache/med/images/2013/9/23/img-1379951911-2.png" /></a><br />\r\n<br />\r\n<br />\r\n<br />\r\nTương tự như phi&ecirc;n bản Find 5, N1 của Oppo cũng được trang bị hệ điều h&agrave;nh Android 4.2 Jelly Bean được cải tiến bởi CyanogenMod.<br />\r\n<br />\r\nOppo N1 c&oacute; k&iacute;ch thước 170,7 x 82,6 x 9 mm, nặng 213 gram v&agrave; pin c&oacute; dung lượng 3610 mAh. M&aacute;y ảnh 13 Mpx ở mặt sau của m&aacute;y cung cấp đ&egrave;n nền flash LED k&eacute;p, đạt khẩu độ f/2.0 c&ugrave;ng một loạt chế độ chụp cảnh kh&aacute;c nhau, nhờ bản lề cho ph&eacute;p m&aacute;y ảnh c&oacute; thể xoay g&oacute;c 206 độ l&ecirc;n/xuống. Đ&acirc;y l&agrave; chiếc điện thoại đầu ti&ecirc;n tr&ecirc;n thế giới sở hữu m&aacute;y ảnh ph&iacute;a sau c&oacute; thể xoay.<br />\r\n<br />\r\n<br />\r\n<a href="http://vtcdn.com/sites/default/files/images/2013/9/23/img-1379951911-3.png"><img src="http://vtcdn.com/sites/default/files/imagecache/med/images/2013/9/23/img-1379951911-3.png" /></a><br />\r\n<br />\r\n<br />\r\n<br />\r\nMột phụ kiện đi k&egrave;m theo m&aacute;y c&oacute; t&ecirc;n O-Click đ&oacute;ng vai tr&ograve; như l&agrave; một điều khiển từ xa cho sản phẩm được kết nối th&ocirc;ng qua Bluetooth. Vai tr&ograve; của O-Click ch&iacute;nh l&agrave; cho ph&eacute;p người d&ugrave;ng chụp ảnh từ xa, b&aacute;o động v&agrave; hoạt động trong phạm vi 50 m&eacute;t.<br />\r\n<br />\r\n<br />\r\n<a href="http://vtcdn.com/sites/default/files/images/2013/9/23/img-1379951911-4.png"><img src="http://vtcdn.com/sites/default/files/imagecache/med/images/2013/9/23/img-1379951911-4.png" /></a><br />\r\n<br />\r\n<br />\r\n<br />\r\nTheo Oppo th&igrave; N1 sẽ cập bến thị trường v&agrave;o th&aacute;ng 12 năm nay nhưng c&oacute; gi&aacute; b&aacute;n vẫn chưa được ph&iacute;a c&ocirc;ng ty tiết lộ.</p>\r\n', '2015-10-14 23:34:53', 1, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `email`, `role`, `status`) VALUES
(1, 'herotran', '123456', 'herotran', 'ewe', 1, 1),
(2, 'herotran1', '123456', 'Quoc Hùng', 'aadsad', 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_post` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
