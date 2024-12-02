@extends('frontend.layout.main')

@section('main-section')
<div class="container float-lg-end">
<table class="table table-hover mt-2">
  <thead class="text-center">
    <tr>
    <th scope="col">#</th>
     
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">image</th>
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="text-center">
  @foreach ($latest as $latests)
    <tr>
    <th scope="row">{{$loop->index+1}}</th>
    <td>{{$latests->name}}</td>
    <td>{{$latests->price}}</td>
    <td>
          <img src="frontend/latest/{{$latests->image}}"  width="50" height="50"/>
        </td> 
     
      
        <td> 
        <a href="latest/delete/{{$latests->id }}"><button class="btn btn-danger">Delete</button></a>
                    <a href="latest/edit/{{$latests->id }}"><button class="btn btn-success">Edit</button></a>
                </td>
                   
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection