<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - About Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container py-5">
    <h2 class="mb-4">Admin - About Section</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.about.create') }}" class="btn btn-success mb-3">
        + Tambah About
    </a>

    <table class="table table-dark table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($about as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ Str::limit($item->content, 50) }}</td>
                <td>
                    <a href="{{ route('admin.about.edit', $item->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('admin.about.destroy', $item->id) }}"
                          method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
