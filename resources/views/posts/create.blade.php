@extends('layouts.main');

@section('content')
    <h1> สร้างโพสต์ใหม่ </h1>

{{--    @if($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}

    <form action="{{ route('posts.store') }}"  method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp"
                       name="title" value="{{ old('title') }}" >
                <small id="titleHelp" class="form-text text-muted">
                    Post Title is required
                </small>

                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">
                <label for="content">Post Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content"
                          name="content" > {{ old('content') }}</textarea>
                <small id="titleHelp" class="form-text text-muted">
                    Post Content is required
                </small>
                @error('content')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">สร้างแล้วนะจ้ะ</button>
    </form>




@endsection
