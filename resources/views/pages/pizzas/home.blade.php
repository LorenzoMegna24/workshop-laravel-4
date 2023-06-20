@extends('welcome')

@section('title')
    PIZZA | Home
@endsection

@section('pizza')
    <div class="container">
        <div class="row">
            @foreach($pizzas as $elem)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$elem['nome_pizza']}}</h5>
                    <p class="card-text">{{$elem['ingredienti']}}</p>
                </div>
            </div>
            @endforeach    
        </div>
    </div>
    
@endsection