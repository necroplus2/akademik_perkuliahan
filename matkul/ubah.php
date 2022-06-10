<title>Ubah Matkul</title>

<?php 
require '../template.php';

require '../../perkuliahan/fungsi.php';

$id = $_GET["id"];
$matkul = query("SELECT * FROM tb_matkul WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

if( ubah_matkul($_POST) > 0 ) {
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
     <h1 class="h2">Ubah Mata Kuliah</h1>
  </div>
  <div class="kembali">
    <a href="../matkul.php" class="btn btn-danger mb-4">Kembali</a>
  </div>
  <div class="col-md-6">
    <form action="" method="post">
      <input type="hidden" name="id" value="<?php echo $matkul["id"]; ?>">
      <div class="mb-3">
        <label for="kode_matkul" class="form-label">Kode Matkul</label>
        <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" value="<?php echo $matkul["kode_matkul"]; ?>">
      </div>
      <div class="mb-3">
        <label for="mata_kuliah" class="form-label">Nama Mata Kuliah</label>
        <input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah" value="<?php echo $matkul["mata_kuliah"]; ?>">
      </div>
      <div class="mb-3">
        <label for="sks" class="form-label">SKS</label>
        <input type="text" class="form-control" id="sks" name="sks" value="<?php echo $matkul["sks"]; ?>">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</main>


<script>
  aktif('../../perkuliahan/matkul.php');  
</script>