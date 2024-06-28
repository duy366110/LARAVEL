<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Service {
    public string $title;
    public string $image;

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

class DashboardController extends Controller {

    public function index() {
        $services = [
            new Service("Tuyển dụng", "assets/images/icons/icon-hiring.png"),
            new Service("Đào tạo", "assets/images/icons/icon-learning.png"),
            new Service("Core HR", "assets/images/icons/icon-employee-onboarding.png"),
            new Service("Xếp ca", "assets/images/icons/icon-scheduling.png"),
            new Service("Chấm công", "assets/images/icons/icon-time-tracking.png"),
            new Service("Lương", "assets/images/icons/icon-tinh-luong-tu-dong.png"),
            new Service("Gắn kết", "assets/images/icons/icon-career.png"),
            new Service("Nhân tài", "assets/images/icons/icon-about-us.png"),
            new Service("Hiệu suất", "assets/images/icons/icon-quan-ly-okr-bsc-kpi.png"),
            new Service("Yêu cầu", "assets/images/icons/icon-request-approvals.png"),
            new Service("Công việc", "assets/images/icons/icon-tasks-workflow.png"),
            new Service("OKR-KPI", "assets/images/icons/icon-bao-cao-dong.png"),
        ];


        $ratings = [
            new Rating("assets/images/logos/companys/logo-vinamilk.png"),
            new Rating("assets/images/logos/companys/logo-katinat.png"),
            new Rating("assets/images/logos/companys/logo-turner.png"),
            new Rating("assets/images/logos/companys/logo-decathlon.png"),
            new Rating("assets/images/logos/companys/logo-vascara.png"),
            new Rating("assets/images/logos/companys/logo-vinhomes.png"),
            new Rating("assets/images/logos/companys/logo-shopee.png"),
            new Rating("assets/images/logos/companys/logo-ecoe.png"),
            new Rating("assets/images/logos/companys/logo-galaxyone.png"),
            new Rating("assets/images/logos/companys/logo-vieON.png"),
        ];

        return view("dashboard.dashboard-en", [
            'services' => $services,
            "ratings" => $ratings,
        ]);
    }
}
