<title>Rincian Mahasiswa</title>

<?php
require '../template.php';
require '../fungsi.php';

$nim = $_GET["nim"];
$mhs = query("SELECT * FROM tb_mahasiswa WHERE nim = $nim")[0];



?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Rincian Mahasiswa</h1>
  </div>
  <div class="kembali">
    <a class="btn btn-danger mb-4" href="../../perkuliahan/mahasiswa.php">Kembali</a>
  </div>
  <div class="col-md-6">
    <table class="table table-striped">
      <tr>
        <th>Nim</th>
        <td><?php echo $mhs["nim"]; ?></td>
      </tr>
      <tr>
        <th>Nama Mahasiswa</th>
        <td><?php echo $mhs["nama_mahasiswa"]; ?></td>
      </tr>
      <tr>
        <th>Tanggal Lahir</th>
        <td><?php echo $mhs["tanggal_lahir"]; ?></td>
      </tr>
      <tr>
        <th>Jenis Kelamin</th>
        <td><?php echo $mhs["jenis_kelamin"]; ?></td>
      </tr>
      <tr>
        <th>Tempat Tinggal</th>
        <td><?php echo $mhs["tempat_tinggal"]; ?></td>
      </tr>
      <tr>
        <th>Program Studi</th>
        <td><?php echo $mhs["program_studi"]; ?></td>
      </tr>
      <tr>
        <th>Konsentrasi</th>
        <td><?php echo $mhs["konsentrasi"]; ?></td>
      </tr>
      <tr>
        <th>Kelas</th>
        <td><?php echo $mhs["kelas"]; ?></td>
      </tr>
      <tr>
        <th>Tanggal Daftar</th>
        <td><?php echo $mhs["tanggal_input"]; ?></td>
      </tr>
      <tr>
        <th>Alasan Berkuliah Disini</th>
        <td><?php echo $mhs["alasan"]; ?></td>
      </tr>
    </table>
  </div>
</main>


<script>
  aktif('../../perkuliahan/mahasiswa.php');  
</script>
