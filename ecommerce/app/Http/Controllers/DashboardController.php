<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tinify\Tinify;

class Language {
    public string $image;
    public string $title;

    public function __construct($title, $image) {
        $this->title = $title;
        $this->image = $image;
    }
}

class Rating {
    public string $image;

    public function __construct($image) {
        $this->image = $image;
    }
}

class Service {
    public string $title;
    public string $image;

    public function __construct($title, $image) {
        $this->title = $title;
        $this->image = $image;
    }
}

class FeatureRecommend {

    public string $title;
    public string $sub_title;
    public $options = [];
    public string $banner;

    public function __construct($title, $sub_title, $options, $banner) {
        $this->title = $title;
        $this->sub_title = $sub_title;
        $this->options = $options;
        $this->banner = $banner;
    }
}

class Feature {
    public string $title;
    public string $icon;
    public string $banner;
    public $recommends = [];
    public function __construct($title, $icon, $banner, $recommends) {
        $this->title = $title;
        $this->icon = $icon;
        $this->banner = $banner;
        $this->recommends = $recommends;
    }
}

class SolutionContet {
    public string $flag;
    public string $title;
    public string $content;

    public function __construct($flag, $title, $content) {
        $this->flag = $flag;
        $this->title = $title;
        $this->content = $content;
    }
}

class Solution {
    public string $tab;
    public $image;
    public $items = [];

    public function __construct($tab, $image, $items) {
        $this->tab = $tab;
        $this->image = $image;
        $this->items = $items;
    }

}

class DashboardController extends Controller {

    public $tinify_service = null;

    public function __construct() { }

