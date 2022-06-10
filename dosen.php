<title>Data Dosen</title>

<?php 
require 'template.php';
require 'fungsi.php';

$dosen = query("SELECT * FROM tb_dosen");

?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Data Dosen</h1>
    </div>
    <div class="tambah">
      <a href="dosen/tambah.php" class="btn btn-primary mb-4"><i class="bi bi-plus-square me-2"></i>Tambah Data</a>
    </div>
    <div class="col-md-10">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Dosen</th>
            <th scope="col">Nama Dosen</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">No HP</th>
            <th scope="col" class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($dosen as $ds) { ?>
          <tr>
            <th scope="row" class="align-middle"><?php echo $i++; ?></th>
            <td class="align-middle"><?php echo $ds["kode_dosen"]; ?></td>
            <td class="align-middle"><?php echo ucfirst( $ds["nama_dosen"] ); ?></td>
            <td class="align-middle"><?php echo ucfirst( $ds["jenis_kelamin"] ); ?></td>
            <td class="align-middle"><?php echo $ds["no_hp"]; ?></td>
            <td>
              <a href="dosen/rinci.php?id=<?php echo $ds["id"]; ?>" class="btn btn-warning btn-sm"><i class="bi bi-list-columns-reverse me-2"></i>Rincian</a>
              <a href="dosen/ubah.php?id=<?php echo $ds["id"]; ?>" class="btn btn-success btn-sm"><i class="bi bi-pencil-fill me-2"></i>Ubah</a>
              <a href="dosen/hapus.php?id=<?php echo $ds["id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Dihapus ?')"><i class="bi bi-trash-fill me-2"></i>Hapus</a>
            </td>
          <?php } ?>
          </tr>

        </tbody>
      </table>
    </div>
  </main>



<script>
  aktif('../../perkuliahan/dosen.php');
</script>

