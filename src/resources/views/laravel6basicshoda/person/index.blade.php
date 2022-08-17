@extends('laravel6basicshoda.layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    インデックスページ（Model/Eloquent）
@endsection

@section('content')
    <table>
        <tr>
            {{-- <th>Id</th>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th> --}}
            <th>Data</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                {{-- <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->mail }}</td>
                <td>{{ $item->age }}</td> --}}
                <td>{{ $item->getData() }}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2022 makoto
@endsection
