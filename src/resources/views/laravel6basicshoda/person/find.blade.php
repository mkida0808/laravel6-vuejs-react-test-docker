@extends('laravel6basicshoda.layouts.helloapp')

@section('title', 'Person.find')

@section('menubar')
    @parent
    検索ページ（Model/Eloquent）
@endsection

@section('content')
    <form action="/laravel6basicshoda/person/find" method="post">
        @csrf
        <input type="text" name="input" value="{{ $input }}">
        <input type="submit" value="find">
    </form>

    @if (isset($item))
        <table>
            <tr>
                <th>Data</th>
            </tr>
            <tr>
                <td>{{ $item->getData() }}</td>
            </tr>
        </table>
    @endif
@endsection

@section('footer')
    copyright 2022 makoto
@endsection
