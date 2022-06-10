<title>Ubah Data Mahasiswa</title>
<?php 
require '../template.php';
require '../fungsi.php';

$nim = $_GET["nim"];
$mhs = query("SELECT * FROM tb_mahasiswa WHERE nim = $nim")[0];

if( isset($_POST["submit"])) {

  if( ubah_mhs($_POST) > 0 ) {
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
     <h1 class="h2">Ubah Mahasiswa</h1>
  </div>
  <div class="kembali">
    <a href="../mahasiswa.php" class="btn btn-danger mb-4">Kembali</a>
  </div>
  <div class="col-md-6">
    <form action="" method="post">
      <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim" readonly="true" value="<?php echo $mhs["nim"]; ?>">
      </div>
      <div class="mb-3">
        <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="<?php echo $mhs["nama_mahasiswa"]; ?>">
      </div>
      <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $mhs["tanggal_lahir"]; ?>">
      </div>
      <div class="mb-3">
        <p>Jenis Kelamin</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" <?php echo $mhs["jenis_kelamin"] == "laki-laki" ? "checked" : "no"?>>
          <label class="form-check-label" for="laki-laki">Laki-laki</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" <?php echo $mhs["jenis_kelamin"] == "perempuan" ? "checked" : "no"?>>
          <label class="form-check-label" for="perempuan">Perempuan</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="tempat_tinggal" class="form-label">Tempat Tinggal</label>
        <input type="text" class="form-control" id="tempat_tinggal" name="tempat_tinggal" value="<?php echo $mhs["tempat_tinggal"]; ?>">
      </div>
      <div class="mb-3">
        <p>Program Studi</p>
        <div class="form-check">
          <input class="form-check-input prodiBd" type="radio" name="prodi" id="bisnis_digital" value="bisnis digital" <?php echo $mhs["program_studi"] == "bisnis digital" ? "checked" : "no"?>>
          <label class="form-check-label" for="bisnis_digital">Bisnis Digital</label>
        </div>
        <div class="form-check">
          <input class="form-check-input prodiTi" type="radio" name="prodi" id="teknik_informatika" value="teknik informatika" <?php echo $mhs["program_studi"] == "teknik informatika" ? "checked" : "no"?>>
          <label class="form-check-label" for="teknik_informatika">Teknik Informatika</label>
        </div>
        <div class="form-check">
          <input class="form-check-input prodiSi" type="radio" name="prodi" id="sistem_informasi" value="sistem informasi" <?php echo $mhs["program_studi"] == "sistem informasi" ? "checked" : "no"?>>
          <label class="form-check-label" for="sistem_informasi">Sistem Informasi</label>
        </div>
      </div>
      <div class="mb-3 bd">
        <p>Konsentrasi</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="konsen" id="teknologi_bisnis_digital" value="teknologi bisnis digital" <?php echo $mhs["konsentrasi"] == "teknologi bisnis digital" ? "checked" : "no" ?>>
          <label class="form-check-label" for="teknologi_bisnis_digital">Teknologi Bisnis Digital</label>
        </div>
      </div>
      <div class="mb-3 ti">
        <p>Konsentrasi</p>
        <div class="form-check">
          <input class="form-check-input " type="radio" name="konsen" id="software_engineering" value="software engineering" <?php echo $mhs["konsentrasi"] == "software engineering" ? "checked" : "no" ?>>
          <label class="form-check-label" for="software_engineering">Software Engineering</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="konsen" id="computer_networking" value="computer networking" <?php echo $mhs["konsentrasi"] == "computer networking" ? "checked" : "no" ?>>
          <label class="form-check-label" for="computer_networking">Computer Networking</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="konsen" id="computerized_design_&_multimedia" value="computerized design & multimedia" <?php echo $mhs["konsentrasi"] == "computerized design & multimedia" ? "checked" : "no" ?>>
          <label class="form-check-label" for="computerized_design_&_multimedia">Computerized Design & Multimedia</label>
        </div>
      </div>
      <div class="mb-3 si">
        <p>Konsentrasi</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="konsen" id="computerized_accounting" value="computerized accounting" <?php echo $mhs["konsentrasi"] == "computerized accounting" ? "checked" : "no" ?>>
          <label class="form-check-label" for="computerized_accounting">Computerized Accounting</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="konsen" id="e-commerce" value="e-commerce" <?php echo $mhs["konsentrasi"] == "e-commerce" ? "checked" : "no" ?>>
          <label class="form-check-label" for="e-commerce">E-Commerce</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="konsen" id="business_intelligence_&_management_support_system" value="business intelligence & management support system" <?php echo $mhs["konsentrasi"] == "business intelligence & management support system" ? "checked" : "no" ?>>
          <label class="form-check-label" for="business_intelligence_&_management_support_system">Business Intelligence & Management Support System</label>
        </div>
      </div>
      <div class="mb-3">
        <p>Kelas</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="kelas" id="reguler" value="reguler" <?php echo $mhs["kelas"] == "reguler" ? "checked" : "no"?>>
          <label class="form-check-label" for="reguler">Reguler</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="kelas" id="shift" value="shift" <?php echo $mhs["kelas"] == "shift" ? "checked" : "no"?>>
          <label class="form-check-label" for="shift">Shift</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="kelas" id="malam" value="malam" <?php echo $mhs["kelas"] == "malam" ? "checked" : "no"?>>
          <label class="form-check-label" for="malam">Malam</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="alasan" class="form-label">Alasan</label>
        <input type="text" class="form-control" id="alasan" name="alasan" value="<?php echo $mhs["alasan"]; ?>">
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

  const tiCheck = prodiTi.hasAttribute("checked");
  const siCheck = prodiSi.hasAttribute("checked");
  const bdCheck = prodiBd.hasAttribute("checked");

  if(tiCheck === true){
    ti.style.display = 'block';
    si.style.display = 'none';
    bd.style.display = 'none';
  }else if(siCheck === true){
    si.style.display = 'block';
    ti.style.display = 'none';
    bd.style.display = 'none';
  }else if(bdCheck === true){
    bd.style.display = 'block';
    ti.style.display = 'none';
    si.style.display = 'none';
  }


  aktif('../../perkuliahan/mahasiswa.php');  



</script>
