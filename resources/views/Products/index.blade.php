@extends('layouts.app')




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .a {
            text-decoration: none;
            color: white;
        }
    </style>

</head>

<body>
    <h1 class="text-center">Products</h1>
    @if (session('success'))
        <h1>{{ session('success') }}</h1>




    @endif

    @section('content')
        <table border="1" class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>


            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td> <a class="btn btn-sm btn-primary" href="{{ route('products.edit', ['product' => $product]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{route('products.destroy', ['product' => $product])}}">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                        </form>
                    </td>



                </tr>


            @endforeach
        </table>
        <br>
        <div class="d-flex">
            <button class="btn btn-success"><a class="a" href="{{route('products.create')}}">Create a New
                    Product</a></button>
        </div>
        <br>
        <div class="d-flex">
            <a href="{{ route('products.trash') }}" class="btn btn-secondary">
                View Trash
            </a>
        </div>

     






    @endsection


</body>

</html>