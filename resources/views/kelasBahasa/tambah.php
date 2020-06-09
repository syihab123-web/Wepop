
<style type="text/css">
	form{
		margin-top: 100px;
		margin-left: 500px;
		padding: 10px;
	}
	table{
		padding: 10px;
		color: black;
		border: 2px solid cadetblue;
	}
	th{
		padding: 10px;
		font-size: 40px;
		font-family: cool;
		color: white;
	}
	@font-face{
		font-family: cool;
		src: url(assets/vintage.ttf);
	}
	img{
		width: 100px;
		height: 100px;
	}
	.button{
		background: gold;
		color: white;
		border: solid gold;
		font-weight: bold;
		border-radius: 30px;
		width: 100px;
	}
</style>

<?php
	$action = 'tambah.php';
	$kasus = '';
	if (!empty($siswa)) {
	$action = 'edit.php';
	$kasus = 'readonly';
}

?>

<form class="form-horizontal" action="<?php echo $action ?>" method="POST" enctype="multipart/form-data">
	<table cellpadding="5" cellspacing="0">
	<tr bgcolor="cadetblue">
		<td><img src="assets/unnamed.png"></td>
		<th colspan="2">DATA SISWA</th>
	</tr>
	<?php if (!empty($success)) { ?>
	<div class="alert alert-success">
		<p><?= $success ?></p>
	</div>
<?php } ?>

<?php if (!empty($error)) { ?>
	<div class="alert alert-danger">
		<?= $error ?>
	</div>
<?php } ?>
	<tr>
	<td>NIS</td>
	<td><input type="text" name="nis" value="<?= @$siswa['nis'] ?>" <?= $kasus ?>></td>
	</tr>
	<tr>
	<td>Nama Lengkap</td>
	<td><input type="text" name="nama_lengkap" value="<?= @$siswa['nama_lengkap'] ?>"></td>
</tr>
<tr>
	<td>Jenis Kelamin</td>
	<td><input type="radio" name="jenis_kelamin" value="L" <?= @$siswa['jenis_kelamin'] == 'L' ? 'checked' :'' ?>> Laki-laki	
	<input type="radio" name="jenis_kelamin" value="P" <?= @$siswa['jenis_kelamin'] == 'P' ? 'checked' :'' ?>> Perempuan<br></td>
</tr>
<tr>
	<td>Kelas</td>
	<td>
		<select name="id_kelas" class="form-control">
			<option value="">[ Pilih Kelas ]</option>
			<?php while ($siswa = mysqli_fetch_object($dataKelas)) { ?>
			<option value="<?php echo $siswa->id_kelas?>"
				<?php echo @$action->id_kelas == $siswa->id_kelas ? 'selected': ''?> >
				<?php echo $siswa->nama_kelas?>
				</option>
			<?php } ?>
		</select>
	</td>
</tr>
<tr>
	<td>Jurusan</td>
	<td><input type="text" name="jurusan" value="<?= @$siswa['jurusan'] ?>"><br></td>
</tr>
<tr>
	<td>Alamat</td> 
	<td><input type="text" name="alamat" value="<?= @$siswa['alamat'] ?>"></td>
</tr>
<tr>
	<td>Golongan Darah</td>
	<td><input type="radio" name="golongan_darah" value="A" <?= @$siswa['golongan_darah'] == 'A' ? 'checked' : '' ?>>A
		<input type="radio" name="golongan_darah" value="O" <?= @$siswa['golongan_darah'] == 'O' ? 'checked' : '' ?>>O
		<input type="radio" name="golongan_darah" value="B" <?= @$siswa['golongan_darah'] == 'B' ? 'checked' : '' ?>>B
		<input type="radio" name="golongan_darah" value="AB" <?= @$siswa['golongan_darah'] == 'AB' ? 'checked' : '' ?>>AB<br></td>
</tr>
<tr>
	<td>Nama Ibu Kandung</td>
	<td><input type="text" name="nama_ibu_kandung" value="<?= @$siswa['nama_ibu_kandung'] ?>"></td>
</tr>
<tr>
	<td>Foto</td>
	<td>
		<?php if ($action == "edit.php") { ?>
		<img src="<?php echo base_url() ?>/assets/images/<?php echo @$siswa['file']?>" width="80px" alt="" />
		<input type="hidden" name="foto" value="<?php echo @$siswa->file?>" />
		<?php } ?>
		<input type="file" name="foto" />
	</td>
</tr>
<tr>
	<th bgcolor="cadetblue" colspan="2"><input type="submit" class="button" name="submit" value="Simpan"></th>
</tr>
</table>
</form>
