<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DBjobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0;$i<10;$i++){
            DB::table('job')->insert([
                ["title"=>"TDT ".'Product Manager '.Str::random(3),
               
                "salary"=>2000,
                "skill"=>"Laravel",
                "address"=>"Quận 13 tp HCM",
                "detail"=>"Chi tiết".Str::random(30),
                "Require"=>"Yêu cầu ".Str::random(30),
                "Benefit"=>"Lợi ích ".Str::random(30),
                "idCompany"=>1,
                "DeadLine"=>'2020-06-30']
            ]);
        }
        DB::table('job')->insert([
            ["title"=>"Project Manager (English, Agile)",
           
            "salary"=>2000,
            "skill"=>"PHP",
            "address"=>"96 Nguyễn Thị Minh Khai, Phường 6, District 3, Ho Chi Minh",
            "detail"=>"Founded in Ho Chi Minh City, Viet Nam, Olli Technologies is a high-tech company committed to serving the Vietnamese community with high-tech products which aim to transform the way we interact with the environment and other people around us. Our products are crafted to the highest standards and powered by the latest breakthroughs in the field of artificial intelligence.
            To help us realize this vision, we are looking for a Project Manager to join our team.",
            "Require"=>"<ul>
            <li>Have 2+ years’ experience in projects management</li>
            <li>Knowledge of agile methodology and frameworks like Scrum, Kanban, etc.</li>
            <li>Have executive level of interpersonal, project management, writing, communication and problem solving skills</li>
            <li>Requires strong time-management and prioritization skills</li>
            <li>Have ability to think and act strategically around process and efficiency</li>
            <li>Have experience with Jira or similar project management software.</li>
            <li>Be passionate for joining startups, entrepreneurship and technology.</li>
            <li>Have excellent command of English</li>
            <li>Have international working experience is a plus</li>
            <li>Expatriates who are willing to settle down in HCMC is welcome to apply</li>
        </ul>",
            "Benefit"=>"<p><strong>3F forever</strong>: you are guaranteed to experience our 3F office motto&nbsp;<strong>“FOOD, FRIENDS AND … FUN”.</strong><br />
            <br />
            <strong>You'll learn a lot:</strong>&nbsp;we don't do outsourcing so you won't have to deal with the frequent technology switch that comes with a new outsourcing project (and therefore not having enough time to really master any of them). Here you are the owner of your slice of the product. You'll have the opportunity to dig deep into whatever technology you're working with and become really good at it. There are milestones to follow, but in general you'll manage your own tasks and set your own pace.<br />
            <br />
            <strong>Young and dynamic working environment:&nbsp;</strong>we try to maintain an easygoing working environment where there is<strong>&nbsp;</strong>no rigid structure, everyone's feedback is valued and you're free to chime in any topic you like. We need the different perspectives.<br />
            <br />
            <strong>Work hard, play hard:</strong>&nbsp;we like you to play as hard as you work, too. We've got darts, hoop, guitar in the office with more coming soon.<br />
            <br />
            <strong>Annual off-site trip</strong>: our first trip was to Shanghai.<br />
            <br />
            <strong>Unlimited food, drinks and snacks</strong>: from “mì gói” to sausage to Red Bull, you name it, you have it. Plus, you can always eat while you work, no need to wait for the common break.<br />
            <br />
            <strong>Flexible salary reviews:</strong>&nbsp;you perform well, you get a raise. At any time of the year. No need to wait for an annual salary review.<br />
            <br />
            <strong>Other benefits:</strong><br />
            &nbsp;</p>
            
            <ul>
                <li>13th month salary.</li>
                <li>Standard 40-hour work week, from Monday to Friday.</li>
                <li>12 days of annual leave.</li>
                <li>Social, medical and unemployment insurance plus other benefits in accordance with regulations.</li>
            </ul>",
            "idCompany"=>11,
            "DeadLine"=>'2020-07-25',
            "created_at"=>"2020-07-10 18:03:43",
            "updated_at"=>"2020-07-10 18:03:43"]
        ]);
        DB::table('job')->insert([
            ["title"=>"PHP Developer (MySQL, JQuery, Bootstrap)",
           
            "salary"=>2000,
            "skill"=>"Laravel",
            "address"=>"328 Võ Văn Kiệt, District 1, Ho Chi Minh",
            "detail"=>"Job Description
            Xây dựng và phát triển phần mềm ứng dụng bằng ngôn ngữ PHP, Jquery, Bootstrap… với các hệ quản trị cơ sở dữ liệu MySQL.
            Xây dựng và phát triển các dự án trên nền công nghệ Web, API.
            Cập nhật kiến thức về công nghệ và nghiệp vụ theo yêu cầu.
            Báo cáo tiến độ công việc chi tiết theo tuần, tháng, quý.
            Thực hiện các công việc khác theo sự phân công của cấp trên",
            "Require"=>"<p><strong>Trình độ học vấn:</strong></p>

            <ul>
                <li>Tốt nghiệp đại học/cao đẳng chuyên nghành CNTT trở lên</li>
            </ul>
            
            <p><strong>Kiến thức/ Chuyên môn có liên quan:</strong></p>
            
            <ul>
                <li>Thành thạo ngôn ngữ lập trình PHP (là một lợi thế),…</li>
                <li>Nắm vững và sử dụng thành thạo cơ sở dữ liệu, hệ quản trị cơ sở dữ liệu: MySQL, MongoDB</li>
            </ul>
            
            <p><strong>Các kỹ năng cần có:</strong></p>
            
            <ul>
                <li>Kỹ năng làm việc nhóm và độc lập tốt</li>
                <li>Kỹ năng lập kế hoạch triển khai công việc</li>
                <li>Kỹ năng giao tiếp, thuyết trình và đào tạo tốt</li>
                <li>Chủ động, có trách nhiệm sáng tạo trong công việc, có ý thức kỷ luật cao, chịu áp lực công việc tốt</li>
                <li>Đọc và hiểu tài liệu chuyên nghành Tiếng Anh tốt</li>
                <li>Có khả năng nghiên cứu công nghệ mới và tích hợp hệ thống</li>
            </ul>
            
            <p><strong>Các kinh nghiệm liên quan:</strong></p>
            
            <ul>
                <li>Tối thiểu1 – 3 năm kinh nghiệm&nbsp;xây dựng các ứng dụng trong một trong các nền tảng PHP, Node.Js, Javascript, HTML5, Json, MVC...</li>
                <li>Có kinh nghiệm xử lý dữ liệu lớn</li>
            </ul>",
            "Benefit"=>"<ul>
            <li>Lương upto 1000$.</li>
            <li>Review 2 lần/ năm.</li>
            <li>Phụ cấp ăn 30.000 vnd/ ngày công. Phụ cấp thêm tùy theo cấp bậc</li>
            <li>Thời gian làm việc 8h30-17h30 từ thứ 2 đến sáng thứ 7.</li>
            <li>Hưởng đầy đủ các chế độ theo luật lao động hiện hành BHXH, BHYT, BHTN</li>
            <li>Nghỉ phép 12 ngày/ năm, các ngày lễ tết theo quy định</li>
            <li>Thưởng lương kết quả kinh doanh,..., lễ, tết,...vv</li>
            <li>Chính sách phúc lợi theo quy định của Công ty đa dạng: Chăm sóc sức khỏe định kì hàng năm; Gói bảo hiểm sức khỏe chuyên biệt tùy theo cấp bậc, bảo hiểm tại nạn PTI.</li>
            <li>Các hoạt động Teambuilding, thể thao, traning, tri ân, chăm lo đời sống tinh thần CBNV và thân nhân...</li>
            <li>Môi trường làm việc thân thiện</li>
            <li>Cơ hội học tập, thăng tiến cao</li>
        </ul>",
            "idCompany"=>11,
            "DeadLine"=>'2020-07-25',
            "created_at"=>"2020-07-10 18:05:43",
            "updated_at"=>"2020-07-10 18:05:43"]
        ]);
        DB::table('job')->insert([
            ["title"=>"3 Senior .NET Web Developer/ Team Leader",
           
            "salary"=>2000,
            "skill"=>"Laravel",
            "address"=>"328 Võ Văn Kiệt, District 1, Ho Chi Minh",
            "detail"=>"Job Description
            Thiết kế, xây dựng framework cho các project trên nền tảng .NET
            Design các non-function của project
            Thiết kế & viết code ứng dụng Web Application
            Chịu trách nhiệm build & release sản phẩm đúng deadline",
            "Require"=>"<ul>
            <li>Tốt nghiệp đại học chuyên ngành CNTT</li>
            <li>Có ít nhất 3 năm kinh nghiệm về lập trình ứng dụng quản lý trên WEB và đã từng làm leader ít nhất 01 project phát triển trên công nghệ .NET</li>
            <li>Có kiến thức về lập trình hướng đối tượng</li>
            <li>Lập trình thành thạo với .Net Framework 4.0, ASP.NET C#, hoặc .Net, C#, Web Services, MVC, WCF, Entity Framework, LinQ</li>
            <li>Kỹ năng phát triển web: HTML5/CSS3 hoặc HTML/XHTML/XML, CSS, Bootstrap, jQuery and jQueryUI, ExtJS, AngularJS, Typescript</li>
            <li>Có kinh nghiệm làm việc với các hệ quản trị CSDL: MS SQL Server, No SQL</li>
            <li>Đam mê công việc, sự sáng tạo và đổi mới</li>
            <li>Kỹ năng giải quyết vấn đề linh hoạt, sẵn sàng phá bỏ các rào cản, tích cực tìm kiếm các giải pháp thay thế để đạt mục tiêu cần có</li>
            <li>Tinh thần hợp tác, chủ động, nhiệt tình, hòa đồng trong công việc, làm việc tốt theo nhóm</li>
            <li>Có tinh thần trách nhiệm cao. Cầu thị, tự tin, quyết đoán</li>
            <li>Có kinh nghiệm về Python, Machine learning là một lợi thế</li>
            <li>Có kinh nghiệm React Native là một lợi thế</li>
            <li>Ưu tiên ứng viên giao tiếp được bằng tiếng Anh.</li>
        </ul>",
            "Benefit"=>"<ul>
            <li>Mức lương cạnh tranh dựa trên năng lực nhân viên.</li>
            <li>Thưởng THÁNG/QUÝ/NĂM theo mức độ hoàn thành chỉ tiêu năng suất (KPRI) được giao. Thưởng theo tiến độ dự án phần mềm.</li>
            <li>Lương tháng 13, thưởng trong tất cả các ngày Lễ - Tết,..</li>
            <li>Được học tiếng anh miễn phí tại Outerspace Language School.</li>
            <li>Hưởng đầy đủ các chế độ phúc lợi.</li>
            <li>Hệ thống phụ cấp hấp dẫn như: thâm niên, chứng chỉ văn bằng, hỗ trợ khách hàng …</li>
            <li>Du lịch, khám sức khỏe định kỳ, sinh nhật nhân viên, ... cho toàn thể nhân viên.</li>
            <li>Môi trường làm việc trẻ trung, năng động, và nhiều cơ hội thăng tiến trong công việc.</li>
            <li>Thời gian làm việc: Từ thứ 2 – thứ 6.</li>
        </ul>",
            "idCompany"=>11,
            "DeadLine"=>'2020-07-25',
            "created_at"=>"2020-07-10 18:07:43",
            "updated_at"=>"2020-07-10 18:07:43"]
        ]);
    }
    
}
