<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    // データ一覧ページの表示
    // public function index()
    // {
    //     $products = Product::simplePaginate(6);
    //     return view('index', ['products' => $products]);
    // }
    public function index(Request $request)
    {
        $products = Product::Paginate(6);
        $input = $request->input('input', '');
        return view('index', compact('products', 'input'));
    }
    // データ追加用ページの表示
    // public function add()
    // {
    //     return view('add');
    // }

    public function create(ProductRequest $request)
    {
        $form = $request->all();
        Product::creat($form);
        return redirect('/product');
    }

    // データ編集ページの表示
    public function edit(Request $request)
    {
        $product = Product::find($request->id);
        return view('edit', ['form' => $product]);
    }
    // 更新機能
    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Product::find($request->id)->update($form);
        return redirect('/product');
    }
    // データ削除用ページの表示
    public function delete(Request $request)
    {
        $product = Product::find($request->id);
        return view('delete', ['product' => $product]);
    }

    // 削除機能
    public function remove(Request $request)
    {
        Product::find($request->id)->delete();
        return redirect('/product');
    }
    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        $item = Product::where('name', 'LIKE', "%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }
    public function bind(Product $product)
    {
        $data = [
            'item' => $product,
        ];
        return view('product.binds', $data);
    }
}