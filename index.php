<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Stamp</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Photo Stamp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="https://photostamp.ariansyahcenter.com/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://wa.me/6285697187214">Kontak</a>
      </li>
      
    </ul>
  </div>
</nav>

<!-- Hero Section -->
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="display-4">Photo Stamp [Naming Right available]</h1>
    <p class="lead">sederhana dan cepat.</p>
     
  </div>
</section>

<!-- Features Section -->
<section class="container">
   <!-- page start -->
            <div class="row">
                <div class="col-md-12">
                    <section class="card">
                        <header class="card-header">
                            Photo Stamp Generator
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                        </header>
                        <div class="card-body">
                            <form name="submit" action="hasil.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <textarea class="form-control" name="judul" id="judul" rows="3">Tulis judul disini</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="aplikasi" class="form-label">Sub Judul</label>
                                    <textarea class="form-control" name="aplikasi" id="aplikasi" rows="3">Tulis sub judul disini</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="user" class="form-label">Nama User</label>
                                    <input class="form-control" type="text" name="user" id="user" value="Tulis nama disini" required/>
                                </div>
                                <div class="mb-3">
                                    <label for="thetime" class="form-label">Waktu</label>
                                    <input class="form-control" type="datetime-local" name="thetime" id="thetime" required/>
                                </div>
                                <div class="mb-3">
                                    <label for="lat" class="form-label">Lat</label>
                                    <input class="form-control" type="text" name="lat" id="lat" value="-6.175392" required/>
                                </div>
                                <div class="mb-3">
                                    <label for="long" class="form-label">Long</label>
                                    <input class="form-control" type="text" name="long" id="long" value="106.827153" required/>
                                </div>
                                <div class="mb-3">
                                    <label for="file" class="form-label">Ambil Foto</label>
                                    <input class="form-control" type="file" name="file" id="file" required/>
                                </div>
                                <button class="btn btn-primary" name="submit" type="submit">Proses</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end -->
</section>

<!-- Footer -->
<footer class="bg-light text-center py-3">
  <p>&copy; 2023 ariansyahcenter</p>
</footer>

<!-- Masukkan link ke JavaScript Bootstrap di sini -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


