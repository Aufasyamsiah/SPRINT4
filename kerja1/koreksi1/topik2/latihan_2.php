<?php
    session_start();
    if(isset($_SESSION['username'])){ ?>
    <h2>HOME</h2>
    <p>
    Selamat datang user
    "<?php echo $_SESSION['username']; ?>".
    Klik <a href="latihan_3.php">disini</a> untuk logout.
    </p>
    <?php
    } else { ?>
    <h2>Sorry..</h2>
    <p>
    Anda tidak berhak mengakses halaman ini.
    Silakan <a href="latihan_1.php">login</a> terlebih dahulu.
    </p>
    <?php
    }
    ?>


