<?php
include_once 'top.php';
include_once 'koneksi.php';
include_once 'menu.php';
include_once 'models/Produk.php';
include_once 'models/Jenis_produk.php';


?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            
            <?php
            error_reporting(0);
            $url = $_GET['url'];
            if($url == 'dashboard'){
                include_once 'dashboard.php';
            }elseif (!empty($url)){
                include_once ''.$url. '.php';
            }else {
                'dashboard.php';
            }
            ?>
        </div>
    </main>
</div>


<?php
include_once 'bottom.php';
?>