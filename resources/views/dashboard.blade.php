<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php"); //  balik ke login jika tidak ada session
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand">Admin Panel</span>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </nav>
    <div class="container mt-4">
        <h2>Selamat Datang, <?= $_SESSION['user']; ?>!</h2>
        <p>Ini adalah area terbatas. Anda berhasil masuk karena Session terdeteksi.</p>
    </div>
</body>
</html>