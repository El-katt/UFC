{{-- @extends('layouts.index')
@extends('layouts.navbar') --}}
@extends('layouts.app')
@section('content')

<section class="ftco-section">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6 text-center mb-5">
    <h2 class="heading-section">Stock</h2>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="table-wrap">
    <table class="table table-striped">
    <thead>
    <tr>
    <th>Product Name </th>
    <th>Sepplier Name</th>
    <th>quantity</th>
    <th>Buying price (MAD)</th>
    {{-- <th><th> --}}
    <th>Delete </th>
    </tr>
    </thead>
    <tbody>
    @foreach ($stocks as $item)
    <tr>
        <th scope="row">{{$products->where('id' , $item->product_id)->first()->name_product}} </th>

        <td>{{$suppliers->where('id' , $item->supplier_id)->first()->name_supplier}} </td>
        <td>{{$item->quantity}}</td>
        <td>{{$item->buy_price}}</td>
        {{-- <td></td>
        <td></td> --}}
        <td><a href="/stock/delete/{{$item->id}}" class="btn btn-danger">delete</a></td>
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
