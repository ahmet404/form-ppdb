<!DOCTYPE html>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Form pendaftaran</title>
		<meta name="author" content="Achmad Fauzi">
		<meta name="description" content="ppdb online smk akp galang">
		<meta name="keyword" smk, akp, galang, smk akp galang, ppdb online, ppdb smk akp galang>
		<link rel="icon" href="img/logo-new.png">
		<link rel="stylesheet" type="text/css" media="all" href="css/daterangepicker.css" />
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
  		<link rel="stylesheet" href="css/intlTelInput.css">
	</head>

	<body>
		<form class="baru" action="register.php" method="POST">
			<h1>PPDB Online SMK AKP Galang</h1>
				<div class="input-container">
					<label>Nama Lengkap Sesuai Ijazah <span id="req">*</span><br>
						<input class="input-form" type="text" name="nama" maxlength="55" autocomplete="off" required/>
					</label>
				</div>
				
				<div class="input-container">
					<label>NISN <span id="req">*</span><br>
						<input pattern="[0-9]{10,}" class="input-form" type="text" name=" nisn" maxlength="10" autocomplete="off" required/>
					</label>
				</div>
				<div class="input-container">
					<label>NIK<br>
						<input class="input-form" type="text" name="nik" maxlength="16" autocomplete="off">
					</label>
				</div>
				<div class="input-container">
					<label>Jenis Kelamin <span id="req">*</span><br>
							<select class="input-form" name="gender" required/>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
					</label>
				</div>
				<div class="input-container">
					<label>Tempat Lahir<br>
						<input class="input-form" type="text" name="TLahir" maxlength="55" autocomplete="off">
					</label>
				</div>
				<div class="input-container">
					<label>Asal Sekolah SMP<br>
						<input class="input-form" type="text" name="asalsmp" maxlength="55" autocomplete="off">
					</label>
				</div>
				<div class="input-container">
					<label>Tanggal Lahir<br>
						<input class="input-form" type="text" name="birth" id="picker" class="form-control">
					</label>
				</div>
				<div class="input-container">
					<label>Agama <span id="req">*</span><br>
							<select class="input-form" name="agama" required/>
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Katholik">Katholik</option>
								<option value="Budha">Budha</option>
								<option value="Hindu">Hindu</option>
							</select>
					</label>
				</div>
				<div class="input-container">
					<label>Jurusan yang di Pilih <span id="req">*</span><br>
							<select class="input-form" name="jurusan" required/>
								<option value="TKJ">Teknik Komputer Dan Jaringan</option>
								<option value="TKR">Teknik Kendaraan Ringan</option>
								<option value="TSM">Teknik Sepeda Motor</option>
								<option value="TP">Teknik Permesinan</option>
								<option value="TKCR">Tata Kecantikan Dan Tata Rias Rambut</option>
								<option value="TB">Tata Busana</option>
								<option value="RPL">Rekayasa Perangkat Lunak</option>
							</select>
					</label>
				</div>
				<div class="input-container">
					<label>Alamat Rumah<br>
						<input class="input-form" type="text" name="alamat" maxlength="55" autocomplete="off">
					</label>
				</div>
				<div class="input-container">
					<label>No. Handphone / WA <span id="req">*</span><br>
						<div style="border:1px solid #ced4da;border-radius: 4px;">
						<input class="input-form" style="border:0;"id="phone" name="phone" type="tel">
					</div>
					</label>
				</div>
				<div class="input-container">
					<label>Kecamatan <span id="req">*</span><br>
						<input class="input-form" type="text" name="kec" maxlength="55" autocomplete="off" required/>
					</label>
				</div>
				<div class="input-container">
					<label>Kabupaten <span id="req">*</span><br>
						<input class="input-form" type="text" name="kab" maxlength="55" autocomplete="off" required/>
					</label>
				</div>
				<div class="input-container">
					<label>Kode Pos<br>
						<input class="input-form" type="text" name="pos" maxlength="55" autocomplete="off">
					</label>
				</div>
				<div class="input-container">
					<label>Nama Ayah <span id="req">*</span><br>
						<input class="input-form" type="text" name="ayah" maxlength="55" autocomplete="off" required/>
					</label>
				</div>
				<div class="input-container">
					<label>Pekerjaan Ayah <span id="req">*</span><br>
							<select class="input-form" name="work-ayah" required/>
								<option value="Tidak Bekerja">Tidak Bekerja</option>
								<option value="Nelayan">Nelayan</option>
								<option value="Petani">Petani</option>
								<option value="Peternak">Peternak</option>
								<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
								<option value="Wiraswasta">Wiraswasta</option>
								<option value="Wirausaha">Wirausaha</option>
								<option value="Buruh">Buruh</option>
								<option value="Pensiunan">Pensiunan</option>
								<option value="Lain-lain">Lain-lain</option>
							</select>
					</label>
				</div>
				<div class="input-container">
					<label>Nama Ibu <span id="req">*</span><br>
						<input class="input-form" type="text" name="ibu" maxlength="55" autocomplete="off" required/>
					</label>
				</div>
				<div class="input-container">
					<label>Pekerjaan Ibu<br>
							<select class="input-form" name="work-ibu">
								<option value="Tidak Bekerja">Tidak Bekerja</option>
								<option value="Nelayan">Nelayan</option>
								<option value="Petani">Petani</option>
								<option value="Peternak">Peternak</option>
								<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
								<option value="Wiraswasta">Wiraswasta</option>
								<option value="Wirausaha">Wirausaha</option>
								<option value="Buruh">Buruh</option>
								<option value="Pensiunan">Pensiunan</option>
								<option value="Lain-lain">Lain-lain</option>
							</select>
					</label>
				</div>
				<div class="input-container">
					<label>Nama Wali<br>
						<input class="input-form" type="text" name="wali" maxlength="55" autocomplete="off">
					</label>
				</div>
				<div class="form-button">
					<input type="submit" class="btn" name="daftar" value="Daftar">
				</div>
		</form>

		<script src="js/jquery.js"></script>
		<script src="css/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/parsleyjs/dist/parsley.min.js"></script>
		<script src="js/parsleyjs/dist/i18n/id.js"></script>
      	<script src="js/moment.min.js"></script>
      	<script src="js/daterangepicker.js"></script>
      	<script src="js/intlTelInput.js"></script>
      	<script>
      		$('#picker').daterangepicker({
      			singleDatePicker: true,
      			showDropdowns: true,
      			opens: 'right',
      			drops: 'up', 
      		});
      	</script>
      	<script>
			$(document).ready(function(){
			$('form').parsley();
			});
		</script>
		<script>
		    var input = document.querySelector("#phone");
		    window.intlTelInput(input, {
		      preferredCountries: ['id', 'jp'],
		      separateDialCode: true,
		      utilsScript: "js/utils.js",
		    });
		</script>
	</body>
</html>