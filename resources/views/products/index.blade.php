@extends('layouts.app')

@section("content")
    <section id="products-section">
        <div class="container">
            <h1>Pagina prodotti</h1>
            <div class="products-wrapper d-flex justify-content-between">
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
        </div>
    </section>
@endsection
