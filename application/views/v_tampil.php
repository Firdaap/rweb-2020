<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Data User Website Dinas Kebudayaan Provinsi DIY</h2>            
      </div>
    </div>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><?php echo $this->session->userdata('nama')?></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
       </li><a href="<?= base_url('Kelola/tambah') ?>"><span class="glyphicon glyphicon-user"></span>Tambah Data</a></li>
       <a href="<?php echo site_url('login/logout')?>" button class="btn btn-success navbar-btn">Logout</button></a>
      </ul>
    </div>
  </nav>

  <div class="row">
    <div class="col-12">
      <table class="table table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0;
          foreach($tb_user as $data):?>
          <?php $no++ ?>

          <tr>
            <td><?php echo $no?></td>
            <td><?php echo $data->nama?></td>
            <td><?php echo $data->jenis_kel?></td>
            <td><?php echo $data->email?></td>
            <td>
              <?php echo anchor('Kelola/edit/'.$data->id,'Edit'); ?>
            <?php echo anchor('Kelola/hapus/'.$data->id,'Delete'); ?>		
          </td>
          </tr>
          <?php endforeach?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>

