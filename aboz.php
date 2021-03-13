<?php
require('config.php');
?>
<!DOCTYPE html>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Data PPDB</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			*{margin:0;padding:0;}
			body{font-family:arial;font-size:14px;}
			#container{
			    display:none;
			}
			th{background-color: lightblue;}
			tr, td, th{
				border:1px solid black;
				padding:5px;
			}
		</style> 
	</head>
	<body>	
	<div id="container">
		<h1 align="center">Data Pendaftaran Penerimaan Siswa Baru</h1>
		<div>
		<table border="1" cellspacing="0">
			<tr>
				<th>No</th>
				<th>Nama Siswa</th>
				<th>NISN</th>
				<th>NIK</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Asal Sekolah</th>
				<th>Tanggal Lahir</th>
				<th>Agama</th>
				<th>Jurusan</th>
				<th>Alamat</th>
				<th>No Handphone/WA</th>
				<th>Kecamatan</th>
				<th>Kabupaten</th>
				<th>Kode Pos</th>
				<th>Nama Ayah</th>
				<th>Pekerjaan Ayah</th>
				<th>Nama Ibu</th>
				<th>Pekerjaan Ibu</th>
				<th>Wali</th>
				<th>Waktu Pendaftaran</th>
				<th colspan="2">Aksi</th>
			</tr>
			<?php
			$i = 1;
			$res = $conn->query("SELECT * FROM tb_ppdb ORDER by id ASC");
			while($row = $res->fetch_assoc())
			{
			?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $row['nama_siswa'];?></td>
				<td><?php echo $row['nisn'];?></td>
				<td><?php echo $row['nik'];?></td>
				<td><?php echo $row['gender'];?></td>
				<td><?php echo $row['tempat_lahir'];?></td>
				<td><?php echo $row['asal_sekolah'];?></td>
				<td><?php echo $row['tanggal_lahir'];?></td>
				<td><?php echo $row['agama'];?></td>
				<td><?php echo $row['jurusan'];?></td>
				<td><?php echo $row['alamat'];?></td>
				<td><?php echo $row['no_handphone'];?></td>
				<td><?php echo $row['kecamatan'];?></td>
				<td><?php echo $row['kabupaten'];?></td>
				<td><?php echo $row['kode_pos'];?></td>
				<td><?php echo $row['nama_ayah'];?></td>
				<td><?php echo $row['pekerjaan_ayah'];?></td>
				<td><?php echo $row['nama_ibu'];?></td>
				<td><?php echo $row['pekerjaan_ibu'];?></td>
				<td><?php echo $row['wali'];?></td>
				<td><?php echo $row['tanggal_pendaftaran'];?></td>
				<td style="text-align:left;"><span class="button"><a onclick="return confirm('Yakin untuk menghapus ?')" href="delete.php?id=<?php echo $row['id'];?>" class="delete">DELETE</a></span></td>
			</tr>
			<?php 
			$i++;
			}
			?>
		</table>
	</div>
	</div>
	<script>
	 var x = document.getElementById("container");
     var pesan = prompt("Masukan kode akses: ");
     if(pesan !== "smkbisa!" ){
      x.style.display = "none";
      document.write("Kode akses salah!");
     } else{
         x.style.display = "inline-block";
     }
</script>
 
	</body>
</html>