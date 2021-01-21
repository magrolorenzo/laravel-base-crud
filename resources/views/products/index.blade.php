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
                    <div class="product">
                        <h1>
                            <a href="{{route('products.show', ['product' => $product->id] ) }}" class="text-capitalize">
                                {{$product->id}} - {{$product->name}}
                            </a>
                        </h1>
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
