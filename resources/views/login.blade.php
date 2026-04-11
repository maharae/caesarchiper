<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login - PPM SYAFI'UR ROHMAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(rgba(220, 53, 69, 0.7), rgba(0, 0, 0, 0.7)), url('img/bg.jpg') center/cover no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .login-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
        }

        .title {
            color: #dc3545;
        }
    </style>
</head>

<body>

    <div class="login-card">
        <h3 class="text-center title fw-bold mb-4">LOGIN</h3>

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required
                    autofocus>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Ingat saya</label>
            </div>

            @if ($errors->has('loginError'))
                <div class="alert alert-danger py-2">{{ $errors->first('loginError') }}</div>
            @endif

            <button type="submit" class="btn btn-danger w-100 shadow-sm" style="border-radius: 25px;">Login</button>
        </form>
    </div>

</body>

</html>
