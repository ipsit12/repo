@extends('frontend.layout.main')

@section('main-section')
<div class="container float-lg-end">
<table class="table table-hover mt-2">
  <thead class="text-center">
    <tr>
    <th scope="col">#</th>
     
      <th scope="col">name</th>
      <th scope="col">image</th>
      <th scope="col">price</th>
      <th scope="col">description</th>
      <th scope="col">quantity</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="text-center">
  @foreach ($product as $products)
    <tr>
    <th scope="row">{{$loop->index+1}}</th>
    <td>{{$products->name}}</td>
    <td>{{$products->price}}</td>
    <td>{{$products->quantity}}</td>
    <td>{{$products->description}}</td>
    <td>
          <img src="frontend/product/{{$products->image}}"  width="50" height="50"/>
        </td> 
     
      
        <td> 
        <a href="product/delete/{{$products->id }}"><button class="btn btn-danger">Delete</button></a>
                    <a href="product/edit/{{$products->id }}"><button class="btn btn-success">Edit</button></a>
                </td>
                   
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection