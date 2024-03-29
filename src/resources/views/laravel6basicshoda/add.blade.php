@extends('laravel6basicshoda.layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    <form action="/laravel6basicshoda/add" method="post">
        <table>
            @csrf
            <tr>
                <th>Name: </th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>Mail: </th>
                <td><input type="text" name="mail"></td>
            </tr>
            <tr>
                <th>Age: </th>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2022 makoto
@endsection
