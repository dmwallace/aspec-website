{{--
  Template Name: About
--}}

@extends('layouts.app')

@section('header')
  @include('partials/header-default')
@endsection

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page-about')
  @endwhile
@endsection
