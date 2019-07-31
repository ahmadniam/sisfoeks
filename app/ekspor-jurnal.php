<?php
require_once ('../core/init.php');
  $result = tampilJurnal();

$content ="
<style>
.tabel {
  border-collapse : collapse;
}
.tabel th {
  padding : 8px 5px; color:#ffff;
}

</style>
";

$content .="
<page>
<div align=center>
<strong>
<h4>
JURNAL KEGIATAN EKSTRAKURIKULER [nama_ekstra] <br> SMKN 4 SEMARANG <br>
TAHUN PELAJARAN 2017/2018
</h4>
</strong>
</div>

<br>
<div>
<table align=center border=1px class='tabel'>
  <thead>
    <tr>
      <th >No</th>
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
          <td></td>
          <td>$row[hari_tanggal]</td>
          <td>$row[nama_pembina]</td>
          <td>$row[materi]</td>
          <td>$row[keterangan]</td>
        </tr>
      </tbody>";
      }
        $ttd=mysqli_fetch_assoc($result);
$content .="

    </table>
    </div>
    <p align=right>

    Pembina, <br><br><br><br>
    [nama_pembina]
    </p>
    </page>
    ";


require_once ('../assets/plugins/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','en');
$html2pdf->writeHTML($content);
$html2pdf->output('example.pdf')
 ?>
