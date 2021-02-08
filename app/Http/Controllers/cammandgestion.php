<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\distination;
use App\Models\commande;


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
        return redirect('/command/{{$dis->id}}');
    }
    public function CommandDetail($id)
    {
        return view('desitination.commanddetail', ['id_distination' => $id]);
    }
    public function saveOrderd()
    {
        $command = commande::create(['distination_id' => request('id_distination'), "ordered_by" => request('ordered_by')]);
        $command->save();
        return 'it\'s work';
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
