<title>Data Matkul</title>

<?php 
require 'fungsi.php';
require 'template.php';

$matkul = query("SELECT * FROM tb_matkul");



?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Data Mata Kuliah</h1>
    </div>
    <div class="tambah">
      <a href="matkul/tambah.php" class="btn btn-primary mb-4"><i class="bi bi-plus-square me-2"></i>Tambah Data</a>
    </div>
    <div class="col-md-7">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Matkul</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">SKS</th>
            <th scope="col" class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($matkul as $mk) { ?>
          <tr>
            <th scope="row" class="align-middle"><?php echo $i++; ?></th>
            <td class="align-middle"><?php echo $mk["kode_matkul"]; ?></td>
            <td class="align-middle"><?php echo $mk["mata_kuliah"]; ?></td>
            <td class="align-middle"><?php echo $mk["sks"]; ?></td>
            <td>
              <center>
              <a href="matkul/ubah.php?id=<?php echo $mk["id"]; ?>" class="btn btn-success"><i class="bi bi-pencil-fill me-2"></i>Ubah</a>
              <a href="matkul/hapus.php?id=<?php echo $mk["id"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin Dihapus ?')"><i class="bi bi-trash-fill me-2"></i>Hapus</a>
              </center>
            </td>
          <?php } ?>
          </tr>

        </tbody>
      </table>
    </div>
  </main>


<script>
  aktif('../../perkuliahan/matkul.php');  
</script>


