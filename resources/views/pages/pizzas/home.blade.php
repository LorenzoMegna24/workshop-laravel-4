@extends('welcome')

@section('title')
    PIZZA | Home
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach($pizzas as $elem)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{route('pizzas.show', ['pizza' => $elem->id])}}">{{$elem['nome_pizza']}}</a>
                    </h5>
                    <p class="card-text">{{$elem['ingredienti']}}</p>
                    {{-- BUTTON EDIT --}}
                    <a class="btn btn-primary" href="{{route('pizzas.edit', $elem)}}">Change</a>
                </div>
            </div>
            @endforeach    
        </div>
    </div>
    
@endsection