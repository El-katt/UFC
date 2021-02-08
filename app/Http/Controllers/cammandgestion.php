<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\distination;
use App\Models\commande;
use App\Models\Product;
use App\Models\Commandline;
use App\Models\supplier;
use Illuminate\Validation\ValidationException;

class cammandgestion extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function new()
    {
        return view('desitination.new');
    }
    public function saveDestination()
    {
        $this->ValidationForm();

        $dis = new distination($this->ValidationForm());
        if (request()->has('Addr2_dest')) {
            $dis->Addr2_dest = request('Addr2_dest');
        }
        if (request()->has('city_dest')) {
            $dis->city_dest = request('city_dest');
        }
        if (request()->has('fax_dest')) {
            $dis->fax_dest = request('fax_dest');
        }
        $dis->save();
        return redirect('command/detail')->with(['distination' => $dis]);
    }
    public function CommandDetail()
    {
        return view('desitination.commanddetail', ['id_distination' => session()->get('distination')->id]);
    }
    public function saveOrderd()
    {
        $command = commande::create(['distination_id' => request('id_distination'), "ordered_by" => request('ordered_by')]);
        $command->save();
        $products = Product::all();
        return view('desitination.commandLine', ['command' => $command, 'products' => $products, 'Qte' => request('Qte')]);
    }
    public function store()
    {

        $products = Product::all();
        for ($x = 0; $x < request('Qte'); $x++) {
            $Commandline = Commandline::create(['commande_id' => request('commande_id') ]);
            $Commandline->product_id=request('item' . $x);
            $Commandline->qte_product=request('Qteitem' . $x);
            $Commandline->price = $products->where('id', request('item' . $x))->first()->sell_price_product;
            $Commandline->save();
        }
        return redirect('/home');
    }

    public function ValidationForm()
    {
        return request()->validate([
            'lbl_distination' => 'required',
            'Addr1_dest' => 'required',
            'cp_dest' => 'required',
            'tele_dest' => 'required',
            'mail_dest' => 'required'
        ]);
    }
}
