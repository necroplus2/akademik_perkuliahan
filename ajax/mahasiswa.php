<?php 
require '../fungsi.php';
// require '../template.php';
$keyword = $_GET["keyword"];

$mahasiswa = query("SELECT * FROM tb_mahasiswa WHERE nim LIKE '%$keyword%' OR nama_mahasiswa LIKE '%$keyword%' OR tanggal_lahir LIKE '%$keyword%'  ");

?>
      
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
