<?php
$sql = "DELETE FROM tabel_siswa";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('HAPUS berhasil');window.location = 'index.php?module=list_siswa';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>