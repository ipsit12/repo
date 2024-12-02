@extends('frontend.layout.main')

@section('main-section')
<div class="container">
        <div class="row justified-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                   
                    <form action="{{ url('/latest/update', ['id' => $latest->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- @method('PUT') -->
                      
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" name="name" value="{{$latest->name}}" class="form-control">
                            @if($errors->has('name'))
                                <span class=text-danger>{{ $errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="price">price</label>
                            <input type="text" name="price" value="{{$latest->price}}" class="form-control">
                            @if($errors->has('price'))
                                <span class=text-danger>{{ $errors->first('price')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image"  value="{{$latest->image}}" class="form-control">
                            <img src="{{ asset('frontend/latest' . $latest->image) }}" width="100%" alt="">
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