@extends('welcome')
@section('pizza')
    @foreach($pizzas as $elem)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$elem['nome_pizza']}}</h5>
            <p class="card-text">{{$elem['ingredienti']}}</p>
        </div>
    </div>
    @endforeach
@endsection