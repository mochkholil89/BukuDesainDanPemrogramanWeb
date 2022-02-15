<?php
    $sql_view = "SELECT * FROM t_tamu ORDER BY no DESC";
    $result = mysqli_query($konek, $sql_view);

    //pagination config start
    $rpp = 2; // jumlah record per halaman
    $reload = "index.php?page=daftartamu";
    $page = intval(isset($_GET["page1"])?$_GET["page1"]:0);
    if($page<=0) $page = 1;  
        $tcount = mysqli_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $j = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
    //pagination config end

?>

<main class="container">
    <div class="bg-light p-4 rounded">
        <h1>Daftar Tamu</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Keperluan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $i = 1;
                while(($count<$rpp) && ($j<$tcount)) {
                    mysqli_data_seek($result,$j);
                    $data = mysqli_fetch_array($result)
                
            ?>
                <tr>
                    <th><?php echo $i; ?></th>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['keperluan']; ?></td>
                    <td><?php echo $data['tgl']; ?></td>
                    <td><a href="?page=update&id=<?php echo $data['no']; ?>">Perbarui</a> 
                    | <a href="?page=delete&id=<?php echo $data['no']; ?>">Hapus</a></td>
                </tr>
            <?php 
                    $i++;
                    $j++;
   			 	    $count++;    
                }
            ?>
            </tbody>
        </table>
        <div><?php echo paginate_one($reload, $page, $tpages); ?></div>
    </div>
</main>