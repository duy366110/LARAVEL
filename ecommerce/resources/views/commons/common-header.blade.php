<div class="common-header-component">
    
    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
          <div class="flex lg:flex-none mr-10">
            <a href="{{route('home')}}" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img
                class="h-8 w-auto"
                src="{{asset("assets/images/logo_tanca.svg")}}"
                alt="">
            </a>
          </div>

          <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="header-title-parent text-sm font-semibold leading-6 text-gray-900">Sản phẩm</a>
            <a href="#" class="header-title-parent text-sm font-semibold leading-6 text-gray-900">Giải pháp</a>
            <a href="#" class="header-title-parent text-sm font-semibold leading-6 text-gray-900">Thiết bị</a>
            <a href="#" class="header-title-parent text-sm font-semibold leading-6 text-gray-900">Tài nguyên</a>
          </div>

          <div class="header-language relative">
            <div class="flex items-center gap-3">
              <img class="w-10" src="{{asset("assets/images/flags/flag-vi.png")}}" alt="flag" />
              <h2>Đổi ngôn ngữ</h2>
            </div>
            <ul class="language-items absolute hidden left-0 top-0 bg-white shadow w-full">
              <li>
                <a href="#">
                  <img class="w-10" src="{{asset("assets/images/flags/flag-vi.png")}}" alt="flag" />
                  <span>Tiếng việt</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <img class="w-10" src="{{asset("assets/images/flags/flag-en.png")}}" alt="flag" />
                  <span>English</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="header-auth">
            <a class="common-btn" href="#">Đăng nhập</a>
          </div>
        </nav>

      </header>
      

</div>