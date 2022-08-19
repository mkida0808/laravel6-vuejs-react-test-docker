@extends('laravel6basicshoda.layouts.helloapp')

@section('title', 'ユーザー認証')

@section('menubar')
    @parent
    ユーザー認証ページ
@endsection

@section('content')
    <p>{{ $message }}</p>
    <form action="/laravel6basicshoda/auth" method="post">
        <table>
            @csrf
            <tr>
                <th>Mail: </th>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <th>Pass: </th>
                <td><input type="password" name="password"></td>
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
