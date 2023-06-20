@extends('welcome')

@section('title')
    PIZZA | Create
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center">CREATE!</h2>

        <form action="{{route('pizzas.store')}}" method="POST">

            @csrf

            <div class="form-group my-2">
                <label class="form-label" for="">NOME</label>
                <input class="form-control" type="text" name="nome_pizza">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">INGREDIENTI</label>
                <textarea class="form-control" name="ingredienti" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">IMPASTO</label>
                <input class="form-control" type="text" name="impasto">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">TEMPO DI PREPARAZIONE</label>
                <input class="form-control" type="text" name="tempo_preparazione">
            </div>

            <button type="submit" class="btn btn-primary my-3">MAKE PIZZA</button>
        </form>    
    </div>
    
@endsection