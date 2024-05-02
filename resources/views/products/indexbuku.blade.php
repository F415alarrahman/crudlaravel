<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>buku</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
    </div>
    @endif
    <div>
        <div>
            <a href="{{ route('products.createbuku') }}">Create a buku</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($bukus as $buku)
                <tr>
                    <td>{{ $buku->id }}</td>
                    <td>{{ $buku->name }}</td>
                    <td>{{ $buku->qty }}</td>
                    <td>{{ $buku->price }}</td>
                    <td>{{ $buku->desription }}</td>
                    <td>
                        <a href="{{ route('products.editbuku', ['buku' => $buku]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action= "{{ route('bukus.destroy', ['buku' => $buku]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <p>UTS BANG</p>
</body>

</html>
