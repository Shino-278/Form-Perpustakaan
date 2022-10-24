<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h2>Data Mahasiswa</h2>

	<!-- Data Pake Tabel -->
	<table cellpadding="2px" cellspacing="2px">

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $_POST['nama'] ?></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<?php if (isset ($_POST['jenisKelamin']))
				{
					$jenisKelamin=$_POST['jenisKelamin'];
    					echo "".$jenisKelamin;
				} ?>
			</td>
		</tr>

		<tr>
			<td>Tempat Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo $_POST['tempat'] ?>, <?php echo $_POST['bday'] ?></td>
		</tr>

		<tr> 
			<td>NPM</td> 
			<td>:</td> 
			<td><?php echo $_POST['npm'] ?></td> 
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td>
				<?php if (isset ($_POST['Fakultas'])) 
				{
					$Fakultas=$_POST['Fakultas'];
					echo "".$Fakultas;
				} ?>
			</td>
		</tr>

		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td>
				<?php if (isset ($_POST['jurusan'])) 
				{
					$jurusan=$_POST['jurusan'];
					echo "".$jurusan;
				} ?>
			</td>
		</tr>

		<tr>
			<td>Buku Yang Dipinjam</td>
			<td>:</td>
			<td>
				<?php if (isset($_POST['buku']))
				{
					$buku=$_POST['buku'];

					for ($i=0; $i < count($buku); $i++)
					{
						echo $buku[$i].", ";
					}
				} ?>
			</td>
		</tr>

	</table>

</body>
</html>
