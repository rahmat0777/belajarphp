<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran pemain baru</title>
</head>

<body>
    <header>
        <h3>pemain  yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form_daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No </th>
            <th>Nama</th>
            <th>posisi</th>
            <th>no punggung</th>
          
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM daftar_pemain";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['posisi']."</td>";
            echo "<td>".$siswa['no_punggung']."</td>";
           
            echo "<td>";
            echo "<a href='form_edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>