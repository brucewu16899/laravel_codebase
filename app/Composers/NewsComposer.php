<?php
namespace Fully\Composers;
use Fully\Models\News;

/**
 * Class MenuComposer.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class NewsComposer
{
    protected $news;
    public function __construct(News $news)
    {
        $this->news = $news;
    }
    /**
     * @param $view
     */
    public function compose($view)
    {
        $news = $this->news->getLastNews(5);
        $view->with('news', $news);
    }
}