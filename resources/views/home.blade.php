<!DOCTYPE html>
<html>

<head>
    <title>Manajemen Karyawan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
        }

        .header {
            background: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            padding: 40px;
            text-align: center;
        }

        .card-area {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background: white;
            padding: 20px;
            width: 200px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            margin: 10px 0;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }
    </style>

</head>

<body>

    <div class="header">
        <h1>Sistem Manajemen Karyawan</h1>
    </div>

    <div class="container">

        <h2>Selamat Datang di Sistem Manajemen Karyawan</h2>

        <p>
            Sistem ini digunakan untuk mengelola data karyawan seperti
            informasi karyawan, jabatan, serta memantau aktivitas karyawan
            secara lebih terorganisir dan efisien.
        </p>

        <h2>Nama saya adalah {{$nama}}<br>saya adalah seorang {{$pekerjaan}}</h2>

        <div class="card-area">

            <div class="card">
                <h3>Data Karyawan</h3>
                <p>Kelola data seluruh karyawan</p>
            </div>

            <div class="card">
                <h3>Jabatan</h3>
                <p>Informasi posisi karyawan</p>
            </div>

            <div class="card">
                <h3>Kontak</h3>
                <a href="/contact">Hubungi Admin</a>
            </div>

        </div>

    </div>

</body>

</html>