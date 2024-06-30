<div class="header-mobile hidden fixed top-[85px] z-[1200] w-full h-[650px] overflow-y-auto">
    <div class="hm-mask absolute w-full h-full z-[-1]"></div>
    <div class="hm-wraper absolute w-full z-[1]">
        <ul class="flex flex-col p-4 md:p-0 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white ">
            <li>
                <a class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded md:w-auto hover:text-primary hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-600 md:p-0 " href="#">
                    <span>Sản phẩm</span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <!-- GROUP -->
                <div class="header-mera-menu-mobile hidden grid md:grid-cols-1 p-5 shadow-inner">
                    <div class="hmm-wrapper">
                      <h2 class="border-b border-gray-100 font-bold py-5 text-[#ffc008] uppercase mb-5">Sản phẩm</h2>
                      <ul class="grid grid-cols-1 gap-10">
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
                <!-- END GROUP -->
            </li>

            <li>
                <a class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded md:w-auto hover:text-primary hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-600 md:p-0 " href="#">
                    <span>Giải pháp</span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <!-- GROUP -->
                <div class="header-mera-menu-mobile hidden grid md:grid-cols-1 p-5 shadow-inner">
                    <div class="hmm-wrapper">
                      <h2 class="border-b border-gray-100 font-bold py-5 text-[#ffc008] uppercase mb-5">Giải pháp</h2>
                      <ul class="grid grid-cols-1 gap-10">
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
                <!-- END GROUP -->
            </li>

            <li>
                <a class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded md:w-auto hover:text-primary hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-600 md:p-0 " href="#">
                    <span>Thiết bị</span>
                </a>
            </li>

            <li>
                <a class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded md:w-auto hover:text-primary hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-600 md:p-0 " href="#">
                    <span>Tài nguyên</span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <!-- GROUP -->
                <div class="header-mera-menu-mobile hidden grid grid-cols-1 gap-5 p-5 shadow-inner">
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
                <!-- END GROUP -->
            </li>
        </ul>
    </div>
</div>