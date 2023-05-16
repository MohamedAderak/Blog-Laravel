@extends('header')

@section('content')

<div class="container bg-light">
    <div class="row">
        <div class="col-md-12">
            <h1>Blog Posts</h1>
            <hr>
            @if(session()->has('success'))
                <div class="alert alert-success text-center">
                    {{ session()->get('success') }}
                </div>
            @endif

        </div>
    </div>
    <div class="row flex-wrap">
        @foreach($blogs as $blog)
        <div class="col-sm-6 col-md-4 mb-4" >
            <div class="card col flex-grow-1">
                <img src="{{ $blog->link }}" class="card-img-top" alt="{{ $blog->title }}">
                <div class="card-body" style="position: relative;">
                      <div>
                        <h5 class="card-title p-1">{{ $blog->title }}</h5>
                        @if($blog->active)
                          <i class="text-success position-absolute top-0 end-0 p-1">Enabled</i>
                        @else
                          <i class="text-danger position-absolute top-0 end-0 p-1">Disabled</i>
                        @endif
                      </div>
                    <p class="card-text">{{ $blog->content }}</p>
                    <div class="d-grid gap-2 ">
                        <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-primary">Read</a>
                        <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display: inline; alin-item: center;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
