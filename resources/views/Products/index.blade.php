<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Products</h1>
    @if (session('success'))
        <h1>{{ session('success') }}</h1>


    @endif
    <table border="1">
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
                <td> <a href="{{ route('products.edit', ['product' => $product]) }}">Edit</a></td>
                <td>
                    <form method="POST" action="{{route('products.destroy', ['product' => $product])}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>

        @endforeach
    </table>
    <br>
    <button><a href="{{route('products.create')}}">Create a New Product</a></button>
</body>

</html>