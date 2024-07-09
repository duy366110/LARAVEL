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

