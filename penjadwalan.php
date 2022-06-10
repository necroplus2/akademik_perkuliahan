<title>Jadwal</title>

<?php
require 'template.php';
require 'fungsi.php';

$penjadwalan = query("SELECT * FROM tb_jadwal");

?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Data Jadwal</h1>
    </div>
    <div class="tambah">
      <a href="penjadwalan/tambah.php" class="btn btn-primary mb-4"><i class="bi bi-plus-square me-2"></i>Tambah Data</a>
    </div>
    <div class="col-md-10">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Jadwal</th>
            <th scope="col">Kode Matkul</th>
            <th scope="col">Kode Dosen</th>
            <th scope="col">Ruangan</th>
            <th scope="col">Jam Jadwal</th>
            <th scope="col" class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach($penjadwalan as $jadwal) { ?>
          <tr>
            <th scope="row" class="align-middle"><?php echo $i++; ?></th>
            <td class="align-middle"><?php echo $jadwal["kode_jadwal"]; ?></td>
            <td class="align-middle"><?php echo $jadwal["kode_matkul"]; ?></td>
            <td class="align-middle"><?php echo $jadwal["kode_dosen"]; ?></td>
            <td class="align-middle"><?php echo $jadwal["ruangan"]; ?></td>
            <td class="align-middle"><?php echo date("Y-m-d H:i", $jadwal["jam_jadwal"]); ?></td>
            <td>
              <center>
              <a href="penjadwalan/ubah.php?id=<?php echo $jadwal["id"]; ?>" class="btn btn-success"><i class="bi bi-pencil-fill me-2"></i>Ubah</a>
              <a href="penjadwalan/hapus.php?id=<?php echo $jadwal["id"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin Dihapus ?')"><i class="bi bi-trash-fill me-2"></i>Hapus</a>
              </center>
            </td>
          <?php } ?>
          </tr>

        </tbody>
      </table>
    </div>
  </main>



<script>
  aktif('../../perkuliahan/penjadwalan.php');
</script>




