<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>create a Buku</h1>
    <form method="post" action="{{ route('buku.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" />
        </div>

        <div>
            <label>Penulis</label>
            <input type="text" name="penulis" placeholder="penulis" />
        </div>

        <div>
            <label>Tahun</label>
            <input type="text" name="tahun" placeholder="tahun" />
        </div>
        <div>
            <input type="submit" value ="save the data" />
        </div>

    </form>
</body>

</html>
