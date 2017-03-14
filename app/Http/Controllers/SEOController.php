<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\SEOMeta;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class SEOController extends Controller
{
    use SEOToolsTrait;
    public function index(){
        $this->seo()->setTitle('Home');
        $this->seo()->setDescription('This is my page description');
        $this->seo()->opengraph()->setUrl('http://current.url.com');
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->twitter()->setSite('@LuizVinicius73');
        return view('myindex');
    }
}
