@extends('frontend.master.layout')

@section('title') Home Page @endsection

@section('heading') Home Page @endsection

@section('content')

<div class="heading-block center">
  <h1>Recent Articles</h1>
  <span>We almost blog regularly about this &amp; that.</span>
</div>

<!-- Posts
============================================= -->
<div id="posts">

  @foreach($articles as $article)

    @include('frontend.includes.articleList', ['article' => $article])

  @endforeach

</div><!-- #posts end -->

<!-- Pagination
============================================= -->
<ul class="pager nomargin">
  {!! $articles->render() !!}
</ul><!-- .pager end -->

@endsection
