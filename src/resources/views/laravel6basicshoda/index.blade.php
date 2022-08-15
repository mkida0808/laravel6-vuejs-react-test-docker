@extends('laravel6basicshoda.layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>{{ $msg }}</p>
    {{-- $errorsはバリデーション時に発生したエラー内容のオブジェクトが格納されている --}}
    @if (count($errors) > 0)
    <p>入力に問題があります。再入力して下さい。</p>
    {{-- <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> --}}
    @endif
    <form action="/laravel6basicshoda" method="post">
        <table>
            @csrf
            @if ($errors->has('name'))
            <tr>
                <th>ERROR</th>
                <td>{{ $errors->first('name') }}</td>
            </tr>
            @endif
            <tr>
                <th>name: </th>
                <td><input type="text" name="name" value="{{ old('name') }}"></>
            </tr>

            @if ($errors->has('email'))
            <tr>
                <th>ERROR</th>
                <td>{{ $errors->first('email') }}</td>
            </tr>
            @endif
            <tr>
                <th>mail: </th>
                <td><input type="text" name="email" value="{{ old('email') }}"></td>
            </tr>

            @if ($errors->has('age'))
            <tr>
                <th>ERROR</th>
                <td>{{ $errors->first('age') }}</td>
            </tr>
            @endif
            <tr>
                <th>age: </th>
                <td><input type="text" name="age" value="{{ old('age') }}"></td>
            </tr>

            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2022 makoto
@endsection
