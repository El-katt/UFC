<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
    public function store()
    {
        $this->ValidationForm();
        if (supplier::where('mail_supplier', request('mail_supplier'))->exists()) {
            throw ValidationException::withMessages(['mail_supplier' => 'The email must be unique , already exist']);
        }
        if (supplier::where('tele_supplier', request('tele_supplier'))->exists()) {
            throw ValidationException::withMessages(['tele_supplier' => 'The Phone number must be unique , already exist']);
        }
        if (supplier::where('fax_supplier', request('fax_supplier'))->exists()) {
            throw ValidationException::withMessages(['fax_supplier' => 'The fax number must be unique , already exist']);
        }
        $supplier = new supplier($this->ValidationForm());
        // if (request()->has('Addr2_supplier')) {
        //     $supplier->Addr2_supplier = request('Addr2_supplier');
        // }
        if (request()->has('city_supplier')) {
            $supplier->city_supplier = request('city_supplier');
        }
        if (request()->has('fax_supplier')) {
            $supplier->fax_supplier = request('fax_supplier');
        }

        if (request()->has('interlocutor')) {
            $supplier->interlocutor = request('interlocutor');
        }
        if (request()->has('tele_interlocutor')) {
            $supplier->tele_interlocutor = request('tele_interlocutor');
        }
        $supplier->save();
        return redirect('/home');
    }
    public function update($id)
    {

        $this->ValidationForm();

        $supplier = supplier::where('id', $id)->firstOrFail();
        $supplier->update([
            'name_supplier' => request('name_supplier'),
            'Addr1_supplier' => request('Addr1_supplier'),
            'cp_supplier' => request('cp_supplier'),
            'city_supplier' => request('city_supplier'),
            'tele_supplier' => request('tele_supplier'),
            'fax_supplier' => request('fax_supplier'),
            'mail_supplier' => request('mail_supplier'),
            'interlocutor' => request('interlocutor'),
            'tele_interlocutor' => request('tele_interlocutor')
        ]);

        return redirect('/supplier/showall');
    }
    public function showAll()
    {
        $supp = supplier::All();
        return view('supplier.ShowAll', ['supp' => $supp]);
    }
    public function showMore($id)
    {
        $supplier = supplier::where('id', $id)->first();
        return view('supplier.ShowMore', ['supp' => $supplier]);
    }
    public function destroy($id)
    {
        $supplier = supplier::find($id)->delete();
        return redirect('/supplier/showall');
    }

    public function ValidationForm()
    {
        return request()->validate([
            'name_supplier' => 'required',
            'Addr1_supplier' => 'required',
            'cp_supplier' => 'required',
            'tele_supplier' => 'required',
            'mail_supplier' => 'required'
        ]);
    }
}
