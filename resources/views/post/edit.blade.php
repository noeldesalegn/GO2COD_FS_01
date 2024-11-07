@extends('layouts.app')

@section('content')
    <header class="masthead" style="background-image: url('{{ $post->logo ? asset($post->logo) : asset('assets/img/post-bg.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Edit Post</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <form action="{{ route('home.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-floating">
                    <input class="form-control" id="title" type="text" placeholder="Enter your title..." name="title" value="{{ old('title', $post->title) }}" required />
                    <label for="title">Title</label>
                </div>

                <div class="form-floating">
                    <input class="form-control" id="subTitle" type="text" placeholder="Enter your subtitle..." name="subTitle" value="{{ old('subTitle', $post->subTitle) }}" required />
                    <label for="subTitle">SubTitle</label>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" id="body" placeholder="Enter your body here..." name="body" style="height: 12rem" required>{{ old('body', $post->body) }}</textarea>
                    <label for="body">Body</label>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" id="second_body" placeholder="Enter your second body here..." name="second_body" style="height: 12rem" required>{{ old('second_body', $post->second_body) }}</textarea>
                    <label for="second_body">Second Body</label>
                </div>

                <!-- Current Logo Display -->
                @if ($post->logo)
                    <div class="mt-3">
                        <p>Current Logo:</p>
                        <img src="{{ asset($post->logo) }}" alt="Current Logo" class="img-fluid" style="max-width: 150px;">
                    </div>
                @endif

                <!-- Logo Upload Field -->
                <div class="form-group mt-3">
                    <label for="logo">Upload New Logo</label>
                    <input class="form-control" id="logo" type="file" name="logo" accept="image/*" />
                    @error('logo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <button class="btn btn-primary text-uppercase" type="submit">Save Changes</button>
                    <button class="btn btn-danger text-uppercase mx-5" form="delete-form" type="submit">Delete Post</button>
                </div>
            </form>
            <a href="{{ route('home.index') }}" class="btn btn-secondary text-uppercase mt-3">Cancel</a>
        </div>

        <form action="{{ route('home.destroy', $post->id) }}" method="POST" id="delete-form" class="hidden" onsubmit="return confirm('Are you sure you want to delete this post?');">
            @csrf
            @method('DELETE')
        </form>
    </main>
@endsection
