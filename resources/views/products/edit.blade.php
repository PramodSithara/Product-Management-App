<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-primary">Edit Product</h1>

        <div>
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>• {{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <form method="post" action="{{route('product.update', ['product' => $product])}}">
            @csrf
            @method('put')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" placeholder="Name" value="{{$product->name}}" class="form-control">
            </div>

            <div class="mb-3">    
                <label class="form-label">Qty</label>
                <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" placeholder="Price" value="{{$product->price}}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="description" placeholder="Description" value="{{$product->description}}" class="form-control">
            </div>    

            <div>
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>
