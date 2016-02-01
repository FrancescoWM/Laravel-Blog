@extends('frontend.master.layout')

@section('title')  Articoli in {{$currentCategory->slug}} @endsection

@section('heading') Articoli in {{$currentCategory->slug}} @endsection

@section('content')

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
