<title>Dashboard</title>

<?php
session_start();

if(!isset($_SESSION["login"])){
  header("Location: signin.php");
  exit;
}

require 'template.php';
require 'fungsi.php';


$jadwalAktif = query("SELECT tb_matkul.mata_kuliah, tb_matkul.sks, tb_jadwal.ruangan, tb_jadwal.jam_jadwal, tb_dosen.nama_dosen FROM tb_jadwal INNER JOIN tb_matkul ON tb_jadwal.kode_matkul = tb_matkul.kode_matkul INNER JOIN tb_dosen ON tb_jadwal.kode_dosen = tb_dosen.kode_dosen")


?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Dashboard</h1>
    </div>
    <div class="col-md-10">
      <div class="row">
        <h4>Jadwal Aktif</h4>
      </div>
      <div class="col-md-10">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">SKS</th>
            <th scope="col">Ruangan</th>
            <th scope="col">Hari</th>
            <th scope="col">Jam</th>
            <th scope="col">Dosen</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach($jadwalAktif as $jadwal) { ?>
          <tr>
            <th scope="row" class="align-middle"><?php echo $i++; ?></th>
            <td class="align-middle"><?php echo $jadwal["mata_kuliah"]; ?></td>
            <td class="align-middle"><?php echo $jadwal["sks"]; ?></td>
            <td class="align-middle"><?php echo $jadwal["ruangan"]; ?></td>
            <td class="align-middle"><?php echo date("l, d/m/y", $jadwal["jam_jadwal"]); ?></td>
            <td class="align-middle"><?php echo date("H:i", $jadwal["jam_jadwal"]); ?></td>
            <td class="align-middle"><?php echo $jadwal["nama_dosen"]; ?></td>
          <?php } ?>
          </tr>

        </tbody>
      </table>
    </div>
    </div>
</main>


<script>
  aktif('../../perkuliahan/index.php');  
</script>