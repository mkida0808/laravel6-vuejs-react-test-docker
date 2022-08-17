@extends('laravel6basicshoda.layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボードページ（Model/Eloquent）
@endsection

@section('content')
    <table>
        <tr>
            {{-- <th>Data</th> --}}
            <th>Message</th>
            <th>Name</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                {{-- <td>{{ $item->getData() }}</td> --}}
                <td>{{ $item->message }}</td>
                <td>{{ $item->person->name }}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2022 makoto
@endsection
