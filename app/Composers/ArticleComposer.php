<?php
namespace Fully\Composers;
use Fully\Models\Article;
/**
 * Class ArticleComposer.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class ArticleComposer
{

    protected $article;
    public function __construct(Article $article)
    {
        $this->article = $article;
    }
    /**
     * @param $view
     */
    public function compose($view)
    {
        $articles = $this->article->getLastArticle(3);
        $view->with('articles', $articles);
    }
}