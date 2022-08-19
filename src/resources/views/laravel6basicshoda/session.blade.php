@extends('laravel6basicshoda.layouts.helloapp')

@section('title', 'Session')

@section('menubar')
    @parent
    セッションページ
@endsection

@section('content')
    <p>{{ $session_data }}</p>
    <form action="/laravel6basicshoda/session" method="post">
        @csrf
        <input type="text" name="input">
        <input type="submit" value="send">
    </form>
@endsection

@section('footer')
    copyright 2022 makoto
@endsection
