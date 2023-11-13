<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">   
</head>


<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    <h1>Ini adalah halaman Home</h1>

    <hr>
    <div class="row">
      <div class="col-sm-6">
        <h4>What is Lorem Ipsum?</h4> 
        <p style="text-align: justify">
          <b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry 
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
          took a gailey of type and scrambled it to make a type specimen book. it has survived not only five 
          ceturies. but also the leap into electronic typesetting. remaining essentually unchanged. it was 
          popularised in the 1960s. with the realese of letraset sheets containing Lorem Ipsum passeges. and 
          more recenly with desktop publising software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
      </div>
      <div class="col-sm-6">
        <h4>Why Do We use It?</h4> 
        <p style="text-align: justify">
          it is a long estabilished fact that a reader will be distracted by the readable
          content of a page when looking at its layout. the point of using Lorem Ipsum is that it has a more-or-less
          normal distrubution of letters, as opposed to using Content here. Content here, making it look like readable
          English. Many desktop publising packages and web page editors now use Lorem Ipsum as their default model
          text. And a search for 'Lorem Ipsum' will uncover many web sites still in their infancy. Various have evolved
          over the years. Sometimes by accident, Sometimes on purpose(injected humour and the like). 
        </p> 
      </div>
    </div>


  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>