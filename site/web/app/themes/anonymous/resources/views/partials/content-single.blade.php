<article class="postContent">
  <header>
    @if(\App\checkThumbnailName())
    <span class="post_thumbnail">
      {{ the_post_thumbnail('w1200') }}
    </span>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @else
    <h1 class="entry-title nothumbnail">{{ get_the_title() }}</h1>
    @endif
    <div class="meta">
      @include('partials/entry-meta')
      <div class="tag">{{ the_category() }}</div>
    </div>
    <ul class="snsShare">
      <li class="snsShare__list">
        <a class="facebook" href="{{ "https://www.facebook.com/sharer/sharer.php?u=".\App\getFullURI() }}" target="_blank"></a>
      </li>
      <li class="snsShare__list">
        <a class="twitter" href="{{ "https://twitter.com/share?text=".get_the_title()."&url=".\App\getFullURI() }}" target="_blank"></a>
      </li>
      <li class="snsShare__list">
        <a class="google" href="{{"https://plus.google.com/share?url=:".\App\getFullURI() }}" target="_blank"></a>
      </li>
      <li class="snsShare__list">
        <a class="pocket" href="{{"http://getpocket.com/edit?url=".\App\getFullURI() }}" target="_blank"></a></li>
      <li class="snsShare__list">
        <a class="hatena" href="{{"http://b.hatena.ne.jp/add?mode=confirm&url=".\App\getFullURI() }}" target="_blank">B!</a></li>
    </ul>
  </header>
  <div class="entry-content">
    @php(the_content())
  </div>
  <footer class="pagination">
    <ul class="pagination__body">
      <li class="pagination__list pagination__next">
        @if( !get_previous_post_link() )
          <span class="prev nolink"></span>
        @else
          {{ previous_post_link('%link','<span class="prev"></span>') }}
        @endif
      </li>
      <li class="pagination__list pagination__prev">
        @if( !get_next_post_link() )
          <span class="next nolink"></span>
        @else
          {{ next_post_link('%link','<span class="next"></span>') }}
        @endif
      </li>
    </ul>
  </footer>
  @php(comments_template('/partials/comments.blade.php'))
</article>

