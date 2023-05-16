@extends('header')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add New Article</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('blog.store') }}" method="POST">
                @csrf
                <div class="form-group">

                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" >
                </div>
                <div class="form-group">
                    <label for="image">Image URL</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}" >
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="3" >{{ old('content') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="7" >{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="active">Active</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="active" id="active_yes" value="1" {{ old('active') == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="active_yes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="active" id="active_no" value="0" {{ old('active') == '0' ? 'checked' : '' }}>
                        <label class="form-check-label" for="active_no">
                            No
                        </label>
                    </div>
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
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
