@extends('products.layout')

@section('content')

<div class="container">

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">name</label>
          <input type="text" class="form-control" name="name" placeholder="enter name">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">price</label>
            <input type="text" class="form-control" name="price" placeholder="enter price">
          </div>



        <div class="form-group">
          <label for="exampleFormControlTextarea1">details</label>
          <textarea class="form-control" name="detail" rows="3"></textarea>
        </div>

               <div class="form-group">
           <button type="submit" class="btn btn-primary">save</button>
               </div>
      </form>
</div>
@endsection
