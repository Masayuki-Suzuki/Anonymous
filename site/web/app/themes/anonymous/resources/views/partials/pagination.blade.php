<div class="pagination">
  <ul class="pagination__body">
    <li class="pagination__list pagination__next">
      @if( !get_previous_posts_link() )
        <span class="prev nolink"></span>
      @else
        {{ previous_posts_link('<span class="prev"></span>') }}
      @endif
    </li>
    <li class="pagination__list">
      <span class="pagination__cur">{{ \App\getPageNumber() }} / </span>
      <span class="pagination__max">{{ \App\getPageMaxNumber() }}</span>
    </li>
    <li class="pagination__list pagination__prev">
      @if( !get_next_posts_link() )
        <span class="next nolink"></span>
      @else
        {{ next_posts_link('<span class="next"></span>') }}
      @endif
    </li>
  </ul>
</div>