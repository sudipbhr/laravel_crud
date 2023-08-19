@extends('layouts.app')
@section('content')
            <div class="main-container">
                @if($message = Session::get('success'))
                <div>
                    <span class="alert alert-success alert-block">{{ $message }} </span>
                </div>
                @endif
                <h3 class="text-muted">Product edit : {{$product->name}}</h3>
                <form method="post" action="/products/{{$product -> id }}/update/" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="" value="{{ old('name', $product->name)}}"
                            aria-describedby="emailHelp">
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" value="{{ old('description', $product->description)}}"
                            id="">
                        @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">image</label>
                        <input type="file" name="image" class="form-control" value="{{old('image', $product->image )}}" id="">
                        @if ($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        @endsection
