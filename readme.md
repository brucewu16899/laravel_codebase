### 1.开始cms
git checkout -b cms 
git add . & git commit -m 'create new branch cms'

### 2.开始migration
artis Article
artis Page
artis PhotoGallery
artis Photo 
artis FormPost
artis Tag 
artis ArticlesTag
artis Setting
artis Category
artis News 
artis Slider
artis Menus 
artis Faq
artis Project 
artis Video

### 3.数据共享,使用composer和ServiceProvider
app/composers目录下
1. art make:provider ComposerServiceProvider 
```
// ComposerServiceProvider
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
```

2. 在app.php中注册即可.

### 4.使用breadcrumb







