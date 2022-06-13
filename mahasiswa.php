<?php  
require 'fungsi.php';

$mahasiswa = query("SELECT * FROM tb_mahasiswa");




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
    <div class="col-md-10 my-4">
      <!-- isi filtering atau search -->
      <div class="col-md-4">
        <div class="input-group mt-3">
          <span class="input-group-text" name="keyword_search"><i class="bi bi-search"></i></span>
          <input type="text" class="form-control me-3" placeholder="Search" id="keyword_search">
      </div>

      </div>
    <div class="col-md-12" id="container_table">
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
  // dashboard aktif
  aktif('../../perkuliahan/mahasiswa.php');  

  let keyword = document.getElementById('keyword_search');
  let tableContainer = document.getElementById('container_table');
  let descasc = document.querySelectorAll('.descasc');
  
  keyword.addEventListener('keyup', function(){
    let xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function() {
      if(xhr.readyState == 4 && xhr.status == 200) {
        tableContainer.innerHTML = xhr.responseText;
      }
    }
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();
  });

  
  descasc.forEach(function(d){
    d.addEventListener('click',function(c){
      // console.log(c.target.value);
      c.target.setAttribute("checked", "true");
      let result = c.target.value;
      let xhr = new XMLHttpRequest();

      xhr.onload = function() {
        tableContainer.innerHTML = this.responseText;
      }

      xhr.open("POST", "ajax/mahasiswa.php");
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.send(`name=${result}`);
    });
  });



  
</script>
