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
    <h1>Halaman Create</h1>

    @if ($errors->any())
    <div class="pt-3">
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $item)
          <li>{{$item}}</li>
          @endforeach
        </ul>
      </div>
    </div>
    @endif
    
    <form action="/" method="POST">
      @csrf
    <div class="row">
      <div class="col-sm-4">
        <label for="">NPM</label>
        <input type="number" name="npm" id="" class="form-control" placeholder="Input NPM" value="{{ Session::get('npm')}}">
      </div>
      <div class="col-sm-4">
        <label for="">Nama</label>
        <input type="text" name="nama" id="" class="form-control" placeholder="Input Nama" value="{{ Session::get('nama')}}">
      </div>
      <div class="col-sm-4">
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="" class="form-control" value="{{ Session::get('tgl_lahir')}}">
      </div>  
    </div>
    <div class="row">
      <div class="col-sm-4">
        <label for="">Jenis Kelamin</label>
        <select name="jk" id="" class="form-select">
          <option>L</option>
          <option>P</option>
        </select>
      </div>
      <div class="col-sm-4">
        <label for="">Alamat</label>
        <textarea name="alamat"class="form-control" id="" cols="30" rows="10"></textarea>
      </div>
      <div class="col-sm-4">
       <div class="row">
        <div class="col-sm-6">
          <button type="submit" class="btn btn-primary mt-4" style="width: 100%" >Simpan</button>
        </div>
        <div class="col-sm-6">
          <a href="/" class="btn btn-secondary mt-4" style="width: 100%">Kembali</a>
        </div>
       </div>
      </div>
    </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>      
</body>
</html>