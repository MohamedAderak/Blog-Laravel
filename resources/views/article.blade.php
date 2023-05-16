@extends('header')

@section('content')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12 ">
            <div class="text-center">
                <h2>{{ $blog->title }}</h2>
                <img src="{{ $blog->link }}" class="img-fluid mb-3" alt="{{ $blog->title }}">
                <p>{{ $blog->content }}</p>
            </div>
            
            <hr>
            <p class="p-3"><strong>Description:</strong> {{ $blog->description }}</p>
        </div>
        <div class="col-md-12">
            <a href="{{ route('blog.index') }}" class="btn btn-secondary mb-3">< Back to Blog</a>
        </div>
    </div>
</div>
@endsection
