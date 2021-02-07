<?php

namespace App\Http\Controllers;
use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        return view('supplier.add');
    }
    public function store(){
        $this->ValidationForm();
        $supplier=new supplier($this->ValidationForm());
        $supplier->save();
        return redirect('/home');
    }
    public function ValidationForm(){
        return request()->validate([
            'name_supplier' => 'required',
            'Addr1_supplier' => 'required',
            'cp_supplier' => 'required' ,
            'tele_supplier'=>'required',
            'mail_supplier'=> 'required'
            ]);
    }
}
