<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product </title>
</head>

<body>
    <h1>Edit Product</h1>

    <form action="{{route('products.update', ['product' => $product]) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter a Name" value="{{ $product->name }}">
        </div>
        <div>
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" placeholder="Enter a Quantity" value="{{ $product->quantity }}">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Enter a Price" value="{{ $product->price }}">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" placeholder="Enter a Description" value="{{ $product->description }}">
        </div>
        <div>
            <input type="submit" value="Update a Product">
        </div>
    </form>
</body>

</html>