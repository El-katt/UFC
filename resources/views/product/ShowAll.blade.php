{{-- @extends('layouts.index')
@extends('layouts.navbar') --}}
@extends('layouts.app')
@section('content')

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
    <th>Product Name </th>
    <th>Product Price</th>
    <th>Available</th>
    <th> </th>
    <th><th>
    <th>More info </th>
    </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
    <tr>
        <th scope="row">{{$product->name_product}}</th>

        <td>{{$product->sell_price_product}}</td>
        <td>{{$product->available==1 ? 'True' : 'False'}}</td>
        <td></td>
        <td></td>
        <td></td>
        <td><a href="/Product/{{$product->id}}/more" class="btn btn-success">more</a></td>
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
