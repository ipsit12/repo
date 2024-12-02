
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Laravel 8 - Razorpay Payment Gateway Integration</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
   <body>
      <div id="app">
         <main class="py-4">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-3 col-md-offset-6">
                     @if($message = Session::get('error'))
                     <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <strong>Error!</strong> {{ $message }}
                     </div>
                     @endif
                     @if($message = Session::get('success'))
                     <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <strong>Success!</strong> {{ $message }}
                     </div>
                     @endif
                     <div class="card card-default">
                        <div class="card-header">
                           Laravel 8- Razorpay Payment Gateway Integration
                        </div>
                       
                        <div class="card-body text-center">
                        @php $total=0; @endphp
   
   @foreach($carts as $cart)
                           <form action="/checkout" method="POST" enctype="multipart/form-data">
                              @csrf
                              
                              <script src="https://checkout.razorpay.com/v1/checkout.js"
                                 data-key="rzp_test_YXKx6Hazxe7yPu"
                                  
                                 data-currency="INR"
                               
                              
  
       @php $total += $cart->price * $cart->quantity; @endphp
    
    Total Value:-
  <h1> {{$total}}</h1>
                           
                              
                           data-amount="{{$total}}"
                           data-currency="INR"
                                 data-buttontext="Pay {{$total}}"
                                 data-name="Programming Solutions"
                                 data-description="Rozerpay"
                                 data-image="https://cybercollege.info/wp-content/uploads/2021/06/cropped-logo.png"
                                 data-prefill.name="solution"
                                 data-prefill.email="ipsitabiswal884@gmail.com"
                                 data-theme.color="#F37254"></script>
                           </form>
                         @endforeach
                        </div>
                       
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
   </body>
</html>
