## 1.集成通用package
### 1.idea-helper
1.composer require –dev barryvdh/laravel-ide-helper 
2.app.php中增加 Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class, 
3.composer.json中增加命令
```
"scripts":{
   "post-update-cmd": [
       "Illuminate\\Foundation\\ComposerScripts::postUpdate",
       "php artisan ide-helper:generate",
       "php artisan ide-helper:meta",
       "php artisan optimize"
   ]
}
```

### 2.使用generator加快开发
1.composer.json中新增
```
"infyomlabs/laravel-generator": "5.3.x-dev",
"laravelcollective/html": "^5.3.0",
"infyomlabs/adminlte-templates": "5.3.x-dev"
```

2.app.php中新增
```
Collective\Html\HtmlServiceProvider::class,
Laracasts\Flash\FlashServiceProvider::class,
Prettus\Repository\Providers\RepositoryServiceProvider::class,
\InfyOm\Generator\InfyOmGeneratorServiceProvider::class,
\InfyOm\AdminLTETemplates\AdminLTETemplatesServiceProvider::class, 
'Form'      => Collective\Html\FormFacade::class,
'Html'      => Collective\Html\HtmlFacade::class,
'Flash'     => Laracasts\Flash\Flash::class,
```

3.发布资源和使用
```
php artisan vendor:publish 
php artisan infyom.publish:layout

php artisan infyom:api $MODEL_NAME
php artisan infyom:scaffold $MODEL_NAME
php artisan infyom:api_scaffold $MODEL_NAME 
```

### 3.集成图片浏览上传和编辑器
1.集成编辑器 composer require unisharp/laravel-filemanager
2.配置app.php
```
Unisharp\Laravelfilemanager\LaravelFilemanagerServiceProvider::class,
Intervention\Image\ImageServiceProvider::class,
'Image' => Intervention\Image\Facades\Image::class,
```
3.发布资源
```
php artisan vendor:publish --tag=lfm_config
php artisan vendor:publish --tag=lfm_public
```

4.集成tinymce
将tinymce相关的资源(http://download.ephox.com/tinymce/community/tinymce_4.5.4.zip)
下载到pulic/js/tinymce文件夹中

5.配置tinymce
```
@section('content')
<div id="edit-news">
    <div class="form-group">
        {{ Form::label('content', '新闻内容') }}
        <textarea name="content" class="form-control my-editor"></textarea>
    </div>
</div>
@section('scripts')
   <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
   <script>
       var editor_config = {
           path_absolute : "/",
           selector: "textarea.my-editor",
           language: 'zh_CN',
           height: 600,
           plugins: [
               "advlist autolink lists link image charmap print preview hr anchor pagebreak",
               "searchreplace wordcount visualblocks visualchars code fullscreen",
               "insertdatetime media nonbreaking save table contextmenu directionality",
               "emoticons template paste textcolor colorpicker textpattern"
           ],
           toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
           relative_urls: false,
           file_browser_callback : function(field_name, url, type, win) {
               var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
               var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
               var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
               if (type == 'image') {
                   cmsURL = cmsURL + "&type=Images";
               } else {
                   cmsURL = cmsURL + "&type=Files";
               }
               tinyMCE.activeEditor.windowManager.open({
                   file : cmsURL,
                   title : '图片管理器',
                   width : x * 0.8,
                   height : y * 0.8,
                   resizable : "yes",
                   close_previous : "yes"
               });
           }
       };
       tinymce.init(editor_config);
   </script>
@endsection
```

6.单独使用laravel-filemanager
```
// 1.html
<div class="input-group">
 <span class="input-group-btn">
   <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
     <i class="fa fa-picture-o"></i> Choose
   </a>
 </span>
 <input id="thumbnail" class="form-control" type="text" name="filepath">
</div>
<img id="holder" style="margin-top:15px;max-height:100px;">
// 2.php artisan vendor:publish
在layout中预留一个yield('sectionscript')
然后将相关逻辑抽成一个partial  partial.filemanager.blade.php
@section('secondscript')
   <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
   $('#lfm').filemanager('image');
@endsection
最后在页面中引用
@include('partials.filemanager')
```

### 4.使用laravel debug
1.composer require barryvdh/laravel-debugbar
2.app.php中
```
Barryvdh\Debugbar\ServiceProvider::class,
'Debugbar' => Barryvdh\Debugbar\Facade::class,
```
3.发布资源
php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"

### 5.使用LogViewer
>https://github.com/ARCANEDEV/LogViewer/ 

1.composer require arcanedev/log-viewer
2.在app.php中
```
Arcanedev\LogViewer\LogViewerServiceProvider::class,
```
3.发布资源 
`php artisan vendor:publish`
4.进入logviewer
`http://my_website_url/log-viewer`

### 6.像postman一样测试自己的接口
>https://github.com/asvae/laravel-api-tester

1.composer require asvae/laravel-api-tester
2.在app.php中
```
Asvae\ApiTester\ServiceProvider::class,
```
3.发布资源
`php artisan vendor:publish`
4.进入页面
`http://my_website_url/api-tester`

### 7.使用make:view命令
>https://github.com/svenluijten/artisan-view 

1.composer require sven/artisan-view
2.在app.php中
```
 Sven\ArtisanView\ArtisanViewServiceProvider::class,
```
3.示例
```
php artisan make:view index
php artisan make:view products --resource --extends=layout --sections=foo,bar
php artisan scrap:view index   #干掉一个view
```

### 8.使用验证码
>https://github.com/mewebstudio/captcha

1.composer require mews/captcha
2.在app.php中
```
 Mews\Captcha\CaptchaServiceProvider::class,
 'Captcha' => Mews\Captcha\Facades\Captcha::class,
```
3.发布资源
php artisan vendor:publish

### 9.实现slug(对SEO,用户友好)
> https://github.com/cviebrock/eloquent-sluggable

1.composer require cviebrock/eloquent-sluggable
2. Cviebrock\EloquentSluggable\ServiceProvider::class,
3.php artisan vendor:publish 

### 10.实现面包屑
> https://laravel-breadcrumbs.readthedocs.io/en/latest/start.html#install-laravel-breadcrumbs

1.composer require davejamesmiller/laravel-breadcrumbs
2.在app.php中
```
DaveJamesMiller\Breadcrumbs\ServiceProvider::class,
'Breadcrumbs' => DaveJamesMiller\Breadcrumbs\Facade::class,
```
3.新建routes/breadcrumbs.php
```
一些代码
```
4.php artisan vendor:publish 
5.使用面包屑
```
{!! Breadcrumbs::render('home') !!}
{!! Breadcrumbs::render('category', $category) !!}
```

### 11.SEO工具
> https://github.com/artesaos/seotools

1.composer require artesaos/seotools
2.在app.php中
```
Artesaos\SEOTools\Providers\SEOToolsServiceProvider::class,

'       SEOMeta'   => Artesaos\SEOTools\Facades\SEOMeta::class,
        'OpenGraph' => Artesaos\SEOTools\Facades\OpenGraph::class,
        'Twitter'   => Artesaos\SEOTools\Facades\TwitterCard::class,
        // or
        'SEO' => Artesaos\SEOTools\Facades\SEOTools::class,
```
3.php artisan vendor:publish 
4.