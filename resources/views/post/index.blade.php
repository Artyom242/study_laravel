@extends('layout.main')
@section('content')
    <div>
        <div>
            @foreach($posts as $post)
                <div style="display: flex">
                    <a href="posts/{{ $post->id }}">{{ $post->id }}</a>
                    <div> .  {{  $post->title  }} </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
