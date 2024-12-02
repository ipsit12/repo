


<div class="container float-lg-end">
<table class="table table-hover mt-2">
  <thead class="text-center">
    <tr>
    <th scope="col">#</th>
     
      <th scope="col">firstname</th>
      <th scope="col">lastname</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">country</th>
      <th scope="col">address</th>
      <th scope="col">state</th>
      <th scope="col">pincode</th>
      <th scope="col">price</th>
      <th scope="col">action</th>
      
    </tr>
  </thead>
  <tbody class="text-center">
  @foreach ($checkout as $checkouts)
    <tr>
    <th scope="row">{{$loop->index+1}}</th>
    <td>{{ $checkouts->firstname}}</td>
    <td>{{ $checkouts->lastname}}</td>
    <td>{{ $checkouts->email}}</td>
    <td>{{ $checkouts->phone}}</td>
    <td>{{ $checkouts->country}}</td>
    <td>{{ $checkouts->address}}</td>
    <td>{{ $checkouts->state}}</td>
    <td>{{ $checkouts->pincode}}</td>
    <td>{{ $checkouts->price}}</td>
    
    
        <td> 
        <a href="checkout/delete/{{$checkouts->id }}"><button class="btn btn-danger">Delete</button></a>
                   
                </td>
                   
    </tr>
  @endforeach
  </tbody>
</table>
</div>

