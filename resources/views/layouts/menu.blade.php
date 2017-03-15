
<li class="{{ Request::is('news*') ? 'active' : '' }}">
    <a href="{!! route('news.index') !!}"><i class="fa fa-edit"></i><span>News</span></a>
</li>


<li class="{{ Request::is('articles*') ? 'active' : '' }}">
    <a href="{!! route('articles.index') !!}"><i class="fa fa-edit"></i><span>Articles</span></a>
</li>

<li class="{{ Request::is('pages*') ? 'active' : '' }}">
    <a href="{!! route('pages.index') !!}"><i class="fa fa-edit"></i><span>Pages</span></a>
</li>

<li class="{{ Request::is('photoGalleries*') ? 'active' : '' }}">
    <a href="{!! route('photoGalleries.index') !!}"><i class="fa fa-edit"></i><span>PhotoGalleries</span></a>
</li>

<li class="{{ Request::is('photos*') ? 'active' : '' }}">
    <a href="{!! route('photos.index') !!}"><i class="fa fa-edit"></i><span>Photos</span></a>
</li>

<li class="{{ Request::is('formPosts*') ? 'active' : '' }}">
    <a href="{!! route('formPosts.index') !!}"><i class="fa fa-edit"></i><span>FormPosts</span></a>
</li>

<li class="{{ Request::is('tags*') ? 'active' : '' }}">
    <a href="{!! route('tags.index') !!}"><i class="fa fa-edit"></i><span>Tags</span></a>
</li>

<li class="{{ Request::is('articlesTags*') ? 'active' : '' }}">
    <a href="{!! route('articlesTags.index') !!}"><i class="fa fa-edit"></i><span>ArticlesTags</span></a>
</li>

<li class="{{ Request::is('settings*') ? 'active' : '' }}">
    <a href="{!! route('settings.index') !!}"><i class="fa fa-edit"></i><span>Settings</span></a>
</li>

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{!! route('categories.index') !!}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="{{ Request::is('sliders*') ? 'active' : '' }}">
    <a href="{!! route('sliders.index') !!}"><i class="fa fa-edit"></i><span>Sliders</span></a>
</li>

<li class="{{ Request::is('menuses*') ? 'active' : '' }}">
    <a href="{!! route('menuses.index') !!}"><i class="fa fa-edit"></i><span>Menuses</span></a>
</li>

<li class="{{ Request::is('faqs*') ? 'active' : '' }}">
    <a href="{!! route('faqs.index') !!}"><i class="fa fa-edit"></i><span>Faqs</span></a>
</li>

<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{!! route('projects.index') !!}"><i class="fa fa-edit"></i><span>Projects</span></a>
</li>

<li class="{{ Request::is('videos*') ? 'active' : '' }}">
    <a href="{!! route('videos.index') !!}"><i class="fa fa-edit"></i><span>Videos</span></a>
</li>

