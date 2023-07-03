@extends('layout.main')
@section('content')
    <div>
        <div style="display: flex">
            <a href="{{ route('post.show', $post->id) }}">{{ $post->id }}</a>
            <div> .  {{  $post->title  }} </div>
        </div>
        <div>{{ $post->text }}</div>
    </div>
    <div>
        <a href="{{ route('post.edit', $post->id) }}">Update</a>
    </div>
    <div>
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    </div>
    <div>
        <a href="{{ route('index.main') }}">Back</a>
    </div>
@endsection
