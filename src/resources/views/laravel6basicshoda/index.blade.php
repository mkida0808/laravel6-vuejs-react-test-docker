@extends('laravel6basicshoda.layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>

    @include('laravel6basicshoda.components.message', [
        'msg_title' => 'OK',
        'msg_content' => 'サブビューです',
    ])

    {{-- @component('laravel6basicshoda.components.message')
    @slot('msg_title')
    CAUTION!
    @endslot

    @slot('msg_content')
    これはメッセージです。
    @endslot
@endcomponent --}}
@endsection

@section('footer')
    copyright 2022 makoto
@endsection
