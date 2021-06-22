@extends('layouts.main-layout')

@section('title', $post->title)

@section('content')
    @include('inc.categories')

    <div>
        <a href="{{route('getPostsByCategory', $slug_category)}}" class="btn btn-outline-primary mb-4">Back</a>
    </div>

    <article>
        {!! $post->text !!}
    </article>
@endsection

