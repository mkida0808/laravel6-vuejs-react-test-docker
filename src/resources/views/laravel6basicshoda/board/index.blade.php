@extends('laravel6basicshoda.layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボードページ（Model/Eloquent）
@endsection

@section('content')
    <table>
        <tr>
            <th>Data</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->getData() }}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2022 makoto
@endsection
