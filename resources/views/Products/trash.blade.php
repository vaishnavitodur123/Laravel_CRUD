@extends('layouts.app')

@section('content')

    <div class="container">
        <h4 class="mb-3">Deleted Products</h4>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        <a href="{{ route('products.restore', $product->id) }}" class="btn btn-success btn-sm">
                                            Restore
                                        </a>
                                    </td>
                                    <td>


                                        <a href="{{ route('products.forcedelete', $product->id) }}" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this permanently?')">
                                            Delete Forever
                                        </a>





                    </div>

                    </td>
                    </tr>
                @empty
        <tr>
            <td colspan="2" class="text-center text-muted">
                No deleted products found
            </td>
        </tr>
    @endforelse
    </tbody>
    </table>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">
        Back to Products
    </a>
    </div>

@endsection