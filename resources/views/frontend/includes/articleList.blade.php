<div class="entry clearfix">
  <div class="entry-image">
    <a href="{{url('images/blog/standard/17.jpg')}}" data-lightbox="image"><img class="image_fade" src="{{url('images/blog/standard/17.jpg')}}" alt="Standard Post with Image"></a>
  </div>
  <div class="entry-title">
    <h2><a href="{{ url('articolo/' . $article->slug) }}">{{ $article->title }}</a></h2>
  </div>
  <ul class="entry-meta clearfix">
    <li><i class="icon-calendar3"></i> {{ date('d/m/Y H:i', strtotime($article->published_at)) }}</li>
    <li><a href="{{ url('autore/' . $article->user->slug) }}"><i class="icon-user"></i>{{ $article->user->first_name . ' ' . $article->user->last_name }}</a></li>
    <li><i class="icon-folder-open"></i>
      @foreach($article->categories as $category)
        <a href="{{ url('categoria/' . $category->slug) }}">{{ $category->name }}</a>,
      @endforeach
    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li>
    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
  </ul>
  <div class="entry-content">
    <p>{!! $article->body !!}</p>
    <a href="{{ url('articolo/' . $article->slug) }}"class="more-link">Read More</a>
  </div>
</div>
