@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Please choose what you want to do ?</p>
                    <div id="Product">
                        <div class="card mb-3" >
                            <div class="row no-gutters">
                              <div class="col-md-5">
                                <img src="{{asset('img/product.png')}}" class="card-img" alt="...">
                              </div>
                              <div class="col-md-7">
                                <div class="card-body">
                                  <h5 class="card-title">Product</h5>

                                  <a href="/Product/add" class="badge badge-dark "><h5>Add</h5></a>
                                  <a href="/Product/showall" class="badge badge-dark"><h5>Show  ALL</h5></a>

                                  <p class="card-text"></p>
                                  <p class="card-text"><small class="text-muted"></small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div id="stock">
                        <div class="card mb-3" >
                            <div class="row no-gutters">
                              <div class="col-md-4">
                                <img src="{{asset('img/stock.png')}}" class="card-img" alt="...">
                              </div>
                              <div class="col-md-1">
                                </div>
                              <div class="col-md-7">
                                <div class="card-body">
                                  <h5 class="card-title">Stock</h5>
                                  <a href="/stock/add" class="badge badge-dark "><h5>Add</h5></a>
                                  <a href="/stock/showall" class="badge badge-dark "><h5>Show </h5></a>
                                  <p class="card-text"></p>
                                  <p class="card-text"><small class="text-muted"></small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div id="supplier">
                        <div class="card mb-3" >
                            <div class="row no-gutters">
                              <div class="col-md-5">
                                <img src="{{ asset('img/supplier.jpg') }}" class="card-img" alt="...">
                              </div>
                              <div class="col-md-7">
                                <div class="card-body">
                                  <h5 class="card-title">Supplier</h5>
                                  <a href="/supplier/add" class="badge badge-dark "><h5>Add</h5></a>
                                  <a href="/supplier/showall" class="badge badge-dark"><h5>Show  ALL</h5></a>

                                  <p class="card-text"></p>
                                  <p class="card-text"><small class="text-muted"></small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div id="Command">
                        <div class="card mb-3" >
                            <div class="row no-gutters">
                              <div class="col-md-5">
                                <img src="{{ asset('img/supplier.jpg') }}" class="card-img" alt="...">
                              </div>
                              <div class="col-md-7">
                                <div class="card-body">
                                  <h5 class="card-title">Command</h5>
                                  <a href="/command/new" class="badge badge-dark "><h5>New</h5></a>

                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
