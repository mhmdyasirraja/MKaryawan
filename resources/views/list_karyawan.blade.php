<html>
    
<div class="container">
    <h1>Daftar Karyawan</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($karyawans as $karyawan)
            <tr>
                <td>{{ $karyawan->id }}</td>
                <td>{{ $karyawan->nama ?? '-' }}</td>
                <td>{{ $karyawan->email ?? '-' }}</td>
                <td>{{ $karyawan->jabatan ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</html>