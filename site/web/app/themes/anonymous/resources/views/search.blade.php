@extends('layouts.app')
@section('content')
  @include('partials.page-header')
  <h2 class="result">Search results for : {{ the_search_query() }}</h2>
  @if (!have_posts())
    <div class="no-results">
      <p>Sorry, no results were found.</p>
      <p>Please search again with another keywords or go back to <a href="/">top page</a>.</p>
      {{ get_search_form() }}
    </div>
  @endif
  @while(have_posts()) @php(the_post())
    @include('partials.content-search')
  @endwhile

  {!! get_the_posts_navigation() !!}

@endsection
