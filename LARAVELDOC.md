# Cấu chúc thư mục của dự án laravel:

    - Folder App:
        + Folder console:
            - Lớp liên quan đến định nghĩa và quản lý các dòng lệnh - command line cho ứng dụng. Đây là nơi bạn có thể thao tác và quản lý các lệnh Artisan tuỳ chỉnh.

                - Kernel.php:
                    Tiệp này đóng vai trò là kernel - nhân của các lệnh Artisan. Nó định nghĩa các lệnh có sẵn cho ứng dụng của các bạn và các lịch trình - scheduling công việc tự động. Đăng ký các lệnh tuỳ chỉnh tại đây

                - Commands/:
                    Thư mục này chứa các lệnh tuỳ chỉnh của bạn. mỗi lệnh là một lớp mở rộng tù lớp `Illuminate\Console\Command`.

                    Có thể tạo các lệnh mới bằng cách sử dụng lệnh Artisan make:command php artisan make:command CustomCommand


        + Folder exceptions:
            - Chứa lớp liên quan đến sử lý ngoại lệ trong ứng dụng. Mục đích chính của thư mục này là quản lý các lỗi và ngoại lệ một cách có tổ chức.

                - Handler.php:
                    là thành phần cốt lỗi trong việc xử lý ngoại lệ của laravel. nó chứa các phướng thức report và render các ngoại lệ khi chúng xảy ra.

                - report(Exception $exception):
                    Dùng để báo cáo ngoại lệ. Bạn có thể gửi thông tin ngoại lệ đến các dịch vụ như Sentry, Bugsnag

                - render($request, Exception $exception):
                    Dùng để render ngoại lệ thành HTTP response

                    namespace App\Exceptions;
                    use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
                    use Throwable;

                    class Handler extends ExceptionHandler
                    {
                        public function report(Throwable $exception)
                        {
                            parent::report($exception);
                        }

                        public function render($request, Throwable $exception)
                        {
                            return parent::render($request, $exception);
                        }
                    }

                - Custom exception classes:
                    Tạo các lớp ngoại lệ tuỳ chỉnh trong ứng dụng bằng cách kế thừa lớp Exception - Illuminated\Foundation\Exceptions\Handler

                    namespace App\Exceptions;
                    use Exception;
                    class CustomException extends Exception
                    {
                        public function report()
                        {
                            // Logic để báo cáo ngoại lệ
                        }

                        public function render($request)
                        {
                            return response()->view('errors.custom', [], 500);
                        }
                    }


                - Ignoring exceptions:
                    Có thể cấu hình các ngoại lệ mà bạn muốn bỏ qua và không báo cáo bằng cách sử dụng thuộc tính $dontReport trong Handler.php

                    protected $dontReport = [
                        \Illuminate\Auth\AuthenticationException::class,
                        \Illuminate\Validation\ValidationException::class,
                    ];

        + Folder controllers:
            - Là nơi xử lý logic của ứng dụngkis có một yêu cầu HTTP. Controllers nhận yêu cầu từ người dùng, tương tác với model và trả các phản hồi response.

            php artisan make:controller UserController

        + Folder models:
            - Model cung cấp một lớp trù tượng để tương tác với CSDL

            php artisan make:model User

        + Folder providers:
            - Là các lớp chịu trách nhiệm khởi tạo - ràng buộc và cấu hình các dịch vụ của ứng dụng

            Service provider là phần cốt lõi của cách laravel khởi tạo và cấu hình ứng dụng. chúng cung cấp các dịch vụ và lớp mà ứng dụng cần để hoạt động.

            - Các service provider mặc định:
                1) AppServiceProvider.php:
                    Đây là nơi bạn có thể đăng ký bất kỳ dịch vụ nào

                2) AuthServiceProvider.php:
                    Được sử dụng để đăng ký bất kỳ chính sách xác thực

                3) BroadcastServiceProvider.php:
                    Được dùng đăng ký bất kỳ chính sách phát song nào

                4) EventServiceProvider.php:
                    Được sử dụng để đăng ký các listener và subscriber cho các sự kiện của ứng dụng

                5) RoueServiceProvider.php:
                    Chịu trách nhiệm nạp các route của ứng dụng

            - Tạo service:
                php artisan make:provider CustomServiceProvider

            - Đắng ký xử dụng service:
                Sau khi đã tạo service - bạn cần đăng ký nó để sử dụng được trong
                config/app.php trong mảng providers:

                'providers' => [
                    // Các service providers khác...
                    App\Providers\CustomServiceProvider::class,
                ],


