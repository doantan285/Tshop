<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Đặt độ dài mặc định cho các cột string để tránh lỗi chỉ mục với MySQL/MariaDB cũ
        // đảm bảo rằng tất cả các cột VARCHAR có thể được lập chỉ mục mà không gặp lỗi về giới hạn chỉ mục.
        Schema::defaultStringLength(191);
    }
}
