<!DOCTYPE html>
<html>
<head>
    <title>daftar pemain </title>
</head>

<body>
    <header>
        <h3>data pemain</h3>
        <h1>list pemain</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form_daftar.php">Daftar pemain</a></li>
            <li><a href="list_pemain.php">lis pemain </a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran pemain baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>