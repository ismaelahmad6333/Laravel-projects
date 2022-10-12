<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Restaurant</title>
</head>


<style>
    a {
        color: aliceblue;
        list-style: none;
        text-decoration: none
    }
</style>

<body>
    <h1 class="text-danger">SHOPOOO</h1>

    <div class="container mt-5 d-flex gap-5 col-md-18">

        @foreach ($products as $product)
            <div class="card d-flex flex-column" style="width: 20rem;">
                <img class="card-img-top" src="{{ $product->imageUrl }}" alt="Card image cap">
                <div class="card-body ">
                    <a href="/products/{{ $product->id }}" class="text-primary">
                        <h6 class="card-title mb-2"> {{ $product->name }}</h6>
                    </a>
                    <h3 class="text-danger">$523{{ $product->discount }}</h3>
                    <p class="text-danger">Off: {{ $product->discount }}</p>
                    <p class="text-secondary">{{ $product->location }}</p>
                    <span>⭐⭐⭐⭐( {{ $product->sold }})</span>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>
