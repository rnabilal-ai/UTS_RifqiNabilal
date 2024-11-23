<?php
include("../koneksi.php");

$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];

$save = "INSERT INTO  events (nama,lokasi,tanggal,jumlah)
 VALUES ('$nama','$lokasi','$tanggal','$jumlah')";

$proses = mysqli_query($koneksi, $save);

// header("location.index.php");
?>
<script>
    document.location="index.php";
</script>