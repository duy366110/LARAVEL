<div class="header-mobile fixed top-[85px] z-[1200] w-full h-[650px] overflow-y-auto">
    <div class="hm-mask absolute w-full h-full z-[-1]"></div>
    <div class="hm-wraper absolute w-full z-[1]">
        <ul class="flex flex-col p-4 md:p-0 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white ">
            <li>
                <a class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded md:w-auto hover:text-primary hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-600 md:p-0 " href="#">
                    <span>Sản phẩm</span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <div class="header-mera-menu-mobile grid md:grid-cols-1 p-5 shadow-inner">
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
            </li>

            <li>
                <a class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded md:w-auto hover:text-primary hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-600 md:p-0 " href="#">
                    <span>Giải pháp</span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
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
            </li>
        </ul>
    </div>
</div>