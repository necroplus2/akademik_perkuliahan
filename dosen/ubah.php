<title>Tambah Dosen</title>

<?php 
require '../template.php';

require '../../perkuliahan/fungsi.php';

$id = $_GET["id"];
$dosen = query("SELECT * FROM tb_dosen WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

if( ubah_dosen($_POST) > 0 ) {
	echo "
		<script>
			alert('data berhasil ditambahkan!');
			document.location.href = 'index.php';
		</script>
	";
} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
}

}




?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Tambah Dosen</h1>
  </div>
  <div class="kembali">
    <a href="../dosen.php" class="btn btn-danger mb-4">Kembali</a>
  </div>
  <div class="col-md-6">
    <form action="" method="post">
      <input type="hidden" name="id" value="<?php echo $dosen["id"]; ?>">
      <div class="mb-3">
        <label for="kode_dosen" class="form-label">Kode Dosen</label>
        <input type="text" class="form-control" id="kode_dosen" name="kode_dosen" readOnly="true" value="<?php echo $dosen["kode_dosen"]; ?>">
      </div>
      <div class="mb-3">
        <label for="nama_dosen" class="form-label">Nama Dosen</label>
        <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="<?php echo $dosen["nama_dosen"]; ?>">
      </div>
      <div class="mb-3">
        <p>Jenis Kelamin</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" <?php echo $dosen["jenis_kelamin"] == "laki-laki" ? "checked" : "no"?>>
          <label class="form-check-label" for="laki-laki">Laki-laki</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" <?php echo $dosen["jenis_kelamin"] == "perempuan" ? "checked" : "no"?>>
          <label class="form-check-label" for="perempuan">Perempuan</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="no_hp" class="form-label">No HP</label>
        <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $dosen["no_hp"]; ?>">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</main>




<script>
  aktif('../../perkuliahan/dosen.php');
</script>
