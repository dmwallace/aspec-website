@extends('layouts.app')

@section('header')
  @include('partials/header-home')
@endsection

@section('content')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="excerpts">
    @while (have_posts()) @php(the_post())
      @include ('partials.content-'.(get_post_type() === 'post' ?: get_post_type()))
    @endwhile
  </div>
  {!! get_the_posts_navigation() !!}
@endsection
