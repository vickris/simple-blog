@extends('layouts.app')


@section('content')

    <h2>{{ $post->title }}</h2>
    <p>{{ $post->description }}</p>

    <form action="/posts/{{ $post->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <button type="submit" class="btn btn-flat btn-danger">Delete Post</button>
    </form>

@endsection
