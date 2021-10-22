<?php
    include('config/header.php');
     if(isset($_SESSION['noti'])){
        echo $_SESSION['noti'];
        unset($_SESSION['noti']);
    }

    
?>
    <h1 class=" container">
    <a href="index.php" class="text-center">Quay lại trang chủ</a>
    </h1>
</body>
<?php
include('config/footer.php');
?>