@extends("layout.layout-amp")

@section("section-link")
    <link rel="stylesheet" href="{{asset("assets/css/sections/dashboard/dashboard.css")}}" />
@endsection

@section("content")
    <!-- SECTION BANNER -->
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

    <!-- SECTION RATING -->
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
                        @foreach($ratings as $rating)
                            <img class="h-8 m-2 md:h-16 md:m-2 flex justify-center text-center" src="{{asset($rating->image)}}" alt="">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION SERVICE -->
    <section class="max-w-screen-2xl m-auto">
        <div class="container mx-auto">
            <h2 class="font-bold text-3xl text-center">Tất cả tính năng của nền tảng HR toàn diện</h2>
            <ul class="flex gap-3 justify-center my-20">

                @foreach ($services as $service)
                    <li class="w-[30%] md:w-[8%] overflow-hidden text-center">
                        <a href="#">
                            <div class="w-16 h-16 rouded-lg bg-[#F8F9FF] m-auto flex flex-col justify-center mb-4">
                                <img class="w-10 h-10 m-auto" src="{{asset($service->image)}}" alt="icons service" />
                            </div>
                            <h3 class="text-lg font-bold">{{$service->title}}</h3>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="flex justify-center align-center">
                <a class="common-btn common-normal-btn py-3 px-4" href="#">Cần tư vấn</a>
            </div>
        </div>
    </section>

    <!-- SECTION FEATURE -->
    <section class="main-feature-section max-w-screen-2xl m-auto">
        <div class="container m-auto pt-[120px]">
            <h2 class="font-bold text-3xl text-center">Thành công của doanh nghiệp phụ thuộc vào chiến lược nhân sự</h2>
            <h3 class="text-center mt-6 text-[18px]">Tanca hỗ trợ doanh nghiệp theo dõi toàn diện sự phát triển sự nghiệp của nhân viên.</h3>

            <div class="feature-wrapper">
                <ul class="feature-tabs border-b border-gray-200 mt-20 flex flex-wrap gap-5 justify-center">
                    <li class="feature-tab-item">
                        <button class="inline-flex items-center justify-center p-2 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 group cursor-pointer font-medium text-sm md:text-lg mx-0 md:mx-0 border-transparent">
                            <img src="{{asset("assets/images/icons/icon-tab-talent-aquistion.svg")}}" alt="tanca icon" />
                            <span>Tìm kiếm nhân tài</span>
                        </button>
                    </li>

                    <li class="feature-tab-item">
                        <button class="inline-flex items-center justify-center p-2 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 group cursor-pointer font-medium text-sm md:text-lg mx-0 md:mx-0 border-transparent">
                            <img src="{{asset("assets/images/icons/icon-tab-benefits.svg")}}" alt="tanca icon" />
                            <span>Quyền lợi nhân viên</span>
                        </button>
                    </li>

                    <li class="feature-tab-item">
                        <button class="inline-flex items-center justify-center p-2 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 group cursor-pointer font-medium text-sm md:text-lg mx-0 md:mx-0 border-transparent">
                            <img src="{{asset("assets/images/icons/icon-tab-talent-management.svg")}}" alt="tanca icon" />
                            <span>Quản lý nhân tài</span>
                        </button>
                    </li>

                    <li class="feature-tab-item">
                        <button class="inline-flex items-center justify-center p-2 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 group cursor-pointer font-medium text-sm md:text-lg mx-0 md:mx-0 border-transparent">
                            <img src="{{asset("assets/images/icons/icon-tab-performance.svg")}}" alt="tanca icon" />
                            <span>Thúc đẩy hiệu suất</span>
                        </button>
                    </li>

                    <li class="feature-tab-item">
                        <button class="inline-flex items-center justify-center p-2 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 group cursor-pointer font-medium text-sm md:text-lg mx-0 md:mx-0 border-transparent">
                            <img src="{{asset("assets/images/icons/icon-tab-workforce.svg")}}" alt="tanca icon" />
                            <span>Quản lý nguồn lực</span>
                        </button>
                    </li>

                </ul>
                <div class="feature-contents py-20">Feature content</div>
            </div>
        </div>
    </section>

    <!-- SECTION SOLUTION -->
    <section class="bg-white">
        <div class="max-w-screen-xl 2xl:max-w-screen-2xl m-auto py-24">
            <h2 class="text-[24px] text-center leading-[35px] md:text-[30px] md:leading-[55px]">Tạo giải pháp phù hợp với doanh nghiệp của bạn</h2>
            <h3 class="text-center mt-6 text-[18px]">Tanca đã hỗ trợ 30 ngành kinh doanh.</h3>
            <div class="flex flex-col sm:flex-row border-2 border-[#ecf9f2] rounded-xl overflow-hidden mt-10">
                <ul class="solution-tabs flex flex-col  bg-[#ecf9f2] px-8 py-4">
                    <li><button class="st-active w-fit md:w-[200px] 2xl:w-[270px] px-2 py-2 md:px-0 md:py-5 rounded-lg my-1 md:my-4 text-center text-sm 2xl:text-lg bg-white inline-flex md:block mr-1 md:mr-0 aria-selected:bg-green-light-primary aria-selected:text-white aria-selected:relative dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300">Chuỗi F&B</button></li>
                    <li><button class="w-fit md:w-[200px] 2xl:w-[270px] px-2 py-2 md:px-0 md:py-5 rounded-lg my-1 md:my-4 text-center text-sm 2xl:text-lg bg-white inline-flex md:block mr-1 md:mr-0 aria-selected:bg-green-light-primary aria-selected:text-white aria-selected:relative dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300">Sản xuất</button></li>
                    <li><button class="w-fit md:w-[200px] 2xl:w-[270px] px-2 py-2 md:px-0 md:py-5 rounded-lg my-1 md:my-4 text-center text-sm 2xl:text-lg bg-white inline-flex md:block mr-1 md:mr-0 aria-selected:bg-green-light-primary aria-selected:text-white aria-selected:relative dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300">Xây dựng</button></li>
                    <li><button class="w-fit md:w-[200px] 2xl:w-[270px] px-2 py-2 md:px-0 md:py-5 rounded-lg my-1 md:my-4 text-center text-sm 2xl:text-lg bg-white inline-flex md:block mr-1 md:mr-0 aria-selected:bg-green-light-primary aria-selected:text-white aria-selected:relative dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300">Giáo dục</button></li>
                    <li><button class="w-fit md:w-[200px] 2xl:w-[270px] px-2 py-2 md:px-0 md:py-5 rounded-lg my-1 md:my-4 text-center text-sm 2xl:text-lg bg-white inline-flex md:block mr-1 md:mr-0 aria-selected:bg-green-light-primary aria-selected:text-white aria-selected:relative dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300">Y tế & Sưc khoẻ</button></li>
                    <li><button class="w-fit md:w-[200px] 2xl:w-[270px] px-2 py-2 md:px-0 md:py-5 rounded-lg my-1 md:my-4 text-center text-sm 2xl:text-lg bg-white inline-flex md:block mr-1 md:mr-0 aria-selected:bg-green-light-primary aria-selected:text-white aria-selected:relative dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300">Công nghệ</button></li>
                </ul>

                <ul class="solution-contents">
                    <li class="flex gap-5 flex flex-col md:flex-row p-10 h-full">
                        <div class="solution-content-description flex-1 h-full bg-white">
                            <table class="mb-5">
                                <tbody>
                                    <tr>
                                        <td class="scd-td-pointer align-top">
                                            <p class="border border-[#1ecc78] rounded-full mr-3 px-1 py-1 text-center text-[15px] text-[#1ecc78]">Tính năng 1</p>
                                        </td>
                                        <td>
                                            <h4 class="font-bold text-[15px]">Xếp lịch đơn giản</h4>
                                            <p class="my-3">Tanca giúp bạn sắp xếp các vị trí và thời gian làm việc trong các cửa hàng một cách linh hoạt nhất. Bạn có thể tối ưu hóa chi phí bằng việc quản lý lịch chi tiết của nhân viên phục vụ, đầu bếp, tài xế giao hàng. Chỉ mất vài phút hàng tuần để quản lý lịch làm việc chi tiết và logic.</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="scd-td-pointer align-top">
                                            <p class="border border-[#1ecc78] rounded-full mr-3 px-1 py-1 text-center text-[15px] text-[#1ecc78]">Tính năng 2</p>
                                        </td>
                                        <td>
                                            <h4 class="font-bold text-[15px]">Chấm công điện thoại</h4>
                                            <p class="my-3">Chỉ cần điện thoại thông minh, mọi nhân viên có thể chấm công trên thiết bị của họ. Việc chấm công trở nên đơn giản hơn với phương pháp định vị vị trí GPS hay kết nối hệ thống Wifi của cửa hàng.</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="scd-td-pointer align-top">
                                            <p class="border border-[#1ecc78] rounded-full mr-3 px-1 py-1 text-center text-[15px] text-[#1ecc78]">Tính năng 3</p>
                                        </td>
                                        <td>
                                            <h4 class="font-bold text-[15px]">Truyền thông nội bộ</h4>
                                            <p class="my-3">Ban bố các quy định về an toàn thực phẩm, các tài liệu hướng dẫn cách nấu hay pha chế, hoặc công bố các chương trình khuyến mãi khách hàng… Tất cả đều được thực hiện dễ dàng trên cả ứng dụng và nền tảng Web.</p>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <div class="flex justify-center">
                                <a class="common-btn common-normal-btn py-3 px-4" href="#">Xem thêm</a>
                            </div>
                        </div>
                        <div class="h-full w-full md:w-[40%] md:ml-10 overflow-hidden">
                            <img class="solution-content-banner object-cover object-center h-full rounded-xl" src="{{asset("assets/images/sections/solution/chuoi-f&b.webp")}}" alt="solution banner" />
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- SECTION APPROVE -->
    <section class="max-w-screen-xl 2xl:max-w-screen-2xl m-auto py-24">
        <h2 class="text-[24px] text-center leading-[35px] md:text-[30px] md:leading-[55px]">Được công nhận bởi các tổ chức chuyên nghiệp</h2>
        <h3 class="text-center mt-6 text-[18px]">Nền tảng HR Tech tốt nhất Châu Á</h3>
        <div class="max-w-screen-xl 2xl:max-w-screen-2xl m-auto bg-gray-100 flex flex-col md:flex-row p-10 mt-10">
            <div class="w-full flex">
                <div class="p-2 mb-20 md:mb-0 md:p-10">
                    <img src="{{asset("assets/images/certificate/gartner-peerinsights.svg")}}" alt="tanca certificate" />
                    <h2 class="text-2xl font-normal">Tanca</h2>
                    <p class="mb-5 font-normal text-md md:text-lg">Cloud HCM Suites dành cho doanh nghiệp trên 1,000 nhân viên</p>
                    <p class="mb-0 text-[30px]">
                        <span>4.5<span>
                        <i class="dashboard-rating-yellow fa fa-star" aria-hidden="true"></i>
                        <i class="dashboard-rating-yellow fa fa-star" aria-hidden="true"></i>
                        <i class="dashboard-rating-yellow fa fa-star" aria-hidden="true"></i>
                        <i class="dashboard-rating-yellow fa fa-star" aria-hidden="true"></i>
                        <i class="dashboard-rating-yellow fa fa-star" aria-hidden="true"></i>
                    </p>
                    <a class="font-normal text-md md:text-lg text-[#1ecc78]" href="#">417 Ratings</a>
                </div>

                <div class="p-2 md:p-10 pt-20 md:pt-10 md:border-grey-bf border-t md:border-t-0 md:border-l">
                    <div class="grid grid-cols-2 gap-10">
                        <div>
                            <img src="{{asset("assets/images/certificate/custom-choise.svg")}}" alt="tanca certificate" />
                            <p class="font-normal text-md md:text-lg">Gartner report "Voice of the Customer" 2022</p>
                        </div>

                        <div>
                            <img src="{{asset("assets/images/certificate/software-suggest.svg")}}" alt="tanca certificate" />
                            <p class="font-normal text-md md:text-lg">Customers` Choice Software Recommendation Award</p>
                        </div>

                        <div>
                            <img src="{{asset("assets/images/certificate/Vendor-of-the-year-2022.svg")}}" alt="tanca certificate" />
                            <p class="font-normal text-md md:text-lg">Staffing Provider of the Year 2022</p>
                        </div>

                        <div>
                            <img src="{{asset("assets/images/certificate/ATS-software.svg")}}" alt="tanca certificate" />
                            <p class="font-normal text-md md:text-lg">Most Trusted ATS Software Award</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <section>

    <!-- SECTON QUESTION -->
    <section class="max-w-screen-xl 2xl:max-w-screen-xl m-auto py-20 flex flex-col md:flex-row">
        <div class="grid grid-cols-2 gap-20">
            <div>
                <h2 class="font-bold text-[30px] px-3 text-left leading-[38px] md:text-[30px] md:leading-[55px]">Tìm câu trả lời bạn cần</h2>
                <ul>
                    <li class="border-b-2">
                        <button class="hover:bg-gray-100 w-full flex justify-between align-center px-4 py-7">
                            <span>Tanca dùng để làm gì?</span>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                        <div class="overflow-visible h-auto px-4 pb-7">
                            <p class="font-normal text-md md:text-lg">Tanca quản lý toàn bộ vòng đời của nhân viên từ họ được tuyển dụng vào công ty cho đến khi họ nghỉ việc. Tanca là giải pháp lý tưởng cho các doanh nghiệp muốn chuyển đổi số việc quản lý nhân sự giúp công ty tăng trưởng vượt trội.</p>
                            <p class="font-normal text-md md:text-lg">Tanca gồm 12 nhóm tính năng giải quyết 4 bài toán từ Quản lý dữ liệu nhân sự, Đào tạo và nâng cao năng lực cho nhân viên, Quản lý lợi ích và xây dựng văn hóa làm việc theo hiệu suất.</p>
                        </div>
                    </li>

                    <li class="border-b-2">
                        <button class="hover:bg-gray-100 w-full flex justify-between align-center px-4 py-7">
                            <span>Tanca có miễn phí không?</span>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                        <div class="overflow-hidden h-0 px-4">
                            <p class="font-normal text-md md:text-lg">Tanca cung cấp một loạt các gói dịch vụ để đáp ứng nhu cầu của các tổ chức khác nhau. Gói khởi đầu của Tanca hoàn toàn miễn phí, phù hợp với các nhóm có tối đa 25 người dùng. Đối với các nhóm lớn hơn hoặc những nhu cầu nâng cao hơn các gói khác sẽ hỗ trợ nhu cầu cho họ. Thông tin chi tiết và các ưu đãi cụ thể của từng gói có thể được tìm thấy trực tiếp trên trang web định giá của chúng tôi.</p>
                        </div>
                    </li>

                    <li class="border-b-2">
                        <button class="hover:bg-gray-100 w-full flex justify-between align-center px-4 py-7">
                            <span>Ai sở hữu Tanca?</span>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                        <div class="overflow-hidden h-0 px-4">
                            <p class="font-normal text-md md:text-lg">Tanca được sở hữu và phát triển bởi công ty Tanca Global. Chúng tôi tự hào là nhà cung cấp nền tảng quản lý nhân sự hàng đầu tại Châu Á, với công nghệ tiên tiến và hiện đại. Tanca được thiết kế để giải quyết các thách thức trong quản lý nhân sự, giúp các doanh nghiệp có thể quản lý lịch làm việc, chấm công và xếp ca một cách hiệu quả. Được hơn 57.000 không gian làm việc trên toàn thế giới tin tưởng sử dụng, chúng tôi cam kết mang lại giải pháp quản lý nhân sự hiệu quả và bảo mật.</p>
                        </div>
                    </li>

                    <li class="border-b-2">
                        <button class="hover:bg-gray-100 w-full flex justify-between align-center px-4 py-7">
                            <span>An toàn và bảo mật</span>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                        <div class="overflow-hidden h-0 px-4">
                            <p class="font-normal text-md md:text-lg">Về mặt an toàn và bảo mật, Tanca cam kết bảo vệ thông tin cá nhân và dữ liệu của người dùng là ưu tiên hàng đầu. Nền tảng của chúng tôi cung cấp các tính năng bảo mật toàn diện, bảo vệ dữ liệu từ cấp độ vật lý đến ứng dụng, đảm bảo tính minh bạch và an toàn cho người dùng. Tanca liên tục cập nhật và nâng cao các biện pháp bảo mật để người dùng có thể yên tâm khi sử dụng các dịch vụ của chúng tôi.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col gap-5">
                <div class="p-9 bg-[#F5F9FF] rounded-xl">
                    <h2 class="font-bold text-[18px]">Đặt lịch tư vấn</h2>
                    <p class="my-5 font-normal text-md md:text-lg">Chúng tôi có thể hỗ trợ đội ngũ nhân sự của bạn như thế nào?</p>
                    <a class="common-btn common-hover-btn" href="#">
                        <span>Cần tư vấn</span>
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="p-9 bg-[#F5F9FF] rounded-xl">
                    <h2 class="font-bold text-[18px]">Khám phá những kiến thức khác?</h2>
                    <p class="my-5 font-normal text-md md:text-lg">Khám phá những lợi thế của Tanca dành cho các doanh nghiệp hàng đầu, hiểu rõ hơn về năng suất và so sánh phần mềm.</p>
                    <a class="common-btn common-hover-btn align-center" href="#">
                        <span>Khám phá Blog</span>
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include("commons.common-footer")
@endsection