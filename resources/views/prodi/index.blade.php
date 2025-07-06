<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Prodi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Program Studi</h1>
        <a href="{{ route('prodi.create') }}" class="btn btn-primary mb-3">Tambah Prodi</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Fakultas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prodi as $pro)
                <tr>
                    <td>{{ $pro->id }}</td>
                    <td>{{ $pro->nama }}</td>
                    <td>{{ $pro->fakultas }}</td>
                    <td>
                        <a href="{{ route('prodi.edit', $pro->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('prodi.destroy', $pro->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>