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
@section('title', 'edit.blade.php')

@section('content')
    <form action="/edit" method="POST">
        <table>
            @csrf
            <tr>
                <th>
                    id
                </th>
                <td>
                    <input type="text" name="id" value="{{$form->id}}">
                </td>
            </tr>
            <tr>
                <th>
                    name
                </th>
                <td>
                    <input type="text" name="name" value="{{$form->name}}">
                </td>
            </tr>
            <tr>
                <th>
                    price
                </th>
                <td>
                    <input type="text" name="price" value="{{$form->price}}">
                </td>
            </tr>
            <tr>
                <th>
                    image
                </th>
                <td>
                    <input type="text" name="image" value="{{$form->image}}">
                </td>
            </tr>
            <tr>
                <th>
                    description
                </th>
                <td>
                    <input type="text" name="description" value="{{$form->description}}">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <button>変更を保存</button>
                </td>
            </tr>
        </table>
    </form>
@endsection