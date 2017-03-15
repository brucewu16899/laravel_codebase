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
在多层面包屑中比较有用,cms中有点浪费了.

### 5.集成各种前端插件
1.日期选择器https://github.com/uxsolutions/bootstrap-datepicker
放到public目录下.
2.文本编辑器
3.图像上传显示

### 6.保存新闻,查漏补缺
1.Method [validateContentTextTextarea] does not exist. 生成CRUD时不小心放置了错误的rule
2.处理一下时间 Carbon
```
// 1.前端处理
    $(document).ready(function(){
        $("#cms-date-picker").datepicker({
            language:'zh-CN',
            autoclose:true,
            format:'yyyy-mm-dd'
        })
    });
// 2.后端处理
就不用处理了,直接保存
```
3.关于变量 isset的设置,当然用Form自动关联,可有些时候自定义样式啥的,还是得手动谢谢这种代码
4.变更column默认值的流程
```
还要安装 "doctrine/dbal":"*"
$table->boolean('is_published')->default(0)->change();
```
5.分页功能
```
$news = $this->newsRepository->paginate(2);

{{ $news->links() }}
```

6.通过拼音生成友好slug
```
https://github.com/overtrue/laravel-pinyin

composer require "overtrue/laravel-pinyin:~3.0"
 Overtrue\LaravelPinyin\ServiceProvider::class,
     'Pinyin' => Overtrue\LaravelPinyin\Facades\Pinyin::class,
     
 $input['slug'] = implode('-',pinyin($input['title']));
```
后台可以用id,前台还是用slug好.

### 7.












