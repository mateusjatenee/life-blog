@extends('blog.base')
@section('content')
<div class="container">
  <!-- START ARTICLE FEED -->
  <section class="articles">
    <div class="column is-8 is-offset-2">
      @each('blog.partials.post_summary', $posts, 'post')
    </div>
</section>
<!-- END ARTICLE FEED -->
</div>
@endsection
