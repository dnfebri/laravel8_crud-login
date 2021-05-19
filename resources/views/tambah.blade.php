<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Data Hewan</title>
</head>

<body>
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h1>Tambah Data Hewan</h1>
      </div>
    </div>
  </div>


  <div class="container">

    <div class="row">
      <div class="col-lg-10">
        <form action="<?= url('save'); ?>" method="post">
          <div class="mb-3 row">
            <label for="nama_hewan" class="col-sm-2 col-form-label">Nama Hewan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_hewan" name="nama_hewan">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jenis_hewan" class="col-sm-2 col-form-label">Jenis Hewan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="jenis_hewan" name="jenis_hewan">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="status_kehidupan" class="col-sm-2 col-form-label">Status Kehidupan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="status_kehidupan" name="status_kehidupan">
            </div>
          </div>

          <button type="submit" name="submit" class="btn btn-primary"> Tambah</button>
        </form>
      </div>
    </div>
  </div>






  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>