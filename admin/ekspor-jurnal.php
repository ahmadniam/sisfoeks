<?php

require_once ('../core/init.php');

$nama_ekstra = $_GET['nama_ekstra'];
$tgl=date('d-m-Y');
$result = tampilJurnalHarian($nama_ekstra,$tgl);

$judul = mysqli_fetch_assoc(tampilJurnalHarian($nama_ekstra,$tgl));
$aranekstra = $judul['kode_ekstra'];
$no=1;
$content ="
<style>
.tabel {
  border-collapse : collapse;
}
.tabel th {
  padding : 8px 5px; color:#ffff;
}

.tabel th width{
  width : 100px
}

.tabel td {
  padding : 8px 5px;
}

</style>
";

$content .="
<page backtop=10mm backbottom=10mm backleft=20mm backright=20mm>
<div align=center>
<strong>
<h4>
JURNAL KEGIATAN EKSTRAKURIKULER  $aranekstra<br>";

$content .=
"

SMKN 4 SEMARANG <br>
TAHUN PELAJARAN 2017/2018
</h4>
</strong>
</div>

<br>
<div>
<table align=center border=1px class='tabel'>
  <thead>
    <tr>
      <th>No</th>
      <th>Hari & Tanggal </th>
      <th>Pembina/ Pelatih</th>
      <th>Materi</th>
      <th>Keterangan</th>
    </tr>
  </thead>";
  $no=1;

  while ($row=mysqli_fetch_assoc($result)) {
    $content .="
      <tbody>
        <tr>
          <td>1</td>
          <td>$row[hari_tanggal]</td>
          <td>$row[kode_pembina]</td>
          <td>$row[materi]</td>
          <td>$row[keterangan]</td>
        </tr>
      </tbody>";
      }
        $ttd=mysqli_fetch_assoc(tampilJurnalHarian($nama_ekstra,$tgl));
$content .="

    </table>
    </div>
    <p align=right>

    Pembina, <br><br><br><br>
    $ttd[kode_pembina]
    </p>
    </page>
    ";


require_once ('../assets/plugins/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','en');
$html2pdf->writeHTML($content);
$html2pdf->output('laporan-jurnalharian.pdf')
 ?>
