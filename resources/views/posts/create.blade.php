@extends('layouts.main');

@section('content')
    <h1> สร้างโพสต์ใหม่ </h1>

    <form action="{{ route('posts.store') }}"  method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="titleHelp"
                       name="title" required >
                <small id="titleHelp" class="form-text text-muted">
                    Post Title is required
                </small>
            </div>

            <div class="form-group">
                <label for="content">Post Content</label>
                <textarea class="form-control" id="content"
                          name="content"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">สร้างแล้วนะจ้ะ</button>
    </form>






@endsection
