@extends('laravel6basicshoda.layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr>
            <th><a href="/laravel6basicshoda?sort=id">Id</a></th>
            <th><a href="/laravel6basicshoda?sort=name">Name</a></th>
            <th><a href="/laravel6basicshoda?sort=mail">Mail</a></th>
            <th><a href="/laravel6basicshoda?sort=age">Age</a></th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->mail }}</td>
                <td>{{ $item->age }}</td>
            </tr>
        @endforeach
    </table>
    {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
    copyright 2022 makoto
@endsection
