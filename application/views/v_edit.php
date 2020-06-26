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
    <h2>Edit</h2>  
    <?php foreach($tb_user as $data){ ?>
        <form action="<?php echo base_url(). 'Kelola/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<div class="form-group">
				<label for="nama">Nama :</label>
					<input type="hidden" name="id" value="<?php echo $data->id ?>">
					<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?php echo $data->nama ?>">
            </div>
            <div class="form-group">
				<label for="jenis_kel">Jenis Kelamin :</label>
					<input type="text" class="form-control" id="jenis_kel" placeholder="Jenis Kelamin" name="jenis_kel" value="<?php echo $data->jenis_kel ?>">
			</div>
			<div class="form-group">
				<label for="email">Email :</label>
					<input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $data->email ?>">
			</div>		
			<tr>
			<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>