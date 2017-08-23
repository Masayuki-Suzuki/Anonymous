<article @php(post_class())>
  <header>
    <div class="thumbnail">
     {{ the_post_thumbnail('w320') }}
    </div>
    <h2 class="entry-title">
      <a href="{{ get_permalink() }}">{{ get_the_title() }}</a>
    </h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
