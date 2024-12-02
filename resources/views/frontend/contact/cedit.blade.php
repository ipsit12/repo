@extends('frontend.layout.main')

@section('main-section')
<div class="container">
        <div class="row justified-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                   
                    <form action="{{ url('/contact/update', ['id' => $contact->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- @method('PUT') -->
                      
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" name="name" value="{{$contact->name}}" class="form-control">
                            @if($errors->has('name'))
                                <span class=text-danger>{{ $errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image"  value="{{$contact->image}}" class="form-control">
                            <img src="{{ asset('frontend/contact' . $contact->image) }}" width="100%" alt="">
                            @if($errors->has('image'))
                                <span class=text-danger>{{ $errors->first('image')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="uses">uses</label>
                            <textarea name="description" class="form-control" cols="30" rows="5">{{$contact->description}}</textarea>
                            @if($errors->has('description'))
                                <span class=text-danger>{{ $errors->first('description')}}</span>
                            @endif
                        </div>
                        
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection