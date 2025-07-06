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
@section('title', 'delete.blade.php')

@section('content')
    <table>
        <tr>
            <th>id</th>
            <td>{{$product->id}}</td>
        </tr>
        <tr>
            <th>name</th>
            <td>{{$product->name}}</td>
        </tr>
        <tr>
            <th>price</th>
            <td>{{$product->price}}</td>
        </tr>
        <tr>
            <th>image</th>
            <td>{{$product->image}}</td>
        </tr>
        <tr>
            <th>description</th>
            <td>{{$product->description}}</td>
        </tr>
        <tr>
            <th></th>
            <td>
                <form action="/delete?id={{$product->id}}" method="POST">
                    @csrf
                    <button>削除</button>
                </form>
            </td>
        </tr>
    </table>

@endsection