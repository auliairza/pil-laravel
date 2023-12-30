<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">   
</head>
<body>
  <div class="container">
    <a href="/create">Tambah Mahasiswa</a>
    <h1>Halaman Mahasiswa</h1>

    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Successfully!!</strong> {{ Session::get('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <table class="table table danger">
      <thead>
        <tr>
          <th>NPM</th>
          <th>Nama Mahasiswa</th>
          <th>Jenis Kelamin</th>
          <th>Tanggal Lahir</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($mahasiswas as $m)
        <tr>
          <td>{{$m->npm}}</td>
          <td>{{$m->nama_mahasiswa}}</td>
          <td>{{$m->jk}}</td>
          <td>{{$m->tgl_lahir}}</td>
          <td>{{$m->alamat}}</td>
        </tr>
            
        @endforeach
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>      
</body>
</html>