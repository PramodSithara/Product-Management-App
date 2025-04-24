<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-primary">Create a Products</h1>

        <div>
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>• {{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <form method="post" action="{{route('product.store')}}">
            @csrf
            @method('post')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control">
            </div>

            <div class="mb-3">    
                <label class="form-label">Qty</label>
                <input type="text" name="qty" placeholder="Qty" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" placeholder="Price" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="description" placeholder="Description" class="form-control">
            </div>    

            <div>
                <input type="submit" value="Save a New Products" class="btn btn-success">
            </div>
        </form>
    </div>
</body>
</html>
