@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('assets/img/home-bg.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Noel Blog</h1>
                        <span class="subheading">Share knowledge or updates by composing a post in your unique style.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @if ($posts->isEmpty())
                    <div class="alert alert-warning">No posts available.</div>
                @else
                    @foreach ($posts as $post)
                        <!-- Post preview -->
                        <div class="post-preview">
                            <a href="/post/{{ $post->id }}">
                                <h2 class="post-title">{{ $post->title }}</h2>
                                <h3 class="post-subtitle">{{ $post->body }}</h3>
                            </a>
                            <p class="post-meta">
                                Posted by <a href="#!">{{ $post->user->first_name ?? 'Unknown' }}</a>
                                on {{ $post->created_at->format('F j, Y') }}
                            </p>
                        </div>
                        {{-- @auth
                            <a href="/post/{{ $post->id }}/edit" class="btn btn-primary">Edit blog</a>
                        @endauth --}}

                        @can('edit-post', $post)
                        <a href="/post/{{ $post->id }}/edit" class="btn btn-primary">Edit blog</a>
                        @endcan

                        <!-- Divider -->
                        <hr class="my-4" />
                    @endforeach
                @endif


                <!-- Pager -->
                {{-- <div class="d-flex justify-content-end mb-4">
                    <a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a> --}}
                </div>
            </div>
        </div>
    </div>
        <div>
            {{ $posts->links() }}
        </div>

@endsection
