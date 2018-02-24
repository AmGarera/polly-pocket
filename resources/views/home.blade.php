@extends('layouts.app')

@section('content')
    {{--@include('partials.page-header')--}}

    @if (!have_posts())
        <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif
    <div class="row">
    <div class="col-sm-9 col-xs-12">
        @while (have_posts()) @php(the_post())
        @include('partials.content-'.get_post_type())
        @endwhile
    </div>
        <div class="col-sm-3">
            @include('partials.sidebar')
        </div>
    </div>
    {!! get_the_posts_navigation() !!}
@endsection
