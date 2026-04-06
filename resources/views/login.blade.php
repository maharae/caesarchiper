<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - PPM SYAFI'UR ROHMAN</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(rgba(220,53,69,0.7), rgba(0,0,0,0.7)),
                  url('img/bg.jpg') center/cover no-repeat;
      height: 100vh;
    }

    .login-card {
      background: white;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }

    .btn-danger {
      border-radius: 25px;
    }

    .title {
      color: #dc3545;
    }
  </style>
</head>

<body class="d-flex align-items-center justify-content-center">

<div class="login-card col-md-4">
  
  <h3 class="text-center title fw-bold mb-4">LOGIN</h3>

  <form onsubmit="return login()">
    
    <form action="{{ route('login.post') }}" method="POST">
      @csrf <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
  
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
  
      <div class="mb-3 form-check">
        <input type="checkbox" name="remember" class="form-check-input" id="remember">
        <label class="form-check-label">Ingat saya</label>
      </div>
  
      <button type="submit" class="btn btn-danger w-100">Login</button>
  </form>

</div>

<script>
function login(){
  let user = document.getElementById("username").value;
  let pass = document.getElementById("password").value;
  let remember = document.getElementById("remember").checked;

  // contoh login sederhana
  if(user === "admin" && pass === "123"){
    
    if(remember){
      localStorage.setItem("user", user);
    } else {
      sessionStorage.setItem("user", user);
    }

    window.location.href = "/dashboard";
    return false;
  } else {
    alert("Username atau Password salah!");
    return false;
  }
}

// auto login kalau remember aktif
window.onload = function(){
  if(localStorage.getItem("user")){
    window.location.href = "/dashboard";
  }
}
</script>

</body><script>
  function login(){
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;
    let remember = document.getElementById("remember").checked;
  
    // daftar user tanpa database
    let users = [
      { username: "tiara", password: "123" }
    ];
  
    // cek login
    let found = users.find(u => u.username === user && u.password === pass);
  
    if(found){
      if(remember){
        localStorage.setItem("user", user);
      } else {
        sessionStorage.setItem("user", user);
      }
  
      window.location.href = "/dashboard";
      return false;
    } else {
      alert("Username atau Password salah!");
      return false;
    }
  }
  </script>
</html>