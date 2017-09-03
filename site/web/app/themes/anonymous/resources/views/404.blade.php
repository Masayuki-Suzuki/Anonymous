@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <article class="notfound">
      <h2><span>404</span>Nothing was found at this location.</h2>
      <section>
        <h3>This page may not exist due to the following reasons:</h3>
        <ol>
          <li>The link you clicked might be old and does not work anymore.</li>
          <li>We might have removed the page.</li>
          <li>You may have mistyped the address (URL).</li>
        </ol>
      </section>
      <section>
        <h3>What you can do?</h3>
        <ol>
          <li>Please check the spelling of the link and try again.</li>
          <li>Please <a href="">contact us</a> and let us know what went wrong.</li>
          <li>We could take you back to the <a href="/">home page</a>.</li>
        </ol>
      </section>
    </article>
  @endif

  {{--{!! get_the_posts_navigation() !!}--}}
@endsection
