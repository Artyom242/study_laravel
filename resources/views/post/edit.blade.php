@extends('layout.main')
@section('content')
    <div>
        <div>
            <form action="{{ route('post.update', $post->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input name="title" type="text" class="form-control" value="{{ $post->title }}" id="Title"
                           placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="Likes">Likes</label>
                    <input name="likes" type="number" class="form-control" value="{{ $post->likes }}" id="Likes"
                           placeholder="Enter Likes">
                </div>
                <div class="form-group">
                    <label for="Text">Text</label>
                    <textarea name="text" type="password" class="form-control" id="Text">{{ $post->text }}</textarea>
                </div>
                <div class="form-group">
                    <label for="Category">Category</label>
                    <select name="category_id" type="password" class="form-control" id="Category">

                        @foreach($categories as $category)
                            <option
                                {{$category->id == $post->category_id ? ' selected' : ''}}
                                    value="{{ $category->id }}">{{ $category->title }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="Tags">Tags</label>
                    <select multiple name="tags[]" type="password" class="form-control" id="Tags">

                        @foreach($tags as $tag)
                            <option
                                @foreach($post->tags as $postTag)
                                    {{$tag->id == $postTag->id ? ' selected' : ''}}
                                @endforeach
                                value="{{ $tag->id }}">{{ $tag->title }} </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    <div>
        <a href="{{ route('index.main') }}">Back</a>
    </div>
@endsection
