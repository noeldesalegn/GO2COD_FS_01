@extends('layouts.app')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ $post->logo ? asset($post->logo) : asset('assets/img/post-bg.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    @if (session('success'))
                <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                    <div class="post-heading">
                        <h1>{{ $post->title }}</h1>
                        <h2 class="subheading">{{ $post->subTitle }}</h2>
                        <span class="meta">
                            Posted by
                            <a href="#!">{{ $post->user->first_name ?? 'Unknown' }}</a>
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
                    <h2 class="section-heading">{{ $post->subTitle }}</h2>
                    <p>{{ $post->{"second_body"} }}</p>

                    @if($post->logo)
                        <a href="#!"><img class="img-fluid" src="{{ asset($post->logo) }}" alt="Post image" /></a>
                    @endif
                    {{-- @if ($post->logo)
                    <div class="mt-3">
                        <img src="{{ asset('storage/' . $post->logo) }}" alt="Blog image" class="img-fluid">
                    </div>
                @endif --}}

                    {{-- <p>Logo URL: {{ $post->logo }}</p> --}}

                    <span class="caption text-muted">{{ $post->title }}</span>


                </div>
            </div>
        </div>
    </article>
@endsection
