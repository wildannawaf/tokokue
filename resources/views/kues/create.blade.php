<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kue Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Kue Baru</h2>
        <form method="post" action="{{ route('kues.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nama_kue" class="form-label">Nama Kue:</label>
                <input type="text" class="form-control" name="nama_kue">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="text" class="form-control" name="harga">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi:</label>
                <textarea class="form-control" name="deskripsi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>
</html>
