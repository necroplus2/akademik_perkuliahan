<?php
$localhost = "localhost";
$user = "root";
$password = "";
$db = "perkuliahan";

$koneksi = mysqli_connect($localhost, $user, $password, $db);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// function query
function query($query){
  global $koneksi;
  $result = mysqli_query($koneksi, $query);
  $rows = [];

  while($loop = mysqli_fetch_assoc($result)){
    $rows[] = $loop;
  }

  return $rows;
}

function tambah_dosen ($data) {
	global $koneksi;
	$kode_dosen = $data["kode_dosen"];
	$nama_dosen = $data["nama_dosen"];
	$jenis_kelamin = $data["jenis_kelamin"];
	$no_hp = $data["no_hp"];
  

// query insert data
$query = "INSERT INTO tb_dosen
	VALUES
	('', '$kode_dosen', '$nama_dosen', '$jenis_kelamin', '$no_hp')
";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function tambah_matkul ($data) {
	global $koneksi;
	$kode_matkul = $data["kode_matkul"];
	$mata_kuliah = $data["mata_kuliah"];
	$sks = $data["sks"];


// query insert data
$query = "INSERT INTO tb_matkul
	VALUES
	('', '$kode_matkul', '$mata_kuliah','$sks')
";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function tambah_jadwal ($data) {
	global $koneksi;
	$kode_jadwal = $data["kode_jadwal"];
	$kode_matkul = $data["kode_matkul"];
	$kode_dosen = $data["kode_dosen"];
	$ruangan = $data["ruangan"];
	$jam_jadwal = strtotime( $data["jam_jadwal"] );


// query insert data
$query = "INSERT INTO tb_jadwal
	VALUES
	('', '$kode_jadwal', '$kode_matkul','$kode_dosen', '$ruangan','$jam_jadwal')
";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}


function tambah_mhs ($data) {
  date_default_timezone_set("Asia/Bangkok");
	global $koneksi;
	$nim = $data["nim"];
	$nama_mahasiswa = $data["nama_mahasiswa"];
	$tanggal_lahir = $data["tanggal_lahir"];
	$jenis_kelamin = $data["jenis_kelamin"];
	$tempat_tinggal = $data["tempat_tinggal"];
	$prodi = $data["prodi"];
	$konsen = $data["konsen"];
	$kelas = $data["kelas"];
	$alasan = $data["alasan"];
  $tanggal_input = date("Y-m-d");
  

// query insert data
$query = "INSERT INTO tb_mahasiswa
	VALUES
	('$nim', '$nama_mahasiswa', '$tanggal_lahir', '$jenis_kelamin', '$tempat_tinggal', '$prodi', '$konsen', '$kelas','$alasan', '$tanggal_input')
";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function hapus_mhs ($nim) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE nim = $nim");
	return mysqli_affected_rows($koneksi);
}

function hapus_dosen ($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_dosen WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}

function hapus_matkul ($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_matkul WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}

function hapus_jadwal ($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_jadwal WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}


function ubah_dosen ($data) {
	global $koneksi;
	$id = $data["id"];
	$nama_dosen = $data["nama_dosen"];
	$jenis_kelamin = $data["jenis_kelamin"];
	$no_hp = $data["no_hp"];

	$query = "UPDATE tb_dosen SET
		nama_dosen = '$nama_dosen',
		jenis_kelamin = '$jenis_kelamin',
		no_hp = '$no_hp'
		WHERE id = $id
	";

	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);

}

function ubah_matkul ($data) {
	global $koneksi;
	$id = $data["id"];
	$kode_matkul = $data["kode_matkul"];
	$mata_kuliah = $data["mata_kuliah"];
	$sks = $data["sks"];

	$query = "UPDATE tb_matkul SET
		kode_matkul = '$kode_matkul',
		mata_kuliah = '$mata_kuliah',
		sks = '$sks'
		WHERE id = $id
	";

	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);

}

function ubah_jadwal ($data) {
	global $koneksi;
	$id = $data["id"];
	$kode_jadwal = $data["kode_jadwal"];
	$kode_matkul = $data["kode_matkul"];
	$kode_dosen = $data["kode_dosen"];
	$ruangan = $data["ruangan"];
	$jam_jadwal = strtotime( $data["jam_jadwal"] );

	$query = "UPDATE tb_jadwal SET
		kode_jadwal = '$kode_jadwal',
		kode_matkul = '$kode_matkul',
		kode_dosen = '$kode_dosen',
		ruangan = '$ruangan',
		jam_jadwal = '$jam_jadwal'
		WHERE id = $id
	";

	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);

}


function ubah_mhs ($data) {
	global $koneksi;
	$nim = $data["nim"];
	$nama_mahasiswa = $data["nama_mahasiswa"];
	$tanggal_lahir = $data["tanggal_lahir"];
	$jenis_kelamin = $data["jenis_kelamin"];
	$tempat_tinggal = $data["tempat_tinggal"];
	$prodi = $data["prodi"];
	$konsen = $data["konsen"];
	$kelas = $data["kelas"];
	$alasan = $data["alasan"];

	$query = "UPDATE tb_mahasiswa SET
		nama_mahasiswa = '$nama_mahasiswa',
		tanggal_lahir = '$tanggal_lahir',
		jenis_kelamin = '$jenis_kelamin',
		tempat_tinggal = '$tempat_tinggal',
		program_studi = '$prodi',
		konsentrasi = '$konsen',
		kelas = '$kelas',
		alasan = '$alasan'
		WHERE nim = $nim
	";

	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);

}

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



<script>
	  function aktif(link){
			const halAktif = document.querySelectorAll('.halAktifJs');
			halAktif.forEach(function(z){
				let linkHalAktif = z.hasAttribute('href');
				if(linkHalAktif && z.getAttribute('href') == link){
					z.classList.remove('text-white-50');
					z.classList.add('text-white');
				}
			});
  	}
</script>