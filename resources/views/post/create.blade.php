@extends('layout.main')
@section('content')
    <div>
        <div>
            <form action="{{ route('post.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input value="{{ old('title') }}" name="title" type="text" class="form-control" id="Title" placeholder="Enter Title">
                    @error('title')
                    <p style="color: darkred">{{ $message }}</p>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="Likes">Likes</label>
                    <input value="{{ old('likes') }}" name="likes" type="number" class="form-control" id="Likes" placeholder="Enter Likes">
                    @error('likes')
                    <p style="color: darkred">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Text">Text</label>
                    <textarea name="text" type="text" class="form-control" id="Text">{{ old('text') }}</textarea>
                    @error('text')
                    <p style="color: darkred">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Category">Category</label>
                    <select name="category_id" class="form-control" id="Category">
                        @foreach($categories as $category)
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="Tags">Tags</label>
                    <select multiple name="tags[]" class="form-control" id="Tags">

                        @foreach($tags as $tag)
                            <option
                                value="{{ $tag->id }}">{{ $tag->title }} </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
    <div>
        <a href="{{ route('index.main') }}">Back</a>
    </div>
@endsection
