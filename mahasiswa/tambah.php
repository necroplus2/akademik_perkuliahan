<title>Tambah Mahasiswa</title>

<?php 
require '../template.php';

require '../../perkuliahan/fungsi.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

if( tambah_mhs($_POST) > 0 ) {
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
     <h1 class="h2">Tambah Mahasiswa</h1>
  </div>
  <div class="kembali">
    <a href="../mahasiswa.php" class="btn btn-danger mb-4">Kembali</a>
  </div>
  <div class="col-md-6">
    <form action="" method="post">
      <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim">
      </div>
      <div class="mb-3">
        <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa">
      </div>
      <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
      </div>
      <div class="mb-3">
        <p>Jenis Kelamin</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
          <label class="form-check-label" for="laki-laki">Laki-laki</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
          <label class="form-check-label" for="perempuan">Perempuan</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="tempat_tinggal" class="form-label">Tempat Tinggal</label>
        <input type="text" class="form-control" id="tempat_tinggal" name="tempat_tinggal">
      </div>
      <div class="mb-3">
        <p>Program Studi</p>
        <div class="form-check">
          <input class="form-check-input prodiBd" type="radio" name="prodi" id="bisnis_digital" value="bisnis digital">
          <label class="form-check-label" for="bisnis_digital">Bisnis Digital</label>
        </div>
        <div class="form-check">
          <input class="form-check-input prodiTi" type="radio" name="prodi" id="teknik_informatika" value="teknik informatika">
          <label class="form-check-label" for="teknik_informatika">Teknik Informatika</label>
        </div>
        <div class="form-check">
          <input class="form-check-input prodiSi" type="radio" name="prodi" id="sistem_informasi" value="sistem informasi">
          <label class="form-check-label" for="sistem_informasi">Sistem Informasi</label>
        </div>
      </div>
      <div class="mb-3 bd">
        <p>Konsentrasi</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="konsen" id="teknologi_bisnis_digital" value="teknologi bisnis digital">
          <label class="form-check-label" for="teknologi_bisnis_digital">Teknologi Bisnis Digital</label>
        </div>
      </div>
      <div class="mb-3 ti">
        <p>Konsentrasi</p>
        <div class="form-check">
          <input class="form-check-input " type="radio" name="konsen" id="software_engineering" value="software engineering">
          <label class="form-check-label" for="software_engineering">Software Engineering</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="konsen" id="computer_networking" value="computer networking">
          <label class="form-check-label" for="computer_networking">Computer Networking</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="konsen" id="computerized_design_&_multimedia" value="computerized design & multimedia">
          <label class="form-check-label" for="computerized_design_&_multimedia">Computerized Design & Multimedia</label>
        </div>
      </div>
      <div class="mb-3 si">
        <p>Konsentrasi</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="konsen" id="computerized_accounting" value="computerized accounting">
          <label class="form-check-label" for="computerized_accounting">Computerized Accounting</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="konsen" id="e-commerce" value="e-commerce">
          <label class="form-check-label" for="e-commerce">E-Commerce</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="konsen" id="business_intelligence_&_management_support_system" value="business intelligence & management support system">
          <label class="form-check-label" for="business_intelligence_&_management_support_system">Business Intelligence & Management Support System</label>
        </div>
      </div>
      <div class="mb-3">
        <p>Kelas</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="kelas" id="reguler" value="reguler">
          <label class="form-check-label" for="reguler">Reguler</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="kelas" id="shift" value="shift">
          <label class="form-check-label" for="shift">Shift</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="kelas" id="malam" value="malam">
          <label class="form-check-label" for="malam">Malam</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="alasan" class="form-label">Alasan</label>
        <input type="text" class="form-control" id="alasan" name="alasan">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</main>

<script>
  const ti = document.querySelector('.ti');
  const si = document.querySelector('.si');
  const bd = document.querySelector('.bd');

  ti.style.display = 'none';
  si.style.display = 'none';
  bd.style.display = 'none';

  const prodiSi = document.querySelector('.prodiSi');
  const prodiTi = document.querySelector('.prodiTi');
  const prodiBd = document.querySelector('.prodiBd');

  prodiSi.addEventListener('click', function(z){
    si.style.display = 'block';
    ti.style.display = 'none';
    bd.style.display = 'none';
  });

  prodiTi.addEventListener('click', function(z){
    ti.style.display = 'block';
    si.style.display = 'none';
    bd.style.display = 'none';
  });

  prodiBd.addEventListener('click', function(z){
    bd.style.display = 'block';
    ti.style.display = 'none';
    si.style.display = 'none';
  });

  aktif('../../perkuliahan/mahasiswa.php');  



</script>

