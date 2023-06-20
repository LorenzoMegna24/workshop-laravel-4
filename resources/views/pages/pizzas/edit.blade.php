@extends('layout.app')

@section('title')
    DC COMICS | Edit
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center">EDIT!</h2>

        <form action="{{route('comics.update', $comic)}}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group my-2">
                <label class="form-label" for="">TITLE</label>
                <input class="form-control" type="text" name="title" value="{{old('title') ?? $comic->title}}">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">DESCRIPTION</label>
                <textarea class="form-control" name="description" cols="30" rows="10">{{old('description') ?? $comic->description}}</textarea>
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">THUMB</label>
                <input class="form-control" type="text" name="thumb" value="{{old('thumb') ?? $comic->thumb}}">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">PRICE</label>
                <input class="form-control" type="text" name="price" value="{{old('price') ?? $comic->price}}">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">SERIES</label>
                <input class="form-control" type="text" name="series"
                value="{{old('series') ?? $comic->series}}">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">SALE DATE</label>
                <input class="form-control" type="date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="">TYPE</label>
                <input class="form-control" type="text" name="type" value="{{old('type') ?? $comic->type}}">
            </div>

            <button type="submit" class="btn btn-primary my-3">CHANGE COMIC</button>
        </form>    
    </div>
    
@endsection