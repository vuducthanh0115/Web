-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2022 at 07:46 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`) VALUES
(1, 'Ukraine sẵn sàng cho \"trận đánh cuối cùng\" ở chảo lửa Mariupol', '(Dân trí) - Lực lượng của Ukraine chuẩn bị cho \"trận đánh cuối cùng\" nhằm kiểm soát cảng Mariupol, khi đơn vị chiến đấu của Ukraine ở đây đang cạn dần đạn dược.\r\nUkraine sẵn sàng cho trận đánh cuối cùng ở chảo lửa Mariupol - 1\r\nNgười dân ở thành phố Mariupol, Ukraine trong những ngày chiến sự ác liệt (Ảnh: Reuters).\r\n\r\n\"Hôm nay có thể sẽ là trận đánh cuối cùng, đạn dược của chúng tôi sắp hết. Một số người có thể sẽ hy sinh, một số có thể bị bắt\", lữ đoàn thủy quân lục chiến số 36 của Ukraine cho biết trên Facebook ngày 11/4.\r\n\r\nLữ đoàn này là đơn vị đã làm nhiệm vụ bảo vệ thành phố cảng Mariupol ở miền Nam Ukraine suốt 47 ngày qua và đã nỗ lực hết mình để giữ quyền kiểm soát nơi này.\r\n\r\nMariupol là một trong những mục tiêu chiến lược trong chiến dịch quân sự của Nga tại Ukraine. Nếu giành quyền kiểm soát Mariupol, Nga có thể thiết lập một hành lang giữa Nga, khu vực Donbass và Crimea, cũng như kiểm soát hoàn toàn Biển Azov. Eduard Basurin, phó chỉ huy lực lượng ly khai thân Nga ở vùng Donetsk, hôm nay cho biết họ đã kiểm soát 80% cảng ở Mariupol.\r\n\r\nCác cuộc giao tranh gần đây đã tập trung tại khu vực các nhà máy sản xuất sắt thép Azovstal ở Mrriupol. Lữ đoàn thủy quân lục chiến 36 của Ukraine cho biết, khoảng một nửa binh sĩ của họ đã bị thương, trong khi đó, họ phải đối mặt với tình trạng cạn kiệt đạn dược, trang thiết bị quân sự.\r\n\r\nUkraine sẵn sàng cho trận đánh cuối cùng ở chảo lửa Mariupol - 2\r\nMariupol là thành phố cảng ở miền Đông Ukraine.\r\n\r\nTheo NDTV', 'https://icdn.dantri.com.vn/2022/04/11/mariupolreuters-1649686062287.jpg'),
(2, 'Trẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM', '(Dân trí) - Khoảng 15h chiều 11/4, bến phà Cát Lái phía bờ Nhơn Trạch (Đồng Nai) xảy ra tình trạng ùn tắc giao thông nghiêm trọng. Dòng xe cộ chờ lên phà để về trung tâm TPHCM nối đuôi nhau dài hơn 2km.\r\nTrẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM - 1\r\nNguyên nhân dẫn đến tình trạng kẹt xe nghiêm trọng tại bến phà Cát Lái là do lượng xe hướng từ Nhơn Trạch (Đồng Nai) đổ về đây theo đường tỉnh lộ 769 - Lý Thái Tổ đông đúc một cách bất thường. Hôm nay cũng là ngày nghỉ cuối cùng dịp lễ giỗ Tổ Hùng Vương nên mọi người tranh thủ trở lại TPHCM làm việc. Dòng phương tiện ôtô xếp hàng dài khoảng 2km.\r\n\r\nTrẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM - 2\r\nTrong khi đó dòng người điều khiển xe máy cũng phải xếp hàng dài gần 1km trên đường chờ vào bến phà. \r\n\r\nTrẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM - 3\r\nĐây là một trong những điểm nóng về ùn tắc giao thông tại cửa ngõ phía Đông TPHCM trong nhiều năm qua, nhất vào các dịp lễ, Tết.\r\n\r\nTrẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM - 4\r\nĐại diện Ban quản lý phà Cát Lái cho biết dù đơn vị đã huy động 2 phà loại 200 tấn và 4 phà 100 tấn, mỗi chuyến phà chở trung bình khoảng 20 - 30 ôtô tùy kích cỡ xe và hàng chục xe máy nhưng vẫn không giải quyết được tình trạng ùn ứ tại đây.\r\n\r\nCũng theo đại diện Ban quản lý phà Cát Lái, tải trọng của phà khá nhỏ, tuy nhiên không thể dùng phà lớn hơn vì vượt quá điều kiện thiết kế của bến.\r\n\r\nTrẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM - 5\r\nGhi nhận của phóng viên Dân Trí lúc 16h, tình trạng ùn tắc giao thông phía bờ Nhơn Trạch mỗi lúc nghiêm trọng thêm. Dòng ôtô chờ nối dài hơn 2km để qua phà.\r\n\r\nTrẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM - 6\r\n\"Đây là đoạn đường ngao ngán của những tài xế chạy taxi đường dài như anh em chúng tôi. Lễ, Tết hễ cứ đến đây là chôn chân nhiều giờ liền\", một tài xế nói.\r\n\r\nTrẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM - 7\r\nTheo tìm hiểu của phóng viên, nhiều người từ Vũng Tàu về lại TPHCM chọn hướng đi vào Nhơn Trạch rồi qua phà như là một lối đi tắt, thay vì phải đi quốc lộ 51 xa hơn nhiều.\r\n\r\nTrẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM - 8\r\nAnh Mẫn đưa gia đình đi Vũng Tàu chơi dịp lễ giỗ Tổ Hùng Vương. Trên đường về, gia đình anh chờ gần 2 tiếng ở phà Cát Lái nhưng vẫn chưa vào được bến. Hai con anh Mẫn thường xuyên quấy khóc vì nóng và khó chịu.\r\n\r\n\"Tôi nghe nhiều người nói phà Cát Lái hay kẹt, nhưng đây là lần đầu tôi tận mắt chứng kiến. Rất có thể những chuyến đi sắp tới tôi sẽ không chọn hướng đi này\", anh Mẫn chia sẻ.\r\n\r\nTrẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM - 9\r\nMột em nhỏ kêu khóc sau nhiều giờ chờ phà cùng bố mẹ trên xe máy, mệt mỏi dưới trời nắng nóng.\r\n\r\nTrẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM - 10\r\nTrẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM - 11\r\n\"Kẹt xe ở đây rất hay xảy ra. Người dân địa phương hay những khách thường qua lại bến phà đều hiểu rõ điều này. Tuy nhiên, mọi người vẫn cố chờ phà để khỏi phải đi vòng\", bà Minh, người dân sống gần bến phà Cát Lái cho biết.\r\n\r\nTrẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM - 12\r\nMột nhóm tiểu thương \"tiếp thị\" nước giải khát đến tận tay người chờ phà. Họ cho biết cách phục vụ này giúp những người qua lại khỏi xuống xe, vì như vậy sẽ gây thêm ùn tắc, phiền toái cho người phía sau.\r\n\r\nTrẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM - 13\r\nĐể hạn chế tình trạng ùn ứ dòng xe máy, đơn vị quản lý phà Cát Lái cho phép người điều khiển phương tiện xếp thêm một hàng chờ ở phần đường dành cho ôtô.\r\n\r\nTrẻ nhỏ khóc thét giữa dòng xe kẹt cứng chờ phà Cát Lái về TPHCM - 14\r\nThay vì bán tại quầy, nhân viên bán vé đến các khu vực chờ của ôtô, xe máy để bán vé trực tiếp cho khách nhằm hạn chế dòng xe cộ ùn ứ. Đến 19h tối, tình trạng ùn ứ giao thông tại phà dù có giảm, nhưng chưa thật sự thông thoáng.', 'https://icdn.dantri.com.vn/2022/04/11/huukhoa-7-of-18-1649680037051.jpeg'),
(3, 'Tên lửa siêu vượt âm Nga phá hủy sở chỉ huy dưới lòng đất của Ukraine', '(Dân trí) - Nga thông báo lần thứ 3 triển khai tên lửa siêu vượt âm Kinzhal trong chiến sự ở Ukraine và đã phá hủy một sở chỉ huy dưới lòng đất của Kiev ở khu vực Donetsk.\r\nTên lửa siêu vượt âm Nga phá hủy sở chỉ huy dưới lòng đất của Ukraine - 1\r\nMột tên lửa siêu vượt âm Kinzhal của Nga (Ảnh: Bộ Quốc phòng Nga).\r\n\r\nBộ Quốc phòng Nga ngày 11/4 thông báo, một cơ sở chỉ huy kiên cố dưới lòng đất của lực lượng vũ trang Ukraine ở Donetsk, Đông Ukraine đã bị phá hủy bởi tên lửa siêu vượt âm Kinzhal, vũ khí có thể bay nhanh gấp 10 lần tốc độ âm thanh.\r\n\r\nPhát ngôn viên Bộ Quốc phòng Nga Igor Konashenkov cho biết, Moscow đã bắn rocket vào các mục tiêu của Ukraine trong ngày và cơ sở chỉ huy nằm gần khu vực Chasiv Yar ở Donetsk đã bị phá hủy sau khi trúng tên lửa Kinzhal từ một máy bay.\r\n\r\nÔng Konashenkov cũng tiết lộ rằng, hệ thống phòng không Nga đặt tại Sinelnikovo Dnepropetrovsk đã bắn rơi một tiêm kích Su-27 của Ukraine.\r\n\r\nTổng cộng, quan chức trên cho biết, kể từ khi Nga mở chiến dịch quân sự ở Ukraine, Moscow đã phá hủy của Kiev 130 máy bay, 99 trực thăng, 243 tổ hợp tên lửa phòng không, 441 máy bay không người lái, 2.132 xe tăng và xe bọc thép khác, 241 hệ thống rocket phóng loạt, 913 pháo và súng cối, cùng 2.028 phương tiện quân sự đặc biệt.\r\n\r\nNga ngày 19/3 thông báo đã sử dụng tên lửa siêu vượt âm Kinzhal nhằm phá hủy kho vũ khí ngầm ở Tây Ukraine, đánh dấu lần đầu tiên Moscow sử dụng tên lửa hiện đại trong chiến dịch quân sự ở nước láng giềng. Sau đó, Nga tiếp tục sử dụng vũ khí này một ngày sau đó nhằm vào kho nhiên liệu gần Kostyantynivka, Ukraine.\r\n\r\nĐây là lần thứ 3 Nga tuyên bố sử dụng tên lửa Kinzhal trong chiến dịch quân sự sắp bước sang tuần thứ 7 ở Ukraine.\r\n\r\nTổng thống Mỹ Joe Biden đã xác nhận 2 vụ việc Nga sử dụng tên lửa Kinzhal hồi tháng 3, cho rằng vũ khí của Nga không tạo ra nhiều khác biệt trong chiến dịch quân sự của Moscow, ngoại trừ việc nó gần như không thể bị đánh chặn.\r\n\r\nTên lửa siêu vượt âm là loại vũ khí có thể bay nhanh tối thiểu gấp 5 lần tốc độ âm thanh. Ngoài tốc độ cao, nó còn có quỹ đạo di chuyển rất khác biệt với các tên lửa dạng thường. Điều này khiến nó trở thành vũ khí rất đáng gờm trước các hệ thống phòng thủ đối phương. Ngoài ra, tên lửa Kinzhal của Nga còn có thể mang đầu đạn hạt nhân - yếu tố giúp nó trở nên linh hoạt và có sức mạnh răn đe với các đối thủ. Giới chuyên gia cho rằng, nguyên nhân khiến Nga quyết định triển khai Kinzhal ở Ukraine để gửi thông điệp cảnh báo cứng rắn tới Mỹ và phương Tây về sức mạnh của quân sự của Moscow.', 'https://icdn.dantri.com.vn/2022/03/20/messageeditor2f1647713840750egbnowswaaaru3w-1647747969585.jpeg'),
(4, 'Tài xế che camera, tắt giám sát hành trình để \"né\" phạt', '(Dân trí) - Bộ Giao thông vận tải (GTVT) cho biết có hiện tượng chủ xe vận tải, tài xế tránh né việc phát hiện vi phạm bằng cách tắt thiết bị giám sát hành trình, che màn hình thiết bị camera lắp trên xe ô tô…\r\nTheo Bộ GTVT, hiện nay nhu cầu đi lại bằng phương tiện vận tải đường bộ của người dân đang ngày càng tăng cao, đặc biệt là khi các trường tổ chức học tập trực tiếp ở tất cả các cấp học, các hoạt động kinh doanh, du lịch trở lại bình thường sau thời gian phòng, chống dịch. UBND các tỉnh, thành phố đã chỉ đạo Sở GTVT và các cơ quan liên quan triển khai các loại hình kinh doanh vận tải (xe buýt, taxi, xe du lịch, xe hợp đồng, tuyến cố định) để kịp thời đáp ứng nhu cầu đi lại của người dân.\r\n\r\nTuy nhiên, có hiện tượng đối phó với các quy định về kinh doanh vận tải nhằm tránh né việc phát hiện vi phạm như tắt thiết bị giám sát hành trình, che màn hình thiết bị camera lắp trên xe ô tô…\r\n\r\nTài xế che camera, tắt giám sát hành trình để né phạt - 1\r\nXuất hiện hiện tượng xe kinh doanh vận tải tắt camera, giám sát hành trình để \"né\" phạt (Ảnh: Quốc Anh).\r\n\r\nBộ GTVT vừa yêu cầu Tổng cục Đường bộ Việt Nam tăng cường phối hợp chặt chẽ các đơn vị liên quan để hoàn thiện hệ thống cơ sở dữ liệu thiết bị giám sát hành trình và camera giám sát trên các xe ô tô kinh doanh vận tải, đảm bảo kết nối, sử dụng chung cho các cơ quan chức năng; hướng dẫn các Sở Giao thông vận tải, Sở GTVT - Xây dựng thực hiện quản lý, xử lý thông qua dữ liệu từ các thiết bị này; kiểm tra, đôn đốc việc thực hiện các quy định về kinh doanh và điều kiện kinh doanh vận tải bằng xe ô tô.\r\n\r\nCác Sở GTVT được yêu cầu rà soát, kiểm tra đối với các đơn vị kinh doanh vận tải chưa thực hiện lắp đặt camera cho phương tiện kinh doanh vận tải theo quy định của Chính phủ; tăng cường kiểm tra phương tiện kinh doanh vận tải tại các bến xe, cảng hàng không, ga đường sắt, bến tàu, trạm dừng nghỉ; kiên quyết xử lý các trường hợp vi phạm quy định về kinh doanh và điều kiện kinh doanh vận tải bằng xe ô tô.\r\n\r\nBộ GTVT yêu cầu Sở GTVT các địa phương phối hợp chặt chẽ với lực lượng chức năng ngành công an, tăng cường kiểm tra phương tiện kinh doanh vận tải; xử lý nghiêm các trường hợp vi phạm, đặc biệt là các vi phạm như tắt thiết bị giám sát hành trình, che màn hình camera lắp trên xe ô tô kinh doanh…\r\n\r\nSở GTVT các tỉnh phối hợp với Tổng cục Đường bộ Việt Nam rà soát dữ liệu từ thiết bị giám sát hành trình và camera giám sát lắp trên xe ô tô kinh doanh vận tải để phát hiện các vi phạm (nếu có) và xử lý kịp thời theo đúng quy định.', 'https://icdn.dantri.com.vn/2022/04/12/duonghoangvanthu21579093663171-1649737359186.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
