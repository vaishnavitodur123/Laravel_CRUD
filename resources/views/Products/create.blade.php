@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>

<body>
    <h1 class="text-center">Create a Product</h1>


    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-center">
                    Product
                </div>

                <div class="card-body">

                    <!-- form will go here -->
                    <form action="{{ route('products.store') }}" method="post" class="form-group text-center">
                        @csrf
                        @method('POST')
                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="Enter a Name">
                        </div>
                        <br>
                        <div>
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" placeholder="Enter a Quantity">
                        </div>
                        <br>
                        <div>
                            <label for="price">Price</label>
                            <input type="text" name="price" placeholder="Enter a Price">
                        </div>
                        <br>
                        <div>
                            <label for="description">Description</label>
                            <input type="text" name="description" placeholder="Enter a Description">
                        </div>
                        <br>
                        <div>
                            <input type="submit" value="Save a New Product" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>



</body>

</html>