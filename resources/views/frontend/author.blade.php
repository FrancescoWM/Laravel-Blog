@extends('frontend.master.layout')

@section('title') {{$author->first_name}}  {{$author->last_name}} @endsection

@section('heading') Articoli di {{$author->first_name}}  {{$author->last_name}} @endsection

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
