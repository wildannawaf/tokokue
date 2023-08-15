


<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Kue</h2>
        <a href="{{ route('kues.create') }}" class="btn btn-primary mb-3">Tambah Kue Baru</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama Kue</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kues as $kue)
                    <tr>
                        <td>{{ $kue->nama_kue }}</td>
                        <td>{{ $kue->harga }}</td>
                        <td>{{ $kue->deskripsi }}</td>
                        <td>
                            <a href="{{ route('kues.edit', $kue->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('kues.destroy', $kue->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
