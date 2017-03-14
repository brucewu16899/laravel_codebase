### 1.集成通用package
##### 1.idea-helper
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

##### 2.使用generator加快开发
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

##### 3.集成图片浏览上传和编辑器
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

##### 4.使用laravel debug
1.composer require barryvdh/laravel-debugbar
2.app.php中
```
Barryvdh\Debugbar\ServiceProvider::class,
'Debugbar' => Barryvdh\Debugbar\Facade::class,
```
3.发布资源
php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"

### 2.开始cms分支(主要参照fullycms)
> https://github.com/sseffa/fullcms.git 
