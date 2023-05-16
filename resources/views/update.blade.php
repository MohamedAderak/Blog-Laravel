@extends('header')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Article</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('blog.update', $blog->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title"  value="{{ old('title', $blog->title) }}">
                </div>
                <div class="form-group">
                    <label for="image">Image URL</label>
                    <input type="text" class="form-control" id="image" name="image"  value="{{ old('image', $blog->link) }}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="3" >{{ old('content', $blog->content) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="7" >{{ old('description', $blog->description) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="active">Active</label><br>
                    <input type="radio" name="active" value="1" {{ old('active', $blog->active) == '1' ? 'checked' : '' }}> Yes<br>
                    <input type="radio" name="active" value="0" {{ old('active', $blog->active) == '0' ? 'checked' : '' }}> No<br>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
