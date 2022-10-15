@extends('products.layout')

@section('content')

<div class="container">
    <a href="{{route('products.index')}}" class="btn btn-primary">home</a>


        <div class="form-group">
          <label for="exampleFormControlInput1">{{$product->name}}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{$product->price}}</label>
        </div>

        <div class="form-group">
         {{$product->detail}}
        </div>

</div>
@endsection
