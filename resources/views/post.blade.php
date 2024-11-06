@extends('layouts.app')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ asset('assets/img/post-bg.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>{{ $post->title }}</h1>
                        <h2 class="subheading">{{ $post->subTitle }}</h2>
                        <span class="meta">
                            Posted by
                            <a href="#!">{{ $post->user->name ?? 'Unknown' }}</a>
                            on {{ $post->created_at->format('F j, Y') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>{{ $post->body }}</p>
                    <h2 class="section-heading">The Final Frontier</h2>
                    <p>{{ $post->{"second_body"} }}</p>

                    @if($post->logo)
                        <a href="#!"><img class="img-fluid" src="{{ asset($post->logo) }}" alt="Post image" /></a>
                    @endif

                    <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>

                    <p>Additional placeholder content or dynamic data can be added here.</p>
                    <p>
                        Placeholder text by
                        <a href="http://spaceipsum.com/">Space Ipsum</a>
                        &middot; Images by
                        <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>
                    </p>
                </div>
            </div>
        </div>
    </article>
@endsection
