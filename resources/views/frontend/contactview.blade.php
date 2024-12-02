@extends('frontend.layout.main')

@section('main-section')
<div class="container float-lg-end">
<table class="table table-hover mt-2">
  <thead class="text-center">
    <tr>
    <th scope="col">#</th>
     
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">subject</th>
      <th scope="col">phone</th>
      <th scope="col">message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="text-center">
  @foreach ($form as $forms)
    <tr>
    <th scope="row">{{$loop->index+1}}</th>
    <td>{{$forms->name}}</td>
    <td>{{$forms->email}}</td>
    <td>{{$forms->subject}}</td>
    <td>{{$forms->email}}</td>
      <td>{{$forms->message}}</td>
        <td> 
        <a href="contact/delete/{{$forms->id }}"><button class="btn btn-danger">Delete</button></a>
                   
                </td>
                   
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection