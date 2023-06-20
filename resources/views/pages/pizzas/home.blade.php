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
                    <a class="btn btn-primary" href="{{route('pizzas.edit', $elem)}}
                    ">Change</a>
                    <form action="{{route('pizzas.destroy', $elem)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        {{-- BUTTON DELETE --}}
                        <button class="btn btn-danger" onclick="return confirmDelete()">Delete</button>    
                    </form>
                </div>
            </div>
            @endforeach    
        </div>
    </div>

    <script>

        function confirmDelete(){
            return confirm('Are you sure you want delete?')
        }

    </script>
    
@endsection