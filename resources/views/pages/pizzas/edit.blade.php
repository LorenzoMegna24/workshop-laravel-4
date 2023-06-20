@extends('welcome')

@section('title')
    PIZZA | Edit
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center">EDIT!</h2>

        <form action="{{route('pizzas.update', $pizza)}}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group my-2">
                <label class="form-label" for="">NOME</label>
                <input class="form-control" type="text" name="nome_pizza" value="{{old('nome_pizza') ?? $pizza->nome_pizza}}">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">INGREDIENTI</label>
                <textarea class="form-control" name="ingredienti" cols="30" rows="10">{{old('ingredienti') ?? $pizza->ingredienti}}</textarea>
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">IMPASTO</label>
                <input class="form-control" type="text" name="impasto" value="{{old('impasto') ?? $pizza->impasto}}">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">TEMPO DI PREPARAZIONE</label>
                <input class="form-control" type="text" name="tempo_preparazione" value="{{old('tempo_preparazione') ?? $pizza->tempo_preparazione}}">
            </div>

            <button type="submit" class="btn btn-primary my-3">CHANGE PIZZA</button>
        </form>    
    </div>
    
@endsection