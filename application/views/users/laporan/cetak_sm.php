<?php
$cek    = $user->row();
$nama   = $cek->nama_lengkap;
$email  = $cek->email;
$level  = $cek->level;
if ($level == "s_admin") {
  $level = "Super Admin";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title><?php echo date('d_m_Y'); ?>_Rekap_Laporan_Surat_Masuk</title>
  <base href="<?php echo base_url(); ?>" />
</head>
<style type="text/css">
  @page {
    margin-top: 0.5cm;
    /*margin-bottom: 0.1em;*/
    margin-left: 1cm;
    margin-right: 1cm;
    margin-bottom: 0.1cm;
  }

  .name-school {
    font-size: 15pt;
    font-weight: bold;
    text-transform: uppercase;
  }

  .alamat {
    font-size: 11pt;
    margin-top: -15px;
    margin-bottom: -10px;
  }

  .alamat2 {
    font-size: 9pt;
  }

  .ttd-kiri {
    font-size: 9pt;
    margin-left: 50px;
  }

  .ttd-kanan {
    font-size: 9pt;
    margin-right: 50px;
    text-align: right;
  }

  .detail {
    font-size: 10pt;
    font-weight: bold;
    padding-top: -15px;
    padding-bottom: -12px;
  }

  body {
    font-family: sans-serif;
  }

  table {
    font-family: verdana, arial, sans-serif;
    font-size: 11px;
    color: #333333;
    border-width: none;
    /*border-color: #666666;*/
    border-collapse: collapse;
    width: 100%;
  }

  th {
    padding-bottom: 8px;
    padding-top: 8px;
    padding-left: 8px;
    border-color: #666666;
    background-color: #dedede;
    /*border-bottom: solid;*/
    text-align: left;
  }

  td {
    padding-bottom: 8px;
    padding-top: 8px;
    padding-left: 8px;
    border-color: #666666;
    background-color: #ffffff;
    text-align: left;
  }

  hr {
    border: 1;
    height: 2px;
    /* Set the hr color */
    color: #333;
    /* old IE */
    background-color: #333;
    /* Modern Browsers */
  }

  .container {
    position: relative;
  }

  .topright {
    position: absolute;
    top: 0;
    right: 0;
    font-size: 18px;
    border-width: thin;
    padding: 5px;
  }

  .topright2 {
    position: absolute;
    top: 30px;
    right: 50px;
    font-size: 18px;
    border: 1px solid;
    padding: 5px;
    color: red;
  }
</style>

<body onload="window.print()">

  <table width="100%">
    <tr>
      <td width="120">
        <img src="foto/logo.png" alt="logo1" width="80">
      </td>
      <td align="left">
        <p class="name-school">MTs. BUSTANUL ULUM</p>
        <p class="alamat"><b>TAGANGSER LAOK WARU PAMEKASAN</b></p>
        <p class="alamat2">Email : info@mtsbu.sch.id  Website : www.mtsbu.sch.id</p>
      </td>
    </tr>
  </table>
  <hr>
  <h3 align="center">L A P O R A N <br> ARSIP DIGITAL SURAT MASUK</h3>
  <p class="alamat2">Laporan tanggal: <b><u><?php echo $t_awal ?></u></b> s/d <b><u><?php echo $t_akhir ?></u></b></p>
  <table border="1" width="100%">
    <tr>
      <th width="1%">
        <center>NO.</center>
      </th>
      <th width="10%">NO. SURAT</th>
      <th width="10%">TANGGAL</th>
      <th width="20%">INSTANSI</th>
      <th width="20%">PERIHAL</th>
      <th width="20%">DISPOSISI</th>
      <th width="5%">STATUS</th>
    </tr>
    <?php
    $no = 1;
    foreach ($sql->result() as $baris) { ?>
      <tr>
        <td>
          <center><?php echo $no; ?></center>
        </td>
        <td><?php echo $baris->no_asal; ?></td>
        <td><?php echo $baris->tgl_no_asal; ?></td>
        <td><?php echo $baris->pengirim; ?></td>
        <td><?php echo $baris->perihal; ?></td>
        <td><?php echo $baris->disposisi; ?></td>
        <td>
          <center><?php echo $baris->penerima; ?></center>
        </td>
      </tr>
    <?php
      $no++;
    } ?>
  </table>
  <table>
    <tr>
      <td>
        <p class="ttd-kiri">&nbsp;</p>
        <p class="ttd-kiri">Mengetahui,</p>
        <p class="ttd-kiri">Kepala Tata Usaha</p>
        <br><br><br>
        <p class="ttd-kiri"><b>Junaidi, S.Pd.I</b></p>
      </td>
      <td>
        <p class="ttd-kanan">Pamekasan, <?php echo date('d M Y'); ?></p>
        <p class="ttd-kanan">&nbsp;</p>
        <p class="ttd-kanan">Petugas,</p>
        <br><br><br>
        <p class="ttd-kanan"><b><?php echo ucwords($nama); ?></b></p>
      </td>

    </tr>
  </table>


</body>

</html>