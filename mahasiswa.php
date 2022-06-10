<?php  
require 'fungsi.php';

$mahasiswa = query("SELECT * FROM tb_mahasiswa ORDER BY nama_mahasiswa");


function kelas($nim) {
  global $mahasiswa;
  foreach($mahasiswa as $mhs){
    if($mhs["nim"] == $nim){
      if($mhs["program_studi"] == "teknik informatika" && $mhs["konsentrasi"] == "software engineering" && $mhs["kelas"] == "malam") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "TI SE M " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "teknik informatika" && $mhs["konsentrasi"] == "computer networking" && $mhs["kelas"] == "malam") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "TI CN M " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "teknik informatika" && $mhs["konsentrasi"] == "computerized design & multimedia" && $mhs["kelas"] == "malam") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "TI CDM M " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "sistem informasi" && $mhs["konsentrasi"] == "computerized accounting" && $mhs["kelas"] == "malam") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "SI CA M " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "sistem informasi" && $mhs["konsentrasi"] == "e-commerce" && $mhs["kelas"] == "malam") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "SI EC M " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "sistem informasi" && $mhs["konsentrasi"] == "business intelligence & management support system" && $mhs["kelas"] == "malam") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "SI BI M " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "teknik informatika" && $mhs["konsentrasi"] == "software engineering" && $mhs["kelas"] == "reguler") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "TI SE P " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "teknik informatika" && $mhs["konsentrasi"] == "computer networking" && $mhs["kelas"] == "reguler") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "TI CN P " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "teknik informatika" && $mhs["konsentrasi"] == "computerized design & multimedia" && $mhs["kelas"] == "reguler") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "TI CDM P " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "sistem informasi" && $mhs["konsentrasi"] == "computerized accounting" && $mhs["kelas"] == "reguler") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "SI CA P " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "sistem informasi" && $mhs["konsentrasi"] == "e-commerce" && $mhs["kelas"] == "reguler") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "SI EC P " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "sistem informasi" && $mhs["konsentrasi"] == "business intelligence & management support system" && $mhs["kelas"] == "reguler") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "SI BI P " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "teknik informatika" && $mhs["konsentrasi"] == "software engineering" && $mhs["kelas"] == "shift") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "TI SE Sh " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "teknik informatika" && $mhs["konsentrasi"] == "computer networking" && $mhs["kelas"] == "shift") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "TI CN Sh " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "teknik informatika" && $mhs["konsentrasi"] == "computerized design & multimedia" && $mhs["kelas"] == "shift") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "TI CDM Sh " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "sistem informasi" && $mhs["konsentrasi"] == "computerized accounting" && $mhs["kelas"] == "shift") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "SI CA Sh " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "sistem informasi" && $mhs["konsentrasi"] == "e-commerce" && $mhs["kelas"] == "shift") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "SI EC Sh " . substr($tahun[0],2);
      }elseif($mhs["program_studi"] == "sistem informasi" && $mhs["konsentrasi"] == "business intelligence & management support system" && $mhs["kelas"] == "shift") {
        $tanggal_input = $mhs["tanggal_input"];
        $tahun = explode("-",$tanggal_input);
        echo "SI BI Sh " . substr($tahun[0],2);
      }


    }


  }

}

?>

<title>Data Mahasiswa</title>

  <?php require 'template.php'; ?>
  
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Data Mahasiswa</h1>
    </div>
    <div class="tambah">
      <a href="mahasiswa/tambah.php" class="btn btn-primary mb-4"><i class="bi bi-plus-square me-2"></i>Tambah Data</a>
    </div>
    <div class="col-md-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Kelas</th>
            <th scope="col" class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach($mahasiswa as $mhs) { ?>
          <tr>
            <th scope="row" class="align-middle"><?php echo $i++; ?></th>
            <td class="align-middle"><?php echo $mhs["nim"]; ?></td>
            <td class="align-middle"><?php echo ucfirst( $mhs["nama_mahasiswa"] ); ?></td>
            <td class="align-middle"><?php echo $mhs["tanggal_lahir"]; ?></td>
            <td class="align-middle"><?php echo ucfirst( $mhs["jenis_kelamin"] ); ?></td>
            <td class="align-middle"><?php kelas($mhs["nim"]);?></td>
            <td>
              <a href="mahasiswa/rinci.php?nim=<?php echo $mhs["nim"]; ?>" class="btn btn-warning btn-sm"><i class="bi bi-list-columns-reverse me-2"></i>Rincian</a>
              <a href="mahasiswa/ubah.php?nim=<?php echo $mhs["nim"]; ?>" class="btn btn-success btn-sm"><i class="bi bi-pencil-fill me-2"></i>Ubah</a>
              <a href="mahasiswa/hapus.php?nim=<?php echo $mhs["nim"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin?');"><i class="bi bi-trash-fill me-2"></i>Hapus</a>
            </td>
          <?php } ?>
          </tr>

        </tbody>
      </table>
    </div>
  </main>



<script>
  aktif('../../perkuliahan/mahasiswa.php');  
</script>
