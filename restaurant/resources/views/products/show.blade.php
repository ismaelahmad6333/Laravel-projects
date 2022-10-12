<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <title>Document</title>
</head>

<body>

    <div class="container mt-5">
        <a href="/products">Go Back</a>
        <div class="card mb-3">
            <div class="row no-gutters align-items-center">
                <div class="col-md-4">
                    <img src="{{ $product->imageUrl }}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title text-danger ">{{ $product->name }} </h4>
                        <p class="card-text">{{ $product->description }}</p>
                        <h3 class="card-text text-danger">$523{{ $product->discount }}</h3>
                        <p class="card-text"><small class="text-muted">Last updated: {{ $product->updated_at }}</small>
                        </p>
                        <button class="btn btn-secondary">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- row -->
    </div>
</body>

</html>
