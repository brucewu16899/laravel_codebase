<?php
namespace Fully\Composers\Admin;
use Fully\Models\FormPost;

class MenuComposer
{
    /**
     * @param $view
     */
    public function compose($view)
    {
        $view->with('formPost', FormPost::where('is_answered', 0)->get());
    }
}