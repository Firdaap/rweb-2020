<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
    <h2>Tambah User</h2>  
	<form action="<?php echo base_url(). 'Kelola/tambah_data'; ?>" method="post">
		<table style="margin:20px auto;">
			<div class="form-group">
				<label for="nama">Nama :</label>
				<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
            </div>
            <div class="form-group">
				<label for="jenis_kel">Jenis Kelamin :</label>
				<input type="text" class="form-control" id="topik" placeholder="Jenis Kelamin" name="jenis_kel">
			</div>
			<div class="form-group">
				<label for="email">Email :</label>
				<input type="text" class="form-control" id="email" placeholder="Masukkan email anda" name="email">
			</div>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>	
</body>
</html>