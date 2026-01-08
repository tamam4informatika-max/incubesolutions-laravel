<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container py-5">
    <h2>Edit About Section</h2>

    <form method="POST" action="{{ route('admin.about.update', $about->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control"
                   value="{{ $about->title }}" required>
        </div>

        <div class="mb-3">
            <label>Konten</label>
            <textarea name="content" rows="5" class="form-control" required>{{ $about->content }}</textarea>
        </div>

        <button class="btn btn-warning">Update</button>
        <a href="{{ route('admin.about.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
