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
        //     $path_origin = "assets/images/sections/solution/y-te-va-suc-khoe.webp";
        //     $path_optimize = "assets/images_optimize/sections/solution/y-te-va-suc-khoe.webp";

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

                ]
            ),
            new Solution(
                "Sản xuất",
                "assets/images_optimize/sections/solution/san-xuat.webp",
                [
                    
                ]
            ),
            new Solution(
                "Xây dựng",
                "assets/images_optimize/sections/solution/xay-dung-va-bds.webp",
                [
                    
                ]
            ),
            new Solution(
                "Giáo dục",
                "assets/images_optimize/sections/solution/giao-duc.webp",
                [
                    
                ]
            ),
            new Solution(
                "Y tế & Sưc khoẻ",
                "assets/images_optimize/sections/solution/y-te-va-suc-khoe.webp",
                [
                    
                ]
            ),
            new Solution(
                "Công nghệ",
                "assets/images_optimize/sections/solution/cong-nghe.webp",
                [
                    
                ]
            ),
        ];

        return view("dashboard.dashboard-en", [
            'languages' => $languages,
            'ratings' => $ratings,
            'services' => $services,
            'solutions' => $solutions,
        ]);
    }
}
