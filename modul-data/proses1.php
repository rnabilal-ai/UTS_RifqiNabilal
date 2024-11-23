<?php
include("../koneksi.php");

$nm = $_POST['nama'];
$lki = $_POST['lokasi'];
$date= $_POST['tanggal'];
$jml = $_POST['jumlah'];

$save = "INSERT INTO  eventd (nama_event,lokasi,tanggal_event,jumlah_peserta)
 VALUES ('$nm','$lki,'$date','$jml')";

$proses = mysqli_query($koneksi,$save);

// header("location.index.php");
?>
<script>
    document.location="index.php";
</script>