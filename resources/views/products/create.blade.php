<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>create a product</h1>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" />
        </div>

        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="qty" />
        </div>

        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="price" />
        </div>

        <div>
            <label>desription</label>
            <input type="text" name="desription" placeholder="desription" />
        </div>

        <div>
            <input type="submit" value ="save the data" />
        </div>

    </form>
</body>

</html>
