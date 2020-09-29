@extends('layouts.main')

@section('content')
    <h1> รายการโพสต์ทั้งหมด </h1>


    @if(\Illuminate\Support\Facades\Auth::check())
        <p> Hello {{ Auth::user()->name }}</p>
    @endif

    @if(\Illuminate\Support\Facades\Auth::check())
    <a href="{{ route('posts.create') }}" class=""> สร้างโพสต์ใหม่</a>
    @endif

    {{ $posts -> links()}}

    @foreach($posts as $post)
    <div class="card mb-3" style="width: 36rem;">

        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">
                {{ $post->created_at->diffForHumans()}}
            <hr>
                BY {{ $post->user->name }}
            </p>
            <a href="{{ route('posts.show', ['post' => $post->id]) }}"
               class="btn btn-primary">Go to post
            </a>
        </div>
    </div>
    @endforeach




@endsection
