<!DOCTYPE html>
<html>
<head>
    <title>Edit Kue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Kue</h2>
        <form method="post" action="{{ route('kues.update', $kue->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_kue" class="form-label">Nama Kue:</label>
                <input type="text" class="form-control" name="nama_kue" value="{{ $kue->nama_kue }}">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="text" class="form-control" name="harga" value="{{ $kue->harga }}">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi:</label>
                <textarea class="form-control" name="deskripsi">{{ $kue->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
