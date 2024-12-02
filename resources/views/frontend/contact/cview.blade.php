@extends('frontend.layout.main')

@section('main-section')
<div class="container float-lg-end">
<table class="table table-hover mt-2">
  <thead class="text-center">
    <tr>
    <th scope="col">#</th>
     
      <th scope="col">name</th>
      <th scope="col">image</th>
      <th scope="col">description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="text-center">
  @foreach ($contact as $contacts)
    <tr>
    <th scope="row">{{$loop->index+1}}</th>
    <td>{{$contacts->name}}</td>
    <td>
          <img src="frontend/contact/{{$contacts->image}}"  width="50" height="50"/>
        </td> 
     
      <td>{{$contacts->description}}</td>
        <td> 
        <a href="contact/delete/{{$contacts->id }}"><button class="btn btn-danger">Delete</button></a>
                    <a href="contact/edit/{{$contacts->id }}"><button class="btn btn-success">Edit</button></a>
                </td>
                   
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection