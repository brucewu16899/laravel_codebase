<?php

namespace Fully\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //前端
        View::composer('frontend.layout.menu','Fully\Composers\MenuComposer');
        View::composer('frontend.layout.layout','Fully\Composers\SettingComposer');
        View::composer('frontend.layout.footer','Fully\Composers\ArticleComposer');
        View::composer('frontend.news.sidebar','Fully\Composers\NewsComposer');
        //后端
        View::composer('backend.layout.layout','Fully\Composer\Admin\MenuComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
