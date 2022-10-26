<?PHP
$nim = isset($_POST['nim']) ? $_POST['nim'] : "";
$nama = isset($_POST['nama']) ? $_POST['nama'] : "";
$studi = isset($_POST['studi']) ? $_POST['studi'] : "";


if ($nim == ""|| $nama == "" || $studi == ""){
    echo "<p><h3>Isi semua data, klik <a href= 'input.html'> di sini <a/> untuk kembali</h3></p>";
}else {
    echo "Hai perkenalkan, nama saya adalah ". $nama." dengan Nim : ". $nim." saya adalah mahasiswa Prodi ".$studi;

}

?>
