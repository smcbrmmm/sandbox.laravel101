@extends('layouts.main')

@section('content')
    <h1> Show Page </h1>

    {{-- not show on html--}}
    <!-- show on html-->

    <p>ID: {{ $id }}</p>
    <p>NAME: {{ $name }}</p>

    @if($id > 100)
        <p> {{ $id }} > 100 </p>
    @else
        <p> {{ $id }} < 100 </p>
    @endif

    @unless($id > 100)
        <p> {{ $id }} <= 100 </p>
    @endunless

    @isset($records)
        <p> มีตัวแปร $record ให้ใช้งาน</p>
    @endisset

{{--    @foreach( $posts as $post)--}}
{{--        <p> {{ $post }}</p>--}}

{{--    @endforeach--}}


    @empty($array)
        <p>ตรวจสอบแล้วเป็น array ว่างหรือ string ว่าง หรือค่า null</p>
    @endempty



{{--    {{ $text }}--}}
{{--    --}}
{{--    @@section('content')--}}

{{--    XSS--}}
{{--    @{!! $text !!}--}}

{{--    <p> {{ time() }}</p>--}}

{{--    <p> {{ date('Y-m-d H:i:s') }}</p>--}}
@endsection



