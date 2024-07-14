# Các bước setup sử dụng tailwinds postcss trong laravel
    1) Tạo dự án laravel
        composer create-project laravel/laravel project-name

    2) Install library
        npm install laravel-mix --save-dev
        npm install -D tailwindcss postcss autoprefixer
        npx tailwindcss init -p

    3) Trong file tailwind.config.js thêm nội dung:
        /** @type {import('tailwindcss').Config} */
        export default {
            content: [
                "./resources/**/*.blade.php",
                "./resources/**/*.js",
                "./resources/**/*.vue",
            ],
            theme: {
                extend: {},
            },
            plugins: [],
        }

    4) Trong file webpack.min.js thêm nội dung:
        const mix = require('laravel-mix');
        const tailwindcss = require('tailwindcss');

        mix.js('resources/js/app.js', 'public/js')
        .postCss('resources/css/app.css', 'public/css', [
            tailwindcss('./tailwind.config.js'),
            require('postcss-import'),
            tailwindcss,
        ]);

    5) Trong resource/css/app.css thêm nội dung:

        - Cách 1:
            Để sử dụng @layer trong tệp app.css của bạn để nhóm các CSS rules và giữ cho mã nguồn của bạn trông gọn gàng hơn, bạn có thể làm như sau:

            @tailwind base;
            @tailwind components;
            @tailwind utilities;
            /* @layer rules */
            @layer base {
                /* base styles */
                body {
                    font-family: Arial, sans-serif;
                    line-height: 1.6;
                }

                h1, h2, h3, h4, h5, h6 {
                    font-weight: bold;
                }
            }

            @layer components {
                /* component styles */
                .button {
                    padding: 10px 20px;
                    background-color: #3490dc;
                    color: white;
                    border-radius: 4px;
                    cursor: pointer;
                }

                .card {
                    background-color: #ffffff;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    padding: 20px;
                    border-radius: 8px;
                }
            }

        - Cách 2:
            @tailwind base;
            @tailwind components;
            @tailwind utilities;

            /* Import custom CSS files */
            @import 'custom-styles/buttons.css';
            @import 'custom-styles/forms.css';
            @import 'custom-styles/utils.css';


    6) Khi run npm với webpack có lỗi:
        Error [ERR_REQUIRE_ESM]: require() of ES Module D:\LARAVEL\lession-01\webpack.mix.js from D:\LARAVEL\lession-01\node_modules\laravel-mix\setup\webpack.config.js not supported.
        webpack.mix.js is treated as an ES module file as it is a .js file whose nearest parent package.json contains "type": "module" which declares all .js files in that package scope as ES modules.

        xoá dòng: "type": "module",