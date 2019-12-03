<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>coba crud</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">

  </head>
  <body>

    <div class="container">
      <h1>halaman crud</h1>
      <hr>
      <a href="<?=base_url()?>index.php/home/tambah" class="btn btn-success">Tambah barang</a>
    </div>

    <div class="container">
      <h2>Daftar barang</h2>
      <form action="<?=base_url()?>index.php/home/index" method="get">
        <input type="text" name="cari">
        <input type="submit" value="Cari" class="btn btn-default">
      </form>
      <div class="row">

        <?php foreach ($data as $data): ?>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="<?=base_url()?>assets/picture/<?=$data->foto?>" alt="foto">
            </a>
            <div class="caption">
              <h3><?php echo $data->name?></h3>
              <p>Deskripsi: <?php echo $data->deskripsi ?></p>
              <p>
                <a href="<?=base_url()?>index.php/home/edit/<?=$data->id?>" class="btn btn-info" role="button">Edit</a>
                <a href="<?=base_url()?>index.php/home/deletedata/<?=$data->id?>/<?=$data->foto?>" class="btn btn-danger" role="button">Hapus</a>
              </p>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
    </div>
    <div class="container">
      <?php echo $pagination ?>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
