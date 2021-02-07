<?php

namespace App\Http\Controllers;

use  App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        return view('product.add');
        // return 'hello';
    }
    public function store()
    {

        $this->ValidationForm();
        if (Product::where('name_product', request('name_product'))->exists()) {
            throw ValidationException::withMessages(['name_product' => 'The name of Product  must be unique , already exist']);
        }

        $product = new Product($this->ValidationForm());
        if (request()->has('comment_product')) {
            $product->comment_product = request('comment_product');
        }
        $product->save();
        return redirect('/home');
    }

    public function showAll()
    {
        $products = Product::All();
        return view('product.ShowAll', ['products' => $products]);
    }

    public function showMore($id)
    {
        $product = Product::where('id', $id)->first();
        return view('product.ShowMore', ['product' => $product]);
    }
    public function update($id)
    {

        $this->ValidationForm();

        $product = Product::where('id', $id)->firstOrFail();
        $product->update([
            'name_product' => request('name_product'),
            'sell_price_product' => request('sell_price_product'),
            'available' => request('available'),
            'comment_product'=>request('comment_product')
        ]);

        return redirect('/Product/showall');
    }


    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return redirect('/Product/showall');
    }
    public function ValidationForm()
    {
        return request()->validate([
            'name_product' => 'required',
            'sell_price_product' => 'required',
            'available' => 'required'
        ]);
    }
}
