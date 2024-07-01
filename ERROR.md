# KHI RUN COMPOSER UPDATE CUNG MONGODB:
    -Error:
        enssegers/mongodb[v1.1.0, ..., v1.3.2] require illuminate/events 4.1.* -> satisfiable by illuminate/events[v4.1.0, ..., v4.1.30]

        To enable extensions, verify that they are enabled in your .ini files:
        - C:\php-8.2.20\php.ini
        You can also run `php --ini` in a terminal to see which files are used by PHP in CLI mode.        
        Alternatively, you can run Composer with `--ignore-platform-req=ext-mongodb` to temporarily ignore these required extensions.

        Use the option --with-all-dependencies (-W) to allow upgrades, downgrades and removals for packages currently locked to specific versions.


    - Solution:
        1) Trong fie php.ini thêm dong: window
            extension=mongodb

        2) Trong file composer.json phải có:
            "require": {
                "php": "^8.2",
                "laravel/framework": "^11.9",
                "laravel/tinker": "^2.9",
                "tinify/tinify": "^1.6",
                "jenssegers/mongodb": "*",,
            },

        2) Chạy lệnh:
            composer update --ignore-platform-req=ext-mongodb
