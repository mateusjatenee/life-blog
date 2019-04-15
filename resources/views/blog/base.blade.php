<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog - Free Bulma template</title>
        <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- Bulma Version 0.7.2-->
        <link rel="stylesheet" href="https://unpkg.com/bulma@0.7.4/css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/blog.css">
    </head>
    <body>
        <section class="hero is-info is-medium is-bold">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h5 class="title">
                    @if(isset($post))
                    {{ $post->title }}
                    @else
                    This is my blog, where I write non-tech related things. Fitness, life, mood.
                    @endif
                    </h5>
                    @if(isset($post))
                    <div class="tags level-item">
                        @foreach($post->tags as $tag)
                        <a target="_blank" class="tag is-dark" href="{{ route('search', $tag->slug) }}">{{ $tag->name }}</a>
                        @endforeach
                        <a target="_blank" href="https://twitter.com/{{ $post->author->slug }}" class="tag is-link">{{ '@'.$post->author->slug }}</a>
                        <span class="tag is-rounded">{{ $post->publish_date->format('F d, Y') }}</span>
                    </div>
                    @endif
                </div>
            </div>
        </section>
        @yield('content')
        <script async type="text/javascript" src="../js/bulma.js"></script>
    </body>
</html>
