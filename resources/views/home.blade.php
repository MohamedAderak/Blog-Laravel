@extends('header')

@section('content')
<div class="container my-5 bg-light">
    <div class="row ">
        <div class="col-md-6">
            <div class="card border-0 bg-light">
                <img src="https://bloggingfornewbloggers.com/wp-content/uploads/2020/08/cropped-Blogging-for-New-Bloggers-logo-nv.png" class="card-img-top" alt="Logo">
            </div>
        </div>
        <div class="col-md-6 " >
            <div class="card border-0 bg-light mt-5" >
                <div class="card-body text-center">
                    <h2 class="card-title">Blogger</h2>
                    <p class="card-text">A blog (a truncation of "weblog") is an informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.</p>
                    <a href="{{ route('blog.index') }}" class="btn btn-primary">Read Articles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection