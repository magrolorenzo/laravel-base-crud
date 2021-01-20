@extends('layouts.app')

@section("content")
    <section>
        <div class="container d-flex justify-content-center flex-column align-items-center">
            <h1>Pagina dettaglio</h1>
            <div class="product ">
                <h1 class="text-capitalize">
                    {{$product->id}} - {{$product->name}}
                </h1>
                <ul>
                    <li>Colore: {{$product->color}}</li>
                    <li>Data di produzione: {{$product->product_date}}</li>
                    <li>Tipo prodotto: {{$product->type}}</li>
                    <li>Prezzo: {{$product->price}}€</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
