@extends('layouts.app')

@section("content")
    <section id="home-section">
        <div class="container d-flex justify-content-center align-items-center">
            <h1>
                Benvenuto! Consulta il nostro <a class="badge badge-dark" href="{{route("products.index")}}">Inventario</a>
            </h1>
        </div>
    </section>
@endsection
