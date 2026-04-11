<!DOCTYPE html>
<html>

<head>
    <title>Daftar Pengguna</title>
</head>

<body>
    <h2>Data Pengguna dari Database</h2>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>id_pengguna</th>
                <th>email</th>
                <th>password</th>
                <th>created_at</th>
                <th>update_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->password }}</td>
                    <td>{{ $p->created_at }}</td>
                    <td>{{ $p->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

<form action="{{ route('logout') }}" method="POST" class="d-inline">
    @csrf
    <button type="submit" class="btn btn-light btn-sm">Logout</button>
</form>
