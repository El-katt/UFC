{{-- @extends('layouts.index')
@extends('layouts.navbar')

@section('body') --}}

@extends('layouts.app')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="width:864px">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <form method="POST" action="/command/destination" style="width:700px ">
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlInput1">lbl distination</label>
                  <input type="text" class="form-control" placeholder="Name" name="lbl_distination" value="{{old('lbl_distination')}}" >
                  @error('lbl_distination')
                  <p style="color: red">{{ $message}}</p>
                 @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Address 1 destination *</label>
                    <input type="text" class="form-control" placeholder="123 Main Street, New York, NY 10030" name="Addr1_dest" value="{{old('Addr1_dest')}}" >
                    @error('Addr1_dest')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
                <div class="form-group">
                    <label >Address 2 destination </label>
                    <input type="text" class="form-control" placeholder="123 Main Street, New York, NY 10030" name="Addr2_dest" value="Null">
                    @error('Addr2_dest')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
                <div class="form-group">
                    <label >cp destination *</label>
                    <input type="text" class="form-control" name="cp_dest" value="{{old('cp_dest')}}">
                    @error('cp_dest')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
                <div class="form-group">
                    <label >city</label>
                    <input type="text" class="form-control" name="city_dest" value="{{old('city_dest')}}">
                    @error('city_dest')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
                <div class="form-group">
                    <label >tele * </label>
                    <input type="text" class="form-control" name="tele_dest" value="{{old('tele_dest')}}">
                    @error('tele_dest')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
                <div class="form-group">
                    <label >Fax</label>
                    <input type="text" class="form-control" name="fax_dest" value="{{old('fax_dest')}}">
                    @error('fax_dest')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
                <div class="form-group">
                    <label >Mail *</label>
                    <input type="email" class="form-control" name="mail_dest" value="{{old('mail_dest')}}">
                    @error('mail_dest')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>

                <button type="submit" class="btn btn-primary">next</button>
              </form>
        </div>
    </div>
</div>
@endsection
