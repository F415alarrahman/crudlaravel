<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>edit a Buku</h1>
    <form method="post" action="{{ route('buku.update', ['buku' => $buku]) }}">
        @csrf
        @method('put')
        <div>
            <label>Nama</label>
            <input type="text" name="name" placeholder="name" value="{{ $buku->nama }}" />
        </div>

        <div>
            <label>Penulis</label>
            <input type="text" name="qty" placeholder="qty" value="{{ $buku->penulis }}" />
        </div>

        <div>
            <label>Tahun</label>
            <input type="text" name="price" placeholder="price" value="{{ $buku->tahun }}" />
        </div>
        <div>
            <input type="submit" value ="save after edit data" />
        </div>

    </form>
</body>

</html>
