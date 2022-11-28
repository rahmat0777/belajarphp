
<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list_pemain.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM daftar_pemain WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Form pemain</title>
</head>

<body>
    <header>
        <h3>Formulir Edit pemain</h3>
    </header>

    <form action="proses_edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="posisi">posisi </label>
            <textarea name="posisi"><?php echo $siswa['posisi'] ?></textarea>
        </p>
        
        <p>
            <label for="no_punggung">no punggung </label>
            <?php $agama = $siswa['no_punggung']; ?>
            <select name="no_punngung">
                <option <?php echo ($agama == 1) ? "selected": "" ?>>1</option>
                <option <?php echo ($agama == 2) ? "selected": "" ?>>2</option>
                <option <?php echo ($agama == 3) ? "selected": "" ?>>3</option>
                <option <?php echo ($agama == 4) ? "selected": "" ?>>4</option>
                <option <?php echo ($agama == 5) ? "selected": "" ?>>5</option>
                <option <?php echo ($agama == 6) ? "selected": "" ?>>6</option>
                <option <?php echo ($agama == 7) ? "selected": "" ?>>7</option>
                <option <?php echo ($agama == 8) ? "selected": "" ?>>8</option>
                <option <?php echo ($agama == 9) ? "selected": "" ?>>9</option>
            </select>
        </p>
        
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>