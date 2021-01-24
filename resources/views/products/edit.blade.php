@extends('layouts.app')

@section("content")
    <section>
        <div class="container">
            <form action="{{route("products.update", ["product" =>$product->id])}}" method="POST" class="w-50">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="name" value="{{$product->name}}">
                </div>
                <div class="form-group">
                    <label>Color</label>
                    <input type="text" class="form-control" name="color" value="{{$product->color}}">
                </div>
                <div class="form-group">
                    <label>Product Date</label>
                    <input type="date" class="form-control" name="product_date" value="{{$product->product_date}}">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" class="form-control" name="type" value="{{$product->type}}">
                </div>
                <div class="form-group">
                    <label>Price €</label>
                    <input type="number" class="form-control " name="price" value="{{$product->price}}">
                </div>
                {{-- Bottone di submit --}}
                <button type="submit" name="button" class="btn btn-warning">
                    Applica Modifiche
                </button>
            </form>
        </div>
    </section>
@endsection
