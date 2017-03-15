<?php

// News
Breadcrumbs::register('news',function($breadcrumbs){
    $breadcrumbs->push('新闻',route('news.index'));
});

// 新建新闻
Breadcrumbs::register('create-news',function($breadcrumbs){
    $breadcrumbs->push('新闻 | 新建',route('news.create'));
});

