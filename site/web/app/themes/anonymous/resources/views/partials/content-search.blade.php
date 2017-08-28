<article class="postContainer" @php(post_class())>
  <header>
    <div class="thumbnail">
      {{ the_post_thumbnail('w360') }}
    </div>
    <h2 class="entry-title">
      <a href="{{ get_permalink() }}">{{ get_the_title() }}</a>
    </h2>
    @if (get_post_type() === 'post')
      @include('partials/entry-meta')
    @endif
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
  <div class="tag">{{ the_category() }}</div>
</article>
