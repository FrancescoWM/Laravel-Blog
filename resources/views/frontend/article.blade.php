@extends('frontend.master.layout')

@section('title') {{ $article->title }} @endsection

@section('heading') {{ $article->title }} @endsection

@section('content')

<div class="single-post nobottommargin">

  <!-- Single Post
  ============================================= -->
  <div class="entry clearfix">

    <!-- Entry Meta
    ============================================= -->
    <ul class="entry-meta clearfix">
      <li><i class="icon-calendar3"></i> {{ date('d/m/Y H:i', strtotime($article->published_at)) }}</li>
      <li><a href="{{ url('autore/' . $article->user->slug) }}"><i class="icon-user"></i>{{ $article->user->first_name . ' ' . $article->user->last_name }}</a></li>
      <li><i class="icon-folder-open"></i>
        @foreach($article->categories as $category)
          <a href="{{ url('categoria/'. $category->slug) }}">{{$category->slug}}</a>,
        @endforeach
      </li>
      <li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
      <li><a href="#"><i class="icon-camera-retro"></i></a></li>
    </ul><!-- .entry-meta end -->

    <!-- Entry Image
    ============================================= -->
    <div class="entry-image bottommargin">
      <a href="#"><img src="{{ url('images/blog/full/10.jpg') }}" alt="Blog Single"></a>
    </div><!-- .entry-image end -->

    <!-- Entry Content
    ============================================= -->
    <div class="entry-content notopmargin">
        {!! $article->body !!}
      <!-- Post Single - Content End -->

      <!-- Tag Cloud
      ============================================= -->
      <div class="tagcloud clearfix bottommargin">
        <a href="#">general</a>
        <a href="#">information</a>
        <a href="#">media</a>
        <a href="#">press</a>
        <a href="#">gallery</a>
        <a href="#">illustration</a>
      </div><!-- .tagcloud end -->

      <div class="clear"></div>

      <!-- Post Single - Share
      ============================================= -->
      <div class="si-share noborder clearfix">
        <span>Share this Post:</span>
        <div>
          <a href="#" class="social-icon si-borderless si-facebook">
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
          </a>
          <a href="#" class="social-icon si-borderless si-twitter">
            <i class="icon-twitter"></i>
            <i class="icon-twitter"></i>
          </a>
          <a href="#" class="social-icon si-borderless si-pinterest">
            <i class="icon-pinterest"></i>
            <i class="icon-pinterest"></i>
          </a>
          <a href="#" class="social-icon si-borderless si-gplus">
            <i class="icon-gplus"></i>
            <i class="icon-gplus"></i>
          </a>
          <a href="#" class="social-icon si-borderless si-rss">
            <i class="icon-rss"></i>
            <i class="icon-rss"></i>
          </a>
          <a href="#" class="social-icon si-borderless si-email3">
            <i class="icon-email3"></i>
            <i class="icon-email3"></i>
          </a>
        </div>
      </div><!-- Post Single - Share End -->

    </div>
  </div><!-- .entry end -->


</div>


@endsection
