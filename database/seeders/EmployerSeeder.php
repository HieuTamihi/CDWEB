<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employer')->insert([
            [
                'User_id' => 3,
                'Website' => 'https://samcenter.vn',
                'Infor' => 'Samsung Electronics HCMC CE Complex (SEHC) project with a total investment of US $ 2 billion is located in Saigon Hi-tech Park with a total area of up to 122ha, which began operation in early 2016. This is one of the key factories of Samsung Groups high-end consumer electronics manufacturing. Beside that, in early 2017 the largest Executive Briefing Center (EBC) in Southeast Asia and R&D Center (SHRC) established at the SEHC complex',
                'Responsibility' => null,
                'Welfare' => 'Yearly Performance Bonus 2 times/year (up to 3-month salary) + 13th Salary.
                Udemy License & Linkedin E-Learning are provided.
                100% salary and mandatory social insurances in 2-month probation.
                Daily shuttle bus from city center to company.
                GWP quarterly
                Free luncheon
                Training Opportunities in Korea. (Many times)
                Take part in variuos significant activities such as SEHC Events, Town Hall Meeting, Liên Quân Mobile Champion, SEHC Marathon, SEHC Hackathon, SEHC Home Town,....
                Mon - Fri',
                'name_company' => 'Samsung Electronics HCMC CE Complex (SEHC)',
                'address' => 'Lô I-11, Đường D2, Khu Công nghệ cao, Phường Tăng Nhơn Phú B, Thành phố Thủ Đức, Thành phố Hồ Chí Minh',
                'image' => 'TopDev-Screenshot2022-07-25152515-1658737564.png',
                'email' => null,
                'phone_number' => '1800 588 889',
                'featured' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'User_id' => 4,
                'Website' => null,
                'Infor' => 'Công ty TNHH Phần mềm DTS Việt Nam (tên gọi tắt là DTS Việt Nam) được thành lập với mục đích giúp DTS Corporation tại Nhật Bản đáp ứng nhu cầu phát triển sản phẩm, dịch vụ và cung cấp cho khách hàng đơn giá hợp lý, có tính cạnh tranh',
                'Responsibility' => null,
                'Welfare' => 'Lương thỏa thuận theo năng lực thực tế của ứng viên.
                Trợ cấp đi lại, trợ cấp ăn trưa, trợ cấp năng lực tiếng Nhật, trợ cấp học tiếng Nhật trợ cấp onsite khi tham gia dự án bên khách hàng....
                Thưởng lễ tết, thưởng tháng lương thứ 13, thưởng nhân viên xuất sắc quý, năm, nhân viên tiêu biểu đi du lịch Nhật Bản.
                Nghỉ theo lịch công ty, nghỉ theo lịch khách hàng Nhật, ngoài các ngày nghỉ theo quy định, 1 năm có thêm 2 đợt nghỉ dài.
                Nghỉ tham gia Ngày hội khai giảng cùng con cho các phụ huynh
                Chế độ chăm sóc phụ nữ: Nghỉ sinh lý phụ nữ: 8h/ tháng; Nghỉ sau sinh cho nhân viên nữ có con dưới 1 tuổi: 1h/ngày.
                Bảo hiểm y tế, bảo hiểm xã hội, bảo hiểm thất nghiệp theo quy định của Luật lao động.
                Bảo hiểm sức khỏe cao cấp cho toàn bộ nhân viên.
                Khám sức khỏe định kỳ hàng năm tại các bệnh viện uy tín (Bệnh viện Thu Cúc, bệnh viện Medlatec…).
                Miễn phí trà, coffee tại khu vực ăn uống của công ty.
                Máy pha coffee, máy bán hàng tự động tiện ích ngay tại văn phòng.
                Hoạt động team building kết nối đội nhóm hàng quý.
                Các CLB thể thao: bóng đá, bi lắc, bóng bàn, cờ, leo núi...
                Hoạt động du lịch thường niên và các sự kiện lớn trong công ty.
                Thời gian làm việc: Thứ 2 đến thứ 6, từ 08:00 đến 17:00',
                'name_company' => 'DTS Software Viet Nam',
                'address' => 'Số 266 Đường Đội Cấn, Phường Liễu Giai, Quận Ba Đình, Thành phố Hà Nội',
                'image' => '1559822688581-Untitled.jpg',
                'email' => null,
                'phone_number' => '028 3933 6666',
                'featured' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'User_id' => 5,
                'Website' => null,
                'Infor' => 'iTechwx dedicates the One-Stop Digital Transformation Service to our customers.
                We partner with enterprises from multi-dimensions, empowering our customers with technical talent solutions.',
                'Responsibility' => null,
                'Welfare' => 'Performance Bonus
                Social and Health insurance follow Vietnamese Law
                Young & Dynamic Working Environment
                International Culture
                24/7 Insurance for Night-shift
                Annual Health Check-up',
                'name_company' => 'iTechwx',
                'address' => '12th Floor, Opal Tower, 92 Nguyen Huu Canh street, Phường 22, Quận Bình Thạnh, Thành phố Hồ Chí Minh',
                'image' => 'TopDev-[removal.ai]_tmp-643d0d4737a99-1681722803.png',
                'email' => null,
                'phone_number' => '02871096185',
                'featured' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'User_id' => 6,
                'Website' => null,
                'Infor' => 'Tập đoàn Công nghiệp – Viễn thông Quân đội, thường dược biết đến dưới tên giao dịch Viettel hay Tập đoàn Viettel, là một tập đoàn viễn thông và công nghệ Việt Nam được thành lập vào ngày 1 tháng 6 năm 1989. Các ngành nghề chính của tập đoàn bao gồm: ngành dịch vụ viễn thông & công nghệ thông tin;',
                'Responsibility' => null,
                'Welfare' => 'Dẫn đầu thị trường:
                Cơ hội được trải nghiệm, tiếp cận và làm việc tại Tập đoàn tiên phong mở đường, kiến tạo tương lai thông minh, gắn kết của Việt Nam.
                Cơ hội được thử sức trong những lĩnh vực công nghệ tiên tiến, hiện đại nhất.
                Cơ hội được trở thành nhân viên chính thức ngay sau khi tốt nghiệp mà không cần trải qua thử việc.
                Môi trường năng động sáng tạo:
                Môi trường làm việc cởi mở và năng động, khuyến khích trao đổi ý tưởng ở mọi cấp, cho phép bạn làm việc, sáng tạo theo cách riêng.
                Được khơi gợi cảm hứng làm việc với văn phòng xanh, không gian mở, hiện đại tiêu chuẩn quốc tế.
                Cơ hội thử thách và phát triển:
                Áp dụng kiến thức, kĩ năng, kinh nghiệm chuyên môn giải quyết các bài toán hấp dẫn, thử thách tại Viettel.
                Cơ hội thử sức ở nhiều lĩnh vực, sản phẩm và quốc gia khác nhau góp phần thay đổi xã hội.
                Viettel cam kết cho bạn nền tảng vững chắc để học hỏi và phát triển.
                Sẵn sàng trao quyền, cơ hội đột phá cho những người trẻ tuổi.
                Cơ hội học hỏi từ các chuyên gia hàng đầu, lãnh đạo và đồng nghiệp ưu tú.
                Cơ hội được đào tạo, trao dồi kĩ năng định kì và nhu cầu thực tế.
                Chế ngộ đãi ngộ hấp dẫn:
                Được hưởng lương phản ánh đúng năng lực và cạnh tranh trên thị trường (From $700, Up to $10,000).
                Được thư giãn, khơi nguồn sáng tạo với Happy Time mỗi ngày.
                Cơ hội tham gia gắn kết với tập thể, tổ chức với các hoạt động team building thú vị.
                Thời gian làm việc: Từ thứ 2 đến thứ 6 (Sáng 8h00-12h00, Chiều 13h30-17h30).',
                'name_company' => 'Viettel Group',
                'address' => 'Tòa nhà Thái Bình, Ngõ 19 Duy Tân, Phường Dịch Vọng Hậu, Quận Cầu Giấy, Thành phố Hà Nội',
                'image' => 'TopDev-Viettel-Logo-Original-1675389520.png',
                'email' => null,
                'phone_number' => '1800 8098',
                'featured' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
