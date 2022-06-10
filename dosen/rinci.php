<title>Rincian Dosen</title>

<?php
require '../template.php';
require '../fungsi.php';

$id = $_GET["id"];
$dosen = query("SELECT * FROM tb_dosen WHERE id = $id")[0];

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Rincian Dosen</h1>
  </div>
  <div class="kembali">
    <a class="btn btn-danger mb-4" href="../../perkuliahan/dosen.php">Kembali</a>
  </div>
  <div class="col-md-6">
    <table class="table table-striped">
      <tr>
        <th>ID Dosen</th>
        <td><?php echo $dosen["kode_dosen"]; ?></td>
      </tr>
      <tr>
        <th>Nama Dosen</th>
        <td><?php echo $dosen["nama_dosen"]; ?></td>
      </tr>
      <tr>
        <th>Jenis Kelamin</th>
        <td><?php echo $dosen["jenis_kelamin"]; ?></td>
      </tr>
      <tr>
        <th>No. HP</th>
        <td><?php echo $dosen["no_hp"]; ?></td>
      </tr>
    </table>
  </div>
</main>


<script>
  aktif('../../perkuliahan/dosen.php');
</script>
