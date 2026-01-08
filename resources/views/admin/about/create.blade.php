<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container py-5">
    <h2>Tambah About Section</h2>

    <form method="POST" action="{{ route('admin.about.store') }}">
        @csrf

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Konten</label>
            <textarea name="content" rows="5" class="form-control" required></textarea>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.about.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
