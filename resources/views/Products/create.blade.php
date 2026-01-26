<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>

<body>
    <h1>create a Product</h1>

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        @method('POST')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter a Name">
        </div>
        <div>
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" placeholder="Enter a Quantity">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Enter a Price">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" placeholder="Enter a Description">
        </div>
        <div>
            <input type="submit" value="Save a New Product">
        </div>
    </form>
</body>

</html>