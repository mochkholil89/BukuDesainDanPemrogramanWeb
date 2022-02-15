<?php
$id = $_GET['id'];
echo $id;

$sql = "DELETE FROM t_tamu WHERE no='$id'";

$query_hapus = mysqli_query($konek, $sql);

if($query_hapus){
    header("Location:?page=daftartamu");
}else{
    echo "Proses Hapus Data Gagal";
}
?>