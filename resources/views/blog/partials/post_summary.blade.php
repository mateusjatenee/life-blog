<div class="card article">
  <div class="card-content">
    <div class="media">
      <div class="media-content has-text-centered">
        <p class="title article-title">{{ $post->title }}</p>
        <div class="tags level-item">
          @foreach($post->tags as $tag)
          <a target="_blank" class="tag is-dark" href="{{ route('search', $tag->slug) }}">{{ $tag->name }}</a>
          @endforeach
          <a target="_blank" href="https://twitter.com/{{ $post->author->slug }}" class="tag is-link">{{ '@'.$post->author->slug }}</a>
          <span class="tag is-rounded">{{ $post->publish_date->format('F d, Y') }}</span>
        </div>
      </div>
    </div>
    <div class="content article-body">
      {{ $post->excerpt }}
    </div>
    <div class="content article-body">
      <a class="button is-link" href="{{ route('blog.posts.show', $post->slug) }}">Read Post</a>
    </div>
  </div>
</div>
