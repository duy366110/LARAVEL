# COMMAND WORK WITH PHP - LARAVEL
    - Create controller:
        php artisan make:controller DashboardController

    - Create service: in php service same file provider
        php artisan make:provider TinifyServiceProvider

# INSTALL LIBRARY - COMPOSER
    - tinify/tinify:
        composer require tinify/tinify


# SETUP TINIPNG - LARAVEL:
    1) Cài đặt môi trường:
        composer require tinify/tinify

    2) Trong file .env thêm API key của Tinify: Key free sử dụng được 14 ngày
        TINYPING_API_KEY=GMsWH5JRmHjQ0hMTJHFFvfnDc5SkhSzY

    3) Trong folder config/service thêm dòng:
        "tinify" => [
            "key" => env("TINYPING_API_KEY"),
        ],

    4) Khởi tạo một file TinifyServiceProvider và thêm dòng này vào boot:
        - php artisan make:provider TinifyServiceProvider

        - Thêm:
            public function boot(): void {
                Tinify::setKey(config("services.tinify.key"));
            }


    5) Sử dụng:
        - Thêm import thư viện vào đầu file:
            use Tinify\Tinify;

        - Thực hiện chuyển đổi file:
            try {
                $path_origin = "assets/images_optimize/discover-tanca.webp";

                $path_optimize = "assets/images_optimize/sections/header/discover-tanca.webp";

                // Đường dẫn đến file root
                $source = \Tinify\fromFile($path_origin);

                // Đường dẫn đến file đã optimze
                $source->toFile($path_optimize);

            } catch (Tinify\Exception $e) {
                echo $e->getMessage();
            }