<?php
include("../koneksi.php");

$nm = $_POST['nama'];
$lki = $_POST['lokasi'];
$date= $_POST['tanggal'];
$jml = $_POST['jumlah'];

$simpan = "INSERT INTO  eventd (nama_event,lokasi,tanggal_event,jumlah_peserta)
 VALUES ('$nm','$lki,'$date','$jml')";

$proses = mysqli_query($koneksi,$simpan);

// header("location.index.php");
?>
<script>
    document.location="index.php";
</script>