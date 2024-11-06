@extends('layouts.app')
@section('content')

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Create Posts</h1>
                        <span class="subheading">Share your latest ideas by drafting and publishing a new blog post.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Share your stories, experiences, or knowledge by drafting posts that reflect your unique perspective and inspire readers to engage.</p>
                    <div class="my-5">

                        {{-- <form id="contactForm" action="/opost" method="POST">
                            @csrf
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="form-floating">
                                <input class="form-control" id="Titel" type="text" placeholder="Enter your Titel..." name="title" value="{{ old('title') }}" required />
                                <label for="Titel">Titel Name</label>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating">
                                <input class="form-control" id="subTitel" type="text" placeholder="Enter your subTitel..." name="subTitle" value="{{ old('subTitle') }}" required />
                                <label for="subTitel">subTitel Name</label>
                                @error('subTitle')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" id="body" placeholder="Enter your body here..." style="height: 12rem" name="body" required>{{ old('body') }}</textarea>
                                <label for="body">body</label>
                                @error('body')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" id="second_body" placeholder="Enter your second_body here..." style="height: 12rem" name="second_body" required>{{ old('second_body') }}</textarea>
                                <label for="second_body">2nd body</label>
                                @error('second_body')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button class="btn btn-primary text-uppercase mt-3" id="submitButton" type="submit">Post</button>
                        </form> --}}
                        <form id="contactForm" action="/opost" method="POST" enctype="multipart/form-data">
                            @csrf

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-floating">
                                <input class="form-control" id="Titel" type="text" placeholder="Enter your Titel..." name="title" value="{{ old('title') }}" required />
                                <label for="Titel">Title Name</label>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating">
                                <input class="form-control" id="subTitel" type="text" placeholder="Enter your subTitel..." name="subTitle" value="{{ old('subTitle') }}" required />
                                <label for="subTitel">Subtitle Name</label>
                                @error('subTitle')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" id="body" placeholder="Enter your body here..." style="height: 12rem" name="body" required>{{ old('body') }}</textarea>
                                <label for="body">Body</label>
                                @error('body')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" id="second_body" placeholder="Enter your second body here..." style="height: 12rem" name="second_body" required>{{ old('second_body') }}</textarea>
                                <label for="second_body">2nd Body</label>
                                @error('second_body')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Logo Upload Field -->
                            <div class="form-group mt-3">
                                <label for="logo">Upload Logo</label>
                                <input class="form-control" id="logo" type="file" name="logo" accept="image/*" />
                                @error('logo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button class="btn btn-primary text-uppercase mt-3" id="submitButton" type="submit">Post</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
