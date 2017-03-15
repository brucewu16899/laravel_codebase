<?php
namespace Fully\Composers;

use Fully\Models\Setting;

class SettingComposer
{
    protected $setting;
    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }
    /**
     * @param $view
     */
    public function compose($view)
    {
        $settings = $this->setting->getSettings();
        $view->with('settings', $settings);
    }
}