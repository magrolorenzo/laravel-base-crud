@extends('layouts.app')

@section("content")
    <section id="products-section">
        <div class="container">
            {{-- Titolo --}}
            <div class="py-2 mb-2">
                <h1>Pagina prodotti</h1>
            </div>
            {{-- Lista card elementi --}}
            <div class="products-wrapper">
                @foreach ($products as $product)
                    <div class="product d-flex justify-content-between align-items-center">
                        <div class="product-name">
                            <a href="{{route('products.show', ['product' => $product->id] ) }}" class="text-capitalize h1">
                                {{$product->id}} - {{$product->name}}
                            </a>
                        </div>
                        <div class="edit-and-delete">
                            <a href="{{route("products.edit", ["product" =>$product->id])}}" class="btn btn-warning">
                                Modifica
                            </a>
                            <a href="#" class="btn btn-danger">
                                Elimina
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- Bottone per reindirizzamento a form --}}
            <div class="py-2 mb-2">
                <a href="{{route('products.create')}}" class="btn btn-primary">
                    Inserisci un nuovo Prodotto
                </a>
            </div>

        </div>
    </section>
@endsection
