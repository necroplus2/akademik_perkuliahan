<title>Ubah Jadwal</title>

<?php 
require '../template.php';

require '../../perkuliahan/fungsi.php';

$id = $_GET["id"];
$jadwal = query("SELECT * FROM tb_jadwal WHERE id = $id")[0];

$matkul = query("SELECT * FROM tb_matkul");
$dosen = query("SELECT * FROM tb_dosen");


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

if( ubah_jadwal($_POST) > 0 ) {
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
    <a href="../penjadwalan.php" class="btn btn-danger mb-4">Kembali</a>
  </div>
  <div class="col-md-6">
    <form action="" method="post">
      <input type="hidden" value="<?php echo $jadwal["id"]; ?>" name="id">
      <div class="mb-3">
        <label for="kode_jadwal" class="form-label">Kode Jadwal</label>
        <input type="text" class="form-control" id="kode_jadwal" name="kode_jadwal" value="<?php echo $jadwal["kode_jadwal"]; ?>">
      </div>
      <div class="mb-3">
        <label for="kode_matkul" class="form-label">Kode Matkul</label>
        <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" value="<?php echo $jadwal["kode_matkul"]; ?>">
      </div>
      <div class="mb-3">
        <label for="kode_dosen" class="form-label">Kode Dosen</label>
        <!-- <input type="text" class="form-control" id="kode_dosen" name="kode_dosen" value="<?php //echo $jadwal["kode_dosen"]; ?>"> -->
        <select name="kode_dosen" id="kode_dosen" class="form-select">
          <option disabled>-- Pilih Dosen --</option>
          <?php foreach($dosen as $ds) { ?>
          <option <?php if($ds["kode_dosen"] == $jadwal["kode_dosen"]) {echo "selected";}?> value="<?php if($ds["kode_dosen"] == $jadwal["kode_dosen"]) {echo $jadwal["kode_dosen"];} ?>"><?php echo $ds["kode_dosen"]; ?> | <?php echo $ds["nama_dosen"]; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="ruangan" class="form-label">Ruangan</label>
        <input type="text" class="form-control" id="ruangan" name="ruangan" value="<?php echo $jadwal["ruangan"]; ?>">
      </div>
      <div class="mb-3">
        <label for="jam_jadwal" class="form-label">Jam Jadwal</label>
        <input type="datetime-local" class="form-control" id="jam_jadwal" name="jam_jadwal" value="<?php echo date("Y-m-d", $jadwal["jam_jadwal"]) . "T" . date("H:i", $jadwal["jam_jadwal"] ); ?>">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</main>


<script>
  aktif('../../perkuliahan/penjadwalan.php');
</script>