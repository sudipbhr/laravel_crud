@extends('layouts.app')
@section('content')
<div class="main-container">
    @if($message = Session::get('success'))
    <div>
        <span class="alert alert-danger alert-block">{{ $message }} </span>
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{ $loop->index+1}}</th>
                <td>
                    <a href="products/{{$product -> id }}/show/">{{ $product -> name }}</a></td>
                <td>{{ $product -> description }}</td>
                <td><img src="products/{{ $product -> image }}" alt="apple" class="rounded-circle" height="50"
                        width="50"></td>
                <td>
                    <a href="/products/{{ $product -> id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                    <form method="post" class="d-inline" action="/products/{{ $product -> id }}/delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links()}}
</div>
@endsection
