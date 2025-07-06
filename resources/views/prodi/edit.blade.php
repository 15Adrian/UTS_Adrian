<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Prodi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Program Studi</h1>
        <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Prodi</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $prodi->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="fakultas" class="form-label">Fakultas</label>
                <input type="text" class="form-control" id="fakultas" name="fakultas" value="{{ $prodi->fakultas }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>