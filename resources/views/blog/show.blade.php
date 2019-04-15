@extends('blog.base')
@section('content')
<div class="container">
  <!-- START ARTICLE FEED -->
  <section class="articles">
    <div class="column is-8 is-offset-2">
      @include('blog.partials.post_body')
    </div>
</section>
<!-- END ARTICLE FEED -->
</div>
@endsection
