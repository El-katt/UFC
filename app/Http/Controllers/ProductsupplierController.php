<?php

namespace App\Http\Controllers;

use  App\Models\Product;

use App\Models\supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsupplierController extends Controller
{
    public function add()
    {
        $products = Product::all();
        $suppliers = supplier::all();
        return view('stock.add', ['products' => $products, 'suppliers' => $suppliers]);
    }
    public function showAll()
    {
        $stocks = DB::select('select * from product_supplier');;
        $products = Product::all();
        $suppliers = supplier::all();
        return view('stock.Showall', ['stocks' => $stocks, 'products' => $products, 'suppliers' => $suppliers]);
    }

    public function store()
    {

        $this->ValidationForm();
        $res = DB::select('select * from product_supplier where product_id = :product_id AND   supplier_id = :supplier_id', ['product_id' => request('product_id'), 'supplier_id' => request('supplier_id')]);

        if ($res != null) {
            DB::update('update product_supplier SET quantity = :quantity , buy_price = :buy_price where product_id = :product_id AND   supplier_id = :supplier_id ', ['quantity' => $res[0]->quantity + request('quantity'), 'buy_price' => request('buy_price'), 'product_id' => request('product_id'), 'supplier_id' => request('supplier_id')]);
        } else {
            DB::insert('insert into product_supplier (product_id, supplier_id , quantity , buy_price ) values (?, ? , ? , ?)', [request('product_id'), request('supplier_id'), request('quantity'), request('buy_price')]);
        }
        return redirect('/home');
    }

    public function destroy()
    {
        DB::delete('delete from product_supplier where id=:id', ['id' => request('id')]);
        return redirect('/home');
    }
    public function ValidationForm()
    {
        return request()->validate([
            'product_id' => 'required',
            'supplier_id' => 'required',
            'quantity' => 'required',
            'buy_price' => 'required'
        ]);
    }
}
