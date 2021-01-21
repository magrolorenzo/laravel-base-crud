@extends('layouts.app')

@section("content")
    <section>
        <div class="container">
            <form class="w-50">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Color</label>
                    <input type="text" class="form-control" name="color">
                </div>
                <div class="form-group">
                    <label>Product Date</label>
                    <input type="date" class="form-control" name="product_date">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" class="form-control" name="type">
                </div>
                <div class="form-group">
                    <label>Price €</label>
                    <input type="text" class="form-control" name="price">
                </div>
                <button type="button" name="button" class="btn btn-success">Inserisci</button>
            </form>
        </div>
    </section>
@endsection
