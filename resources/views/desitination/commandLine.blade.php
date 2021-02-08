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
        <form action="/command/save" method="post">
        @csrf
        <input type="hidden" name="Qte" value="{{$Qte}}">
        <input type="hidden" name="commande_id" value="{{$command->id}}">
    <table class="table table-striped">
    <thead>
    <tr>
    <th>Product Name </th>
    <th>Product Qte</th>

    <th></th>
    <th></th>
    <th></th>
    <th>More info </th>

    </tr>
    </thead>
    <tbody>

            @for ($i = 0; $i < $Qte; $i++)
                <tr>

                    <td>
                        <div class="form-group">
                            <select class="form-control" name="item{{$i}}">
                                @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->name_product}}</option>
                                @endforeach

                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="number" class="form-control" name="Qteitem{{$i}}" placeholder="Qte">
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="/Product/{{$product->id}}/more" class="btn btn-success">more</a></td>
                </tr>
            @endfor



    </tbody>
    </table>
    <button type="submit" class="btn btn-primary">Done</button>
</form>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection
