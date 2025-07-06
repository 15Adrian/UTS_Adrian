<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Mahasiswa</h1>
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}" required>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $mahasiswa->kelas }}" required>
            </div>
            <div class="mb-3">
                <label for="prodi_id" class="form-label">Prodi</label>
                <select class="form-control" id="prodi_id" name="prodi_id" required>
                    <option value="">-- Pilih Prodi --</option>
                    @foreach($prodi as $prodi)
                        <option value="{{ $prodi->id }}" {{ $mahasiswa->prodi_id == $prodi->id ? 'selected' : '' }}>
                            {{ $prodi->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="angkatan" class="form-label">Angkatan</label>
                <input type="text" class="form-control" id="angkatan" name="angkatan" value="{{ $mahasiswa->angkatan }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>