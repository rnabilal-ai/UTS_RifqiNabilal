<?php
include("../koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];

$sunting = "UPDATE events SET nama='$nama',lokasi='$lokasi',tanggal='$tanggal',jumlah='$jumlah' WHERE id='$id' ";

$proses = mysqli_query($koneksi,$sunting);

// header("location.index.php");
?>
<script>
    document.location="index.php";
</script>