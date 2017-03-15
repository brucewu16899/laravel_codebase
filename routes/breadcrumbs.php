<?php

// Admin > News
Breadcrumbs::register('news',function($breadcrumbs){
    $breadcrumbs->push('新闻',route('news/index'));
});