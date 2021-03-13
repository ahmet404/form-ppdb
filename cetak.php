<?php
  error_reporting(0);
  require_once 'tcpdf/tcpdf.php';
  require('config.php');
  $nisn = $_GET['n'];
  $tgl_sekarang = date("d F Y");  
  $jam_sekarang = date("H:i:s");
class YudhaPDF extends TCPDF {
  public function Header() {
        $image_file = "<img src=\"img/logo.jpg\" width=\"25mm\" height=\"25mm\"/>";
    $this->SetY(12);
    $isi_header="<table border=\"0\" width=\"680\"cellpadding=\"2\" align=\"left\">
          <tr>
            <td rowspan=\"2\" width=\"12%\">".$image_file."</td>
            <td><h1 style=\"line-height:17px;\">SMK AKP GALANG</h1></td>
          </tr>
          <tr>
            <td style=\"line-height:13px;font-size:10.3px;\">Jl. Perjuangan Lk. VII  Kel. Galang Kota<br>Telp : (061)7980736  &nbsp;&nbsp;Kode Pos : 20585<br>Email : smkakpgalang@ymail.com&nbsp; Website : www.smkakpgalang.sch.id
            </td>
          </tr>
        </table>";
    $this->writeHTML($isi_header, true, false, false, false, '');
    }
  
  public function Footer() {
         $msg = "<span style=\"font-size:8px;\">Simpanlah lembar pendaftaran ini sebagai bukti pendaftaran Anda.</span>";
         $tgl_cetak = "<span style=\"text-align:right;font-size:8px;\">Dicetak tanggal ".date("d F Y")." pukul ".date("H:i:s"). "</span>";
    $this->SetY(-9);
    $this->writeHTML($msg, true, false, false, false, '');
    $this->SetY(-9);
    $this->writeHTML($tgl_cetak, true, false, false, false, '');
        $this->SetY(-10);
    $this->writeHTML("<hr>", true, false, false, false, '');
        $this->SetFont('helvetica', '', 12);
        // $this->Cell(0, 10, ''.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
  $pdf = new YudhaPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
      
  $pdf->SetTitle('FORMULIR PENDAFTARAN');
  $pdf->SetSubject('FORMULIR PENDAFTARAN');
      
  $pdf->SetMargins(23, PDF_MARGIN_TOP, 23);
  $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
  $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
      
  $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
  $pdf->AddPage();
      
  $pdf->SetFont('helvetica', '', 10);
  $pdf->SetY(39);

  $sql = $conn->query("SELECT * FROM tb_ppdb WHERE nisn='$nisn'");
  
  $data = $sql->fetch_assoc();
  $isi = "<hr height=\".1\">
  <div style=\"text-align:center;font-size:12px;font-weight:bold;\">Bukti Pendaftaran Online SMK AKP Galang Tahun 2020</div><br>
        <table width=\"100%\" border=\"0\" style=\"box-sizing:border-box;margin-left:20px;padding:5px 5px 5px 25px;\">  
          <tr>
            <td width=\"38%\">Nama Lengkap</td>
            <td width=\"7.5%\">:</td>
            <td width=\"54.5%\">".$data['nama_siswa']."</td>
          </tr>
          <tr>
            <td>NISN</td>
            <td>:</td>
            <td>".$data['nisn']."</td>
          </tr>
          <tr>
            <td>NIK</td>
            <td>:</td>
            <td>".$data['nik']."</td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>".$data['gender']."</td>
          </tr>
          <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>".$data['tempat_lahir']."</td>
          </tr> 
          <tr>
            <td>Asal Sekolah SMP</td>
            <td>:</td>
            <td>".$data['asal_sekolah']."</td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>".$data['tanggal_lahir']."</td>
          </tr>
          <tr>
            <td>Agama</td>
            <td>:</td>
            <td>".$data['agama']."</td>
          </tr>
          <tr>
            <td>Jurusan yang di Pilih</td>
            <td>:</td>
            <td>".$data['jurusan']."</td>
          </tr>
          <tr>
            <td>Alamat Rumah</td>
            <td>:</td>
            <td>".$data['alamat']."</td>
          </tr>
          <tr>
            <td>No Handphone/WA</td>
            <td>:</td>
            <td>".$data['no_handphone']."</td> 
          </tr>
          <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td>".$data['kecamatan']."</td>
          </tr>
          <tr>
            <td>Kabupaten</td>
            <td>:</td>
            <td>".$data['kabupaten']."</td>
          </tr>
          <tr>
            <td>Kode Pos</td>
            <td>:</td>
            <td>".$data['kode_pos']."</td>
          </tr>
          <tr>
            <td>Nama Ayah</td>
            <td>:</td>
            <td>".$data['nama_ayah']."</td>
          </tr>
          <tr>
            <td>Pekerjaan Ayah</td>
            <td>:</td>
            <td>".$data['pekerjaan_ayah']."</td>
          </tr>
          <tr>
            <td>Ibu</td>
            <td>:</td>
            <td>".$data['nama_ibu']."</td>
          </tr>
          <tr>
            <td>Pekerjaan Ibu</td>
            <td>:</td>
            <td>".$data['pekerjaan_ibu']."</td>
          </tr>
          <tr>
            <td>Nama Wali</td>
            <td>:</td>
            <td>".$data['wali']."</td>
          </tr>
        </table>";
  $pdf->writeHTML($isi, true, false, false, false, '');
  $tandaTangan = "
  <table cellpadding=\"0\" border=\"0\">
    <tr>
      <td colspan=\"3\" align=\"center\">Mengetahui</td>      
    </tr>
    <br>
    <tr>
      <td align=\"center\"><b>Calon Siswa</b></td>
      <td align=\"center\"><b>Orang Tua/Wali</b></td>
      <td align=\"center\"><b>Panitia PPDB</b></td>
    </tr>
    <br><br><br><br>
    <tr>
      <td align=\"center\">_____________________</td>
      <td align=\"center\">_____________________</td>
      <td align=\"center\">_____________________</td>
    </tr>
  </table>
  ";  
  $pdf->writeHTML($tandaTangan, true, false, false, false, '');      
  $namaPDF = 'BUKTI PENDAFTARAN ONLINE AKP GALANG.pdf';
  $pdf->Output($namaPDF,'I');
?>