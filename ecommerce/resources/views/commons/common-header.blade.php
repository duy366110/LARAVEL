<div class="common-header-component">
    <header class="header-wrapper bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-start p-6 lg:px-8" aria-label="Global">
          <div class="flex lg:flex-none mr-10">
            <a href="{{route('home')}}" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img
                class="h-8 w-auto"
                src="{{asset("assets/images/logo_tanca.svg")}}"
                alt="">
            </a>
          </div>

          <div class="hidden lg:flex justify-start lg:gap-x-5 mr-auto">
            <a href="#" class="header-title-parent text-sm font-semibold leading-6 text-gray-900">Sản phẩm</a>
            <a href="#" class="header-title-parent text-sm font-semibold leading-6 text-gray-900">Giải pháp</a>
            <a href="#" class="header-title-parent text-sm font-semibold leading-6 text-gray-900">Thiết bị</a>
            <a href="#" class="header-title-parent text-sm font-semibold leading-6 text-gray-900">Tài nguyên</a>
          </div>

          <div class="header-language relative mr-8">
            <button class="flex items-center gap-3">
              <img class="w-8" src="{{asset("assets/images/flags/flag-vi.png")}}" alt="flag" />
              <h2>Đổi ngôn ngữ</h2>
              <i class="header-language-icon-down fa fa-angle-down" aria-hidden="true"></i>
            </button>
            <ul class="language-items absolute hidden left-0 top-0 bg-white shadow w-full">
              <li>
                <a href="#">
                  <img class="w-8" src="{{asset("assets/images/flags/flag-vi.png")}}" alt="flag" />
                  <span>Tiếng việt</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <img class="w-8" src="{{asset("assets/images/flags/flag-en.png")}}" alt="flag" />
                  <span>English</span>
                </a>
              </li>
            </ul>
          </div>

          <div class="header-auth">
            <a class="common-btn common-hover-btn" href="#">Đăng nhập</a>
          </div>
        </nav>
      </header>
</div>