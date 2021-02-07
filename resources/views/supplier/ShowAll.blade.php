@extends('layouts.index')
@extends('layouts.navbar')

@section('body')

<section class="ftco-section">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6 text-center mb-5">
    <h2 class="heading-section">Suppliers</h2>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="table-wrap">
    <table class="table table-striped">
    <thead>
    <tr>
    <th>Name </th>
    <th>Address 1</th>
    <th>city</th>
    <th>Phone number </th>
    <th>Interlocuteur</th>
    <th>More info </th>
    </tr>
    </thead>
    <tbody>
    @foreach ($supp as $supplier)
    <tr>
        <th scope="row">{{$supplier->name_supplier}}</th>

        <td>{{$supplier->Addr1_supplier}}</td>
        <td>{{$supplier->city_supplier}}</td>
        <td>{{$supplier->tele_supplier}}</td>
        <td>{{$supplier->interlocutor}}</td>
        <td><a href="/supplier/{{$supplier->id}}/more" class="btn btn-success">more</a></td>
    </tr>
    @endforeach


    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection
