@extends('frontend.layout.main')

@section('main-section')
<div class="container">
        <div class="row justified-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                   
                    <form action="{{ url('/products/update', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- @method('PUT') -->
                      
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control">
                            @if($errors->has('name'))
                                <span class=text-danger>{{ $errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image"  value="{{$product->image}}" class="form-control">
                            <img src="{{ asset('frontend/product' . $product->image) }}" width="100%" alt="">
                            @if($errors->has('image'))
                                <span class=text-danger>{{ $errors->first('image')}}</span>
                            @endif
                        </div>
                       
                        
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection