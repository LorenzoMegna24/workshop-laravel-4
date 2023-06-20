@extends('layout.app')

@section('title')
    DC COMICS | Show
@endsection

@section('content')
    
    <div class="container">

        <h2 class="text-center mt-5">SHOW!</h2> 

        <div class="d-flex flex-wrap container text-center justify-content-around p-5">
            {{-- SINGOLA CARD --}}
            <div class="card text-center mx-4 my-4">
                <img src="{{ $single_comic->thumb }}" alt="">
                <div class="icon my-3" style="height: 350px">
                    <h5>{{ $single_comic->title }}</h5>
                    <p>Type:{{ $single_comic->type }}</p>
                    <p>Price:{{ $single_comic->series }}</p>
                    <p>Price:{{ $single_comic->sale_date }}</p>
                    <p>Price:{{ $single_comic->price }}</p>
                    <div class="overflow-auto my-2" style="height: 100px">
                        <p>Price:{{ $single_comic->description }}</p>    
                    </div>
                    {{-- BUTTON EDIT --}}
                    <a class="btn btn-primary" href="{{route('comics.edit', $single_comic)}}">Change</a>
                    <form action="{{route('comics.destroy', $single_comic)}}" method="POST" class="d-inline">
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