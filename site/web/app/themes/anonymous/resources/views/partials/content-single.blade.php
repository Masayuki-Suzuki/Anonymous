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

  </header>
  <div class="entry-content">
    @php(the_content())
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php(comments_template('/partials/comments.blade.php'))
</article>
