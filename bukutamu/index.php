<?php
    include ('koneksi.php');
    include ('pagination.php');	

    if(isset($_GET['page'])){  
        $page = $_GET['page'];
    }else{
        $page = "home";
    }

    switch($page){
        case "home":
            include ('header.php');
            include ('navigasi.php');
            include ('home.php');
            include ('footer.php');
        break;
        case "inputtamu":
            include ('header.php');
            include ('navigasi.php');
            include ('frm_inputtamu.php');
            include ('footer.php');
        break;
        case "simpan":
            include ('header.php');
            include ('navigasi.php');
            include ('simpantamu.php');
            include ('footer.php');
        break;
        case "daftartamu":
            include ('header.php');
            include ('navigasi.php');
            include ('datatamu.php');
            include ('footer.php');
            if($page = "daftartamu"){
                if(isset($_GET['page1'])){	
                     $page1 = $_GET['page1'];	
                     include ('header.php');
                     include ('navigasi.php');
                     include ('footer.php');
                }else{
                    $page = "daftartamu";		
                }			
            }		
        break;
        case "update":
            include ('header.php');
            include ('navigasi.php');
            include ('frm_updatetamu.php');
            include ('footer.php');
        break;
        case "prosesupdate":
            include ('header.php');
            include ('navigasi.php');
            include ('updatetamu.php');
            include ('footer.php');
        break;
        case "delete":
            include ('header.php');
            include ('navigasi.php');
            include ('deletetamu.php');
            include ('footer.php');
        break;
    }
?>