    public function index() {

        // try {
        //     $path_origin = "assets/images/sections/feature/cards/leave-management.png";
        //     $path_optimize = "assets/images_optimize/sections/feature/cards/leave-management.png";

        //     $source = \Tinify\fromFile($path_origin);
        //     $source->toFile($path_optimize);

        // } catch (Tinify\Exception $e) {
        //     echo $e->getMessage();
        // }

        $languages = [
            new Language("Tiếng việt", "assets/images_optimize/flags/flag-vi.png"),
            new Language("English", "assets/images_optimize/flags/flag-en.png"),
        ];

        $services = [
            new Service("Tuyển dụng", "assets/images_optimize/icons/icon-hiring.png"),
            new Service("Đào tạo", "assets/images_optimize/icons/icon-learning.png"),
            new Service("Core HR", "assets/images_optimize/icons/icon-employee-onboarding.png"),
            new Service("Xếp ca", "assets/images_optimize/icons/icon-scheduling.png"),
            new Service("Chấm công", "assets/images_optimize/icons/icon-time-tracking.png"),
            new Service("Lương", "assets/images_optimize/icons/icon-tinh-luong-tu-dong.png"),
            new Service("Gắn kết", "assets/images_optimize/icons/icon-career.png"),
            new Service("Nhân tài", "assets/images_optimize/icons/icon-about-us.png"),
            new Service("Hiệu suất", "assets/images_optimize/icons/icon-quan-ly-okr-bsc-kpi.png"),
            new Service("Yêu cầu", "assets/images_optimize/icons/icon-request-approvals.png"),
            new Service("Công việc", "assets/images_optimize/icons/icon-tasks-workflow.png"),
            new Service("OKR-KPI", "assets/images_optimize/icons/icon-bao-cao-dong.png"),
        ];

        $features = [
            new Feature(
                "Tìm kiếm nhân tài",
                "assets/images_optimize/icons/icon-tab-talent-aquistion.svg",
                "assets/images_optimize/sections/feature/banners/tab-talent-aquisition.png",
                [
                    new FeatureRecommend(
                        "Tìm kiếm Nhân tài",
                        "Tìm kiếm nhân sự phù hợp", 
                        [],
                        "assets/images_optimize/sections/feature/cards/leave-management.png"
                    ),
                    new FeatureRecommend(
                        "Quyền lợi nhân viên",
                        "Chấm công & tính lương toàn diện", 
                        [],
                        "assets/images_optimize/sections/feature/cards/employees-onboarding.png"
                    ),
                ]
            ),
            new Feature(
                "Quyền lợi nhân viên",
                "assets/images_optimize/icons/icon-tab-benefits.svg",
                "assets/images_optimize/sections/feature/banners/tab-talent-aquisition.png",
                [
                    new FeatureRecommend(
                        "Tìm kiếm Nhân tài",
                        "Tìm kiếm nhân sự phù hợp", 
                        [],
                        "assets/images_optimize/sections/feature/cards/leave-management.png"
                    ),
                    new FeatureRecommend(
                        "Quyền lợi nhân viên",
                        "Chấm công & tính lương toàn diện", 
                        [],
                        "assets/images_optimize/sections/feature/cards/employees-onboarding.png"
                    ),
                ]
            ),
            new Feature(
                "Quản lý nhân tài",
                "assets/images_optimize/icons/icon-tab-talent-management.svg",
                "assets/images_optimize/sections/feature/banners/tab-talent-aquisition.png",
                [
                    new FeatureRecommend(
                        "Tìm kiếm Nhân tài",
                        "Tìm kiếm nhân sự phù hợp", 
                        [],
                        "assets/images_optimize/sections/feature/cards/leave-management.png"
                    ),
                    new FeatureRecommend(
                        "Quyền lợi nhân viên",
                        "Chấm công & tính lương toàn diện", 
                        [],
                        "assets/images_optimize/sections/feature/cards/employees-onboarding.png"
                    ),
                ]
            ),
            new Feature(
                "Thúc đẩy hiệu suất",
                "assets/images_optimize/icons/icon-tab-performance.svg",
                "assets/images_optimize/sections/feature/banners/tab-talent-aquisition.png",
                [
                    new FeatureRecommend(
                        "Tìm kiếm Nhân tài",
                        "Tìm kiếm nhân sự phù hợp", 
                        [],
                        "assets/images_optimize/sections/feature/cards/leave-management.png"
                    ),
                    new FeatureRecommend(
                        "Quyền lợi nhân viên",
                        "Chấm công & tính lương toàn diện", 
                        [],
                        "assets/images_optimize/sections/feature/cards/employees-onboarding.png"
                    ),
                ]
            ),
            new Feature(
                "Quản lý nguồn lực",
                "assets/images_optimize/icons/icon-tab-workforce.svg",
                "assets/images_optimize/sections/feature/banners/tab-talent-aquisition.png",
                [
                    new FeatureRecommend(
                        "Tìm kiếm Nhân tài",
                        "Tìm kiếm nhân sự phù hợp", 
                        [],
                        "assets/images_optimize/sections/feature/cards/leave-management.png"
                    ),
                    new FeatureRecommend(
                        "Quyền lợi nhân viên",
                        "Chấm công & tính lương toàn diện", 
                        [],
                        "assets/images_optimize/sections/feature/cards/employees-onboarding.png"
                    ),
                ]
            ),
        ];

        $ratings = [
            new Rating("assets/images_optimize/logos/companys/logo-vinamilk.png"),
            new Rating("assets/images_optimize/logos/companys/logo-katinat.png"),
            new Rating("assets/images_optimize/logos/companys/logo-turner.png"),
            new Rating("assets/images_optimize/logos/companys/logo-decathlon.png"),
            new Rating("assets/images_optimize/logos/companys/logo-vascara.png"),
            new Rating("assets/images_optimize/logos/companys/logo-vinhomes.png"),
            new Rating("assets/images_optimize/logos/companys/logo-shopee.png"),
            new Rating("assets/images_optimize/logos/companys/logo-ecoe.png"),
            new Rating("assets/images_optimize/logos/companys/logo-galaxyone.png"),
            new Rating("assets/images_optimize/logos/companys/logo-vieON.png"),
        ];

        $solutions = [
            new Solution(
                "Chuỗi F&B",
                "assets/images_optimize/sections/solution/chuoi-f&b.webp",
                [
                    new SolutionContet(
                        "Tính năng 1",
                        "Xếp lịch đơn giản",
                        "Tanca giúp bạn sắp xếp các vị trí và thời gian làm việc trong các cửa hàng một cách linh hoạt nhất. Bạn có thể tối ưu hóa chi phí bằng việc quản lý lịch chi tiết của nhân viên phục vụ, đầu bếp, tài xế giao hàng. Chỉ mất vài phút hàng tuần để quản lý lịch làm việc chi tiết và logic."
                    ),
                    new SolutionContet(
                        "Tính năng 2",
                        "Chấm công điện thoại",
                        "Chỉ cần điện thoại thông minh, mọi nhân viên có thể chấm công trên thiết bị của họ. Việc chấm công trở nên đơn giản hơn với phương pháp định vị vị trí GPS hay kết nối hệ thống Wifi của cửa hàng."
                    ),
                    new SolutionContet(
                        "Tính năng 3",
                        "Truyền thông nội bộ",
                        "Ban bố các quy định về an toàn thực phẩm, các tài liệu hướng dẫn cách nấu hay pha chế, hoặc công bố các chương trình khuyến mãi khách hàng… Tất cả đều được thực hiện dễ dàng trên cả ứng dụng và nền tảng Web."
                    ),
                ]
            ),
            new Solution(
                "Chuỗi Bán lẻ",
                "assets/images_optimize/sections/solution/chuoi-ban-le.webp",
                [
                    new SolutionContet(
                        "Tính năng 1",
                        "Tự động hóa xếp lịch",
                        "Tanca giúp cửa hàng của bạn tiết kiệm hàng ngàn giờ làm hàng năm bằng việc quản lý lịch làm việc chuyên nghiệp. Nhân viên cửa hàng luôn sắp xếp thời gian hợp lý để tập trung vào việc tăng doanh thu. Các quản lý cửa hàng hoạch định chính xác tổng thời gian sẽ được sử dụng hàng năm tại từng cửa hàng của mình."
                    ),
                    new SolutionContet(
                        "Tính năng 2",
                        "Kết nối các cửa hàng",
                        "Nhân viên nhận được các thông tin, nội quy, thông báo bất kỳ đâu trên ứng dụng Tanca. Họ luôn kết nối với cửa hàng thông qua các bình luận hoặc trao đổi công việc."
                    ),
                    new SolutionContet(
                        "Tính năng 3",
                        "Tính lương tự động",
                        "Luật pháp ở mỗi quốc gia khác nhau, do vậy Tanca tính toán ra thời gian đơn giản nhất để bạn tích hợp vào các hệ thống lương của quốc gia mình. Mọi dữ liệu đúng theo chuẩn của ngành khách sạn hay dịch vụ."
                    ),
                ]
            ),
            new Solution(
                "Sản xuất",
                "assets/images_optimize/sections/solution/san-xuat.webp",
                [
                    new SolutionContet(
                        "Tính năng 1",
                        "Hệ thống ca linh hoạt",
                        "Tanca có thể quản lý ca làm việc dễ dàng và tạo lịch giao ca theo quy định của công ty. Tanca cũng có thể phát hiện tăng ca trước giờ làm, tăng ca sau giờ làm hoặc số giờ làm thêm quá quy định cho phép."
                    ),
                    new SolutionContet(
                        "Tính năng 2",
                        "Chấm công đa cách thức",
                        "Bạn có thường phải thuê nhân viên tạm thời trong một khoảng thời gian ngắn không? Việc chấm công bằng vân tay sẽ rất mất thời gian và không chính xác. Sử dụng Camera AI như một cách chấm công đơn giản và dễ dàng cho nhân viên thời vụ."
                    ),
                    new SolutionContet(
                        "Tính năng 3",
                        "TTính lương tự động",
                        "Thay vì phải mất vài giờ, vài ngày để thực hiện công việc tính lương hàng tháng, Tanca sẽ thực hiện công việc này hoàn toàn tự động. Không có sự can thiệp của con người nên thông tin hoàn toàn chính xác."
                    ),
                ]
            ),
            new Solution(
                "Xây dựng",
                "assets/images_optimize/sections/solution/xay-dung-va-bds.webp",
                [
                    new SolutionContet(
                        "Tính năng 1",
                        "Lịch làm việc tại nhiều vị trí",
                        "Tanca cho phép bạn xây dựng lịch làm việc linh động ở nhiều dự án, công trình khác nhau. Giúp bạn quản lý những ca làm việc phức tạp, cần di chuyển qua lại ở nhiều dự án."
                    ),
                    new SolutionContet(
                        "Tính năng 2",
                        "Tính công cho nhiều dự án",
                        "Tanca hoạt động trên đám mây nên nhân viên có thể chấm công từ điện thoại của họ khi có kết nối internet. Tanca quản lý các ca làm đã được xếp, ca làm mở, ca trùng lịch hay ngay cả khi không có ca. Nhân viên có thể chấm công hợp lệ bất kỳ khi nào và hệ thống sẽ tính toán chính xác giờ làm việc thực tế của họ."
                    ),
                    new SolutionContet(
                        "Tính năng 3",
                        "Giao và kiểm soát công việc",
                        "Lập kế hoạch các công việc cần thực hiện tại công trường và các công việc phối hợp trong nhóm. Đánh giá tình trạng hoàn thành và các vấn đề cần giải quyết. Với Tanca, mọi nhân viên quản lý công việc một cách dễ dàng và thuận tiện."
                    ),
                ]
            ),
            new Solution(
                "Giáo dục",
                "assets/images_optimize/sections/solution/giao-duc.webp",
                [
                    new SolutionContet(
                        "Tính năng 1",
                        "Lịch dạy và lịch làm việc",
                        "Dễ dàng giao ca cho giáo viên. Quản lý lịch làm việc phức tạp bằng nhiều cách như đăng ký ca làm việc, sắp xếp ca làm việc hay nhập lịch vào hệ thống... Tanca giải quyết mọi vấn đề trong việc quản lý lịch làm việc cho các trường mẫu giáo, tiểu học, trung học hay đại học."
                    ),
                    new SolutionContet(
                        "Tính năng 2",
                        "Theo dõi vị trí",
                        "Quản lý giáo viên từ xa qua hệ thống định vị GPS. Bạn có thể thấy các giáo viên tham dự các lớp học ở các trường khác nhau, hình ảnh về công việc đã hoàn thành hoặc công việc đã làm."
                    ),
                    new SolutionContet(
                        "Tính năng 3",
                        "Tính toán lương chính xác",
                        "Quy định của mỗi trường là khác nhau, vì vậy Tanca tính toán thời điểm dễ dàng nhất để bạn hòa nhập vào hệ thống lương của quốc gia mình. Tất cả dữ liệu đều tuân theo tiêu chuẩn chính xác."
                    ),
                ]
            ),
            new Solution(
                "Y tế & Sưc khoẻ",
                "assets/images_optimize/sections/solution/y-te-va-suc-khoe.webp",
                [
                    new SolutionContet(
                        "Tính năng 1",
                        "Sắp xếp lịch làm việc",
                        "Các bác sĩ và y tá thay vì nắm bắt lịch trình làm việc của họ thông qua Excel, phần mềm bệnh viện hoặc bảng phân công trên giấy, Tanca sẽ hỗ trợ sắp xếp lịch làm việc đơn giản. Các thay đổi về lịch trình có thể được điều chỉnh bằng cách quản lý và thông báo ngay qua điện thoại cho các bác sĩ."
                    ),
                    new SolutionContet(
                        "Tính năng 2",
                        "Chấm công an toàn",
                        "Hospitals are high-risk areas for the spread of infection. Therefore, direct time tracking through time clocks is not safe. Using AI cameras or mobile phones to track time helps to avoid contact, be safer and more accurate."
                    ),
                    new SolutionContet(
                        "Tính năng 3",
                        "Quản lý dữ liệu bảo mật",
                        "Dữ liệu nhân viên được số hóa và theo dõi trên hệ thống giúp quản lý nhân viên hiệu quả hơn, giảm thiểu công việc giấy tờ và các công việc lặp đi lặp lại tốn thời gian."
                    ),
                ]
            ),
            new Solution(
                "Công nghệ",
                "assets/images_optimize/sections/solution/cong-nghe.webp",
                [
                    new SolutionContet(
                        "Tính năng 1",
                        "Tuyển dụng hiệu quả",
                        "Giải quyết toàn bộ nhu cầu về tuyển dụng và giúp kết nối với hàng trăm trang tuyển dụng khác nhau. Tanca còn số hóa mọi quy trình tuyển dụng giúp việc tuyển dụng trở nên hiệu quả nhất."
                    ),
                    new SolutionContet(
                        "Tính năng 2",
                        "Chấm công & tính lương",
                        "Sử dụng ứng dụng dành cho thiết bị di động của Tanca chấm công dễ dàng và tính giờ nghỉ ngơi. Phần mềm chấm công cũng giúp tính lương nhanh chóng và chính xác theo thời gian thực."
                    ),
                    new SolutionContet(
                        "Tính năng 3",
                        "Giao việc và kiểm soát",
                        "Lên các công việc cần làm tại nhà khách hàng và các đầu việc phối hợp đội nhóm. Đánh giá tình trạng hoàn thành và các vấn đề cần giải quyết. Với Tanca mọi nhân viên quản lý các đầu việc dễ dàng và tiện lợi."
                    ),
                ]
            ),
        ];

        return view("dashboard.dashboard-en", [
            'languages' => $languages,
            'features' => $features,
            'ratings' => $ratings,
            'services' => $services,
            'solutions' => $solutions,
        ]);
    }
}
