@extends('layouts.default')
<style>
    th {
        background-color: #289ADC;
        color: white;
        padding: 5px 40px;
    }

    tr:nth-child(odd) td {
        background-color: #FFFFFF;
    }

    td {
        padding: 25px 40px;
        background-color: #EEEEEE;
        text-align: center;
    }

    button {
        padding: 10px 20px;
        background-color: #289ADC;
        border: none;
        color: white;
    }
</style>
@section('title', '商品一覧')

@section('content')
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="/add" method="post">
        <table>
            @csrf
            <tr>
                <th>name</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>price</th>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <th>season</th>
                <td><input type="text" name="season"></td>
            </tr>
            <tr>
                <th>description</th>
                <td><input type="text" name="description"></td>
            </tr>
            <tr>
                <th>image</th>
                <td><input type="text" name="image"></td>
            </tr>
            <tr>
                <th></th>
                <td><button>商品を追加</button></td>
            </tr>
        </table>
    </form>
@endsection