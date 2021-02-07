{{-- @extends('layouts.index')
@extends('layouts.navbar')

@section('body') --}}

@extends('layouts.app')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="width:864px">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <form method="POST" action="/product/save" style="width:700px ">
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlInput1">Name *</label>
                  <input type="text" class="form-control" placeholder="Name" name="name_product" value="{{old('name_product')}}" >
                  @error('name_product')
                  <p style="color: red">{{ $message}}</p>
                 @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Price fo product*</label>
                    <input type="float" class="form-control" placeholder="MAD" name="sell_price_product" value="{{old('sell_price_product')}}" >
                    @error('sell_price_product')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>

                <div class="form-group">
                    <label >Comment</label>
                    <textarea name="comment_product"  cols="95" rows="5">{{old('comment_product')}}</textarea>
                    @error('comment_product')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
                <div class="form-group">
                    <label >Available :</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  name="available" value="1">
                        <label class="form-check-label" for="inlineCheckbox1">True</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="available"  value="0">
                        <label class="form-check-label" for="inlineCheckbox2">False</label>
                    </div>


                    @error('available')
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
