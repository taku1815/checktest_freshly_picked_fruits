@extends('layouts.default')
<style>
    th {
        background-color: #289ADC;
        color: white;
        padding: 5px 40px;
    }

    td {
        padding: 25px 40px;
        background-color: #EEEEEE;
        text-align: center;
    }
</style>
@section('title', 'mogitate')

@section('content')
    <form action="find" method="POST">
        @csrf
        <input type="text" name="input" value="{{$input}}">
        <input type="submit" value="商品を探す">
    </form>

    <table>
        <tr>
            <th>商品一覧</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>
                    {{$product->getDetail()}}
                </td>
            </tr>
        @endforeach
    </table>
    {{ $products->links() }}

    @if (@isset($item))
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>season</th>
                <th>description</th>
            </tr>
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->season}}</td>
                <td>{{$item->description}}</td>
            </tr>
        </table>
    @endif
@endsection