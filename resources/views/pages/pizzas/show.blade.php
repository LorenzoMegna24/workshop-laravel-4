@extends('welcome')

@section('title')
    PIZZA | Show
@endsection

@section('content')
    
    <div class="container">

        <h2 class="text-center mt-5">SHOW!</h2> 

        <div class="d-flex flex-wrap container text-center justify-content-around p-5">
            {{-- SINGOLA CARD --}}
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$single_pizza['nome_pizza']}}</h5>
                    <p class="card-text">{{$single_pizza['ingredienti']}}</p>
                    {{-- BUTTON EDIT --}}
                    <a class="btn btn-primary" href="{{route('pizzas.edit', $single_pizza)}}">Change</a>
                    <form action="{{route('pizzas.destroy', $single_pizza)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        {{-- BUTTON DELETE --}}
                        <button class="btn btn-danger" onclick="return confirmDelete()">Delete</button>    
                    </form>
                </div>
            </div>
        </div>
        
    </div>

    <script>

        function confirmDelete(){
            return confirm('Are you sure you want delete?')
        }

    </script>

@endsection