{{-- @extends('layouts.index')
@extends('layouts.navbar')

@section('body') --}}

@extends('layouts.app')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="width:864px">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <form method="POST" action="/command/orderd_by" style="width:700px ">
                @csrf
                <input type="hidden" name="id_distination" value="{{$id_distination}}">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Ordered By </label>
                  <input type="text" class="form-control" placeholder="Name" name="ordered_by" value="{{old('ordered_by')}}" >
                  @error('ordered_by')
                  <p style="color: red">{{ $message}}</p>
                 @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Number of item </label>
                    <input type="number" class="form-control" placeholder="Number of command" name="Qte" value="{{old('Qte')}}" >
                    @error('Qte')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                  </div>

                <button type="submit" class="btn btn-primary">next</button>
              </form>
        </div>
    </div>
</div>
@endsection
