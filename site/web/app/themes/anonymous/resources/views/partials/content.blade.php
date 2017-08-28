<article class="postContainer" @php(post_class())>
  <header>
    <div class="thumbnail">
      <a href="{{ get_permalink() }}">
        {{ the_post_thumbnail('w360') }}
      </a>
    </div>
    <h2 class="entry-title">
      <a href="{{ get_permalink() }}">{{ get_the_title() }}</a>
    </h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
  <div class="tag">{{ the_category() }}</div>
</article>
