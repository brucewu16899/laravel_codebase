<html>
<head>
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! Twitter::generate() !!}
<!-- OR -->
{!! SEO::generate() !!}

<!-- MINIFIED -->
{!! SEO::generate(true) !!}


<!-- LUMEN -->
    {!! app('seotools')->generate() !!}
</head>
<body>

</body>
</html>