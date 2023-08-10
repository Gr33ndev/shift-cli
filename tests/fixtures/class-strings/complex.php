<?php

namespace Shift\Cli\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public $namespace = 'App\Http\Controllers';

    public function boot(): void
    {
        Route::bind('user', 'App\Models\User');
        Route::bind('comment', '\\App\\Models\\Comment');
        Route::bind('post', "\App\Models\Post");

        Route::bind('foo', "Modules\Foo");
        Route::bind('bar', '\Modules\Bar');
    }
}
