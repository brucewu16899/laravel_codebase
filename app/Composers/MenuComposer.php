<?php
namespace Fully\Composers;
use Fully\Models\Menus;

class MenuComposer
{
    protected $menu;
    public function __construct(Menus $menu)
    {
        $this->menu = $menu;
    }
    /**
     * @param $view
     */
    public function compose($view)
    {
        $items = $this->menu->all();
        $menus = $this->menu->getFrontMenuHTML($items);
        $view->with('menus', $menus);
    }
}