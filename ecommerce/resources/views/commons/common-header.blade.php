<div class="common-header-component">
    <header class="header-wrapper bg-white">
        <nav class="mx-auto max-w-7xl flex md:flex-wrap gap-3 md:gap-0 items-center justify-between md:justify-start py-3 md:py-0 px-6 lg:px-8" aria-label="Global">
          <div class="flex lg:flex-none mr-0 md:mr-10">
            <a href="{{route('home')}}" class="-m-1.5 p-1.5">
              <img class="h-8 w-auto" src="{{asset("assets/images_optimize/logo_tanca.svg")}}" alt="tanca logo" />
            </a>
          </div>

          <!-- NAVIGATION -->
          <ul class="header-navigation hidden md:flex items-stretch justify-start gap-x-3 lg:gap-x-5 mr-auto">
            <li>
              <a href="#" class="header-menu-title text-sm font-semibold leading-6 text-gray-900">
                <span>Sản phẩm</span>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
              <!-- MENU 01 -->
              <div class="header-mera-menu hidden grid md:grid-cols-5 p-5 shadow-inner">
                <div class="hmm-wrapper md:col-span-4">
                  <h2 class="border-b border-gray-100 font-bold py-5 text-[#ffc008] uppercase mb-5">Sản phẩm</h2>
                  <ul class="grid grid-cols-2 gap-10">
                    @for($i = 0; $i < 12; $i++)
                      <li>
                        <a class="flex items-center gap-3 font-bold" href="#">
                          <img src="{{asset("assets/images_optimize/icons/icon-hiring.png")}}" height="40" width="40" alt="tanc icon" />
                          <span>Tìm kiếm nhân tài</span>
                        </a>
                      </li>
                    @endfor
                  </ul>
                </div>

                <div class="hmm-wrapper">
                  <a class="m-auto flex flex-col width-full max-w-[352px] bg-[#f8f8f8] rounded-xl overflow-hidden hover:bg-[#ebebeb] mb-2" href="#">
                    <img src="{{asset("/assets/images_optimize/discover-tanca.webp")}}" alt="tanca banner" />
                    <div class="p-5">
                      <h2 class="font-bold">Tại sap Tanca?</h2>
                      <p>Tìm hiểu vid sao Tanca phù hợp với doanh nghiêp của bạn!</p>
                    </div>
                  </a>
                </div>
              </div>
              <!-- END MENU -->
            </li>

            <li>
              <a href="#" class="header-menu-title text-sm font-semibold leading-6 text-gray-900">
                <span>Giải pháp</span>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
              <!-- MENU 02 -->
              <div class="header-mera-menu hidden grid md:grid-cols-5 p-5 shadow-inner">
                <div class="hmm-wrapper md:col-span-4">
                  <h2 class="border-b border-gray-100 font-bold py-5 text-[#ffc008] uppercase mb-5">Giải pháp</h2>
                  <ul class="grid grid-cols-2 gap-10">
                    @for($i = 0; $i < 12; $i++)
                      <li>
                        <a class="flex items-center gap-3 font-bold" href="#">
                          <img src="{{asset("assets/images_optimize/icons/icon-hiring.png")}}" height="40" width="40" alt="tanc icon" />
                          <span>Tìm kiếm nhân tài</span>
                        </a>
                      </li>
                    @endfor
                  </ul>
                </div>

                <div class="hmm-wrapper">
                  <h2 class="border-b border-gray-100 font-bold py-5 text-[#ffc008] uppercase mb-5">Quy mô kinh doanh</h2>
                  <a class="m-auto flex flex-col width-full max-w-[352px] bg-[#f8f8f8] rounded-xl overflow-hidden hover:bg-[#ebebeb] mb-2" href="#">
                    <div class="p-5">
                      <h2 class="font-bold">Doanh nghiệp lớn</h2>
                      <p>Dành cho các doanh nghiệp lớn với hơn 250 nhân viên, chọn phần mềm doanh nghiệp phù hợp của chúng tôi.</p>
                    </div>
                  </a>
                  <a class="m-auto flex flex-col width-full max-w-[352px] bg-[#f8f8f8] rounded-xl overflow-hidden hover:bg-[#ebebeb] mb-2" href="#">
                    <div class="p-5">
                      <h2 class="font-bold">Doanh nghiêph vừa và nhỏ</h2>
                      <p>Phát triển doanh nghiệp với đầy đủ các công cụ được cung cấp để quản lý nhân sự của bạn/p>
                    </div>
                  </a>
                </div>
              </div>
              <!-- END MENU -->
            </li>

            <li><a href="#" class="header-menu-title text-sm font-semibold leading-6 text-gray-900">Thiết bị</a></li>
            <li>
              <a href="#" class="header-menu-title text-sm font-semibold leading-6 text-gray-900">
                <span>Tài nguyên</span>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
              <!-- MENU 03 -->
              <div class="header-mera-menu hidden grid grid-cols-4 gap-5 p-5 shadow-inner">
                <div class="hmm-wrapper">
                  <h2 class="border-b border-gray-100 font-bold py-5 text-[#ffc008] uppercase mb-5">Tài nguyên</h2>
                  <ul class="grid grid-cols-1 gap-10">
                    @for($i = 0; $i < 9; $i++)
                      <li>
                        <a class="flex items-center gap-3 font-bold" href="#">
                          <img src="{{asset("assets/images_optimize/icons/icon-hiring.png")}}" height="40" width="40" alt="tanc icon" />
                          <span>Tìm kiếm nhân tài</span>
                        </a>
                      </li>
                    @endfor
                  </ul>
                </div>

                <div class="hmm-wrapper">
                  <h2 class="border-b border-gray-100 font-bold py-5 text-[#ffc008] uppercase mb-5">Công ty</h2>
                  <ul class="grid grid-cols-1 gap-10">
                    @for($i = 0; $i < 5; $i++)
                      <li>
                        <a class="flex items-center gap-3 font-bold" href="#">
                          <img src="{{asset("assets/images_optimize/icons/icon-hiring.png")}}" height="40" width="40" alt="tanc icon" />
                          <span>Tìm kiếm nhân tài</span>
                        </a>
                      </li>
                    @endfor
                  </ul>
                </div>

                <div class="hmm-wrapper">
                  <h2 class="border-b border-gray-100 font-bold py-5 text-[#ffc008] uppercase mb-5">Hỗ trợ</h2>
                  <ul class="grid grid-cols-1 gap-10">
                    @for($i = 0; $i < 3; $i++)
                      <li>
                        <a class="flex items-center gap-3 font-bold" href="#">
                          <img src="{{asset("assets/images_optimize/icons/icon-hiring.png")}}" height="40" width="40" alt="tanc icon" />
                          <span>Tìm kiếm nhân tài</span>
                        </a>
                      </li>
                    @endfor
                  </ul>
                </div>

                <div class="hmm-wrapper">
                  <a class="m-auto flex flex-col width-full max-w-[352px] bg-[#f8f8f8] rounded-xl overflow-hidden hover:bg-[#ebebeb] mb-2" href="#">
                    <img src="{{asset("/assets/images_optimize/customer-stories.png")}}" alt="tanca banner" />
                    <div class="p-5">
                      <h2 class="font-bold">Câu chuyện thành công</h2>
                      <p>Tanca giúp doanh nghiệp đạt được thành tựu như thế nào?</p>
                    </div>
                  </a>
                </div>
              </div>
              <!-- END MENU -->
            </li>
          </ul>
          <!-- END NAVIGATION -->

          <div class="flex items-center gap-4 md:pb-3 lg:pb-0">
          <!-- LANGUAGE OPTIONS -->
            <div class="header-language relative">
              <button class="flex items-center gap-1 sm:gap-2 md:gap-3">
                <img class="w-8" src="{{asset("assets/images_optimize/flags/flag-vi.png")}}" alt="flag" />
                <h2 class="text-[14px] sm:text-[15px] md:text-[16px]">Đổi ngôn ngữ</h2>
                <i class="header-language-icon-down fa fa-angle-down" aria-hidden="true"></i>
              </button>
              <ul class="language-items absolute hidden left-0 top-0 bg-white shadow w-full">
                @foreach($languages as $language)
                  <li>
                    <a href="#">
                      <img class="w-8" src="{{asset($language->image)}}" alt="flag" />
                      <span>{{$language->title}}</span>
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          <!-- END LANGUAGE OPTION -->
              <a class="common-btn common-hover-btn hidden lg:block py-2 px-4" href="#">Đăng nhập</a>
              <a class="common-btn common-normal-btn hidden xl:block py-2 px-4" href="#">Dùng thử miễn phí</a>
              <button class="btn-toggle-header-mobile bg-[#f3f4f6] md:hidden inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </button>
          </div>
        </nav>
      </header>
</div>