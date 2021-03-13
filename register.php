		<?php
		require('config.php');
		if(isset($_POST['daftar'])){
			$nama = $_POST['nama'];
			$nisn = $_POST['nisn'];
			$nik = $_POST['nik'];
			$gender = $_POST['gender'];
			$TLahir = $_POST['TLahir'];
			$asalsmp = $_POST['asalsmp'];
			$birth = $_POST['birth'];
			$agama = $_POST['agama'];
			$jurusan = $_POST['jurusan'];
			$alamat = $_POST['alamat'];
			$phone = $_POST['phone'];
			$kec = $_POST['kec'];
			$kab = $_POST['kab'];
			$pos = $_POST['pos'];
			$ayah = $_POST['ayah'];
			$fatherWork = $_POST['work-ayah'];
			$motherWork = $_POST['work-ibu'];
			$ibu = $_POST['ibu'];
			$wali = $_POST['wali'];	
			$daftar = date("Y-m-d H:i:s");

			$sql = $conn->query("INSERT INTO tb_ppdb value('','$nisn','$nik','$nama','$gender','$TLahir','$asalsmp','$birth','$agama','$jurusan','$alamat','$phone','$kec','$kab','$pos','$ayah','$fatherWork','$ibu','$motherWork','$wali','$daftar')");
			$tampil = $conn->query("SELECT * FROM tb_ppdb WHERE nisn='$nisn'");
			$res = $tampil->fetch_assoc();
			if($sql){
				$nisn = $res['nisn'];
				header("location:cetak.php?n=$nisn");
			} else{
				echo "Pendaftaran Gagal";
			}
	}
	?>