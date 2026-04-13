<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>CRUD Pengguna</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <h2 class="text-center mb-4">CRUD Data Pengguna</h2>

        <div class="row">

            <!-- ================= FORM ================= -->
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">

                        @if (isset($pengguna))
                            <h5 class="card-title">Edit Data</h5>
                            <form action="/crud/{{ $pengguna->id }}" method="POST">
                                @csrf
                                @method('PUT')
                            @else
                                <h5 class="card-title">Tambah Data</h5>
                                <form action="/crud" method="POST">
                                    @csrf
                        @endif

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ isset($pengguna) ? $pengguna->email : '' }}">
                            <!-- // SAMAKAN dengan kolom DB -->
                        </div>

                        <div class="mb-3">
                            <label>Passworrd</label>
                            <input type="text" name="password" class="form-control"
                                value="{{ isset($pengguna) ? $pengguna->password : '' }}">
                        </div>

                        <button class="btn btn-primary w-100">
                            {{ isset($pengguna) ? 'Update' : 'Simpan' }}
                        </button>
                        </form>

                    </div>
                </div>
            </div>

            <!-- ================= TABEL ================= -->
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">

                        <h5 class="card-title">Data Pengguna</h5>

                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>email</th>
                                    <th>password</th>
                                    <th width="150">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($penggunas as $p)
                                    <tr>
                                        <td>{{ $p->email }}</td>
                                        <td>{{ $p->password }}</td>
                                        <td>

                                            <a href="/crud/{{ $p->id }}/edit" class="btn btn-warning btn-sm">
                                                Edit
                                            </a>

                                            <form action="/crud/{{ $p->id }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Yakin hapus data?')">
                                                    Hapus
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>
