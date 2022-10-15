@extends('products.layout')

@section('content')

<div class="container">
    <a href="{{route('products.index')}}" class="btn btn-primary">home</a>

    <form action="{{route('products.update',$product->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleFormControlInput1">name</label>
          <input type="text" class="form-control" value="{{$product->name}}" name="name" placeholder="enter name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">price</label>
            <input type="text" class="form-control" value="{{$product->price}}" name="price" placeholder="enter price">
          </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">details</label>
          <textarea class="form-control" name="detail" rows="3">{{$product->detail}}</textarea>
        </div>
               <div class="form-group">
           <button type="submit" class="btn btn-primary">update</button>
               </div>
      </form>
</div>
@endsection
