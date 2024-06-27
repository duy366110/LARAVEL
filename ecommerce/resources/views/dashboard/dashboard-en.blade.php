@extends("layout.layout-amp")

@section("section-link")
    <link rel="stylesheet" href="{{asset("assets/css/sections/dashboard/dashboard.css")}}" />
@endsection

@section("content")
    <!-- Banner -->
    <section class="dashboard-banner relative bg-bottom bg-no-repeat bg-cover bg-[url('{{asset("assets/images/banners/bg-green-homepage.png")}}')]">
        <img class="pt-20 w-full" src="{{asset("assets/images/banners/image-top-homepage.png")}}" alt="banner" />
        <div class="banner-infor absolute w-full flex flex-col items-center">
            <h2 class="banner-infor-title text-[28px] md:text-3xl font-bold leading-normal mb-6">Siêu sức mạnh của nền tảng HRM hàng đầu Châu Á</h2>
            <h3 class="banner-infor-subtitle text-lg md:text-lg font-normal leading-6 mb-6">Quản lý toàn bộ vòng đời phát triển của nhân viên</h3>
            <div class="banner-infor-btn-options flex gap-10">
                <a class="common-btn common-normal-btn py-3 px-4" href="#">Dùng thử miễn phí</a>
                <a class="common-btn common-hover-btn py-3 px-4" href="#">Cần tư vấn</a>
            </div>
        </div>
    </section>

    <section class="max-w-screen-2xl m-auto pt-20 pb-[120px]">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row divide-x divide-gray-300">
                <div class="basic-1/3">
                    <h2 class="font-medium text-xl md:text-2xl">Được hơn 57,000 nơi làm việc tin tưởng</h2>
                    <div class="flex justify-center md:justify-start items-center my-2 md:my-7 gap-3">
                        <i class="dashboard-rating-yellow fa fa-star" aria-hidden="true"></i>
                        <i class="dashboard-rating-yellow fa fa-star" aria-hidden="true"></i>
                        <i class="dashboard-rating-yellow fa fa-star" aria-hidden="true"></i>
                        <i class="dashboard-rating-yellow fa fa-star" aria-hidden="true"></i>
                        <i class="dashboard-rating-gray fa fa-star" aria-hidden="true"></i>
                    </div>
                    <p class="font-normal text-md md:text-lg">Dựa trên hơn 10,000 đánh giá thực tế của người dùng</p>
                </div>
                <div class="basis-2/3 px-3 md:px-12 md:ml-12">
                    <div class="row clients-trust grid grid-flow-row-dense grid-cols-4 md:grid-cols-5">
                        <img class="h-8 m-2 md:h-16 md:m-2 flex justify-center text-center" src="{{asset("assets/images/logos/companys/logo-vinamilk.png")}}" alt="">
                        <img class="h-8 m-2 md:h-16 md:m-2 flex justify-center text-center" src="{{asset("assets/images/logos/companys/logo-katinat.png")}}" alt="">
                        <img class="h-8 m-2 md:h-16 md:m-2 flex justify-center text-center" src="{{asset("assets/images/logos/companys/logo-turner.png")}}" alt="">
                        <img class="h-8 m-2 md:h-16 md:m-2 flex justify-center text-center" src="{{asset("assets/images/logos/companys/logo-decathlon.png")}}" alt="">
                        <img class="h-8 m-2 md:h-16 md:m-2 flex justify-center text-center" src="{{asset("assets/images/logos/companys/logo-vascara.png")}}" alt="">
                        <img class="h-8 m-2 md:h-16 md:m-2 flex justify-center text-center" src="{{asset("assets/images/logos/companys/logo-vinhomes.png")}}" alt="">
                        <img class="h-8 m-2 md:h-16 md:m-2 flex justify-center text-center" src="{{asset("assets/images/logos/companys/logo-shopee.png")}}" alt="">
                        <img class="h-8 m-2 md:h-16 md:m-2 flex justify-center text-center" src="{{asset("assets/images/logos/companys/logo-ecoe.png")}}" alt="">
                        <img class="h-8 m-2 md:h-16 md:m-2 flex justify-center text-center" src="{{asset("assets/images/logos/companys/logo-galaxyone.png")}}" alt="">
                        <img class="h-8 m-2 md:h-16 md:m-2 flex justify-center text-center" src="{{asset("assets/images/logos/companys/logo-vieON.png")}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-2xl m-auto">
        <div class="container mx-auto">
            <h2 class="font-bold text-3xl text-center">Tất cả tính năng của nền tảng HR toàn diện</h2>
            <ul class="flex gap-3 justify-center my-20">
                <li class="w-[30%] md:w-[8%] overflow-hidden text-center">
                    <a href="#">
                        <div class="w-16 h-16 rouded-lg bg-[#F8F9FF] m-auto flex flex-col justify-center mb-4">
                            <img class="w-10 h-10 m-auto" src="{{asset("assets/images/icons/icon-hiring.png")}}" alt="icons service" />
                        </div>
                        <h3 class="text-lg font-bold">Tuyển dụng</h3>
                    </a>
                </li>
                <li class="w-[30%] md:w-[8%] overflow-hidden text-center">
                    <a href="#">
                        <div class="w-16 h-16 rouded-lg bg-[#F8F9FF] m-auto flex flex-col justify-center mb-4">
                            <img class="w-10 h-10 m-auto" src="{{asset("assets/images/icons/icon-learning.png")}}" alt="icons service" />
                        </div>
                        <h3 class="text-lg font-bold">Đào tạo</h3>
                    </a>
                </li>
                <li class="w-[30%] md:w-[8%] overflow-hidden text-center">
                    <a href="#">
                        <div class="w-16 h-16 rouded-lg bg-[#F8F9FF] m-auto flex flex-col justify-center mb-4">
                            <img class="w-10 h-10 m-auto" src="{{asset("assets/images/icons/icon-employee-onboarding.png")}}" alt="icons service" />
                        </div>
                        <h3 class="text-lg font-bold">Core HR</h3>
                    </a>
                </li>
                <li class="w-[30%] md:w-[8%] overflow-hidden text-center">
                    <a href="#">
                        <div class="w-16 h-16 rouded-lg bg-[#F8F9FF] m-auto flex flex-col justify-center mb-4">
                            <img class="w-10 h-10 m-auto" src="{{asset("assets/images/icons/icon-scheduling.png")}}" alt="icons service" />
                        </div>
                        <h3 class="text-lg font-bold">Xếp ca</h3>
                    </a>
                </li>
                <li class="w-[30%] md:w-[8%] overflow-hidden text-center">
                    <a href="#">
                        <div class="w-16 h-16 rouded-lg bg-[#F8F9FF] m-auto flex flex-col justify-center mb-4">
                            <img class="w-10 h-10 m-auto" src="{{asset("assets/images/icons/icon-time-tracking.png")}}" alt="icons service" />
                        </div>
                        <h3 class="text-lg font-bold">Chấm công</h3>
                    </a>
                </li>
                <li class="w-[30%] md:w-[8%] overflow-hidden text-center">
                    <a href="#">
                        <div class="w-16 h-16 rouded-lg bg-[#F8F9FF] m-auto flex flex-col justify-center mb-4">
                            <img class="w-10 h-10 m-auto" src="{{asset("assets/images/icons/icon-tinh-luong-tu-dong.png")}}" alt="icons service" />
                        </div>
                        <h3 class="text-lg font-bold">Lương</h3>
                    </a>
                </li>
                <li class="w-[30%] md:w-[8%] overflow-hidden text-center">
                    <a href="#">
                        <div class="w-16 h-16 rouded-lg bg-[#F8F9FF] m-auto flex flex-col justify-center mb-4">
                            <img class="w-10 h-10 m-auto" src="{{asset("assets/images/icons/icon-career.png")}}" alt="icons service" />
                        </div>
                        <h3 class="text-lg font-bold">Gắn kết</h3>
                    </a>
                </li>
                <li class="w-[30%] md:w-[8%] overflow-hidden text-center">
                    <a href="#">
                        <div class="w-16 h-16 rouded-lg bg-[#F8F9FF] m-auto flex flex-col justify-center mb-4">
                            <img class="w-10 h-10 m-auto" src="{{asset("assets/images/icons/icon-about-us.png")}}" alt="icons service" />
                        </div>
                        <h3 class="text-lg font-bold">Nhân tài</h3>
                    </a>
                </li>
                <li class="w-[30%] md:w-[8%] overflow-hidden text-center">
                    <a href="#">
                        <div class="w-16 h-16 rouded-lg bg-[#F8F9FF] m-auto flex flex-col justify-center mb-4">
                            <img class="w-10 h-10 m-auto" src="{{asset("assets/images/icons/icon-quan-ly-okr-bsc-kpi.png")}}" alt="icons service" />
                        </div>
                        <h3 class="text-lg font-bold">Hiệu suất</h3>
                    </a>
                </li>
                <li class="w-[30%] md:w-[8%] overflow-hidden text-center">
                    <a href="#">
                        <div class="w-16 h-16 rouded-lg bg-[#F8F9FF] m-auto flex flex-col justify-center mb-4">
                            <img class="w-10 h-10 m-auto" src="{{asset("assets/images/icons/icon-request-approvals.png")}}" alt="icons service" />
                        </div>
                        <h3 class="text-lg font-bold">Yêu cầu</h3>
                    </a>
                </li>
                <li class="w-[30%] md:w-[8%] overflow-hidden text-center">
                    <a href="#">
                        <div class="w-16 h-16 rouded-lg bg-[#F8F9FF] m-auto flex flex-col justify-center mb-4">
                            <img class="w-10 h-10 m-auto" src="{{asset("assets/images/icons/icon-tasks-workflow.png")}}" alt="icons service" />
                        </div>
                        <h3 class="text-lg font-bold">Công việc</h3>
                    </a>
                </li>
                <li class="w-[30%] md:w-[8%] overflow-hidden text-center">
                    <a href="#">
                        <div class="w-16 h-16 rouded-lg bg-[#F8F9FF] m-auto flex flex-col justify-center mb-4">
                            <img class="w-10 h-10 m-auto" src="{{asset("assets/images/icons/icon-bao-cao-dong.png")}}" alt="icons service" />
                        </div>
                        <h3 class="text-lg font-bold">OKR-KPI</h3>
                    </a>
                </li>
            </ul>
            <div class="flex justify-center align-center">
                <a class="common-btn common-normal-btn py-3 px-4" href="#">Cần tư vấn</a>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include("commons.common-footer")
@endsection