<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('posts')->insert([
            [
                'customer_id' => 1,
                'comment_id' => 1,
                'title' => '15+ IT Blogger Việt bạn không nên bỏ qua năm 2023',
                'content' => '30% Developer đọc blog để tìm câu trả lời khi ăn “bí” – Đó là kết quả mà ITviec đã khảo sát được.
            Do đó, ITviec đã tổng hợp và cập nhật 15+ IT blogger Việt Nam “chất” nhất để giúp bạn: 
            Tìm hiểu các thông tin công nghệ mới nhất
            Dễ dàng tiếp cận kiến thức bằng tiếng Việt
            Thảo luận các vấn đề phát sinh trước và sau lập trình',
                'Image' => 'it-blogger-viet-thumnail.jpg',
                'status' => 1,
            ],
            [
                'customer_id' => 2,
                'comment_id' => 2,
                'title' => 'Định hướng nghề nghiệp cho Developer năm 2023',
                'content' => 'Định hướng nghề nghiệp là hướng đi mà một cá nhân chọn, về mặt nghề nghiệp, trong suốt cuộc đời của họ. Nếu một người luôn chọn hoặc theo đuổi một loại công việc nhất định, hoặc một công việc trong một lĩnh vực cụ thể, thì đây có thể được xem là định hướng nghề nghiệp của họ.
                Định hướng nghề nghiệp có thể xuất phát từ sở thích hoặc khả năng nổi trội. Đối với những người đã đi làm, định hướng nghề nghiệp là vạch ra các bước đi đúng đắn để có thể phát triển sự nghiệp theo hướng đó trong tương lai xa. Bạn cần phải biết đích đến của mình ở đâu? Những chặng đường nào mình cần phải đi qua để có thể tới được đích? ',
                'Image' => 'dinh-huong-nghe-nghiep.png',
                'status' => 1,
            ],
            [
                'customer_id' => 3,
                'comment_id' => 3,
                'title' => '2022 Review – Thấy gì từ 18 bài viết nổi bật nhất trên ITviec Blog?',
                'content' => 'Người dùng muốn tìm hiểu gì về sự nghiệp IT, kiến thức IT nào được tìm đọc nhiều, hay kĩ năng ứng tuyển nào khiến các chuyên gia IT quan tâm? Cập nhật các chủ đề IT nổi bật nhất 2022 trên ITviec Blog để không bỏ lỡ kiến thức quan trọng và mở rộng ý tưởng để xây dựng kế hoạch cho năm mới.
                Cảm ơn các độc giả đã đồng hành cùng ITviec Blog trong năm 2022! Một cột mốc mới lại hoàn thành trên hành trình ITviec Blog thực hiện sứ mệnh là cầu nối kiến thức, kinh nghiệm chuyên môn và ý tưởng phát triển sự nghiệp IT đến với những chuyên gia IT Việt Nam. ',
                'Image' => 'Thumbnail_11.jpg',
                'status' => 1,
            ],
            [
                'customer_id' => 4,
                'comment_id' => 4,
                'title' => 'Freelancer là gì? Tìm việc làm freelancer ở đâu thu nhập tốt?',
                'content' => '
                Freelancer là gì?
                Freelancer là gì? Freelancer, hay gọi là người làm việc tự do, là một cá nhân tự tạo ra thu nhập trên cơ sở từng công việc hoặc từng dự án ngắn hạn với tư cách là một nhà thầu độc lập.
                Một freelancer không phải là nhân viên của một công ty và do đó có thể tự do hoàn thành các công việc khác nhau từ nhiều cá nhân hoặc công ty khác nhau đồng thời, trừ khi cam kết làm việc độc quyền theo hợp đồng cho đến khi hoàn thành một dự án cụ thể.',
                'Image' => 'h-2.jpg',
                'status' => 1,
            ],
            [
                'customer_id' => 5,
                'comment_id' => 5,
                'title' => 'API là gì? 4 đặc điểm nổi bật của API',
                'content' => 'Sử dụng API giúp developer đẩy nhanh quá trình phát triển phần mềm, tạo ra sự nhanh chóng, thuận tiện để hướng đến mục tiêu cuối là nâng cao hiệu suất công việc.
                Đọc bài viết của ITviec để tìm hiểu xem:     
                API là gì? Web API là gì? 4 đặc điểm nổi bật của API là gì?
                Ưu, nhược điểm của API và các ứng dụng của API
                Làm thế nào để đảm bảo tính bảo mật cho API
                Những API miễn phí cho developer thực hành',
                'Image' => 'api-la-gi-thumnail.png',
                'status' => 1,
            ],
            [
                'customer_id' => 6,
                'comment_id' => 6,
                'title' => 'OOP là gì? 4 đặc tính cơ bản của OOP',
                'content' => 'Đối tượng trong OOP bao gồm 2 thành phần chính:
                Thuộc tính (Attribute): là những thông tin, đặc điểm của đối tượng
                Phương thức (Method): là những hành vi mà đối tượng có thể thực hiện
                Để dễ hình dung, ta có một ví dụ thực tế về đối tượng là smartphone. Đối tượng này sẽ có: 
                Thuộc tính: màu sắc, bộ nhớ, hệ điều hành…
                Phương thức: gọi điện, chụp ảnh, nhắn tin, ghi âm…',
                'Image' => 'oop-la-gi-fi.jpg',
                'status' => 1,
            ],
            [
                'customer_id' => 7,
                'comment_id' => 7,
                'title' => 'Ngoài ra, có gì mới trên ITviec Blog trong năm 2022?',
                'content' => 'Báo cáo lương IT 2022- 2023 cung cấp thông tin chi tiết về Mức lương ngành công nghệ thông tin & Mong đợi của chuyên gia IT với công việc, lãnh đạo và công ty, được tổng hợp từ khảo sát với 1,257 chuyên gia IT đang làm việc tại Việt Nam với đa dạng vị trí, ngôn ngữ lập trình và số năm kinh nghiệm.',
                'Image' => 'Thumbnail_1.jpg',
                'status' => 1,
            ],
            [
                'customer_id' => 8,
                'comment_id' => 8,
                'title' => '10 Java Framework cho Java Developer chất',
                'content' => 'JavaServer Faces được Oracle hỗ trợ và do đó, nó đi kèm với các tài liệu rất chuyên sâu. Bạn có thể sử dụng Java Framework này cho bất kì sản phẩm nào viết bằng ngôn ngữ Java.
                Thật không may, đây không phải là Java Framework dễ sử dụng nhất, và cũng không phải là nhanh nhất. Tuy nhiên, lợi ích lớn của JavaServer Faces là kho tài liệu tuyệt vời mà Oracle đã cung cấp.               
                Điều này đóng góp một phần quan trọng trong Java EE – Phiên bản doanh nghiệp của Java – và nếu bạn sử dụng IDE thì sẽ rất tiện lợi vì nó được tích hợp vào các môi trường đó.',
                'Image' => '10-best-frameworks-java-324x235.png',
                'status' => 1,
            ],
            [
                'customer_id' => 9,
                'comment_id' => 9,
                'title' => 'Ruby on Rails là gì? 17 tài liệu học Ruby on Rails mới nhất',
                'content' => 'Trước khi tìm hiểu về Ruby on Rails, chúng ta sẽ nói về ngôn ngữ Ruby. Ruby là ngôn ngữ lập trình hướng đối tượng được sáng tạo năm 1993 bởi Yukihiro Matz Matsumoto. Với niềm tin rằng mục đích của cuộc sống là hạnh phúc, Ruby ra đời nhằm giúp công việc lập trình trở nên dễ dàng và vui hơn.
                Tuy nhiên, ngôn ngữ Ruby không được thiết kế để sử dụng trên web. Hay nói cách khác, để làm các trang web/ứng dụng web với Ruby, bạn cần đến các framework hỗ trợ khác.',
                'Image' => 'ruby-on-rails-la-gi-thumnail.jpg',
                'status' => 1,
            ],
            [
                'customer_id' => 10,
                'comment_id' => 10,
                'title' => 'IDE là gì? Những kiến thức bạn cần nắm rõ về Môi trường phát triển tích hợp',
                'content' => 'IDE là gì? IDE, hay còn gọi là Môi trường phát triển tích hợp (Integrated Development Environment) là một ứng dụng phần mềm cung cấp một bộ công cụ toàn diện để phát triển phần mềm. IDE được thiết kế để làm cho quá trình phát triển phần mềm hiệu quả hơn, bằng cách cung cấp một giao diện duy nhất để quản lý tất cả các khía cạnh (aspects).
                IDE cung cấp nhiều công cụ và tính năng giúp các lập trình viên có thể viết, test và debug dễ dàng hơn. IDE cũng cải thiện chất lượng code với các công cụ highlight cú pháp, hoàn thành code (code completion) và tái cấu trúc (refactoring). Ngoài ra, IDE cũng thường bao gồm hỗ trợ tích hợp cho các hệ thống kiểm soát nguồn, giúp các lập trình viên dễ dàng cộng tác và quản lý các thay đổi trong dự án.',
                'Image' => 'Blog-Thumbnail-template-01.png',
                'status' => 1,
            ],
            [
                'customer_id' => 11,
                'comment_id' => 11,
                'title' => 'IDE là gì? Phân loại IDE',
                'content' => 'IDE là gì? IDE, hay còn gọi là Môi trường phát triển tích hợp (Integrated Development Environment) là một ứng dụng phần mềm cung cấp một bộ công cụ toàn diện để phát triển phần mềm. IDE được thiết kế để làm cho quá trình phát triển phần mềm hiệu quả hơn, bằng cách cung cấp một giao diện duy nhất để quản lý tất cả các khía cạnh (aspects).
                IDE cung cấp nhiều công cụ và tính năng giúp các lập trình viên có thể viết, test và debug dễ dàng hơn. IDE cũng cải thiện chất lượng code với các công cụ highlight cú pháp, hoàn thành code (code completion) và tái cấu trúc (refactoring). Ngoài ra, IDE cũng thường bao gồm hỗ trợ tích hợp cho các hệ thống kiểm soát nguồn, giúp các lập trình viên dễ dàng cộng tác và quản lý các thay đổi trong dự án.',
                'Image' => 'blog1-324x235.jpg',
                'status' => 1,
            ],
            [
                'customer_id' => 12,
                'comment_id' => 12,
                'title' => 'Ubuntu là gì: Định nghĩa, Ưu điểm và Hướng dẫn cài đặt',
                'content' => 'Ubuntu là một hệ điều hành mã nguồn mở và miễn phí phổ biến dựa trên Linux mà bạn có thể sử dụng trên máy tính hoặc máy chủ ảo riêng. Hay để giải thích ngắn gọn Ubuntu là gì, Ubuntu thật ra là một Linux distro.
                Ubuntu được giới thiệu vào năm 2004 bởi công ty Canonical ở Anh. Trong thời gian đó, hệ điều hành này được “quảng cáo” như một giải pháp thay thế thân thiện với người dùng hơn, so với Debian – một distro phổ biến hồi đó.                
                Ubuntu được phát hành chính thức với ba phiên bản: Desktop, Server, và Core dành cho các thiết bị IoT và robot. Ngoài ra, có rất nhiều phiên bản Linux distro dựa trên Ubuntu mà bạn có thể chọn sử dụng, ITviec sẽ tổng hợp ở mục Top 5 Linux distro dựa trên Ubuntu phổ biến nhất trong bài viết này.',
                'Image' => 'ubuntu-la-gi.01-800x450.jpg',
                'status' => 1,
            ],
            [
                'customer_id' => 13,
                'comment_id' => 13,
                'title' => 'MySQL là gì? Tổng hợp kiến thức MySQL đầy đủ và dễ hiểu',
                'content' => 'Được phát triển vào năm 1994, MySQL là một hệ thống quản lý cơ sở dữ liệu quan hệ (RDBMS) mã nguồn mở được hỗ trợ bởi Oracle dựa trên Ngôn ngữ truy vấn có cấu trúc (SQL), theo máy khách – máy chủ (mô hình client-server).
                MySQL được xây dựng để quản lý các cơ sở dữ liệu lớn một cách nhanh chóng và đã được “chứng minh” sử dụng hiệu quả trong các môi trường sản xuất đòi hỏi khắt khe trong suốt nhiều năm. Hiện tại, MySQL tương thích với đa dạng nền tảng phổ biến như Linux, macOS, Microsoft Windows và Ubuntu.',
                'Image' => 'mysql-la-gi-768x576.jpg',
                'status' => 1,
            ],
            [
                'customer_id' => 14,
                'comment_id' => 14,
                'title' => 'Chuẩn bị gì trước buổi phỏng vấn vị trí lập trình viên Frontend',
                'content' => 'Trước hết để có được sự tự tin khi tham gia phỏng vấn, bạn cần chuẩn bị đầy đủ từ trang phục, tác phong, chú ý giờ giấc,… để có thể tạo ấn tượng tốt với nhà tuyển dụng. Nắm chắc được quy trình phỏng vấn thông qua nội dung mà phía HR đã thông báo. Nhiều công ty, doanh nghiệp có những quy trình phỏng vấn nhiều vòng, có thể có thêm những bài test chuyên môn,… vì thế bạn cần biết sẽ phải trải qua những vòng nào một cách cụ thể để chuẩn bị. Hãy đọc kỹ mô tả công việc vị trí ứng tuyển, đây là việc vô cùng quan trọng giúp bạn hiểu rõ yêu cầu và trách nhiệm của công việc đó; từ đó bạn sẽ có thể lên kế hoạch cho buổi phỏng vấn của mình.',
                'Image' => 'kinh-nghiem-phong-van-frontend-324x235.png',
                'status' => 1,
            ],
            [
                'customer_id' => 15,
                'comment_id' => 15,
                'title' => '5 kiến thức quan trọng để trở thành Full-stack developer',
                'content' => ' Một full stack developer dễ dàng tạo ra một thiết kế nguyên mẫu cho một sản phẩm dựa trên những hiểu biết rộng lớn. Do họ có kiến thức tổng quan của cả hệ thống, nên họ có tư duy và góc nhìn về hệ thống rộng hơn so với những người chỉ biết làm front-end hoặc chỉ back-end.
                Ngoài ra, do full stack developer có kiến thức tổng quan về cả hệ thống nên họ có thể dễ dàng ghép nối các bộ phận khác nhau trong dự án. Họ sẽ trở thành cầu nối giữa bộ phận làm back-end, với bộ phận làm front-end và cả bộ phận phần cứng server…               
                Do đó, các full stack developer sau này có xu hướng trở thành giám đốc kỹ thuật hoặc CEO.',
                'Image' => 'kien-thuc-full-stack-developer-can-hoc-324x235.png',
                'status' => 1,
            ],
            [
                'customer_id' => 16,
                'comment_id' => 16,
                'title' => 'Hướng dẫn cách Debug TypeScript trên Visual Studio Code',
                'content' => 'Debug là một kỹ năng mà bất kỳ developer nào cũng nên biết, thậm chí là phải giỏi. Dù bạn phát triển ứng dụng nhỏ xíu tới ứng dụng to đùng, bạn khó tránh gặp lỗi trong quá trình viết code. Đó là lúc kỹ năng debug vào việc.
                Nếu bạn sử dụng Android Studio, Xcode hay Visual Studio… để phát triển ứng dụng thì việc đặt breakpoint khi debug rất đơn giản.                
                Nhưng với các ứng dụng kiểu như Node.JS, ReactJS, Vue… sử dụng Visual Code để viết, đặc biệt là ứng dụng đó sử dụng TypeScript làm ngôn ngữ lập trình, bạn sẽ gặp đôi chút khó khăn.                
                Bài viết này, mình sẽ chỉ cho bạn cách thiết lập môi trường phát triển với VS Code để debug dễ dàng.',
                'Image' => 'debug-typescript-tren-visual-studio-code-324x235.png',
                'status' => 1,
            ],
            [
                'customer_id' => 17,
                'comment_id' => 17,
                'title' => 'Nên học Front-end hay Back-end trước?',
                'content' => 'Đối với một Website, Front-end là phần giao diện mà người dùng nhìn thấy và tương tác với các phần tử trên trang mỗi khi truy cập vào một Website. Để có được những dữ liệu hiển thị lên Website, đồng thời ghi nhận sự tác động của người dùng lên dữ liệu và lưu trữ lại, chúng ta sẽ cần tới Back-end; nơi sẽ xử lý các yêu cầu gửi nhận, cập nhật, thêm mới, xóa các bản ghi dữ liệu. Back-end cũng là phần mà người dùng không nhìn thấy được như Front-end, hay như chúng ta vẫn hay ví von đấy là phần chìm của tảng băng trôi. Có sự khác biệt rõ ràng giữa ứng dụng tạo ra ở 2 phía:
                Ứng dụng Front-end chạy trên trình duyệt (browsers), thực hiện việc hiển thị nội dung dữ liệu và xử lý các tương tác của người dùng.
                Ứng dụng Back-end là ứng dụng chạy ở phía máy chủ (server-side) phục vụ cho mọi yêu cầu được gửi đến từ phía máy khách (client-side). 
                Do có sự khác nhau đó và việc tạo ra ứng dụng dành cho Front-end và Back-end là khác nhau, đòi hỏi những ngôn ngữ lập trình và kỹ năng khác nhau.',
                'Image' => 'fron-end-hay-back-end-1.jpg',
                'status' => 1,
            ],
        ]);
    }
}
