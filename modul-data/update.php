<?php
include("../koneksi.php");

$id = $_POST['id'];
$nm = $_POST['nama'];
$lki = $_POST['lokasi'];
$tgl = $_POST['tanggal'];
$jml = $_POST['jumlah'];

$sunting = "UPDATE eventd SET nama='$nm',lokasi='$lki',tanggal='$tgl',jumlah='jml' WHERE id='$id' ";

$proses = mysqli_query($koneksi,$sunting);

// header("location.index.php");
?>
<script>
    document.location="index.php";
</script>