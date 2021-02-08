{{-- @extends('layouts.index')
@extends('layouts.navbar')

@section('body') --}}

@extends('layouts.app')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="width:864px">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <form method="POST" action="/stock/save" style="width:700px ">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Product :</label>
                    <select class="form-control" name='product_id'>
                      @foreach ($products as $product)

                         <option value="{{$product->id}}">{{$product->name_product}}</option>
                      @endforeach

                    </select>
                    @error('product_id')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Product :</label>
                    <select class="form-control" name='supplier_id'>
                      @foreach ($suppliers as $supplier)

                         <option value="{{$supplier->id}}">{{$supplier->name_supplier}}</option>
                      @endforeach

                    </select>
                    @error('supplier_id')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>

                <br>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Buying price</label>
                    <input type="float" class="form-control" placeholder="MAD" name="buy_price" value="{{old('buy_price')}}" >
                    @error('buy_price')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>

                <div class="form-group">
                    <label >Quantity</label>
                    <input type="float" class="form-control"  name="quantity" value="{{old('quantity')}}" >
                    @error('quantity')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
               

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
