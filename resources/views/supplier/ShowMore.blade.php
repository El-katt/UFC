{{-- @extends('layouts.index')
@extends('layouts.navbar')

@section('body') --}}

@extends('layouts.app')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="width:864px">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <form method="POST" action="/supplier/update/{{$supp->id}}" style="width:700px ">
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlInput1">Name *</label>
                  <input type="text" class="form-control" placeholder="Name" name="name_supplier" value="{{$supp->name_supplier}}" >
                  @error('name_supplier')
                  <p style="color: red">{{ $message}}</p>
                 @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Address 1 *</label>
                    <input type="text" class="form-control" placeholder="123 Main Street, New York, NY 10030" name="Addr1_supplier" value="{{$supp->Addr1_supplier}}" >
                    @error('Addr1_supplier')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                {{-- <br>
                <div class="form-group">
                    <label >Address 2 </label>
                    <input type="text" class="form-control" placeholder="123 Main Street, New York, NY 10030" name="Addr2_supplier" value="Null">
                    @error('Addr2_supplier')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div> --}}
                <br>
                <div class="form-group">
                    <label >cp supplier *</label>
                    <input type="text" class="form-control" name="cp_supplier" value="{{$supp->cp_supplier}}">
                    @error('cp_supplier')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
                <div class="form-group">
                    <label >city</label>
                    <input type="text" class="form-control" name="city_supplier" value="{{$supp->city_supplier}}">
                    @error('city_supplier')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
                <div class="form-group">
                    <label >tele * </label>
                    <input type="text" class="form-control" name="tele_supplier" value="{{$supp->tele_supplier}}">
                    @error('tele_supplier')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
                <div class="form-group">
                    <label >Fax</label>
                    <input type="text" class="form-control" name="fax_supplier" value="{{$supp->fax_supplier}}">
                    @error('fax_supplier')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
                <div class="form-group">
                    <label >Mail *</label>
                    <input type="email" class="form-control" name="mail_supplier" value="{{$supp->mail_supplier}}">
                    @error('mail_supplier')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
                <div class="form-group">
                    <label >Interlocuteur</label>
                    <input type="text" class="form-control" name="interlocutor" value="{{$supp->interlocutor}}">
                    @error('interlocutor')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
                <div class="form-group">
                    <label >tele interlocutor</label>
                    <input type="text" class="form-control" name="tele_interlocutor" value="{{$supp->tele_interlocutor}}">
                    @error('tele_interlocutor')
                    <p style="color: red">{{ $message}}</p>
                   @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-warning">update</button>
                <button class="btn btn-secondary"><a href="/supplier/showall" style="color: white">cancel</a></button>
                <button class="btn btn-danger"><a href="/supplier/delete/{{$supp->id}}" style="color: white">Delete</a></button>
            </form>

            </div>
    </div>
</div>
@endsection
